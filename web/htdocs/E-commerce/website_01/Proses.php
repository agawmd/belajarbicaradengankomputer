<?php

include ("dbC.php");

if (isset($_POST['daftar'])) {
    $no_identitas = $_POST['no_'];
    $tipe_identitas = $_POST['tipe_'];
    $busu = $_POST['tai'];
    $sekali = $_POST['kucing'];
    $xxxx = $_POST['email_'];


    $query = "INSERT INTO tblAkunPembeli "
            . "(no_identitas, tipe_identitas, nama, no_hp, email) VALUES "
            . "('$no_identitas', '$tipe_identitas', '$busu', '$sekali', '$xxxx')";

    $simpan = mysqli_query($dbconn, $query);

    if ($simpan) {
        echo "Akun Ditambahkan";
        $link = 'index.php';
        echo "<a href='$link'> Back</a>";
    } else {
        echo "Akun Gagal Di tambahkan";
    }
}
?>
