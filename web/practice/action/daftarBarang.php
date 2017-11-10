<?php
require_once __DIR__.'/../class/Barang.php';


      if (isset($_POST['daftar-barang'])) {
            $nama         = $_POST['namaBrg'];
            $tipe         = $_POST['tipeBrg'];
            $jumlah       = $_POST['jumlahBrg'];
            $harga        = $_POST['hargaBrg'];
            $status_B     = $_POST['statusBrg'];
$barang = new Barang();
if($barang->saveData($nama, $tipe, $harga, $jumlah, $status_B)) {
    header("Location: ../form-daftar-barang-info.php?daftar&berhasil&nama=$nama");
}
    else{
            header("Location: ../form-daftar-barang-info.php?daftar&nama=$nama");

    }


      }