<?php
include "Komponen/Koneksi.php";

// menyimpan data kedalam variabel
$vid = $_POST['Id_Prodi'];
$vnam = $_POST['Nama_Prodi'];


// query SQL untuk insert data
$eksekusi = "INSERT INTO prodi (Id_Prodi, Nama_Prodi) VALUE
('$vid', '$vnam')";
mysqli_query($test, $eksekusi);

// mengalihkan ke halaman Dosen.php
header("location:Data Program Studi.php");
?>