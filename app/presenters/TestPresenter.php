<?php

namespace App\Presenters;

use Nette,
    App\Model;

/**
 * Description of TestPresenter
 *
 * @author Michal Formánek
 */
class TestPresenter extends BasePresenter {
    
    private $tests;

    public function __construct(Model\Tests $tests) {
        $this->tests = $tests;
    }

    public function renderAll() {
        $this->template->tests = $this->tests->getByUser($this->user->getId());
    }
    public function renderShared(){
        $this->template->tests = $this->tests->getShared();
    }
    public function renderGenerate($testId){
        
    }
    
}
