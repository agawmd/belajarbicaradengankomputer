<?php

if (isset($_POST['kalkulasi'])) {
    $Absen = $_POST['nAbsen'];
    $Tugas = $_POST['nTugas'];
    $Kuis = $_POST['nKuis'];
    $MID = $_POST['nMid'];
    $FINAL = $_POST['nFinal'];
    
    
    
    echo "HASIL PENILAIAN";
    
    
    echo "<br>"."Absen \n".$Absen."\n";
    if ($Absen>=80.0) {
        echo "A";
    } elseif (80.0>$Absen && $Absen>=60.0) {
        echo "B";
    } elseif (60.0>$Absen && $Absen>=40.0) {
        echo "C";
    } elseif (40.0>$Absen && $Absen>=20.0) {
        echo "D";
    } elseif (20.0>$Absen && $Absen>=0.0) {
        echo "E";
    }
    
    
    
    
    echo "<br>"."Tugas \n".$Tugas."\n";
    if ($Tugas>=80.0) {
        echo "A";
    } elseif (80.0>$Tugas && $Tugas>=60.0) {
        echo "B";
    } elseif (60.0>$Tugas && $Tugas>=40.0) {
        echo "C";
    } elseif (40.0>$Tugas && $Tugas>=20.0) {
        echo "D";
    } elseif (20.0>$Tugas && $Tugas>=0.0) {
        echo "E";
    }
    
    
    
    echo "<br>"."Kuis \n".$Kuis."\n";
    if ($Kuis>=80.0) {
        echo "A";
    } elseif (80.0>$Kuis && $Kuis>=60.0) {
        echo "B";
    } elseif (60.0>$Kuis && $Kuis>=40.0) {
        echo "C";
    } elseif (40.0>$Kuis && $Kuis>=20.0) {
        echo "D";
    } elseif (20.0>$Kuis && $Kuis>=0.0) {
        echo "E";
    }
    
    
    
    echo "<br>"."MID \n".$MID."\n";
    if ($MID>=80.0) {
        echo "A";
    } elseif (80.0>$MID && $MID>=60.0) {
        echo "B";
    } elseif (60.0>$MID && $MID>=40.0) {
        echo "C";
    } elseif (40.0>$MID && $MID>=20.0) {
        echo "D";
    } elseif (20.0>$MID && $MID>=0.0) {
        echo "E";
    }
    
    
    
    echo "<br>"."FINAL \n".$FINAL."\n";
    if ($FINAL>=80.0) {
        echo "A";
    } elseif (80.0>$FINAL && $FINAL>=60.0) {
        echo "B";
    } elseif (60.0>$FINAL && $FINAL>=40.0) {
        echo "C";
    } elseif (40.0>$FINAL && $FINAL>=20.0) {
        echo "D";
    } elseif (20.0>$FINAL && $FINAL>=0.0) {
        echo "E";
    }
    
    
    echo "<br>";
    $ip  = ($Absen+$Tugas+$Kuis+$MID+$FINAL)/5;
    echo "IP : ".$ip."\n";
    
    
    if ($ip>=80.0) {
        echo "A";
    } elseif (80.0>$ip && $ip>=60.0) {
        echo "B";
    } elseif (60.0>$ip && $ip>=40.0) {
        echo "C";
    } elseif (40.0>$ip && $ip>=20.0) {
        echo "D";
    } elseif (20.0>$ip && $ip>=0.0) {
        echo "E";
    }
    
    
    
}



?>             
<html>
    <body>
        <br>
        <a href="02_seleksi_form.php"/>Bact To Seleksi <br>
    </body>
</html> 
