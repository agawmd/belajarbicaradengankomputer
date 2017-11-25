<html>
    <body>
        <!-- Quest section -->
        <?php
            require_once '../sectionlib/section.php';
            section::printQuest(__DIR__);
        ?>
        <!-- End of section -->



        <form action="action.php" method="post" target='action-frame'>
            <!--   Put your cede here   -->
            <label>t = </label>
            <input type="text" name="f"/><br><br>
            <label>n = </label>
            <input type="text" name="u"/>
            
            <input type="submit" value="AIR"/>
        </form>

        <iframe name='action-frame' width="100%" height="500px"></iframe>
    </body>
</html>