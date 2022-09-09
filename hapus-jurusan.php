<?php
 
include('koneksi.php');
 
//get id
$id = $_GET['id'];
 
$query = "DELETE FROM jurusan WHERE id_jurusan = '$id'";
 
if($connection->query($query)) {
    echo "<script>alert('data berhasil dihapus.');window.location='jurusan.php';</script>";
//    header("location: jurusan.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}
 
?>
