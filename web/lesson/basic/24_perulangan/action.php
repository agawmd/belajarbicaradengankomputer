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
        if ($o % 2 == 1) {
            for ($i=2.5; $i<=$o*2.5; $i+=2.5) {
                echo "$i ";
            }
        } elseif ($o == 2) {
            for ($i=0.5; $i<=$o; $i+=1.5) {
                echo "$i ";
            }
        } elseif ($o % 4 == 0) {
            for ($i=4; $i<=$o*4; $i+=4) {
                echo "$i ";
            }
        }
        
               
        ?>
        
        
    </body>
</html>

