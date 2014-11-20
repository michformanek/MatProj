<?php

namespace App\Model;

use Nette;

/**
 * Description of Answers
 *
 * @author Michal
 */
class Answers extends Nette\Object {

    /** @var Nette\Database\Context */
    private $database;

    public function __construct(Nette\Database\Context $database) {
        $this->database = $database->table("answers");
    }

    public function findAll(){
        return $this->database;
    }
}
