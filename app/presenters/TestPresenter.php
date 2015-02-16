<?php

namespace App\Presenters;

use Nette,
    App\Model,
    Nette\Application\UI\Form,
    Nette\Application\UI\Multiplier,
    PdfResponse\PdfResponse;

/**
 * Description of TestPresenter
 *
 * @author Michal Formánek
 */
class TestPresenter extends BasePresenter {

    private $tests;
    private $questions;
    private $answers;
    private $groups;
    private $students;

    public function __construct(Model\Tests $tests, Model\Questions $questions, Model\Answers $answers, Model\Groups $groups, Model\Students $students) {
        $this->tests = $tests;
        $this->questions = $questions;
        $this->answers = $answers;
        $this->groups = $groups;
        $this->students = $students;
    }

    public function renderAll() {
        $this->template->tests = $this->tests->getByUser($this->user->getId());
    }

    public function renderShared() {
        $this->template->tests = $this->tests->getShared();
    }

    public function renderView($testId) {
        $this->template->questions = $this->questions->getByTestId($testId);
        $this->template->test = $this->tests->getByTestId($testId);
    }

    public function renderEdit($testId) {
        $test = $this->tests->getByTestId($testId);
        if ($this->user->id != $test->user_id) {
            throw new \Nette\Application\ForbiddenRequestException;
        }
        $this->template->questions = $this->questions->getByTestId($testId);
        $this->template->test = $test;
    }

    public function renderGenerate($testId) {
        $groups = $this->groups->getAll();
        $this->template->groups = $groups;
    }

    public function actionCreate() {
        $test = $this->tests->add($this->user->id);
        $values['test_id']=$test->id;
        $this->questions->add($values);
        $this->redirect('Test:edit', $test->id);
    }

    public function handleAddQuestion($testId) {
        $values = array('test_id' => $testId);
        $this->questions->add($values);
        $this->redrawControl('questionList');
    }

    public function handleDeleteTest($testId) {
        $this->tests->delete($testId);
        $this->redrawControl('testList');
    }

    public function handleDeleteQuestion($questionId) {
        $this->questions->delete($questionId);
        $this->redrawControl('questionList');
    }

    public function createComponentTestForm() {
        $form = new Form;
        $form->addTextArea('name');
        $form->addCheckbox('shared', 'Sdílet test');
        $form->addSubmit('send', 'Odeslat');
        $form->addHidden('id');
        $form->setDefaults($this->tests->getByTestId($this->getParameter('testId')));
        $form->onSuccess[] = callback($this, 'testFormSubmitted');
        return $form;
    }

    protected function createComponentAnswers() {
        return new Multiplier(function ($questionId) {
            $answers = new \App\Components\AnswersControl($this->answers, $questionId);
            return $answers;
        });
    }

    protected function createComponentAnswersList() {
        return new Multiplier(function ($questionId) {
            $answers = new \App\Components\AnswersListControl($this->answers, $questionId);
            return $answers;
        });
    }

    public function createComponentQuestion() {
        return new Multiplier(function ($testId) {
            $question = new \App\Components\QuestionControl($this->questions, $testId);
            return $question;
        });
    }

    public function testFormSubmitted($form) {
        $values = $form->getValues();
        $this->tests->update($values);
    }

    public function createComponentGenerateForm() {
        $form = new Form;


        $groups = $this->groups->getForTest($this->user->id);

        $form->addSelect('groupBox', 'Skupina:', $groups);
        $form->addHidden('test_id', $this->getParameter('testId'));
        $form->addText('questionCount')->setRequired('Zadejte počet otázek');
        $form->addText('answerCount')->setRequired('Zadejte počet odpovědí');
        $form->addRadioList('pageFormat', 'Formát stránky', array('a4' => 'A4', 'a5' => 'A5'))
                ->setRequired('Vyberte formát stránky');
        $form->addTextArea('students');

        $form->onSuccess[] = callback($this, 'generateFormSubmitted');
        $form->addSubmit('submit');

        return $form;
    }

    public function generateFormSubmitted($form) {
        $values = $form->getValues();
        $this->actionPdf($values);
    }

    function actionPdf($values) {
        //ziskani pole studentu
        if ($values['students']) {
            $students = explode(",", $values['students']);
            for ($index = 0; $index < count($students); $index++) {
                $students[$index] = trim($students[$index]);
            }
        } else {
            $students = $this->students->getByGroupId($values['groupBox'])->fetchPairs('id', 'name');
        }

        //ziskani otazek pro kazdeho studenta
        $questions = array();
        foreach ($students as $key => $value) {
            $questions[$key] = $this->questions->getRandom($values['test_id'], $values['questionCount'])->fetchPairs('id', 'text');
        }

        //ziskani odpovedi pro kazdou otazku
        $answers = array();
        foreach ($students as $student => $studentvalue) {
            foreach ($questions[$student] as $question => $questionvalue) {
                $answers[$student][$question] = $this->answers->getRandom($question, $values['answerCount'])->fetchPairs('id', 'text');
            }
        }

        $appDir = Nette\Environment::getVariable('appDir');
        $template = $this->createTemplate()->setFile($appDir . "/templates/testPdf.latte");

        $template->students = $students;
        $template->questions= $questions;
        $template->answers = $answers;
        $template->values = $values;

        $pdf = new PDFResponse($template);

        // Všechny tyto konfigurace jsou nepovinné:
        // Orientace stránky
        $pdf->pageOrientaion = PDFResponse::ORIENTATION_LANDSCAPE;
        // Formát stránky
        $pdf->pageFormat = $values['pageFormat'];

        $pdf->displayZoom = "fullwidth";

        // Dokument vytvořil:
        $pdf->documentAuthor = "Testovator";

        // Callback - těsně před odesláním výstupu do prohlížeče
        //$pdfRes->onBeforeComplete[] = "test";
        
        $pdf->mPDF->OpenPrintDialog();


        $pdf->send($this->getHttpRequest(), $this->getHttpResponse());
    }

}
