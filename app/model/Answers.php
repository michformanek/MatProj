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
        $this->database = $database;
    }

    public function findAll() {
        return $this->database->table("answers");
    }

    public function getByQuestionId($questionId) {
        return $this->database->table("answers")->where("question_id", $questionId);
    }

    public function getRandom($questionId, $limit) {
        return $this->getByQuestionId($questionId)->order('rand()')->limit($limit);
    }

    public function delete($answerId) {
        $this->database->table("answers")->where('id', $answerId)->delete();
    }

    public function add($values) {
        $this->database->table("answers")->insert($values);
    }

}
