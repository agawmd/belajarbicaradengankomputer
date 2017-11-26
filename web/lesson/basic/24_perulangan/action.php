<?php
/**
 * Put Your code here...
 */

$o = $_POST['q'];
$l = 0;

?>

<html>
    <body>

        <!-- Put your code here... -->
        <?php
        for ($i=2; $i<=$o*2; $i+=2) {
            echo $i;
            if ($i < $o*2) {
                echo " + ";
            }
            $l = $l + $i;
        }
        
        echo "= $l";
        
        ?>
        
        
    </body>
</html>

