<?php

namespace App\Presenters;

use Nette;

/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter {

    public function renderDefault() {
        if (!$this->user->isLoggedIn()) {
            $this->redirect('Sign:in');
        }
        if ($this->user->isInRole('guest')) {
            $this->user->logout();
 			$this->flashMessage('Nejste přihlášeni, nebo Váš účet nebyl doposud aktivován.','error');
        }
    }

}
