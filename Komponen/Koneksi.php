<?php
$lokasi='localhost';
$db='edom';
$user='root';
$pass='';

$test = mysqli_connect($lokasi,$user,$pass,$db);
if (!$test) {
    echo "Error: " . mysqli_connect_error();
exit(); }
/*
//echo 'Koneksi berhasil';

$tampil="select * from matakuliah";
$eksekusi = mysqli_query ($test,"$tampil");

while ($data = mysqli_fetch_array($eksekusi)){
    echo $data['Id_Matakuliah']."&nbsp"."&nbsp";
    echo $data['Nama_Matakuliah']."<br>";
}
*/

?>