<?php

namespace App\Model;

use Nette;

/**
 * Questions model
 * used for communication with table questions in database
 * 
 * @author Michal Formánek <michformanek@gmail.com>
 * @package default
 */
class Questions extends \Nette\Object {

    /** @var Nette\Database\Context */
    private $database;

    /**
     * Constructor
     * 
     * @param Nette\Database\Context $database
     */
    public function __construct(Nette\Database\Context $database) {
        $this->database = $database;
    }

    /**
     * Gets all rows from table questions
     * 
     * @return Nette\Database\Table\Selection
     */
    public function getAll() {
        return $this->database->table('questions');
    }

    /**
     * Gets all questions for test
     * 
     * @param int $testId id of test. foreign key in database
     * @return Nette\Database\Table\Selection
     */
    public function getByTestId($testId) {
        return $this->getAll()->where("test_id", $testId);
    }

    /**
     * Gets one specific question
     * 
     * @param int $questionId id of question in database
     * @return Nette\Database\Table\ActiveRow
     */
    public function getById($questionId) {
        return $this->getAll()->get($questionId);
    }

    /**
     * Gets questions in random order for test
     * 
     * @param int $testId id of test
     * @param int $limit limit of questions returned
     * @return Nette\Database\Table\Selection
     */
    public function getRandom($testId, $limit) {
        return $this->getByTestId($testId)->order('rand()')->limit($limit);
    }

    /**
     * Adds values into questions table
     * 
     * @param array $values values
     * @return Nette\Database\Table\ActiveRow
     */
    public function add($values) {
        return $this->getAll()->insert($values);
    }

    /**
     * Updates row in database
     * 
     * @param array $values values
     */
    public function update($values) {
        $this->getAll()->get($values->id)->update($values);
    }

    /**
     * Deletes question from database
     * 
     * @param type $questionId
     */
    public function delete($questionId) {
        $this->getAll()->get($questionId)->delete();
    }

}
