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
                    if (
                            $j == 1 || 
                            $j == 2 && $i == 2 || 
                            $j == 3 && $i == 3 || 
                            $j == 4 && $i == 4 || 
                            $i == $a || 
                            $i == 1 || 
                            $j == $a || 
                            $j == 5 && $i == 5 || 
                            $j == 6 && $i == 6 || 
                            $j == 7 && $i == 7 || 
                            $j == 8 && $i == 8 || 
                            $j == 9 && $i == 9 || 
                            $j == 10 && $i == 10 || 
                            $j == 11 && $i == 11 || 
                            $j == 12 && $i == 12 || 
                            $j == 13 && $i == 13 || 
                            $j == 14 && $i == 14 || 
                            $j == 15 && $i == 15 || 
                            $j == 16 && $i == 16 || 
                            $j == 17 && $i == 17 || 
                            $j == 18 && $i == 18 || 
                            $j == 19 && $i == 19 || 
                            $j == 20 && $i == 20  ) {
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

