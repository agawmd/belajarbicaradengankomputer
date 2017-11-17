<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once 'inc/head.php'; ?>
    </head>
    <body>
        <?php include("topbar.php"); ?>
        <div class="ch-container">
            <div class="row">

                <?php include_once "inc/leftmenu.php"; ?>

                <div id="content" class="col-lg-10 col-sm-10">

                    <?php
                    $hal = @$_GET['hal'];
                    if ($hal == 1) {
                        include("ui.php");
                    }
                    if ($hal == 2) {
                        include("table.php");
                    }
                    if ($hal == 3) {
                        include("form.php");
                    } else {
                        include("content.php");
                    }
                    ?>

                    
                    
                    
                </div><!--/#content.col-md-0-->
            </div><!--/fluid-row-->
            <hr>
            
            
            
            
            
            
            
            <?php include_once 'inc/footer.php ' ?>
        </div><!--/.fluid-container-->
    </body>
</html>
