<?php
require_once __DIR__.'/../config/database.php';

class Bio extends Database {
    
    public function __construct() {
        $this->create_connection();
    }
    
    
    public function getData() {
        $query  = 'select * from bio';
        $result = mysqli_query($this->db_connection, $query);
        return $result;
    }
}