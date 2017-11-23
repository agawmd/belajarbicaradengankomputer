<?php
/**
 * Put Your code here...
 */

$c  = $_POST['z'];

$git = 1;



?>

<html>
    <body>

        <!-- Put your code here... -->
        <?php
        for ($i=1; $i<=$c; $i++) {
            echo $i;
            $git = ($i * $c);
            if ($i <= $c) {
                echo " x $c = $git<br>";
                
            }
        }       
        ?>
        
    </body>
</html>

