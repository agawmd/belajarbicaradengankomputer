<?php include 'Config.php';?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="processSignUp.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
                <label for="nama_awal">
                
                </label>
                <input type="text" name="na_awal" placeholder="First Name*" />
            </div>
        
            <div class="field-wrap">
                <label for="nama_akhir">
                
                </label>
                <input type="text" name="na_akhir" placeholder="Last Name"/>
            </div>
          </div>

          <div class="field-wrap">
              <label for="email">
              
              </label>
              <input type="email" name="email" placeholder="Email Address*"/>
          </div>
          
          <div class="field-wrap">
              <label for="pass">
              
              </label>
              <input type="password" name="pass" placeholder="Set A Password*"/>
          </div>
          
              <button type="submit" class="button button-block" name="daftar"/>Get Started</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="/" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
