<html>
    <body>
        <?php
            require_once '../sectionlib/section.php';
            section::printQuest(__DIR__);
        ?>
        <!--   Tulis dibawah   -->
        <form action="action.php" method="post">
            
            <label>
                Input Nilai Absen :
            </label>
            <input type="text" name="nAbsen"/><br><br>
            
            <label>
                Input Nilai Tugas :
            </label>
            <input type="text" name="nTugas"/><br><br>
            
            <label>
                Input Nilai Kuis :
            </label>
            <input type="text" name="nKuis"/><br><br>
            
            <label>
                Input Nilai MID :
            </label>
            <input type="text" name="nMid"/><br><br>

            <label>
                Input Nilai FINAL :
            </label>
            <input type="text" name="nFinal"/><br><br>
            
            
            <input type="submit" name="hasil" value="Kalkulasi"/>
            
        </form>


    </body>
</html>