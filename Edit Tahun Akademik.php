<?php 
include "Komponen/header.php";
include "Komponen/sidebar.php";
include "Komponen/Koneksi.php";

$x = $_GET['id'];
$data = mysqli_query($test, "select * from tahun_akademik where Id_TA='$x'");
$set = mysqli_fetch_array($data);
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Tahun Akademik</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Form Tahun Akademik</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Masukan Data Tahun Akademik</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="quickForm" method="post" action="Proses Edit TA.php">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Id Tahun Akademik</label>
                                    <input class="form-control" type="text" name="Id_TA" value="<?php echo $set['Id_TA']?>"></div>
                                <div class="form-group">
                                    <label>Tahun Akademik</label>
                                    <input class="form-control" type="text" name="Thn_Akademik" value="<?php echo $set['Thn_Akademik']?>"></div>
                                    <div class="form-group">
                                    <label>Semester</label>
                                    <input class="form-control" type="text" name="Semester" value="<?php echo $set['Semester']?>"></div>
                            </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">

            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include "Komponen/footer.php";