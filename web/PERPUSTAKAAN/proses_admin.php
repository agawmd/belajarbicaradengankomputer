<?php
	include './Config.php';

?>

<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Perpustakaan Online STMIK KHARISMA MAKASSAR</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />
        <link rel="stylesheet" href="assets/css/roboto-webfont.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
        
    <body>
        
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <!-- Sections -->
        <section id="social" class="social">
            <div class="container">
                <!-- Example row of columns -->
                <div class="row">
                    <div class="social-wrapper">
                        <div class="col-md-6">
                            <div class="social-icon">
                                <a href="https://web.facebook.com/stmikkharismamks/" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="https://plus.google.com/u/0/111034164759581360730" target="_blank"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="social-contact">
                                <a href="#"><i class="fa fa-phone"></i>+411 871-555</a>
                                <a href="#"><i class="fa fa-envelope"></i>stmik@kharisma.ac.id</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /container -->       
        </section>


                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">

                        <li class="login"><a href="keluar.php">Log Out</a></li>
                        
                    </ul>

                </div><!-- /.navbar-collapse -->
        
        <div class="main_contact whitebackground">
            <div class="head_title text-center">
                <?php


                        $username	= $_POST['username'];
                        $password	= $_POST['password'];


                        $username	= stripcslashes($username);
                        $password	= stripcslashes($password);
                        $username	= mysqli_real_escape_string($dbase, $_POST['username']);
                        $password	= mysqli_real_escape_string($dbase, $_POST['password']);

                        mysqli_select_db($dbase,"tb_admin");

                        $result         = mysqli_query($dbase, "SELECT * FROM tb_admin where username = '$username' and password = '$password'")
                                          or die("Failed to query database ...".  mysqli_error());
                        $row            = mysqli_fetch_array($result);

                        if ($row['username'] == $username && $row['password'] == $password) {
                            echo "<br>";
                            echo "Login Success ! Welcome ".$row['username'];
                        } else {
                            echo "Failed to login ! ";
                        }

                ?>
            </div>
            
        </div>
                
                
                <div class="contact_content">
                    <div class="col-md-6">
                        <div class="single_left_contact">
                            <p></p>
                        </div>
                    </div>                    
                </div>
        
        <div class="scrollup">
                <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>


        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/modernizr.js"></script>
        <script src="assets/js/main.js"></script>
        
        
    </body>
</html>        