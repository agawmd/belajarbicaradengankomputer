<?php
/**
 * Put Your code here...
 */
 
$fun = $_POST['f'];
$yes = $_POST['u'];

$damn = 0;

?>

<html>
    <body>

        <!-- Put your code here... -->
        
        <?php
        for ($i=1; $i<=$yes; $i++) {
            $hasilBagi = $i % $fun;
            echo "$hasilBagi ";
            if ($i < $yes) {
                echo " + ";
            }
            $damn = $damn + $hasilBagi;
        }   
        
        echo " = $damn";
        
        ?>
        
    </body>
</html>

