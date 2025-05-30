<?php
include 'koneksi.php';

$id_guru = $_POST['id_guru'];
$nama_guru = $_POST['nama_guru'];
$alamat = $_POST['alamat'];
$gender = $_POST['gender'];
$tanggal = $_POST['tanggal'];
$telp =$_POST['telp'];

mysqli_query($koneksi,"INSERT INTO guru2 values('$id_guru','$nama_guru','$alamat','$gender','$tanggal','$telp')");
header('location: guru2.php');
?>