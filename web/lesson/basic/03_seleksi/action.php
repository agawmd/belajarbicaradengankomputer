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

function status($s) {
   if ($s>=80.0) {
        $status = 'LULUS';
    } 
    else if (80.0>$s && $s>=60.0) {
        $status = 'BAGUS';
    } 
    else if (60.0>$s && $s>=40.0) {
        $status = 'CUKUP';
    } 
    else if (40.0>$s && $s>=20.0) {
        $status = 'PARAH';
    } 
    else if (20.0>$s) {
        $status = 'ERROR';
    }
    
    return $status; 
}






if (isset($_POST['hasil'])) {
    $absen = $_POST['nAbsen'];
    $tugas = $_POST['nTugas'];
    $kuis  = $_POST['nKuis'];
    $mid   = $_POST['nMid'];
    $final = $_POST['nFinal'];
    $ip    = ($absen + $tugas + $kuis + $mid + $final)/5;
}

?>


<html>
    <body>
        <?php$ip    = ($absen + $tugas + $kuis + $mid + $final)/5;?>
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
                    <td><?php echo huruf($absen); ?></td>
                    <td><?php echo status($absen)?></td>
                </tr>
                <tr>
                    <td>TUGAS</td>
                    <td><?php echo $tugas; ?></td>
                    <td><?php echo huruf($tugas); ?></td>
                    <td><?php echo status($tugas)?></td>
                </tr>
                <tr>
                    <td>KUIS</td>
                    <td><?php echo $kuis; ?></td>
                    <td><?php echo huruf($kuis); ?></td>
                    <td><?php echo status($kuis)?></td>
                </tr>
                <tr>
                    <td>MID</td>
                    <td><?php echo $mid; ?></td>
                    <td><?php echo huruf($mid); ?></td>
                    <td><?php echo status($mid)?></td>
                </tr>
                <tr>
                    <td>FINAL</td>
                    <td><?php echo $final; ?></td>
                    <td><?php echo huruf($final); ?></td>
                    <td><?php echo status($final)?></td>
                </tr>
                <tr>
                    <td>IP</td>
                    <td><?php echo $ip ?></td>
                    <td><?php echo huruf($ip); ?></td>
                    <td><?php echo status($ip)?></td>
                </tr>
            </tbody>
        </table>
        <hr>
        <a href="index.php"/>Bact To Seleksi <br>
    </body>
</html> 
