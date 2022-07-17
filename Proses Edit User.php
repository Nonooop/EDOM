<?php
include "Komponen/Koneksi.php";

// menyimpan data kedalam variabel
$vid = $_POST['Id_User'];
$vus = $_POST['Username'];
$vps = $_POST['Password'];
$vni = $_POST['Nik_Nidn'];


// query SQL untuk Update Data
$eksekusi = "UPDATE user SET Username='$vus', Password='$vps', Nik_Nidn='$vni' WHERE Id_User='$vid'";

$hasil = mysqli_query($test, $eksekusi);
if($hasil)  {
    header('location:profil.php');
} 
else {
    die('Gagal menyimpan perubahan...');
}
?>