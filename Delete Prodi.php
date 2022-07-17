<?php
include "Komponen/Koneksi.php";

if (isset($_GET['id'])) {
    $x = $_GET['id'];
    $sql = "DELETE FROM prodi WHERE Id_Prodi='$x'";
    $query = mysqli_query($test, $sql);
    
    if ($query) {
        header('Location: Data Program Studi.php');
    } 
    else {
        die("gagal menghapus...");
    }
} 
else {
    die("akses dilarang...");
}
?>