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
        $this->database = $database;
    }

    public function getByTestId($testId) {
        return $this->database->table("questions")->where("test_id", $testId);
    }

    public function getById($questionId) {
        return $this->database->table("questions")->get($questionId);
    }

    public function add($values) {
        $this->database->table('questions')->insert($values);
    }

    public function update($values) {
        $this->database->table('questions')->get($values->id)->update($values);
    }

    public function delete($questionId) {
        $this->database->table('questions')->get($questionId)->delete();
    }

}
