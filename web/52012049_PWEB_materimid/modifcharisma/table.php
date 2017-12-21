<!DOCTYPE html>
<html lang="en">
    <head>
        
    </head>
    <body>
        <div class="ch-container">
            <div class="row">
                <div id="content" class="col-lg-10 col-sm-10">




                    <?php include("Config.php"); ?>
                    <div>
                        <ul class="breadcrumb">
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">Tables</a>
                            </li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="box col-md-12">
                            <div class="box-inner">
                                <div class="box-header well" data-original-title="">
                                    <h2><i class="glyphicon glyphicon-user"></i> Daftar Mahasiswa</h2>

                                    <div class="box-icon">
                                        <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
                                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                                class="glyphicon glyphicon-chevron-up"></i></a>
                                        <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
                                    </div>
                                </div>
                                <div class="box-content">
                                    
                                    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>Agama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Asal Sekolah</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "SELECT * FROM calon_siswa";
                                            $query = mysqli_query($db, $sql);

                                            while ($siswa = mysqli_fetch_array($query)) {
                                                ?>
                                                <tr>
                                                    <td class="center"><?php echo $siswa['id']; ?></td>
                                                    <td class="center"><?php echo $siswa['nama']; ?></td>
                                                    <td class="center"><?php echo $siswa['alamat']; ?></td>
                                                    <td class="center"><?php echo $siswa['agama']; ?></td>
                                                    <td class="center">
                                                        <span class="label-success label label-default"><?php echo $siswa['jenis_kelamin']; ?></span>
                                                    </td>
                                                    <td class="center">
                                                        <?php echo $siswa['sekolah_asal']?>
                                                    </td>

                                                    <td class="center">
                                                        <a class="btn btn-info" href="<?php echo 'form-edit.php?id=' . $siswa['id']; ?>">
                                                            <i class="glyphicon glyphicon-edit icon-white"></i>
                                                            Edit
                                                        </a>
                                                        <a class="btn btn-danger" href="<?php echo 'hapus.php?id=' . $siswa['id']; ?>">
                                                            <i class="glyphicon glyphicon-trash icon-white"></i>
                                                            Delete
                                                        </a>
                                                    </td>

                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div><!--/row-->




                </div><!--/#content.col-md-0-->
            </div><!--/fluid-row-->
            <hr>
        </div><!--/.fluid-container-->
    </body>
</html>
