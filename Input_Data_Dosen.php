<?php
include "Komponen/Koneksi.php";

// menyimpan data kedalam variabel
$vnik_nidn = $_POST['Nik_Nidn'];
$vnamdos = $_POST['Nama_Dosen'];
$vjabfung = $_POST['Jab_Fung'];


// query SQL untuk insert data
$eksekusi = "INSERT INTO dosen (Nik_Nidn, Nama_Dosen, Jab_Fung) VALUE
('$vnik_nidn', '$vnamdos', '$vjabfung')";
mysqli_query($test, $eksekusi);

// mengalihkan ke halaman Dosen.php
header("location:Data Dosen.php");
?>