<?php
namespace application\lib;
use PDO;
class Db {
    protected $db;
//~~~~~~~~~~~ singlton for db connection ~~~~~~~~
    public function __construct() {
        $config = require 'application/config/config.php';
        $this->db = new PDO('mysql:host='.$config['db']['host'].';dbname='.$config['db']['name'].'', $config['db']['user'], $config['db']['password']);
        $this->db->exec("set names utf8");
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    public function query($sql, $params = []) {
        $stmt = $this->db->prepare($sql);
        if (!empty($params)) {
            foreach ($params as $key => $val) {
                $stmt->bindValue(':'.$key, $val);
            }
        }
        $stmt->execute();
        return $stmt;
    }
    public function row($sql, $params = []) {
        $result = $this->query($sql, $params);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    public function column($sql, $params = []) {
        $result = $this->query($sql, $params);
        return $result->fetchColumn();
    }
}