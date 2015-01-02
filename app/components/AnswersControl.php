<?php

namespace App\Components;

use Nette,
    App\Model,
    Nette\Application\UI\Control;

/**
 * Description of AnswersControl
 *
 * @author Michal Formánek
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
        $template->id = $this->questionId;
  //      $template->answers = $this->answers->findByQuestion($this->questionId);
        $template->render(__DIR__ . '/AnswersControl.latte');
    }

}
