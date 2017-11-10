<?php


if(isset($_GET['daftar'])) {
    if(isset($_GET['berhasil'])){
        $status = "berhasil";
    }
    else{
        $status = "gagal";
    }
    
    echo "Pendaftaran ".$_GET['nama']." $status";
}