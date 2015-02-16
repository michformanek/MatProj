<?php

namespace App\Presenters;

use Nette;

/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter {

    public function renderDefault() {
         if (!$this->user) {
            $this->redirect('Sign:in');
        }
        if ($this->user->isInRole('guest')) {
            $this->user->logout();
            throw new \Nette\Application\ForbiddenRequestException;
        }
    }

}
