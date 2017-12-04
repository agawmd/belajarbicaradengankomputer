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
                    if ($j == 1 || $j == $a || $i == 1 || $i == $a) {
                        echo  "#";
                    } else {
                        echo  "-";
                    }
                }
                echo  "<br>";
            }
            ?></pre>
    </body>
</html>

