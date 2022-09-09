<?php


include('koneksi.php');

$id_jurusan     = $_POST['id_jurusan'];
$jurusan   = $_POST['jurusan'];


$query = "UPDATE jurusan SET jurusan = '$jurusan' WHERE id_jurusan = '$id_jurusan'";


if ($connection->query($query)) {

    header("location: jurusan.php");
} else {

    echo "Data Gagal Diupate!";
}
