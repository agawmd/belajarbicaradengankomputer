<?php

class Database {

    protected $db_host = 'localhost';
    protected $db_user = 'root';
    protected $db_pass = '1234';
    protected $db_name = 'bz_profile';
    protected $db_connection;

    public function create_connection() {
        $this->db_connection = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
    }

}
