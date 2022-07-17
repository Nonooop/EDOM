<?php
include "Komponen/Koneksi.php";

// menyimpan data kedalam variabel
$vnik_nidn = $_POST['Nik_Nidn'];
$vnamdos = $_POST['Nama_Dosen'];
$vjabfung = $_POST['Jab_Fung'];


// query SQL untuk Update Data
$eksekusi = "UPDATE dosen SET Nama_Dosen='$vnamdos', Jab_Fung='$vjabfung' WHERE Nik_Nidn='$vnik_nidn'";

$hasil = mysqli_query($test, $eksekusi);
if($hasil)  {
    header('location:Data Dosen.php');
} 
else {
    die('Gagal menyimpan perubahan...');
}
?>