<?php    
    require_once 'class/Barang.php';
?>

<html>
    <body>
        <fieldset>

            <form action="action/daftarPelanggan.php" method="POST">
                <p>
                    ID
                    <input type="text" name="id">
                </p>

                <p>
                    NAMA BARANG
                    <input type="text" name="namaBrg">
                </p>
                
                <p>
                    TIPE BARANG
                    <select name="tipeBrg">
                        <option>Gram</option>
                        <option>Kg</option>
                        <option>Littres</option>
                        <option></option>
                        <option>SEED</option>
                        <option>SACHET</option>
                        <option>PACKS</option>
                        <option>BOX</option>
                        <option>UNIT</option>
                    </select>
                </p>


                <p>
                    JUMLAH BARANG
                    <input type="text" name="jumlahBrg">
                </p>

                <p>
                    HARGA BARANG - Rp
                    <input type="text" name="hargaBrg">
                </p>

                <p>
                    STATUS BARANG
                    <select name="statusBrg">
                        <option>FOOD</option>
                        <option>DRINKS</option>
                        <option>DRUGS</option>
                        <option>STATIONARY</option>
                    </select>
                </p>

                
                <p>
                    <input type="submit" name="daftar-barang" value="Daftar">
                </p>
            </form>

        </fieldset>
    </body>    
</html>