<?php

function huruf($n) {
    if ($n>=80.0) {
        $huruf = 'A';
    } 
    else if (80.0>$n && $n>=60.0) {
        $huruf = 'B';
    } 
    else if (60.0>$n && $n>=40.0) {
        $huruf = 'C';
    } 
    else if (40.0>$n && $n>=20.0) {
        $huruf = 'D';
    } 
    else if (20.0>$n) {
        $huruf = 'E';
    }
    
    return $huruf;    
}






if (isset($_POST['kalkulasi'])) {
    $absen = $_POST['nAbsen'];
    $tugas = $_POST['nTugas'];
    $kuis  = $_POST['nKuis'];
    $mid   = $_POST['nMid'];
    $final = $_POST['nFinal'];
    $ip    = ($absen + $tugas + $kuis + $mid + $final) /5;
}

?>


<html>
    <body>
        <table>
            <tr>
                <th>NILAI</th>
                <th>ANGKA</th>
                <th>HURUF</th>
            </tr>
            <tr>
                <td>quiz</td>
                <td>$quiz</td>
                <td><?php echo huruf($quiz); ?>"</td>
            </tr>
            <tr>
                <td>mid</td>
                <td><?php echo $mid; ?></td>
                <td><?php echo huruf($mid); ?>"</td>
            </tr>
            <tr>
                <td>tugas</td>
                <td><?php echo $tugas; ?></td>
                <td><?php echo huruf($tugas); ?>"</td>
            </tr>
            <tr>
                <td>final</td>
                <td>$final</td>
                <td><?php echo huruf($final); ?>"</td>
            </tr>
            <tr>
                <td>absen</td>
                <td><?php echo $absen; ?></td>
                <td><?php echo huruf($absen); ?>"</td>
            </tr>
            <tr>
                <th>IP</th>
                <th><?php echo $ip ?></th>
                <th><?php echo huruf($ip); ?>"</th>
            </tr>
        </table>
        <hr>
        <a href="02_seleksi_form.php"/>Bact To Seleksi <br>
    </body>
</html> 
