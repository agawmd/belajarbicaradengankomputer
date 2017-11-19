<?php

if (isset($_POST['hasil'])) {
    $nilai = $_POST['nilai'];           
        if (100.0>=$nilai && $nilai>=80.0) {
            echo "A";
        } elseif (79.0>=$nilai && $nilai>=60.0) {
            echo "B";
        } elseif (59.0>=$nilai && $nilai>=40.0) {
            echo "C";
        } elseif (39.0>=$nilai && $nilai>=20.0) {
        } elseif (19.0>=$nilai && $nilai>=0.0) {
            echo "E";
        }
        
}

if (isset($_POST['kalkulasi'])) {
    $Absen = $_POST['nAbsen'];
    $Tugas = $_POST['nTugas'];
    $Kuis = $_POST['nKuis'];
    $MID = $_POST['nMid'];
    $FINAL = $_POST['nFinal'];
    
    
    
    
    echo "Absen \n".$Absen.""."<br>";
    
    
    
    
    echo "Tugas \n".$Tugas.""."<br>";
    echo "Kuis \n".$Kuis.""."<br>";
    echo "MID \n".$MID.""."<br>";
    echo "FINAL \n".$FINAL.""."<br>";
    
    echo "<br>";
    $ip  = ($Absen+$Tugas+$Kuis+$MID+$FINAL)/5;
    echo "IP : ".$ip;
    
    
    if ($ip>=80) {
        echo "A";
    } elseif (80<=$ip && $ip>=60) {
        echo "B";
    } elseif (60<=$ip && $ip>=40) {
        echo "C";
    } elseif (40<=$ip && $ip>=20) {
        echo "D";
    } elseif (20<=$ip && $ip>=0) {
        echo "E";
    }
    
    
    
}



?>             
<html>
    <body>
        <br>
        <a href="seleksi_02.php"/>Bact To Seleksi II<br>
        <a href="seleksi_01.php"/>Back To Seleksi I
    </body>
</html> 
