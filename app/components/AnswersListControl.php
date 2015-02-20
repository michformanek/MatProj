<?php

namespace App\Components;

use Nette,
    Nette\Application\UI\Form,
    Nette\Application\UI\Control,
    App\Model;

/**
 * Component for viewing non-editable list of answers.
 * 
 * @author Michal Formánek <michformanek@gmail.com>
 * @package default
 */
class AnswersListControl extends Control {

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
        $template->setFile(__DIR__ . '/AnswersListControl.latte');
        $template->answers = $this->answers->getByQuestionId($this->questionId); //gets answers for question from model
        $template->render();
    }

}
