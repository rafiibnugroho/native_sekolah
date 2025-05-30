<?php
include 'koneksi.php';

$id_kelas = $_POST['id_kelas'];
$nama_kelas = $_POST['nama_kelas'];

mysqli_query($koneksi,"INSERT INTO kelas values('$id_kelas','$nama_kelas')");
header('location: kelas.php');
?>