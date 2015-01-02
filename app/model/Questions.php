<?php

namespace App\Model;

use Nette;

/**
 * Description of Questions
 *
 * @author Michal Formánek
 */
class Questions extends \Nette\Object {

    /** @var Nette\Database\Context */
    private $database;

    public function __construct(Nette\Database\Context $database) {
        $this->database = $database->table("questions");
    }
    
    public function getByTest($testId){
        return $this->database->where("test_id", $testId);
    }

}
