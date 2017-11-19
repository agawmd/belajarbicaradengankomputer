<html>
    <body>
        <pre>
         *                                                 *
         *   Input :                                       *
         *   ------------------                            *
         *   quiz  = 10,                                   * 
         *   mid   = 70,                                   * 
         *   tugas = 40,                                   * 
         *   final = 88,                                   * 
         *   absen = 90                                    *
         *                                                 *
         *                                                 *
         *   Output:                                       *   keterangan:
         *   +-------+---------------+-----------+         *   ----------------------------------------------
         *   | NILAI | ANGKA | HURUF | STATUS    |         *   (       ANGKA  >= 80 ) ->  HURUF  =  'A'     -> STATUS = 'LULUS'
         *   + ------+-------+-------+-----------+         *   ( 80 >  ANGKA  >= 60 ) ->  HURUF  =  'B'     -> STATUS = 'BAGUS'
         *   | quiz  | 10    | E     | ERROR     |         *   ( 60 >  ANGKA  >= 40 ) ->  HURUF  =  'C'     -> STATUS = 'CUKUP'
         *   | mid   | 70    | B     | BAGUS     |         *   ( 40 >  ANGKA  >= 20 ) ->  HURUF  =  'D'     -> STATUS = 'PARAH'
         *   | tugas | 40    | C     | CUKUP     |         *   ( 20 >  ANGKA        ) ->  HURUF  =  'E'     -> STATUS = 'ERROR'
         *   | final | 88    | A     | LULUS     |         *   
         *   | absen | 90    | A     | LULUS     |         *         quiz + mid + tugas + final + absen
         *   +-------+-------+-------+-----------+         *   IP = ----------------------------------
         *   | IP    | 59.6  | D     | PARAH     |         *                        5
         *   +-------+-------+-------+-----------+         *
         *                                                 *
         *                                                 *
         *
         <hr>
        </pre>
        <!--   Tulis dibawah   -->
        <form action="03_seleksi_action.php" method="post">
            
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