<?php
/**
 * Put Your code here...
 */
$a = $_POST['a'];





?>

<html>
    <body>

        <!-- Put your code here... -->
        <pre><?php
            for ($i = 1; $i <= $a; $i++) {
                for ($j = 1; $j <= $a; $j++) {
                    if ($j == $a -$i + 1 || $i == $j || $i == $a || $i == 1 || $j == 1 || $j == $a) {
                        echo "*";
                    } else {
                        echo "-";
                    }
                }
               echo "<br>";
            }
            

            
            ?></pre>

    </body>
</html>

