<?php

if (isset($_POST['kalkulasi'])) {
    $Absen = $_POST['nAbsen'];
    $Tugas = $_POST['nTugas'];
    $Kuis = $_POST['nKuis'];
    $MID = $_POST['nMid'];
    $FINAL = $_POST['nFinal'];
    
    
    
    echo "HASIL PENILAIAN";

    
}



?>             
<html>
    <body>
        
        <table border="3" cellpadding="5">
            <thead>
            <th>NILAI</th>
            <th>ANGKA</th>
            <th>HURUF</th>
            </thead>
            
            <tbody>
                <?php
                $ip  = ($Absen+$Tugas+$Kuis+$MID+$FINAL)/5;
                echo "<tr>";
                    echo "<td>"."ABSEN"."</td>";
                    echo "<td>".$Absen."</td>";
                    echo "<td>";
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
                    echo "</td>";
                echo "</tr>";
                
                echo "<tr>";
                    echo "<td>"."TUGAS"."</td>";
                    echo "<td>".$Tugas."</td>";
                    echo "<td>";
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

                    echo "</td>";
                echo "</tr>";
                
                echo "<tr>";
                    echo "<td>"."KUIS"."</td>";
                    echo "<td>".$Kuis."</td>";
                    echo "<td>";
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
                    
                    echo "</td>";
                echo "</tr>";
                
                echo "<tr>";
                    echo "<td>"."MID"."</td>";
                    echo "<td>".$MID."</td>";
                    echo "<td>";
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
                    
                    echo "</td>";
                echo "</tr>";
                
                echo "<tr>";
                    echo "<td>"."FINAL"."</td>";
                    echo "<td>".$FINAL."</td>";
                    echo "<td>";
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
                    
                    echo "</td>";
                echo "</tr>";
                
                echo "<tr>";
                    echo "<td>"."IP"."</td>";
                    echo "<td>".$ip."</td>";
                    echo "<td>";
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
                    
                    echo "</td>";
                echo "</tr>";
                
                ?>
            </tbody>
            
            
        </table>
        
        
        <br>
        <a href="02_seleksi_form.php"/>Bact To Seleksi <br>
    </body>
</html> 
