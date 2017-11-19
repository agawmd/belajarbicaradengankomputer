<?php

if (isset($_POST['keranjang'])) {
    $kacang     = $_POST['kacang'];
    $pisang     = $_POST['pisang'];
    $terong     = $_POST['terong'];
    $mentega     = $_POST['mentega'];
    $tepung     = $_POST['tepung'];
}

$hargaK  = $kacang*10000;
$hargaP  = $pisang*3000;
$hargaT  = $terong*2000;
$hargaM  = $mentega*5000;
$hargaTep  = $tepung*4500;

$jumBeli   = $kacang+$pisang+$terong+$mentega+$tepung;

$totBayar   = $hargaK+$hargaM+$hargaP+$hargaT+$hargaTep;



?>

<html>
    <body>
        <table border="4" cellpadding="3">
            <thead>
            <th>KET</th>
            <th>HARGA</th>
            <th>JUMLAH</th>
            <th>TOTAL</th>
            </thead>
            <tbody>
                <tr>
                    <td>Kacang</td>
                    <td>10.000</td>
                    <td><?php echo $kacang; ?></td>
                    <td><?php echo $hargaK; ?></td>
                </tr>
                <tr>
                    <td>Pisang</td>
                    <td>3.000</td>
                    <td><?php echo $pisang; ?></td>
                    <td><?php echo $hargaP; ?></td>
                </tr>
                <tr>
                    <td>Terong</td>
                    <td>2.000</td>
                    <td><?php echo $terong; ?></td>
                    <td><?php echo $hargaT; ?></td>
                </tr>
                <tr>
                    <td>Mentega</td>
                    <td>5.000</td>
                    <td><?php echo $mentega; ?></td>
                    <td><?php echo $hargaM; ?></td>
                </tr>
                <tr>
                    <td>Tepung</td>
                    <td>4.500</td>
                    <td><?php echo $tepung; ?></td>
                    <td><?php echo $hargaTep; ?></td>
                </tr>
                
                
                <tr>
                    <th colspan="2">TOTAL</th>
                    <td><?php echo $jumBeli?></td>
                    <td><?php echo $totBayar?></td>
                </tr>

                
            </tbody>
        </table><br><br>
    
        
        <a href="05_seleksi_form.php"/>Silahkan isi kembali...
    </body>
</html>