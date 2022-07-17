<?php 
include "Komponen/header.php";
include "Komponen/sidebar.php";
include "Komponen/Koneksi.php";

$tampil="select * from matakuliah";
$eksekusi = mysqli_query ($test,"$tampil");

if (!$eksekusi) {
  die('SQL Error: ' . mysqli_error($test));
 } 
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Matakuliah</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Matakuliah</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Matakuliah</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Id Matakuliah</th>
                  <th>Nama Matakuliah</th>
                  <th>Action</th>
                </tr>
                </thead>
                <?php while ($data = mysqli_fetch_array($eksekusi)):?>
                <tbody>
                <tr>
                  <td><?php echo $data['Id_Matakuliah'] ?></td>
                  <td><?php echo $data['Nama_Matakuliah'] ?></td>
                  <td>
                          <a class="btn btn-info btn-sm" href="Edit Matakuliah.php?id=<?php echo $data['Id_Matakuliah']; ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="Delete Matakuliah.php?id=<?php echo $data['Id_Matakuliah']; ?>" onclick="return confirm('Are you Sure?')">
                              <i class="fas fa-trash">
                              </i>
                              Hapus
                          </a>
                      </td>
                </tr>
                </tbody>
                <?php endwhile; ?>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>

<?php
include "Komponen/footer.php";
mysqli_free_result($eksekusi); // untuk keamanan
mysqli_close($test); // untuk keamanan
?>