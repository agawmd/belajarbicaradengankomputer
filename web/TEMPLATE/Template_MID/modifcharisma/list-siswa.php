<?php
    include 'Config.php';
?>
<html>
    <head>
        <title>Pendaftaran Siswa Baru | SMK Coding</title>
    </head>
    <body>
        <header>
            <h3>Siswa yang sudah mendaftar</h3>
        </header>
        
        <nav>
            <a href="form-daftar.php"/>[+] Tambah Baru
        </nav>
        <br>
        
        <table border="1" cellpadding="5">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>ALAMAT</th>
                    <th>JENIS KELAMIN</th>
                    <th>AGAMA</th>
                    <th>SEKOLAH ASAL</th>
                    <th>TINDAKAN</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql    = "SELECT * FROM calon_siswa";
                    $query  = mysqli_query($db, $sql);
                    
                    while ($siswa   = mysqli_fetch_array($query)) {
                        echo "<tr>";
                        
                        echo "<td>".$siswa['id']."</td>";
                        echo "<td>".$siswa['nama']."</td>";
                        echo "<td>".$siswa['alamat']."</td>";
                        echo "<td>".$siswa['jenis_kelamin']."</td>";
                        echo "<td>".$siswa['agama']."</td>";
                        echo "<td>".$siswa['sekolah_asal']."</td>";
                        
                        echo "<td>";
                        echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
                        echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>  ";
                        echo "</td>";
                        
                        echo "</tr>";                        
                    }                   
                    
                ?>
            </tbody>
        </table>
        
        <p>Total : <?php echo mysqli_num_rows($query)?></p>
    </body>
</html>