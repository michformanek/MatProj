<?php

namespace App\Components;

use Nette,
    Nette\Application\UI\Form,
    Nette\Application\UI\Control,
    App\Model;

/**
 * Component for managing answers for questions in tests
 * 
 * @author Michal Formánek <michformanek@gmail.com>
 * @package default
 */
class AnswersControl extends Control {

    protected $answers;
    private $questionId;

    /**
     * Constructor
     *
     * @param model $answers answers model
     * @param integer $questionId id of question in database
     */
    public function __construct($answers, $questionId) {
        parent::__construct();
        $this->answers = $answers;
        $this->questionId = $questionId;
    }

    /**
     * Render method
     * 
     * Sets a template and its variables
     */
    public function render() {
        $template = $this->template;
        $template->setFile(__DIR__ . '/AnswersControl.latte');
        $template->answers = $this->answers->getByQuestionId($this->questionId);
        $template->render();
    }

    /**
     * Delete method
     * 
     * deletes answers from model (database)
     * 
     * @param integer $answerId id of answer in database
     */
    public function handleDelete($answerId) {
        $this->answers->delete($answerId);
        $this->redrawControl('answerList');
    }

    /**
     * Component factory
     * 
     * creates form for editing and adding answers
     */
    public function createComponentAnswerForm() {
        $form = new Form;

        $form->getElementPrototype()->class = 'ajax';

        $form->addText('text', 'Text')->setRequired();
        $form->addSubmit('submit', 'Odeslat');
        $form->onSuccess[] = $this->answerFormSucceeded;

        return $form;
    }

    /**
     * AnswerForm callback
     * 
     * Adds values from form into database
     */
    public function answerFormSucceeded($form) {
        $values = $form->getValues();
        $form->setValues(array(), true);
        $values['question_id'] = $this->questionId;
        $this->answers->add($values);
        $this->redrawControl('answerList');
    }

}
