<?php
/**
 * Put Your code here...
 */


$q = $_POST['t'];



?>

<html>
    <body>

        <!-- Put your code here... -->
        <?php
        for ($i= 1; $i<=$q; $i++) {
            if ($i % 2 == 0) {
                echo "*";
            } elseif ($i % 4 == 0 ) {
                echo "#";
            } else {
                echo $i;
            }
            
        }
        ?>
    </body>
</html>

