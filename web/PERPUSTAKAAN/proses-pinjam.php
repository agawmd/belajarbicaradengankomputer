<?php

    include 'Config.php';

    if (isset($_POST['pinjam'])) {
        $id     = $_POST['id'];
        $nim    = $_POST['nim'];
        $nama   = $_POST['nama'];
        $prodi  = $_POST['prodi'];
        $tgl    = $_POST['tgl'];
        
        $sql    = "INSERT INTO tb_pinjam (nama, nim, prodi) SELECT judul FROM tb_buku";
        
        $query  = mysqli_query($db, $sql);
        
        if ($query) {
            header('Location:index.html?status=sukses');
        } else {
            header('Location:index.html?status=gagal');
        }    
    } else {
        die("Akses dilarang...");
    }