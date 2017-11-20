<?php

function huruf($prodi, $n) {
    if($prodi == 'SI') {
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
    }
    else {
        if ($n>=90.0) {
            $huruf = 'A';
        } 
        else if (90.0>$n && $n>=70.0) {
            $huruf = 'B';
        } 
        else if (70.0>$n && $n>=50.0) {
            $huruf = 'C';
        } 
        else if (50.0>$n && $n>=30.0) {
            $huruf = 'D';
        } 
        else if (30.0>$n) {
            $huruf = 'E';
        }
    }

    return $huruf;    
}




function status($prodi, $s) {
    if($prodi == 'SI') {
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
    }
    else {
        if ($s>=80.0) {
           $status = 'LULUS';
        } 
        else if (80.0>$s && $s>=60.0) {
           $status = 'LULUS';
        } 
        else if (60.0>$s && $s>=40.0) {
           $status = 'CUKUP';
        } 
        else if (40.0>$s && $s>=20.0) {
           $status = 'PARAH';
        } 
        else if (20.0>$s) {
           $status = 'PARAH';
        }
    }
    return $status; 
}        





if (isset($_POST['hasil'])) {
    $prodi = $_POST['prodi']; 
    $absen = $_POST['nAbsen'];
    $tugas = $_POST['nTugas'];
    $kuis  = $_POST['nKuis'];
    $mid   = $_POST['nMid'];
    $final = $_POST['nFinal'];

    echo "Pilihan $prodi<br><br>";   
    if ($prodi == "SI") {
        $ip = ($absen + $tugas + $kuis + $mid + $final)/5;
    }
    else {
        $ip = ($tugas + $kuis + $mid + $final)/4;
    }        
}

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
                    <td><?php echo huruf($prodi, $absen); ?></td>
                    <td><?php echo status($prodi, $absen)?></td>
                </tr>
                <tr>
                    <td>TUGAS</td>
                    <td><?php echo $tugas; ?></td>
                    <td><?php echo huruf($prodi, $tugas); ?></td>
                    <td><?php echo status($prodi, $tugas)?></td>
                </tr>
                <tr>
                    <td>KUIS</td>
                    <td><?php echo $kuis; ?></td>
                    <td><?php echo huruf($prodi, $kuis); ?></td>
                    <td><?php echo status($prodi, $kuis)?></td>
                </tr>
                <tr>
                    <td>MID</td>
                    <td><?php echo $mid; ?></td>
                    <td><?php echo huruf($prodi, $mid); ?></td>
                    <td><?php echo status($prodi, $mid)?></td>
                </tr>
                <tr>
                    <td>FINAL</td>
                    <td><?php echo $final; ?></td>
                    <td><?php echo huruf($prodi, $final); ?></td>
                    <td><?php echo status($prodi, $final)?></td>
                </tr>
                <tr>
                    <td>IP</td>
                    <td><?php echo $ip ?></td>
                    <td><?php echo huruf($prodi, $ip); ?></td>
                    <td><?php echo status($prodi, $ip)?></td>
                </tr>
            </tbody>
        </table>
        <hr>
        <a href="index.php"/>Bact To Seleksi <br>
    </body>
</html> 
