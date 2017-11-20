 <html>
     <body>
        <?php
            require_once '../sectionlib/section.php';
            section::printQuest(__DIR__);
        ?>
         <!--   Tulis dibawah   -->
         
         <form action="action.php" method="post">
            Masukkan Input :
            <input type="text" name="nilai"/>
            <input type="submit" name="hasil" value="Hitung"/>
         </form>
         
         
         
         
         
         
         
         
     </body>
 </html>

