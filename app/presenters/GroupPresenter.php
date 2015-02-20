<?php

namespace App\Presenters;

use Nette,
    App\Model,
    Nette\Application\UI\Form;

/**
 * Group Presenter
 * 
 * @author Michal Formánek <michformanek@gmail.com>
 * @package default
 */
class GroupPresenter extends BasePresenter {

    private $groups;
    private $students;

    /**
     * Constructor 
     * 
     * @param \App\Model\Groups $groups
     * @param \App\Model\Students $students
     */
    public function __construct(Model\Groups $groups, Model\Students $students) {
        $this->groups = $groups;
        $this->students = $students;
    }

    /**
     * Creates group and redirects to its edition
     */
    public function actionCreate() {
        $group = $this->groups->add($this->user->id);
        $this->redirect('Group:edit', $group->id);
    }

    /**
     * Render method
     */
    public function renderAll() {
        $this->template->groups = $this->groups->getByUser($this->user->id);
    }

    /**
     * Render method
     * 
     * renders list of global groups
     */
    public function renderGlobal() {
        $this->template->groups = $this->groups->getShared();
    }

    /**
     * Render method
     * 
     * @param int $groupId id of edited group
     */
    public function renderEdit($groupId) {
        $this->template->group = $this->groups->getByGroupId($groupId);
        $this->template->students = $this->students->getByGroupId($groupId);
    }

    /**
     * Render method
     * 
     * @param int $groupId id of viewed group
     */
    public function renderView($groupId) {
        $this->template->group = $this->groups->getByGroupId($groupId);
        $this->template->students = $this->students->getByGroupId($groupId);
    }

    /**
     * Creates form for group editation
     * 
     * @param int $groupId id of edited group
     * @return Form
     */
    public function createComponentGroupForm($groupId) {
        $form = new Form;

        $form->addTextArea('name');
        $form->addHidden('id');

        $form->setDefaults($this->groups->getByGroupId($this->getParameter('groupId')));

        $form->onSuccess[] = callback($this, 'groupFormSubmitted');


        return $form;
    }

    /**
     * Group form callback
     * 
     * @param Nette/Applicatiom/UI/Form $form
     */
    public function groupFormSubmitted($form) {
        $values = $form->getValues();
        $this->groups->update($values);
        $this->redrawControl('groupName');
    }

    /**
     * Creates component studentForm
     * 
     * @return Form
     */
    public function createComponentStudentForm() {
        $form = new Form;
        $form->addText('name');
        $form->onSuccess[] = callback($this, 'studentFormSubmitted');
        return $form;
    }

    /**
     * Student form callback
     * 
     * @param Nette/Application/UI/Form $form Student Form
     */
    public function studentFormSubmitted($form) {
        $values = $form->getValues();
        $values['group_id'] = $this->getParameter('groupId');
        $form->setValues(array(), true);
        $this->students->add($values);
        $this->redrawControl('studentsList');
    }

    /**
     * Removes student from database and redraws studentsList
     * 
     * @param int $studentId id of deleted student
     */
    public function handleDeleteStudent($studentId) {
        $this->students->delete($studentId);
        $this->redrawControl('studentsList');
    }

    /**
     * Deletes group
     * 
     * @param int $groupId id of deleted group
     */
    public function handleDeleteGroup($groupId) {
        $this->groups->delete($groupId);
        $this->redrawControl('groupList');
    }

}
