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
        </form>

        <iframe name='action-frame' width="100%" height="500px"></iframe>
    </body>
</html>