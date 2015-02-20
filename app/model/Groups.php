<?php

namespace App\Model;

use Nette;

/**
 * Groups model
 * used for communication with table groups in database
 * 
 * @author Michal Formánek <michformanek@gmail.com>
 * @package default
 */
class Groups extends \Nette\Object {

    /** @var Nette\Database\Context */
    private $database;

    /**
     * Constructor
     * 
     * @param Nette\Database\Context $database database connection
     */
    public function __construct(Nette\Database\Context $database) {
        $this->database = $database;
    }

    /**
     * Gets all rows from groups table
     * 
     * @return Nette\Database\Table\Selection
     */
    public function getAll() {
        return $this->database->table("groups");
    }

    /**
     * Gets groups by id of its author
     * 
     * @param int $userId 
     * @return Nette\Database\Table\Selection
     */
    public function getByUser($userId) {
        return $this->getAll()->where('user_id', $userId);
    }

    /**
     * Gets groups of user with id 1
     * @return Nette\Database\Table\Selection
     */
    public function getShared() {
        return $this->getByUser(1);
    }

    /**
     * 
     * @param type $userId
     * @return type
     */
    public function getForTest($userId) {
        return $this->getAll()->where('user_id = ? OR user_id = 1', $userId)->fetchPairs('id', 'name');
    }

    /**
     * Gets one group
     * 
     * @param int $groupId id of group
     * @return Nette\Database\Table\ActiveRow
     */
    public function getByGroupId($groupId) {
        return $this->getAll()->get($groupId);
    }

    /**
     * Updates group in database
     * 
     * @param array $values
     */
    public function update($values) {
        $this->getByGroupId($values['id'])->update($values);
    }

    /**
     * Adds group into database
     * 
     * @param int $userId id of author
     * @return Nette\Database\Table\ActiveRow
     */
    public function add($userId) {
        return $this->getAll()->insert(array('user_id' => $userId));
    }

    /**
     * Deletes group from database
     * 
     * @param int $groupId id of group in database
     */
    public function delete($groupId) {
        $this->getByGroupId($groupId)->delete();
    }

}
