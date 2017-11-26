<?php
/**
 * Put Your code here...
 */

$x = $_POST['q'];
$l = 0;

?>

<html>
    <body>

        <!-- Put your code here... -->
        <?php
            if ($x % 2 == 0) {
                echo "$x Bukan Bilangan Prima";
            } else {
                echo "$x Adalah Bilangan Prima";
            }
        ?>
        
        
    </body>
</html>

