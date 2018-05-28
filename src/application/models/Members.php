<?php
namespace application\models;
use application\core\Model;
class Members extends Model {
    public function getMembers(){
        $result = $this->db->row('SELECT * FROM members');
        return $result;
    }
}