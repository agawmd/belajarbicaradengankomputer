<html>
    <body>
        <pre>
         *                                                 *        keterangan :
         *   Input :                                       *        ----------------------------------------------
         *   ------------------                            *        Kacang  = 10.000 /kg      
         *   Kacang  = 5                                   *        Pisang  = 3.000  /tandan
         *   Pisang  = 2                                   *        Terong  = 2.000  /buah               
         *   Terong  = 3                                   *        Mentega = 5.000  /kg               
         *   Mentega = 4                                   *        Tepung  = 4.500  /kg               
         *   Tepung  = 1                                   *                       
         *                                                 *                       
         *                                                 *
         *   --------------------------------------------------------------------------------------------------------
         *
         *
         *   Output:                                                               
         *   +---------+------------------------------+----------------------------+                        
         *   | KET     | HARGA      | JUMLAH          | TOTAL                      |                        
         *   + --------+------------+-----------------+----------------------------+                 
         *   | Kacang  | 10.000     | 5               | 50000                      |                 
         *   | Pisang  | 3.000      | 2               | 6000                       |                 
         *   | Terong  | 2.000      | 3               | 6000                       |                 
         *   | Mentega | 5.000      | 4               | 20000                      |                 
         *   | Teping  | 4.500      | 1               | 4500                       |                 
         *   +---------+------------+-----------------+----------------------------+                 
         *   | TOTAL                | 15              | 86500                      |                 
         *   +----------------------+-----------------+----------------------------+                 
         *                                                                  
         *                                                                  
         *
         <hr>
        </pre>
        <!--   Tulis dibawah   -->
        Input<br>
        <form action="05_seleksi_action.php" method="post">
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
            
            <input type="submit" name="keranjang" value="Beli Ini"/>
        </form>
    </body>
</html>