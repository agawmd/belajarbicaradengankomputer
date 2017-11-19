<html>
    <body>
        <pre>
         *                                                 *        keterangan (TI):
         *   Input :                                       *        ----------------------------------------------
         *   ------------------                            *        (       ANGKA  >= 90 ) ->  HURUF  =  'A'     -> STATUS = 'LULUS'
         *   prodi (SI/TI) = SI                            *        ( 90 >  ANGKA  >= 70 ) ->  HURUF  =  'B'     -> STATUS = 'LULUS'
         *   quiz          = 10                            *        ( 70 >  ANGKA  >= 50 ) ->  HURUF  =  'C'     -> STATUS = 'CUKUP'
         *   mid           = 70                            *        ( 50 >  ANGKA  >= 30 ) ->  HURUF  =  'D'     -> STATUS = 'PARAH'
         *   tugas         = 40                            *        ( 30 >  ANGKA        ) ->  HURUF  =  'E'     -> STATUS = 'PARAH'
         *   final         = 88                            *        
         *   absen         = 90                            *              quiz + mid + tugas + final
         *                                                 *        IP = ----------------------------
         *   Output:                                       *                             4
         *   +-------+---------------+-----------+         *     
         *   | NILAI | ANGKA | HURUF | STATUS    |         *     
         *   + ------+-------+-------+-----------+         *        keterangan (SI):
         *   | quiz  | 10    | E     | ERROR     |         *        ----------------------------------------------
         *   | mid   | 70    | B     | BAGUS     |         *        (       ANGKA  >= 80 ) ->  HURUF  =  'A'     -> STATUS = 'LULUS'
         *   | tugas | 40    | C     | CUKUP     |         *        ( 80 >  ANGKA  >= 60 ) ->  HURUF  =  'B'     -> STATUS = 'BAGUS'
         *   | final | 88    | A     | LULUS     |         *        ( 60 >  ANGKA  >= 40 ) ->  HURUF  =  'C'     -> STATUS = 'CUKUP'
         *   | absen | 90    | A     | LULUS     |         *        ( 40 >  ANGKA  >= 20 ) ->  HURUF  =  'D'     -> STATUS = 'PARAH'
         *   +-------+-------+-------+-----------+         *        ( 20 >  ANGKA        ) ->  HURUF  =  'E'     -> STATUS = 'ERROR'
         *   | IP    | 59.6  | D     | PARAH     |         *        
         *   +-------+-------+-------+-----------+         *              quiz + mid + tugas + final + absen
         *                                                 *        IP = ----------------------------------
         *                                                 *                             5
         *
         <hr>
        </pre>
        <!--   Tulis dibawah   -->



    </body>
</html>