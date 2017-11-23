<?php
/**
 * Put Your code here...
 */

$x = $_POST['b'];

$total = 0;


?>

<html>
    <body>

        <!-- Put your code here... -->
        <?php
        for ($i=1; $i<=$x; $i++) {
            echo $i;
            if ($i < $x) {
                echo " + ";
            }
            $total = $total + $i;
        }
        
        echo " = $total";
        ?>
    </body>
</html>

