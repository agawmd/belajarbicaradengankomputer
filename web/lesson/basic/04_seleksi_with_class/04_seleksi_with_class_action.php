<?php

/**
 * Import Section
 */
require_once 'class/class.nilai.php';
require_once 'class/class.NilaiSI.php';
require_once 'class/class.NilaiTI.php';
/**
 * End of Import Section
 */





/**
 * Logic section
 */
if (isset($_POST['hasil'])) {

    $prodi = $_POST['prodi']; 
    if($prodi == "SI") {
        $nilai = new NilaiSI();
    }
    else {
        $nilai = new NilaiTI();
    }

    $nilai->absen = $_POST['nAbsen'];
    $nilai->tugas = $_POST['nTugas'];
    $nilai->kuis  = $_POST['nKuis'];
    $nilai->mid   = $_POST['nMid'];
    $nilai->final = $_POST['nFinal'];
    $nilai->ip    = $nilai->getIP();
}
/**
 * End Of logic section
 */


?>


<html>
    <body>
             
        <table border="3" cellpadding="3">
            <thead>
                <th>NILAI</th>
                <th>ANGKA</th>
                <th>HURUF</th>
                <th>STATUS</th>
            </thead>
            <tbody>
                
                <tr>
                    <td>ABSEN</td>
                    <td><?php echo $absen;?></td>
                    <td><?php echo $nilai->huruf($absen); ?></td>
                    <td><?php echo $nilai->status($absen)?></td>
                </tr>
                <tr>
                    <td>TUGAS</td>
                    <td><?php echo $tugas; ?></td>
                    <td><?php echo $nilai->huruf($tugas); ?></td>
                    <td><?php echo $nilai->status($tugas)?></td>
                </tr>
                <tr>
                    <td>KUIS</td>
                    <td><?php echo $kuis; ?></td>
                    <td><?php echo $nilai->huruf($kuis); ?></td>
                    <td><?php echo $nilai->status($kuis)?></td>
                </tr>
                <tr>
                    <td>MID</td>
                    <td><?php echo $mid; ?></td>
                    <td><?php echo $nilai->huruf($mid); ?></td>
                    <td><?php echo $nilai->status($mid)?></td>
                </tr>
                <tr>
                    <td>FINAL</td>
                    <td><?php echo $final; ?></td>
                    <td><?php echo $nilai->huruf($final); ?></td>
                    <td><?php echo $nilai->status($final)?></td>
                </tr>
                <tr>
                    <td>IP</td>
                    <td><?php echo $ip ?></td>
                    <td><?php echo $nilai->huruf($ip); ?></td>
                    <td><?php echo $nilai->status($ip)?></td>
                </tr>
            </tbody>
        </table>
        <hr>
        <a href="04_seleksi_form.php"/>Bact To Seleksi <br>
    </body>
</html> 
