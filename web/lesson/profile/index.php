<?php
    require_once 'class/Bio.php';
?>
<html>
    <body>

        <table border="1" cellpadding="10">
            <tr>
            <th>nik</th>
            <th>name</th>
            <th>dob</th>
            <th>pob</th>
            <th>address</th>
            <th>height</th>
            <th>weight</th>
            </tr>
            <?php
            $bio = new Bio();
            
            $data = $bio->getData();
            
            while($v = mysqli_fetch_array($data)) {
                echo "
                    <tr>
                        <th>".$v["nik"]."</th>
                        <th>".$v["name"]."</th>
                        <th>".$v["dob"]."</th>
                        <th>".$v["pob"]."</th>
                        <th>".$v["address"]."</th>
                        <th>".$v["height"]."</th>
                        <th>".$v["weight"]."</th>
                    </tr>
                ";
            }
            ?>
        </table>
    </body>    
</html>
