<html>
    <head>
        <title>Sign Up Form</title>
    </head>
    <body>
        <fieldset>
            <form action="processSignUp.php" method="post">
                <label for="na_awal">First Name :</label>
                <input type="text" name="na_awal" placeholder="First Name*"/>
                <label for="na_akhir">Last Name :</label>
                <input type="text" name="na_akhir" placeholder="Last Name*"/>
                <label for="email">
                    <input type="email" name="email" placeholder="Email Adress*"/>
                </label>
                <label for="pass">
                    <input type="password" name="pass" placeholder="Set Password*"/>
                </label>
                <input type="submit" name="daftar" value="Request"/>
            </form>
        </fieldset>
    </body>
</html>