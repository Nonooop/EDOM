<?php 
include "Komponen/header.php";
include "Komponen/sidebar.php";
include "Komponen/Koneksi.php";

$x = $_GET['id'];
$data = mysqli_query($test, "select * from user where Id_User='$x'");
$set = mysqli_fetch_array($data);

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Update</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form Update</li>
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
                <h3 class="card-title">Masukan Data Baru</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="Proses Edit User.php" id="quickForm" >
                <div class="card-body">
                  <div class="form-group">
                    <label>Id User</label>
                    <input class="form-control" type="text" name="Nik_Nidn" value="<?php echo $set['Id_User']?>"></div>
                    <div class="form-group">
                    <label>Username</label>
                    <input class="form-control" type="text" name="Nama_Dosen" value="<?php echo $set['Username']?>"></div>
                    <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="text" name="Jab_Fung" value="<?php echo $set['Password']?>"></div>
                    <label>NIK/NIDN</label>
                    <input class="form-control" type="text" name="Jab_Fung" value="<?php echo $set['Nik_Nidn']?>"></div>
                  </div>
                  <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
                </div>
                
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include "Komponen/footer.php";
