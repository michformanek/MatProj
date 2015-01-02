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

    public function __construct(Model\Tests $tests, Model\Questions $questions,  Model\Answers $answers) {
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

    public function renderEdit($testId) {
        $this->template->questions = $this->questions->getByTest($testId);
    }

    public function renderGenerate($testId) {
        
    }

    public function actionCreate() {
        
    }

    public function createComponentTestForm() {
        $form = new Form;

        $form->addText('name', 'Jméno testu');
        $form->addCheckbox('shared', 'Sdílet test');
        $form->addSubmit('send', 'Odeslat');
        $form->onSuccess[] = callback($this, 'testFormSubmitted');

        return $form;
    }

    protected function createComponentAnswers() {
        return new Multiplier(function ($questionId) {
            $answers = new \App\Components\AnswersControl($this->answers, $questionId);
            return $answers;
        });
    }

    public function testFormSubmitted($form) {
        $values = $form->getValues();
        dump($values);
        exit();
    }

}
