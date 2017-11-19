<html>
    <body>
        <pre>
         *                               *
         *   Input :                     *
         *   ------------------          *
         *   quiz  = 10,                 * 
         *   mid   = 70,                 * 
         *   tugas = 40,                 * 
         *   final = 88,                 * 
         *   absen = 90                  *
         *                               *
         *                               *
         *   Output:                     *   keterangan:
         *   +-------+---------------+   *   ----------------------------------------------
         *   | NILAI | ANGKA | HURUF |   *   (       ANGKA  >= 80 ) ->  HURUF  =  'A'
         *   + ------+-------+-------+   *   ( 80 >  ANGKA  >= 60 ) ->  HURUF  =  'B'
         *   | quiz  | 10    | E     |   *   ( 60 >  ANGKA  >= 40 ) ->  HURUF  =  'C'
         *   | mid   | 70    | B     |   *   ( 40 >  ANGKA  >= 20 ) ->  HURUF  =  'D'
         *   | tugas | 40    | C     |   *   ( 20 >  ANGKA        ) ->  HURUF  =  'E'
         *   | final | 88    | A     |   *   
         *   | absen | 90    | A     |   *         quiz + mid + tugas + final + absen
         *   +-------+-------+-------+   *   IP = ----------------------------------
         *   | IP    | 59.6  | D     |   *                        5
         *   +-------+-------+-------+   *
         *                               *
         *                               *
         *
         <hr>
        </pre>
        <!--   Tulis dibawah   -->
        
        <form action="02_seleksi_action.php" method="post">
            
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
            
            
            <input type="submit" name="kalkulasi" value="Kalkulasi"/>
            
        </form>





    </body>
</html>