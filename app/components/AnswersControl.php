<?php

namespace App\Components;

use Nette,
    Nette\Application\UI\Form,
    Nette\Application\UI\Control,
    App\Model;

/**
 * Description of AnswersControl
 *
 * @author Michal
 */
class AnswersControl extends Control {

    protected $answers;
    private $questionId;

    public function __construct($answers, $questionId) {
        parent::__construct();
        $this->answers = $answers;
        $this->questionId = $questionId;
    }

    public function render() {
        $template = $this->template;
        $template->setFile(__DIR__ . '/AnswersControl.latte');
        $template->answers = $this->answers->getByQuestionId($this->questionId);
        $template->render();
    }

    public function handleDelete($answerId) {
        $this->answers->delete($answerId);
        $this->redrawControl('answerList');
    }

    public function createComponentAnswerForm() {
        $form = new Form;

        $form->getElementPrototype()->class = 'ajax';

        $form->addText('text', 'Text')->setRequired();
        $form->addSubmit('submit', 'Odeslat');
        $form->onSuccess[] = $this->answerFormSucceeded;

        return $form;
    }

    public function answerFormSucceeded($form) {
        $values = $form->getValues();
        $form->setValues(array(), true);
        $values['question_id'] = $this->questionId;
        $this->answers->add($values);
        $this->redrawControl('answerList');
    }

}
