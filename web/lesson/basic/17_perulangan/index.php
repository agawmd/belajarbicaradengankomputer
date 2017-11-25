<html>
    <body>
        <!-- Quest section -->
        <?php
        require_once '../sectionlib/section.php';
        section::printQuest(__DIR__);
        ?>
        <!-- End of section -->


        <form action="action.php" method="post" target='action-frame'>
            <label>n = </label>
            <input type="text" name="aa"/>
            <input type="submit" name="ini" value="Check"/>
        </form>

        <iframe name='action-frame' width="100%" height="500px"></iframe>   
</html>