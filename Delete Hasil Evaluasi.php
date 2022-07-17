<?php
include "Komponen/Koneksi.php";

if (isset($_GET['id'])) {
    $x = $_GET['id'];
    $sql = "DELETE FROM kuisioner WHERE Id_Kuisioner='$x'";
    $query = mysqli_query($test, $sql);
    
    if ($query) {
        header('Location: Data Hasil Evaluasi.php');
    } 
    else {
        die("gagal menghapus...");
    }
} 
else {
    die("akses dilarang...");
}
?>