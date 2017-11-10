<?php
require_once __DIR__.'/../config/db_real.php';

class Barang extends database {
    
    public function __construct() {
        $this->create_connection();
    }
    

    
    

    public function saveData($nama, $tipe, $jumlah, $harga, $status_B) {
        
          
            $sql    = "INSERT INTO tblBarang "
                    . "(nama_barang,jumlah_barang,status_barang,harga_barang,jenis_barang) "
                    . "VALUES ('$nama','$jumlah','$status_B','$harga','$tipe_B')";
       
        $execute = mysqli_query($this->db_connection, $sql);
        
        if(mysqli_affected_rows($this->db_connection)) {
            $berhasil = true;
            
        }
        else {
            $berhasil = false;
        }
        return $berhasil;
    }
}