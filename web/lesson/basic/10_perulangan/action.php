<?php
/**
 * Put Your code here...
 */

$vo = $_POST['ff'];




?>

<html>
    <body>

        <!-- Put your code here... -->
        <?php 
        for ($i=1; $i<=$vo; $i++) {
            if ($i % 2 == 1) {
                echo "1";
            } elseif ($i % 2 == 0) {
                echo "0";
            } 
        }
        ?>
    </body>
</html>

