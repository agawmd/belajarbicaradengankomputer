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



?>             
<html>
    <body>
        <br>
        <a href="index.php"/>Bact To
    </body>
</html> 
