<?php
include "Komponen/Koneksi.php";

// menyimpan data kedalam variabel
$vid = $_POST['Id_Pertanyaan'];
$vnam = $_POST['Pertanyaan'];



// query SQL untuk Update Data
$eksekusi = "UPDATE pertanyaan SET Pertanyaan='$vnam' WHERE Id_Pertanyaan='$vid'";

$hasil = mysqli_query($test, $eksekusi);
if($hasil)  {
    header('location:Data Pertanyaan.php');
} 
else {
    die('Gagal menyimpan perubahan...');
}
?>