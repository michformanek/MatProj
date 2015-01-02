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
        if (!isset($this->template->list)) {
            $this->template->answers = $this->answers->findAll();
        }
    }

    public function handleUpdate($id) {
        $this->template->list = $this->isAjax() ? array() : $this->getTheWholeList();
        $this->template->list[$id] = 'Updated item';
        $this->redrawControl('itemsContainer');
    }


    public function handleDelete($answerId) {
        $this->answers->delete($answerId);
    }

    protected function createComponentAnswerForm() {

        return new Multiplier(function ($questionId) {
            $form = new Form;
            $form->getElementPrototype()->class('ajax');
            $form->addText("text", "Text odpovědi");
            $form->addHidden('question_id', $questionId);
            $form->addSubmit("Pridat");
            $form->onSuccess[] = $this->answerFormSucceeded;
            return $form;
        });
    }

    public function answerFormSucceeded($form) {
        $values = $form->getValues();
        $answer = $this->answers->add($values);
        //$this->redirect('default');
    }

}
