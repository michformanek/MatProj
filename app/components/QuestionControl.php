<?php

namespace App\Components;

use Nette,
    Nette\Application\UI\Form,
    Nette\Application\UI\Control,
    App\Model;

/**
 * QuestionControl is component for updating questions in tests.
 * 
 * @author Michal Formánek <michformanek@gmail.com>
 * @package default
 */
class QuestionControl extends Control {

    private $questions;
    private $questionId;

    /**
     * Constructor
     *
     * @param model $questions questions model
     * @param integer $questionId id of question in database
     */
    public function __construct($questions, $questionId) {
        parent::__construct();
        $this->questions = $questions;
        $this->questionId = $questionId;
    }

    /**
     * Render method
     * 
     * Sets a template and its variables
     */
    public function render() {
        $template = $this->template;
        $template->setFile(__DIR__ . '/QuestionControl.latte');
        $this->template->question = $this->questions->getById($this->questionId);
        $template->render();
    }

    /**
     * Component factory
     * 
     * creates form for editing and adding questions
     */
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

    /**
     * QuestionForm callback
     * 
     * Updates question in database, based on values set in questionForm
     */
    public function questionFormSucceeded($form) {
        $values = $form->getValues();
        $this->questions->update($values);
    }

}
