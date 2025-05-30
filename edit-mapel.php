<?php
include 'koneksi.php';
$id = $_GET['id'];

$data = mysqli_query($koneksi, "SELECT * FROM mapel WHERE id_mapel='$id'");
while ($isi = mysqli_fetch_array($data)) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/feather-icons"></script>
    <title>Edit Mapel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            position: relative;
        }

        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            padding: 10px 15px;
            background-color: #007BFF;
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

        form {
            width: 40%;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
        }

        td {
            padding: 10px;
        }

        td:first-child {
            text-align: right;
            font-weight: bold;
        }

        h3 {
            text-align: center;
            font-family: Arial, sans-serif;
            color: #333;
            margin-bottom: 20px;
        }

        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<!-- Tombol Kembali -->
<a href="mapel.php"><i class="back-button" data-feather="arrow-left-circle"></i></a>

<!-- Form Edit Mapel -->
<form method="POST" action="edit-mapel-aksi.php">
    <table>
        <h3>Mengedit Data Mata Pelajaran</h3>
        <tr>
            <td>Id Mapel:</td>
            <td>
                <input type="hidden" name="id_mapel" value="<?php echo $isi['id_mapel']; ?>">
                <input type="number" name="id_mapel" value="<?php echo $isi['id_mapel']; ?>" >
            </td>
        </tr>
        <tr>
            <td>Nama Mapel:</td>
            <td>
                <input type="text" name="nama_mapel" value="<?php echo $isi['nama_mapel']; ?>" required>
            </td>
        </tr>
        <tr>
            <td>Id Guru:</td>
            <td>
                <input type="number" name="id_guru" value="<?php echo $isi['id_guru']; ?>" required>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Update"></td>
        </tr>
    </table>
</form>

</body>
</html>
<?php
}
?>
<!-- Feather Icons Script -->
<script>
    feather.replace();
</script>