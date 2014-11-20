<?php

namespace App\Model;

use Nette;

/**
 * Description of Tests
 *
 * @author Michal Formánek
 */
class Tests extends Nette\Object {

    /** @var Nette\Database\Context */
    private $database;

    public function __construct(Nette\Database\Context $database) {
        $this->database = $database->table("tests");
    }

    function getAll() {
        return $this->database;
    }

    public function getByUser($userId) {
        return $this->database->where("user_id", $userId);
    }

    public function getShared() {
        return $this->database->where("shared", true);
    }

}
