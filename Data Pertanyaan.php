<?php 
include "Komponen/header.php";
include "Komponen/sidebar.php";
include "Komponen/Koneksi.php";

$tampil="select * from pertanyaan";
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
          <h1>Data Pertanyaan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Pertanyaan</li>
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
                <h3 class="card-title">Data Pertanyaan Evaluasi Dosen oleh Mahasiswa</h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID Pertanyaan</th>
                      <th>Pertanyaan</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <?php while ($data = mysqli_fetch_array($eksekusi)):?>
                <tbody>
                    <tr>
                    <td><?php echo $data['Id_Pertanyaan'] ?></td>
                    <td><?php echo $data['Pertanyaan'] ?></td>
                    <td>
                          <a class="btn btn-info btn-sm" href="Edit Pertanyaan.php?id=<?php echo $data['Id_Pertanyaan']; ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="Delete Pertanyaan.php?id=<?php echo $data['Id_Pertanyaan']; ?>" onclick="return confirm('Are you Sure?')">
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
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
include "Komponen/footer.php";
mysqli_free_result($eksekusi); // untuk keamanan
mysqli_close($test); // untuk keamanan
?>