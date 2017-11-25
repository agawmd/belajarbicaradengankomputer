<?php


$ab = $_POST['aa'];

$hiu = 0;



?>

<html>
    <body>

        <!-- Put your code here... -->
        <?php
        for ($i=1; $i<=$ab; $i++) {
            if ($i % 2 == 1) {
                echo $i;
            } elseif ($i < $ab) {
                echo " + ";
            }
        }
        ?>
    </body>
</html>

