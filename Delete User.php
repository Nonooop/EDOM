<?php
include "Komponen/Koneksi.php";

if (isset($_GET['id'])) {
    $x = $_GET['id'];
    $sql = "DELETE FROM user WHERE Id_User='$x'";
    $query = mysqli_query($test, $sql);
    
    if ($query) {
        header('Location: Data User.php');
    } 
    else {
        die("gagal menghapus...");
    }
} 
else {
    die("akses dilarang...");
}
?>