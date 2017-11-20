<html>
    <body>
        <!-- Quest section -->
        <?php
            require_once '../sectionlib/section.php';
            section::printQuest(__DIR__);
        ?>
        <!-- End of section -->



        <form action="action.php" method="post">
            <!--   Put your cede here   -->
            <label for="n">n : </label>
            <input type="text" name="n"/>
            <input type="submit" name="tampil" value="Cek"/>
        </form>

        
    </body>
</html>