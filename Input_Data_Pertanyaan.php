<?php
include "Komponen/Koneksi.php";

// menyimpan data kedalam variabel
$idpert = $_POST['Id_Pertanyaan'];
$pertanyaan = $_POST['Pertanyaan'];


// query SQL untuk insert data
$eksekusi = "INSERT INTO pertanyaan (Id_Pertanyaan, Pertanyaan) VALUE
('$idprt', '$pertanyaan')";
mysqli_query($test, $eksekusi);

// mengalihkan ke halaman Dosen.php
header("location:Data Pertanyaan.php");
?>