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
                                        <div class="form-group">
                                            <label for="nama">Nama :</label>
                                            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap">
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" name="alamat" class="form-control" id="exampleInputPassword1" placeholder="Alamat">
                                        </div>
                                        <div class="form-group">
                                            <label for="jenis_kelamin">Jenis Kelamin :</label>
                                        </div><br>
                                        <div class="form-grup">
                                            <label><input type="radio" class="form-control" id="exampleInputPassword1" name="jenis_kelamin" value="Laki-laki">Laki-Laki</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <label><input type="radio" class="form-control" id="exampleInputPassword1" name="jenis_kelamin" value="Perempuan">Perempuan</label>                     
                                        </div><br>

                                        <div class="form-grup">
                                            <label for="agama">Agama :</label>
                                            <select class="form-control" name="agama">
                                                <option>Islam</option>
                                                <option>Kristen</option>
                                                <option>Hindu</option>
                                                <option>Budha</option>
                                                <option>Atheis</option>
                                            </select>
                                        </div><br>

                                        <div class="form-grup">
                                            <label for="sekolah_asal">Sekolah Asal :</label>
                                            <input type="text" name="sekolah_asal" class="form-control" placeholder="Asal Sekolah"/>
                                        </div><br>
                                        <button type="submit" name="daftar" class="btn btn-default" >Submit</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div><!--/row-->



                </div><!--/#content.col-md-0-->
            </div><!--/fluid-row-->
            <hr>
            <?php include_once 'inc/footer.php ' ?>
        </div><!--/.fluid-container-->
    </body>
</html>
