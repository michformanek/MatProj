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
class AnswersListControl extends Control {

    protected $answers;
    private $questionId;

    public function __construct($answers, $questionId) {
        parent::__construct();
        $this->answers = $answers;
        $this->questionId = $questionId;
    }

    public function render() {
        $template = $this->template;
        $template->setFile(__DIR__ . '/AnswersListControl.latte');
        $template->answers = $this->answers->getByQuestionId($this->questionId);
        $template->render();
    }


}
