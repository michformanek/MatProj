<?php

namespace App\Model;

use Nette;

/**
 * Description of Groups
 *
 * @author Michal Formánek
 */
class Groups extends \Nette\Object {

    /** @var Nette\Database\Context */
    private $database;

    public function __construct(Nette\Database\Context $database) {
        $this->database = $database;
    }

    public function getAll() {
        return $this->database->table("groups");
    }

    public function getByUser($userId) {
        return $this->getAll()->where('user_id', $userId);
    }

    public function getShared() {
        return $this->database->table("groups")->where('user_id', 1);
    }
    public function getForTest($userId){
        return $this->getAll()->where('user_id = ? OR user_id = 1', $userId)->fetchPairs('id', 'name');
    }

    public function getByGroupId($groupId) {
        return $this->getAll()->get($groupId);
    }

    public function update($values) {
        $this->getByGroupId($values['id'])->update($values);
    }
    public function add($userId){
        return $this->getAll()->insert(array('user_id' => $userId));
    }
    public function delete($groupId){
        $this->getByGroupId($groupId)->delete();
    }

}
