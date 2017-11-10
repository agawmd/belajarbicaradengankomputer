<?php
require_once __DIR__.'/../config/db_real.php';

class Pelanggan extends database {
    
    public function __construct() {
        $this->create_connection();
    }
    

    
    

    public function saveData($nama, $alamat, $email, $tlp, $jTransaksi) {
        
          
            $sql    = "INSERT INTO tblPelanggan "
                    . "(nama_pelanggan,alamat_pelanggan,email_pelanggan,hp_pelanggan,jenis_transaksi) "
                    . "VALUES ('$nama','$alamat','$email','$tlp','$jTransaksi')";
       
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