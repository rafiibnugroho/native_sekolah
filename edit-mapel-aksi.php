<?php
include ("koneksi.php");

$id_mapel=$_POST['id_mapel'];
$nama_mapel=$_POST['nama_mapel'];
$id_guru=$_POST['id_guru'];

mysqli_query($koneksi,"UPDATE mapel SET nama_mapel='$nama_mapel', id_guru='$id_guru' WHERE  id_mapel='$id_mapel'" );
header("location: mapel.php");
?>