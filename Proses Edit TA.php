<?php
include "Komponen/Koneksi.php";

// menyimpan data kedalam variabel
$id = $_POST['Id_TA'];
$vthn = $_POST['Thn_Akademik'];
$vsem = $_POST['Semester'];


// query SQL untuk Update Data
$eksekusi = "UPDATE tahun_akademik SET Thn_Akademik='$vthn', Semester='$vsem' WHERE Id_TA='$vid'";

$hasil = mysqli_query($test, $eksekusi);
if($hasil)  {
    header('location:Data Tahun Akademik.php');
} 
else {
    die('Gagal menyimpan perubahan...');
}
?>