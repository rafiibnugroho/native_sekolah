<?php
include "koneksi.php";
?>

<link rel="stylesheet" href="css/main.css">

<!-- Feather Icons -->
<script src="https://unpkg.com/feather-icons"></script>
<!-- Feather Icons -->

<h3 class="ha3" style="text-align: center; font-family: Arial, sans-serif; color: #333; margin-bottom: 20px;">Data Mapel</h3>

<!-- Dashboard start -->
<nav class="navbar">
    <div class="navbar-nav">
        <img src="aset/logo.png" class="logo-smk">
        <a href="dashboard.html">Home</a>
        <a href="siswa.php">Siswa</a>
        <a href="kelas.php">Kelas</a>
        <a href="guru2.php">Guru</a>
        <a href="mapel.php">Mapel</a>
        <a class="logout" href="login.html"><i data-feather="log-out"></i></a>
    </div>
    <script class="log-out" src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
</nav>
<!-- Dashboard end -->

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        color: #333;
    }

    .back-button {
            position: absolute;
            top: 140px;
            left: 40px;
            width: 80px;
            height: 60px;
            background-color: #007BFF ;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
            cursor: pointer;
        }

        .back-button:hover {
            background-color: #0056b3;
        }

    table {
        width: 80%;
        margin: 10px auto; 
        border-collapse: collapse;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    th, td {
        padding: 15px; 
        text-align: left;
    }

    th {
        background-color: #007BFF; 
        color: white;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd; 
    }

    td {
        border-bottom: 1px solid #ddd;
    }

    .ha3{
        width: 80%;
        margin: 100px auto;
    }

    .actions a {
        margin-right: 10px;
        color: #007BFF;
        text-decoration: none;
        font-size: 18px;
    }

    .actions a:hover {
        color: #0056b3;
    }

    .icon {
        cursor: pointer;
        transition: transform 0.2s;
    }

    .icon:hover {
        transform: scale(1.2);
    }

    .btn-add {
        display: inline-block;
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #0056b3;
        color: white;
        text-align: center;
        border-radius: 5px;
        text-decoration: none;
        font-size: 16px;
    }

    .btn-add:hover {
        background-color: #7f8f97;
    }

    .center {
        text-align: center;
    }
</style>

<table>
<a href="dashboard.html"><i class="back-button" data-feather="arrow-left-circle"></i></a>
    <tr>
        <th>Id Mapel</th>
        <th>Nama Mapel</th>
        <th>Id Guru</th>
        <th>Aksi</th>
    </tr>

<?php
$data = mysqli_query($koneksi,"select * from mapel");
while ($tampil = mysqli_fetch_array($data)){
?>
    <tr>
        <td><?php echo $tampil["id_mapel"]; ?></td>
        <td><?php echo $tampil["nama_mapel"]; ?></td>
        <td><?php echo $tampil["id_guru"]; ?></td>
        <td class="actions">
            <a href="delete-mapel.php?id=<?php echo $tampil['id_mapel']; ?>"><i class="icon" data-feather="trash-2"></i></a>
            <a href="edit-mapel.php?id=<?php echo $tampil['id_mapel']; ?>"><i class="icon" data-feather="edit"></i></a>
            <a href="tambah-mapel.php"><i class="icon" data-feather="plus-square"></i></a>
        </td>
    </tr>
<?php
}
?>
</table>

<div class="center">
    <a href="tambah-mapel.php" class="btn-add">Tambah Mapel</a>
</div>

<!-- Feather Icons script -->
<script>
    feather.replace();
</script>
<!-- Feather Icons script -->
