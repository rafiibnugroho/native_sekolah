<?php
include 'koneksi.php';
$id = $_GET['id'];

$data = mysqli_query($koneksi, "SELECT * FROM guru2 WHERE id_guru='$id'");
while ($isi = mysqli_fetch_array($data)) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Guru</title>
    <script src="https://unpkg.com/feather-icons"></script>
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

        h3 {
            text-align: center;
            font-family: Arial, sans-serif;
            color: #333;
            margin-bottom: 20px;
        }

        td {
            padding: 10px;
        }

        td:first-child {
            text-align: right;
            font-weight: bold;
            width: 30%;
        }

        input[type="text"], input[type="number"], input[type="date"], select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        select {
            cursor: pointer;
        }
    </style>
</head>
<body>

<!-- Tombol Kembali -->
<a href="guru2.php"><i class="back-button" data-feather="arrow-left-circle"></i></a>

<!-- Form Edit Data Guru -->
<form method="POST" action="edit-guru2-aksi.php">
    <table>
        <h3>Mengedit Data Guru</h3>
        <tr>
            <td>Id Guru:</td>
            <td>
                <input type="hidden" name="id_guru" value="<?php echo $isi['id_guru']; ?>">
                <input type="number" name="id_guru" value="<?php echo $isi['id_guru']; ?>">
            </td>
        </tr>
        <tr>
            <td>Nama:</td>
            <td>
                <input type="text" name="nama_guru" value="<?php echo $isi['nama_guru']; ?>">
            </td>
        </tr>
        <tr>
            <td>Alamat:</td>
            <td>
                <input type="text" name="alamat" value="<?php echo $isi['alamat']; ?>">
            </td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td>
                <select name='gender'>
                    <option value=''>Pilihan--</option>
                    <option value='L' <?php echo ($isi['gender'] == 'L') ? 'selected' : ''; ?>>Laki-Laki</option>
                    <option value='P' <?php echo ($isi['gender'] == 'P') ? 'selected' : ''; ?>>Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tanggal Lahir:</td>
            <td>
                <input type="date" name="ttl" value="<?php echo $isi['ttl']; ?>">
            </td>
        </tr>
        <tr>
            <td>Telp:</td>
            <td>
                <input type="number" name="telp" value="<?php echo $isi['telp']; ?>">
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Update"></td>
        </tr>
    </table>
</form>

<!-- Feather Icons Script -->
<script>
    feather.replace();
</script>

</body>
</html>
<?php
}
?>
