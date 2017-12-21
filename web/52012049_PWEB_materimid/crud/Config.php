<?php


    $host           = "localhost";
    $user           = "root";
    $pass           = "1234";
    $nama_database  = "db_pendaftaran_kharisma";

    $db	= mysqli_connect($host,$user,$pass,$nama_database) or die("Koneksi Gagal");
