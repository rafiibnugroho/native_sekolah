<?php
include 'koneksi.php';

$id_mapel = $_POST['id_mapel'];
$nama_mapel = $_POST['nama_mapel'];
$id_guru = $_POST['id_guru'];

mysqli_query($koneksi,"INSERT INTO mapel values('$id_mapel','$nama_mapel','$id_guru')");
header('location: mapel.php');
?>