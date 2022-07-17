<?php
include "Komponen/Koneksi.php";

// menyimpan data kedalam variabel
$vid = $_POST['Id_Prodi'];
$vnam = $_POST['Nama_Prodi'];



// query SQL untuk Update Data
$eksekusi = "UPDATE Prodi SET Nama_Prodi='$vnam' WHERE Id_Prodi='$vid'";

$hasil = mysqli_query($test, $eksekusi);
if($hasil)  {
    header('location:Data Program Studi.php');
} 
else {
    die('Gagal menyimpan perubahan...');
}
?>