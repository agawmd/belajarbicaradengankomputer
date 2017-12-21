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
                    if ( $i == $j || $i === 1 ||$i == $a || $j == 1 || $j == $a) {
                        echo "*";
                    } else {
                        echo "-";
                    }
                    //  perhatikan apa yang berubah ie
                    //  bukan cara yang benar ini
                    //  bagaimana klw 100 ?? 1000 ??? 10000000000 ?????????
                    //echo "(I=$i,J=$j) ";
                    // terima kasih
                    // maaf, hampir ka ketiduran di meja
                    
                    
                    
                    
                    
                    // pake itu otak .
                    /**
                     * makanny adisuruh perhatikan ya perhatikan anjing
                     * apa mau ko sombongkan setan
                     * tidak ada
                     * makannya perhatikan anjing
                     * iya
                     * 
                     */
                }
                echo "<br>";
            }
            ?></pre>
    </body>
</html>

