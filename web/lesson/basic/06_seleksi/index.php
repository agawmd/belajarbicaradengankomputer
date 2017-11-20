<html>
    <body>
        <?php
            require_once '../sectionlib/section.php';
            section::printQuest(__DIR__);
        ?>
        <!--   Tulis dibawah   -->
        Input<br>
        <form action="action.php" method="post">
            <label>Kacang   :</label>
            <input type="text" name="kacang" placeholder="Jumlah"/> Kg<br><br>
            <label>Pisang   :</label>
            <input type="text" name="pisang" placeholder="Jumlah"/> Tandan<br><br>
            <label>Terong   :</label>
            <input type="text" name="terong" placeholder="Jumlah"/> Buah<br><br>
            <label>Mentega   :</label>
            <input type="text" name="mentega" placeholder="Jumlah"/> Kg<br><br>
            <label>Tepung   :</label>
            <input type="text" name="tepung" placeholder="Jumlah"/> Kg
            
            <input type="submit" name="belanja" value="Beli Ini"/>
        </form>


    </body>
</html>