<?php

namespace App\Model;

use Nette;

/**
 * Tests model
 * used for communication with table tests in database
 * 
 * @author Michal Formánek <michformanek@gmail.com>
 * @package default
 */
class Tests extends Nette\Object {

    /** @var Nette\Database\Context */
    private $database;

    /**
     * 
     * @param Nette\Database\Context $database
     */
    public function __construct(Nette\Database\Context $database) {
        $this->database = $database;
    }

    /**
     * Gets all test from database
     * 
     * @return Nette\Database\Table\Selection
     */
    function getAll() {
        return $this->database->table("tests");
    }

    /**
     * Gets tests by author
     * 
     * @param int $userId id of author of tests
     * @return Nette\Database\Table\Selection
     */
    public function getByUser($userId) {
        return $this->getAll()->where("user_id", $userId);
    }

    /**
     * Gets shaded tests
     * 
     * @return Nette\Database\Table\Selection
     */
    public function getShared() {
        return $this->getAll()->where("shared", true);
    }

    /**
     * Gets test from database
     * 
     * @param type $testId
     * @return Nette\Database\Table\ActiveRow
     */
    public function getByTestId($testId) {
        return $this->getAll()->get($testId);
    }

    /**
     * Updates test in database
     * 
     * @param array $values values
     */
    public function update($values) {
        $this->getAll()->get($values->id)->update($values);
    }

    /**
     * Deletes test from database
     * 
     * @param int $testId id of test
     */
    public function delete($testId) {
        $this->getAll()->get($testId)->delete();
    }

    /**
     * Adds test to database
     * 
     * @param int $userId id of test author
     * @return Nette\Database\Table\ActiveRow
     */
    public function add($userId) {
        return $this->getAll()->insert(array('user_id' => $userId));
    }

}
