/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

<html>
    
<head>
    <title>Pendaftaran Siswa Baru</title>
</head>

<body>
    <header>
        <h3>Pendaftaran Siswa Baru</h3>
        <h1>STMIK KHARISMA MAKASSAR</h1>
    </header>
    
    <h4>Menu</h4>
    <nav>
        <ul>
            <ul><a href="form-daftar.php">Daftar Baru</a></ul>
            <li><a href="list-siswa.php">Pendaftaran</a></li>
        </ul>
    </nav>
    
    <?php if (isset($_GET['status'])):?>
    <p>
        <?php
            if ($_GET['status'] == 'status') {
                echo "Pendaftaran siswa baru berhasil !";
            } else {
                echo "Pendaftaran gagal...";
            }
        ?>
    </p>
    
    <?php endif;?>
    
</body>

</html>
