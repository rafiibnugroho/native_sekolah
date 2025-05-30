<?php
include ("koneksi.php");

$id_kelas=$_POST['id_kelas'];
$nama_kelas=$_POST['nama_kelas'];

mysqli_query($koneksi,"UPDATE kelas SET nama_kelas='$nama_kelas' WHERE  id_kelas='$id_kelas'" );
header("location: kelas.php");
?>