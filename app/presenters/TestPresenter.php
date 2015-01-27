<?php

namespace App\Presenters;

use Nette,
    App\Model,
    Nette\Application\UI\Form,
    Nette\Application\UI\Multiplier;

/**
 * Description of TestPresenter
 *
 * @author Michal Formánek
 */
class TestPresenter extends BasePresenter {

    private $tests;
    private $questions;
    private $answers;

    public function __construct(Model\Tests $tests, Model\Questions $questions, Model\Answers $answers) {
        $this->tests = $tests;
        $this->questions = $questions;
        $this->answers = $answers;
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
        $this->template->questions = $this->questions->getByTestId($testId);
        $this->template->test = $this->tests->getByTestId($testId);
    }

    public function renderGenerate($testId) {
        
    }

    public function actionCreate() {
        $test = $this->tests->add($this->user->id);
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

        $form->addText('name', 'Jméno testu');
        $form->addCheckbox('shared', 'Sdílet test');
        $form->addSubmit('send', 'Odeslat');
        $form->addHidden('id');

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

    public function createComponentAddQuestionForm($testId) {
        $form = new Form;

        $form->addTextArea('text', 'Text');
        $form->addSubmit('submit');
        $form->addHidden('test_id', $testId);

        $form->onSuccess[] = callback($this, 'questionAddFormSubmitted');

        return $form;
    }

    public function questionAddFormSubmitted($form) {
        $values = $form->getValues();
        dump($values);
        exit();
        $this->questions->add($values);
        $this->redirect('this');
    }

    public function testFormSubmitted($form) {
        $values = $form->getValues();
        $this->tests->update($values);
    }

}
