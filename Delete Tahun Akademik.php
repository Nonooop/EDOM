<?php
include "Komponen/Koneksi.php";

if (isset($_GET['id'])) {
    $x = $_GET['id'];
    $sql = "DELETE FROM tahun_akademik WHERE Id_TA='$x'";
    $query = mysqli_query($test, $sql);
    
    if ($query) {
        header('Location: Data Tahun Akademik.php');
    } 
    else {
        die("gagal menghapus...");
    }
} 
else {
    die("akses dilarang...");
}
?>