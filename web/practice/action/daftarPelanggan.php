<?php
require_once __DIR__.'/../class/Pelanggan.php';


      if (isset($_POST['daftar'])) {
            $nama         = $_POST['nama'];
            $alamat       = $_POST['alamat'];
            $email        = $_POST['email'];
            $hp           = $_POST['tlp'];
            $jt           = $_POST['jtra'];
$pelanggan = new Pelanggan();
if($pelanggan->saveData($nama, $alamat, $email, $hp, $jt)) {
    header("Location: ../form-daftar-info.php?daftar&berhasil&nama=$nama");
}
    else{
            header("Location: ../form-daftar-info.php?daftar&nama=$nama");

    }


      }