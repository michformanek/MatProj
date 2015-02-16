<?php

namespace App\Presenters;

use Nette,
    App\Model,
    Nette\Application\UI\Form;

/**
 * Homepage presenter.
 */
class GroupPresenter extends BasePresenter {

    private $groups;
    private $students;

    public function __construct(Model\Groups $groups, Model\Students $students) {
        $this->groups = $groups;
        $this->students = $students;
    }
    
      public function actionCreate() {
        $group = $this->groups->add($this->user->id);
        $this->redirect('Group:edit', $group->id);
    }

    public function renderAll() {
        $this->template->groups = $this->groups->getByUser($this->user->id);
    }

    public function renderGlobal() {
        $this->template->groups = $this->groups->getShared();
    }

    public function renderEdit($groupId) {
        $this->template->group = $this->groups->getByGroupId($groupId);
        $this->template->students = $this->students->getByGroupId($groupId);
    }

    public function renderView($groupId) {
        $this->template->group = $this->groups->getByGroupId($groupId);
        $this->template->students = $this->students->getByGroupId($groupId);
    }

    public function createComponentGroupForm($groupId) {
        $form = new Form;

        $form->addTextArea('name');
        $form->addHidden('id');

        $form->setDefaults($this->groups->getByGroupId($this->getParameter('groupId')));

        $form->onSuccess[] = callback($this, 'groupFormSubmitted');


        return $form;
    }

    public function groupFormSubmitted($form) {
        $values = $form->getValues();
        $this->groups->update($values);
        $this->redrawControl('groupName');
    }

    public function createComponentStudentForm() {
        $form = new Form;
        $form->addText('name');
        $form->onSuccess[] = callback($this, 'studentFormSubmitted');
        return $form;
    }

    public function studentFormSubmitted($form) {
        $values = $form->getValues();
        $values['group_id'] = $this->getParameter('groupId');
        $form->setValues(array(), true);
        $this->students->add($values);
        $this->redrawControl('studentsList');
    }

    public function handleDeleteStudent($studentId) {
        $this->students->delete($studentId);
        $this->redrawControl('studentsList');
    }
  public function handleDeleteGroup($groupId) {
        $this->groups->delete($groupId);
        $this->redrawControl('groupList');
    }
}
