<?php

namespace App\Presenters;

use Nette,
    App\Model,
    Nette\Application\UI\Form;

/**
 * Description of Register
 *
 * @author Michal Formánek
 */
class RegisterPresenter extends BasePresenter {

    private $userManager;

    public function __construct(Model\UserManager $userManager) {
        $this->userManager = $userManager;
    }

    public function renderDefault() {
        
    }

    public function createComponentRegisterForm() {
        $form = new Form;
        $form->addText('username', 'Uživatelské jméno');
        $form->addText('fullname', 'Celé jméno');
        $form->addText('email', 'E-mail: *', 35)
                ->addRule(Form::FILLED, 'Vyplňte Váš email')
                ->addCondition(Form::FILLED)
                ->addRule(Form::EMAIL, 'Neplatná emailová adresa');
        $form->addPassword('password', 'Heslo: *', 20)
                ->setOption('description', 'Alespoň 6 znaků')
                ->addRule(Form::FILLED, 'Vyplňte Vaše heslo')
                ->addRule(Form::MIN_LENGTH, 'Heslo musí mít alespoň %d znaků.', 6);
        $form->addPassword('password2', 'Heslo znovu: *', 20)
                ->addConditionOn($form['password'], Form::VALID)
                ->addRule(Form::FILLED, 'Heslo znovu')
                ->addRule(Form::EQUAL, 'Hesla se neshodují.', $form['password']);
        $form->addSubmit('send', 'Registrovat');
        $form->onSuccess[] = callback($this, 'registerFormSubmitted');
        return $form;
    }

    public function registerFormSubmitted($form) {
        $values = $form->getValues();
        $new_user_id = $this->userManager->add($values->username,$values->fullname,$values->password,$values->email);
        if ($new_user_id) {
            $this->flashMessage('Registrace byla úspěšná');
            $this->redirect('Sign:in');
        }
    }

}
