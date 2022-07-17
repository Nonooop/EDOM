<?php
include "Komponen/Koneksi.php";

if (isset($_GET['id'])) {
    $x = $_GET['id'];
    $sql = "DELETE FROM matakuliah WHERE Id_Matakuliah='$x'";
    $query = mysqli_query($test, $sql);
    
    if ($query) {
        header('Location: Data Matakuliah.php');
    } 
    else {
        die("gagal menghapus...");
    }
} 
else {
    die("akses dilarang...");
}
?>