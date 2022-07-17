<?php 
include "../EDOM/Komponen/Koneksi.php";

$tampil="select * from pertanyaan";
$eksekusi = mysqli_query ($test,"$tampil");

$ta="select * from tahun_akademik";
$eksekusiTa = mysqli_query ($test,"$ta");

$mat="select * from matakuliah";
$eksekusiMat = mysqli_query ($test,"$mat");

$dos="select * from dosen";
$eksekusiDos = mysqli_query ($test,"$dos");

$prod="select * from prodi";
$eksekusiProd = mysqli_query ($test,"$prod");

?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EDOM | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="Theme/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="Theme/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="Theme/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="Theme/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="Theme/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="Theme/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="Theme/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="Theme/plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="#" class="navbar-brand">
                    <span class="brand-text font-weight-light">EDOM</span>
                </a>
                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Home</a>
                        </li>
                    </ul>
                </div>


            </div>
        </nav>

        <section class="content">
            <center><img class="img-fluid" src="dist/img/Logo.png" width="350px" height="250px" position="center">
            </center>
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-body">
                        <p>Silahkan isi Formulir EDOM berikut ini dengan nyaman, jujur, dan terbuka. Identitas anda
                            tidak akan dicatat bersama formulir yang anda isi.<br>
                            Mohon diperhatikan bahwa setiap isian ( Radio Button ) harus diisi.
                            Penilaian dapat diisi dengan cara memilih kategori penilaian yang sudah tersedia antara
                            1 sampai dengan 6 ( enam ).<br>
                            1. <b>Sangat Tidak Sesuai,</b> bila kenyataan di lapang sangat tidak sesuai dengan komponen
                            yang dinilai.<br>
                            2. <b>Tidak Sesuai,</b> bila kenyataan di lapang tidak sesuai dengan komponen yang
                            dinilai.<br>
                            3. <b>Agak Tidak Sesuai,</b> bila kenyataan di lapang agak tidak sesuai dengan komponen yang
                            dinilai.<br>
                            4. <b>Agak Sesuai,</b> bila kenyataan di lapang agak sesuai dengan komponen yang
                            dinilai.<br>
                            5. <b>Sesuai,</b> bila kenyataan di lapang sesuai dengan komponen yang dinilai.<br>
                            6. <b>Sangat Sesuai,</b> bila kenyataan di lapang sangat sesuai dengan komponen yang
                            dinilai.
                            <br></p>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tahun Akademik</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected"></option>
                                        <?php while ($data = mysqli_fetch_array($eksekusiTa)):?>
                                        <option value="<?php echo $data['Thn_Akademik'] ?>" ></option>
                                            <?php endwhile; ?> 
                                    </select>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Nama Dosen</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected"></option>
                                        <?php while ($data = mysqli_fetch_array($eksekusiDos)):?>
                                        <option value="<?php echo $data['Nama_Dosen'] ?>" ></option>
                                            <?php endwhile; ?> 
                                    </select>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Program Studi</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected"></option>
                                        <?php while ($data = mysqli_fetch_array($eksekusiProd)):?>
                                        <option value="<?php echo $data['Nama_Prodi'] ?>" ></option>
                                            <?php endwhile; ?>
                                    </select>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Mengajar Matakuliah</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected"></option>
                                        <?php while ($data = mysqli_fetch_array($eksekusiMat)):?>
                                        <option value="<?php echo $data['Nama_Matakuliah'] ?>" ></option>
                                            <?php endwhile; ?> 
                                    </select>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <center><button type="submit" class="btn btn-primary">Submit</button></center>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Komponen Penilaian</th>
                                            <th>1</th>
                                            <th>2</th>
                                            <th>3</th>
                                            <th>4</th>
                                            <th>5</th>
                                            <th>6</th>
                                        </tr>
                                    </thead>
                                    <?php while ($data = mysqli_fetch_array($eksekusi)):?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $data['Pertanyaan'] ?></td>
                                            <td>
                                                <input type="radio" id="radioPrimary2" name="r1">
                                            </td>
                                            <td>
                                                <input type="radio" id="radioPrimary2" name="r1">
                                            </td>
                                            <td>
                                                <input type="radio" id="radioPrimary2" name="r1">
                                            </td>
                                            <td>
                                                <input type="radio" id="radioPrimary2" name="r1">
                                            </td>
                                            <td>
                                                <input type="radio" id="radioPrimary2" name="r1">
                                            </td>
                                            <td>
                                                <input type="radio" id="radioPrimary2" name="r1">
                                            </td>
                                        </tr>
                                        <?php endwhile; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        <div class="form-group">
                            <textarea id="inputDescription" class="form-control" rows="4"
                                placeholder="Masukan Kritik & Saran anda"></textarea>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button></le>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
    <!-- Main Footer -->
    <?php
include "Komponen/footer.php";
?>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
</body>

</html>