<?php
/**
 * Put Your code here...
 */
$gen    = $_POST['g'];





?>

<html>
    <body>

        <!-- Put your code here... -->
        <?php
        for ($i=1; $i<=$gen; $i++) {
            if ($i % 2 == 0) {
                echo $i;
            }
        }
        ?>
    </body>
</html>

