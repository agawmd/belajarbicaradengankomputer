<?php
/**
 * Put Your code here...
 */


$a = $_POST['a'];



?>

<html>
    <body>

        <!-- Put your code here... -->
        <?php
        for ($i=1; $i<=$a; $i++) {
            
            for ($j=1; $j<=$a; $j++) {
                if ($i % 2 == 1) {
                    echo "* ";
                } elseif ($i % 2 == 0) {
                    echo "#";
                }
            }
            echo "<br>";
        }
        ?>
    </body>
</html>

