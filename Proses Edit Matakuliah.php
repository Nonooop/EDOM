<?php
include "Komponen/Koneksi.php";

// menyimpan data kedalam variabel
$vid = $_POST['Id_Matakuliah'];
$vnam = $_POST['Nama_Matakuliah'];



// query SQL untuk Update Data
$eksekusi = "UPDATE matakuliah SET Nama_Matakuliah='$vnam' WHERE Id_Matakuliah='$vid'";

$hasil = mysqli_query($test, $eksekusi);
if($hasil)  {
    header('location:Data Matakuliah.php');
} 
else {
    die('Gagal menyimpan perubahan...');
}
?>