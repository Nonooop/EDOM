<?php 
include "Komponen/header.php";
include "Komponen/sidebar.php";
include "Komponen/Koneksi.php";

$tampil="select * from user WHERE Id_User='USR001'";
$eksekusi = mysqli_query ($test,"$tampil");
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profil Akun</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Profil Akun</li>
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
                <div class="col-md-7">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Update Profil</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                        <?php while ($data = mysqli_fetch_array($eksekusi)):?>
                            <div class="card-body">
                                <table class="table table-hover text-nowrap">
                                    
                                    <tbody>
                                        <tr>
                                            <th>Id User</th>
                                            <td><?php echo $data['Id_User']?></td>
                                        </tr>
                                        <tr>
                                            <th>Username</th>
                                            <td><?php echo $data['Username'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Password</th>
                                            <td><?php echo $data['Password'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>NIK/NIDN</th>
                                            <td><?php echo $data['Nik_Nidn'] ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                            <a class="btn btn-info btn-sm" href="Edit User.php?id=<?php echo $data['Id_User']; ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              UPDATE
                          </a>
                            </div>
                            <?php endwhile; ?>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                
                <!-- /.card -->
            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<?php
include "Komponen/footer.php";
mysqli_free_result($eksekusi); // untuk keamanan
mysqli_close($test); // untuk keamanan
?>