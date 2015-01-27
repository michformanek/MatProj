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
    }
}
