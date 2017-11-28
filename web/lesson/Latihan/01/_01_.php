<?php
$a = $_POST['a'];
?>

<html>
    <body>
        <?php
        for ($i=0; $i<=$a; $i++) {
            if ($i % 3 == 1) {
                echo "$i ";
            }
        }
        ?>
    </body>
</html>