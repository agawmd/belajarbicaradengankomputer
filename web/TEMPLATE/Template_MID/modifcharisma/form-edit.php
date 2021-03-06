<?php
include 'Config.php';

if (!isset($_GET['id'])) {
    header('Location: table.php');
}

$id = $_GET['id'];
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_array($query);

if (mysqli_num_rows($query) != 1) {
    die("Data tidak ditemukan..");
}
$jk= $siswa['jenis_kelamin'];
$agama = $siswa['agama'];

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once 'inc/head.php'; ?>
    </head>
    <body>
        <?php include("topbar.php"); ?>
        <div class="ch-container">
            <div class="row">
                
                <div id="content" class="col-lg-10 col-sm-10">



                    <div class="row">
                        <div class="box col-md-12">
                            <div class="box-inner">
                                <div class="box-header well" data-original-title="">
                                    <h2><i class="glyphicon glyphicon-edit"></i> Formulir Pendaftaran Mahasiswa</h2>

                                    <div class="box-icon">
                                        <a href="#" class="btn btn-setting btn-round btn-default"><i
                                                class="glyphicon glyphicon-cog"></i></a>
                                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                                class="glyphicon glyphicon-chevron-up"></i></a>
                                        <a href="#" class="btn btn-close btn-round btn-default"><i
                                                class="glyphicon glyphicon-remove"></i></a>
                                    </div>
                                </div>
                                <div class="box-content">
                                    <form role="form" action="proses-pendaftaran.php" method="post">                  
                                        <input type="hidden" name="id" value="<?php echo $siswa['id']; ?>"/>
                                        <div class="form-group">
                                            <label for="nama">Nama :</label>
                                            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap" value="<?php echo $siswa['nama'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" name="alamat" class="form-control" id="exampleInputPassword1" placeholder="Alamat" value="<?php echo $siswa['alamat'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="jenis_kelamin">Jenis Kelamin :</label>
                                        </div><br>
                                        <div class="form-grup">
                                            <label><input type="radio" class="form-control" id="exampleInputPassword1" name="jenis_kelamin" value="Laki-laki" <?php echo ($jk == 'Laki-laki') ? "checked" : "" ?> >Laki-Laki</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <label><input type="radio" class="form-control" id="exampleInputPassword1" name="jenis_kelamin" value="Perempuan" <?php echo ($jk == 'Perempuan') ? "checked" : "" ?> >Perempuan</label>                     
                                        </div><br>

                                        <div class="form-grup">
                                            <label for="agama">Agama :</label>
                                            <select class="form-control" name="agama">
                                                <option <?php echo ($agama == 'Islam') ? "selected" : "" ?>>Islam</option>
                                                <option <?php echo ($agama == 'Kristen') ? "selected" : "" ?>>Kristen</option>
                                                <option <?php echo ($agama == 'Hindu') ? "selected" : "" ?>>Hindu</option>
                                                <option <?php echo ($agama == 'Budha') ? "selected" : "" ?>>Budha</option>
                                                <option <?php echo ($agama == 'Atheis') ? "selected" : "" ?>>Atheis</option>
                                            </select>
                                        </div><br>

                                        <div class="form-grup">
                                            <label for="sekolah_asal">Sekolah Asal :</label>
                                            <input type="text" name="sekolah_asal" class="form-control" placeholder="Asal Sekolah" value="<?php echo $siswa['sekolah_asal'] ?>"/>
                                        </div><br>
                                        <button type="submit" name="daftar" class="btn btn-default" >Simpan</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div><!--/row-->



                </div><!--/#content.col-md-0-->
            </div><!--/fluid-row-->
            <hr>
            <?php include_once 'inc/footer.php' ?>
        </div><!--/.fluid-container-->
    </body>
</html>
