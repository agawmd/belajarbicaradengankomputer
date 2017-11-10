<?php
require_once __DIR__.'/../config/db_real.php';
?>

<html>
    <head>ONLINE GROCERY STORE - GROCERY LISTING</head>
    <body>
        <table>
            <tbody>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAMA BARANG</th>
                        <th>JUMLAH BARANG</th>
                        <th>STATUS BARANG</th>
                        <th>HARGA BARANG</th>
                        <th>JENIS BARANG</th>
                    </tr>
                </thead>
            </tbody>
            <?php
                $sql        = "SELECT * FROM tblBarang";
                $execute    = mysqli_query($this->db_connection, $sql);
                
                while ($row = mysql_fetch_array($query)) {
                    echo "<tr>";
                        echo "<td>".$row['namaBrg']."</td>";
                        echo "<td>".$row['tipeBrg']."</td>";
                        echo "<td>".$row['jumlahBrg']."</td>";
                        echo "<td>".$row['hargaBrg']."</td>";

                        echo "<td>";
                        echo "<a href="";
                        echo "</td>";
                }
            ?>
        </table>
    </body>
</html>