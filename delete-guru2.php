<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM guru2 WHERE id_guru='$id'");

header ('location: guru2.php');
?>