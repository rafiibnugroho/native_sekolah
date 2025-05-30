<?php
include ("koneksi.php");

$nisn=$_POST['nisn'];
$nama=$_POST['nama_siswa'];
$alamat=$_POST['alamat'];
$ttl=$_POST['ttl'];
$gender=$_POST['gender'];
$id_kelas=$_POST['id_kelas'];

mysqli_query($koneksi,"UPDATE siswa SET nama_siswa='$nama', alamat='$alamat', ttl='$ttl', gender='$gender', id_kelas='$id_kelas' WHERE  nisn='$nisn'" );
header("location: siswa.php");
?>