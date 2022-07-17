<?php
include "Komponen/Koneksi.php";

// menyimpan data kedalam variabel
$idta = $_POST['Id_TA'];
$ta = $_POST['Thn_Akademik'];
$sem = $_POST['Semester'];


// query SQL untuk insert data
$eksekusi = "INSERT INTO tahun_akademik (Id_TA, Thn_Akademik, Semester) VALUE
('$idta', '$ta', '$sem')";
mysqli_query($test, $eksekusi);

// mengalihkan ke halaman Dosen.php
header("location:Data Tahun Akademik.php");
?>