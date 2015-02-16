<?php

namespace App\Components;

use Nette,
    Nette\Application\UI\Form,
    Nette\Application\UI\Control,
    App\Model;

/**
 * Description of QuestionControl
 *
 * @author Michal
 */
class QuestionControl extends Control {

    private $questions;
    private $questionId;

    public function __construct($questions, $questionId) {
        parent::__construct();
        $this->questions = $questions;
        $this->questionId = $questionId;
    }

    public function render() {
        $template = $this->template;
        $template->setFile(__DIR__ . '/QuestionControl.latte');
        $this->template->question = $this->questions->getById($this->questionId);
        $template->render();
    }

    public function createComponentQuestionForm() {
        $form = new Form;

        $form->addHidden('test_id');
        $form->addHidden('id');
        $form->addTextArea('text', 'Text')->setRequired();
        $form->addSubmit('submit');
        $form->setDefaults($this->questions->getById($this->questionId));
        $form->onSuccess[] = $this->questionFormSucceeded;

        return $form;
    }

    public function questionFormSucceeded($form) {
        $values = $form->getValues();
        $this->questions->update($values);
    }

}
