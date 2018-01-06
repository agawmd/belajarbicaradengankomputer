<?php

    include 'Config.php';

    if (isset($_POST['pinjam'])) {
    
        $nim   = $_POST['nim'];
        $nama   = $_POST['nama'];
        $prodi   = $_POST['prodi'];
        $tgl   = $_POST['tglBalik'];
        $sekolah   = $_POST['sekolah_asal'];
        
        $sql    = "INSERT INTO tb_pinjam (nim, nama, prodi, tglBalik) VALUE ('$nim','$nama','$prodi','$tgl')";
        
        $query  = mysqli_query($dbase, $sql);
        
        if ($query) {
            header('Location:buku.php?status=sukses');
        } else {
            header('Location:buku.php?status=gagal');
        }
    } else {
        die("Akses dilarang...");
    }