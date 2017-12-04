<?php
/**
 * Put Your code here...
 */
$a = $_POST['a'];

$out = '';
for ($i = 1; $i <= $a; $i++) {
    for ($j = 1; $j <= $a; $j++) {
        if ($j < $i) {
            $out .= "kerjakan mi";
        } else {
            $out .= "*";
        }
    }
    $out .= "<br>";
}
?>
<html>
    <body>

        <!-- Put your code here... -->
        <h3>No PRE</h3>
        <?php echo $out; ?>
        <h3>PRE</h3>
        <pre><?php echo $out; ?></pre>

    </body>
</html>

