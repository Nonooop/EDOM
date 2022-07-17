<?php
include "Komponen/Koneksi.php";

if (isset($_GET['id'])) {
    $x = $_GET['id'];
    $sql = "DELETE FROM pertanyaan WHERE Id_Pertanyaan='$x'";
    $query = mysqli_query($test, $sql);
    
    if ($query) {
        header('Location: Data Pertanyaan.php');
    } 
    else {
        die("gagal menghapus...");
    }
} 
else {
    die("akses dilarang...");
}
?>