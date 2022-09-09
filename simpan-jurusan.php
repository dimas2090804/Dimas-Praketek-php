<?php
include('koneksi.php');

$jurusan = $_POST['jurusan'];

$query = "INSERT INTO jurusan (jurusan) VALUES ('$jurusan')";

if ($connection->query($query)) {
    echo "<script>alert('data berhasil disimpan.'); window.location='jurusan.php';</script>";
} else {
    echo "Data gagal disimpan";
}
