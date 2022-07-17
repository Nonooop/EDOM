<?php
include "Komponen/Koneksi.php";

// menyimpan data kedalam variabel
$vidmat = $_POST['Id_Matakuliah'];
$vmatkul = $_POST['Nama_Matakuliah'];


// query SQL untuk insert data
$eksekusi = "INSERT INTO matakuliah (Id_Matakuliah, Nama_Matakuliah) VALUE
('$vidmat', '$vmatkul')";
mysqli_query($test, $eksekusi);

// mengalihkan ke halaman Dosen.php
header("location:Data Matakuliah.php");
?>