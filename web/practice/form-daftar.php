<?php    
    require_once 'class/Pelanggan.php';
?>

<html>
    <body>
        <fieldset>

            <form action="action/daftarPelanggan.php" method="POST">
                <p>
                    ID
                    <input type="text" name="id" placeholder="ID">
                </p>

                <p>
                    NAMA
                    <input type="text" name="nama" placeholder="NAMA">
                </p>

                <p>
                    ALAMAT
                    <input type="text" name="alamat" placeholder="ALAMAT">
                </p>

                <p>
                    EMAIL
                    <input type="email" name="email" placeholder="EMAIL">
                </p>

                <p>
                    TELEPON
                    <input type="text" name="tlp" placeholder="TELEPON">
                </p>

                <p>
                    TIPE TRANSAKSI
                    <select name="jtra">
                        <option>TUNAI</option>
                        <option>TRANSFER</option>
                        <option>KREDIT</option>
                    </select>
                </p>
                
                <p>
                    <input type="submit" name="daftar" value="Daftar">
                </p>
            </form>

        </fieldset>
    </body>    
</html>