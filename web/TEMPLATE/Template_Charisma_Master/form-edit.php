<?php

include 'Config.php';

if (!isset($_GET['id'])) {
    header('Location: list-siswa.php');
}

$id     = $_GET['id'];

$sql    = "SELECT * FROM calon_siswa WHERE id=$id";

$query  = mysqli_query($db, $sql);
$siswa  = mysqli_fetch_array($query);

if (mysqli_num_rows($query) != 1) {
    die("Data tidak ditemukan..");
}
?>

<html>
    <head>
        <title>Formulir Edit Siswa | SMK Coding</title>
    </head>
    <body>
        <header>
            <h3>Formulir Edit Siswa</h3>
        </header>
        
        <form action="proses-edit.php" method="post">
            <fieldset>
                <input type="hidden" name="id" value="<?php echo $siswa['id']; ?>"/>
                
                <p>
                    <label for="nama">Nama :</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $siswa['nama'] ?>"/>
                </p>
                
                <p>
                    <label for="alamat">Alamat :</label>
                    <textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea>
                </p>
                
                <p>
                    <label for="jenis_kelamin">Jenis Kelamin :</label>
                    <?php $jk = $siswa['jenis_kelamin'] ?>
                    <label for="jenis_kelamin">
                        <input type="radio" name="jenis_kelamin" value="Laki-laki" <?php echo ($jk == 'Laki-laki') ? "checked" : ""?> >Bencong</input>
                        <input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo ($jk == 'Perempuan') ? "checked" : ""?> >ences</input>
                    </label>
                </p>
                
                <p>
                    <label for="agama">Agama :</label>
                    <?php $agama = $siswa['agama'] ?>
                    <select name="agama">
                        <option <?php echo ($agama == 'Islam') ? "selected" : ""?>>Islam</option>
                        <option <?php echo ($agama == 'Kristen') ? "selected" : ""?>>Kristen</option>
                        <option <?php echo ($agama == 'Hindu') ? "selected" : ""?>>Hindu</option>
                        <option <?php echo ($agama == 'Budha') ? "selected" : ""?>>Budha</option>
                        <option <?php echo ($agama == 'Atheis') ? "selected" : ""?>>Atheis</option>
                    </select>
                </p>
                
                <p>
                    <label for="sekolah_asal">Sekolah Asal :</label>
                    <input type="text" name="sekolah_asal" placeholder="Nama Sekolah" value="<?php echo $siswa['sekolah_asal'] ?>"/>
                </p>
                
                <p>
                    <input type="submit" name="simpan" value="Simpan"/>
                </p>
                
            </fieldset>
        </form>
    </body>
</html>