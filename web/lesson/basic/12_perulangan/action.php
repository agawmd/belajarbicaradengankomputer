<?php
/**
 * Put Your code here...
 */

$hi = $_POST['lo'];




?>

<html>
    <body>

        <!-- Put your code here... -->
        <?php
        for ($i=1; $i<=$hi; $i++) {
            if ($i % 3 == 0) {
                echo "*";
            } else {
                echo $i;
            }
        }
        ?>
    </body>
</html>

