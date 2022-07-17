<?php
include "Komponen/Koneksi.php";

if (isset($_GET['id'])) {
    $x = $_GET['id'];
    $sql = "DELETE FROM dosen WHERE Nik_Nidn='$x'";
    $query = mysqli_query($test, $sql);
    
    if ($query) {
        header('Location: Data Dosen.php');
    } 
    else {
        die("gagal menghapus...");
    }
} 
else {
    die("akses dilarang...");
}
?>