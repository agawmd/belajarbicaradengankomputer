<?php
/**
 * Put Your code here...
 */
$en = $_POST['n'];
?>

<html>
    <body>

        <!-- Put your code here... -->
        <?php
            for ($i = 1; $i <= $en; $i++) {
                echo $i;
            }
        ?>
        <hr>
        <a href="index.php"/>Back
    </body>
</html>

