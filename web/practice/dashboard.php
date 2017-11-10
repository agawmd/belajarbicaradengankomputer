<?php
    require_once 'class/Pelanggan.php';
    require_once 'class/Barang.php';
?>

<html>
    <head>
        <title>Online Grocery Store</title>
    </head>
    <body>
        <h4>ONLINE GROCERY STORE</h4>
        <form action="form-daftar.php" method="POST">
            <input type="submit" name="pelanggan" value="Pelanggan Baru">
        </form>
        <form action="form-daftar-barang.php" method="POST">
            <input type="submit" name="barang" value="Barang Baru">
        </form>
    </body>
</html>

