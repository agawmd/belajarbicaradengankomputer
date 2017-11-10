<?php


if(isset($_GET['daftar-barang'])) {
    if(isset($_GET['berhasil'])){
        $status = "berhasil";
    }
    else{
        $status = "gagal";
    }
    
    echo "Input Barang ".$_GET['nama']." $status";
}