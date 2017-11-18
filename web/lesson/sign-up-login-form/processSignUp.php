<?php
include 'Config.php';

if (isset($_POST['daftar'])) {
    $id         = $_POST['id'];
    $nama_awal     = $_POST['na_awal'];
    $nama_akhir    = $_POST['na_akhir'];
    $email      = $_POST['email'];
    $pass      = $_POST['pass'];
    
    $sql        = "INSERT INTO signUp (na_awal, na_akhir, email, pass) VALUE ('$nama_awal','$nama_akhir','$email', '$pass')";
    
    $query      = mysqli_query($db, $sql);
    
    if ($query) {
        header('Location:Signup.php?status=sukses');
    } else {
        header('Location:Signup.php?status=gagal');
    } 
} else {
    die("Akses dilarang...");
}