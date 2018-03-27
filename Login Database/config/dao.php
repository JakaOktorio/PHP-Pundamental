<?php
include_once 'dbconfig.php';

class dao {
    var $link;
    public function __construct() {
        $this->link = new DBconfig();
    }
    
    public function read() {
        $query = "SELECT * FROM data_user ORDER BY id ASC";
        return mysqli_query($this->link->conn, $query);
    }
}

