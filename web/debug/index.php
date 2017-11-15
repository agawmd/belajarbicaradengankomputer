<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post" action="action.php" target="bulesek">
            Nama: <input type="text" name="nama"/><br>
            Nilai: <input type="text" name="nilai"/><br>
            <hr>
            <input type="submit" name="persegi" value="buat persegi">
            <input type="submit" name="segitiga" value="buat segitiga">
            <input type="submit" name="segitiga_terbalik" value="buat segitiga terbalik">
        </form>
        <iframe name="bulesek" width="100%" height="300px"></iframe>
    </body>
</html>
