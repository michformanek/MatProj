<?php

namespace App\Model;

use Nette;

/**
 * Answers model
 * used for communication with table answers in database
 * 
 * @author Michal Formánek <michformanek@gmail.com>
 * @package default
 */
class Answers extends Nette\Object {

    /** @var Nette\Database\Context */
    private $database;

    /**
     * Constructor
     *
     * @param Nette\Database\Context $database connection to database
     */
    public function __construct(Nette\Database\Context $database) {
        $this->database = $database;
    }

    /** @return Nette\Database\Table\Selection */
    public function findAll() {
        return $this->database->table("answers");
    }

    /** @return Nette\Database\Table\Selection */
    public function getByQuestionId($questionId) {
        return $this->findAll()->where("question_id", $questionId);
    }

    /**
     * Gets answers from database in random order
     * 
     * @param int $questionId id of question. foreign key in database
     * @param int $limit count of returned answers
     * @return  Nette\Database\Table\Selection
     */
    public function getRandom($questionId, $limit) {
        return $this->getByQuestionId($questionId)->order('rand()')->limit($limit);
    }

    /**
     * Removes answer from database 
     *
     * @param integer $answerId id of answer to delete
     */
    public function delete($answerId) {
        $this->findAll()->where('id', $answerId)->delete();
    }

    /**
     * Adds answer into database
     * 
     * @param array $values 
     */
    public function add($values) {
        $this->findAll()->insert($values);
    }

}
