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
        $this->database = $database;
    }

    function getAll() {
        return $this->database->table("tests");
    }

    public function getByUser($userId) {
        return $this->database->table("tests")->where("user_id", $userId);
    }

    public function getShared() {
        return $this->database->table("tests")->where("shared", true);
    }

    public function getByTestId($testId) {
        return $this->database->table("tests")->get($testId);
    }

    public function update($values) {
        $this->database->table('tests')->get($values->id)->update($values);
    }

    public function delete($testId) {
        $this->database->table('tests')->get($testId)->delete();
    }
    public function add($userId){
        return $this->database->table('tests')->insert(array('user_id' => $userId));
    }
}
