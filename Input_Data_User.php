<?php
include "Komponen/Koneksi.php";

// menyimpan data kedalam variabel
$vid = $_POST['Id_User'];
$vnam = $_POST['Username'];
$vpas = $_POST['Password'];
$vnik = $_POST['Nik_Nidn'];


// query SQL untuk insert data
$eksekusi = "INSERT INTO user (Id_User, Username, Password, Nik_Nidn) VALUE
('$vid', '$vnam', '$vpas', '$vnik')";
mysqli_query($test, $eksekusi);

// mengalihkan ke halaman Dosen.php
header("location:Index.php");
?>