<?php

namespace App\Presenters;

use Nette,
    App\Model,
    Nette\Application\UI\Form,
    Nette\Application\UI\Multiplier;

/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter {

    private $answers;

    public function __construct(Model\Answers $answers) {
        $this->answers = $answers;
    }

    public function renderDefault() {
        $this->template->answers = $this->answers->findAll();
    }

    protected function createComponentAnswerForm($name) {

        $form = new Form;
        $odpovedi = $this->answers->findAll();
        foreach ($odpovedi as $value) {
            $form->addText($value->id, $value->text);
        }

        return $form;
    }

}
