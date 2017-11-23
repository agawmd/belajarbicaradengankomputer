<?php
/**
 * Put Your code here...
 */

$s  = $_POST['f'];
$faktorial = 1;
?>

<html>
    <body>

        <!-- Put your code here... -->
        <?php
        // kerjakan mi
        for ($i = 1; $i<= $s; $i++) { //Disini akan mencetak hasil dari nilai yang di input
            echo "mulai iterasi ke [$i]<br>";
            echo "nilai \$i = $i<br>";
            echo "nilai \$faktorial = $faktorial<br>";
            $faktorial = $faktorial * $i;
            echo "nilai \$faktorial * \$i = $faktorial<br>";
            echo "selesai iterasi ke [$i]<hr>";
        }
        
        echo 'hasil akhir nilai $faktorial = '.$faktorial;
        
        ?>
    </body>
</html>

