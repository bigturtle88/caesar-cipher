<?php
class Model {
    public $dbh;
    public $row;
    public $result;
    public $data = array();
    function __construct() {
        require_once ('db.php');
        $this->dbh = new DB_Mysql();
    }
}

