<?php 
include "Komponen/header.php";
include "Komponen/sidebar.php";
include "Komponen/Koneksi.php";

$query = "SELECT max(Id_TA) as maxKode FROM tahun_akademik";
$hasil = mysqli_query($test, $query);
$data  = mysqli_fetch_array($hasil);
$Id_TA = $data['maxKode'];

$noUrut = (int) substr($Id_TA, 3, 3);
$noUrut++;
$char = "T";
$newID = $char . sprintf("%03s", $noUrut);
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
                        <form id="quickForm" method="post" action="Input_Data_TA.php">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Id Tahun Akademik</label>
                                    <input class="form-control" type="text" name="Id_TA" value="<?php echo $newID; ?>"></div>
                                <div class="form-group">
                                    <label>Tahun Akademik</label>
                                    <input class="form-control" type="text" name="Thn_Akademik"></div>
                                    <div class="form-group">
                                    <label>Semester</label>
                                    <input class="form-control" type="text" name="Semester"></div>
                            </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
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