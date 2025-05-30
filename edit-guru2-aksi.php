<?php
include ("koneksi.php");

$id_guru=$_POST['id_guru'];
$nama=$_POST['nama_guru'];
$alamat=$_POST['alamat'];
$gender=$_POST['gender'];
$ttl=$_POST['ttl'];
$telp=$_POST['telp'];

mysqli_query($koneksi,"UPDATE guru2 SET nama_guru='$nama', alamat='$alamat', gender='$gender', ttl='$ttl', telp='$telp' WHERE  id_guru='$id_guru'" );
header("location: guru2.php");
?>