<?php

namespace App\Model;

use Nette;

/**
 * Description of Students
 *
 * @author Michal Formánek
 */
class Students extends \Nette\Object {

    /** @var Nette\Database\Context */
    private $database;

    public function __construct(Nette\Database\Context $database) {
        $this->database = $database;
    }

    function getAll() {
        return $this->database->table("students");
    }

    public function getByGroupId($groupId) {
        return $this->getAll()->where('group_id', $groupId);
    }


    public function update($values) {
        $this->getByGroupId($values['id'])->update($values);
    }

    public function add($values) {
        $this->getAll()->insert($values);
    }
     public function delete($studentId) {
        $this->getAll()->get($studentId)->delete();
    }
}
