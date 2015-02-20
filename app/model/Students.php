<?php

namespace App\Model;

use Nette;

/**
 * Students model
 * used for communication with table students in database
 * 
 * @author Michal Formánek <michformanek@gmail.com>
 * @package default
 */
class Students extends \Nette\Object {

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
     * Gets all students from table
     *  
     * @return Nette\Database\Table\Selection
     */
    function getAll() {
        return $this->database->table("students");
    }

    /**
     * Gets students assigned to group
     * 
     * @param int $groupId id of group
     * @return Nette\Database\Table\Selection
     */
    public function getByGroupId($groupId) {
        return $this->getAll()->where('group_id', $groupId);
    }

    /**
     * Updates information about student
     * 
     * @param array $values values
     */
    public function update($values) {
        $this->getByGroupId($values['id'])->update($values);
    }

    /**
     * Adds student into database
     * 
     * @param array $values values
     * @return Nette\Database\Table\ActiveRow
     */
    public function add($values) {
        return $this->getAll()->insert($values);
    }

    /**
     * Removes student from database
     * 
     * @param int $studentId id of student
     */
    public function delete($studentId) {
        $this->getAll()->get($studentId)->delete();
    }

}
