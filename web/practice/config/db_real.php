<?php


class database {

    protected $host   = 'localhost';
    protected $user   = 'root';
    protected $pass   = '1234';
    protected $name   = 'db_shopping';
    protected $db_connection;

    public function create_connection() {
        $this->db_connection = mysqli_connect($this->host, $this->user, $this->pass, $this->name);
    }    
    
}