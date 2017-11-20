<?php
/**
 * Put Your code here...
 */
$gan = $_POST['ganjil'];
?>

<html>
    <body>

        <!-- Put your code here... -->
        <?php
            for ($i = 1; $i <= $gan; $i++) {
                if ($i % 2 == 1) {
                    echo $i;
                }
            }
        ?>
    </body>
</html>

