<?php
include 'koneksi.php';
$id = $_GET['id'];

$data = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nisn='$id'");
while ($isi = mysqli_fetch_array($data)) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/feather-icons"></script>
    <title>Edit Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
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
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 40%;
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

        input[type="text"],
        input[type="number"],
        input[type="date"],
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color:#0056b3;
        }
    </style>
</head>
<body>

<!-- Tombol Kembali -->
<a href="siswa.php"><i class="back-button" data-feather="arrow-left-circle"></i></a>

<!-- Form Edit Siswa -->
<form method="POST" action="edit-siswa-aksi.php">
    <table>
        <h3>Edit Siswa</h3>
        <tr>
            <td>NISN:</td>
            <td>
                <input type="hidden" name="nisn" value="<?php echo $isi['nisn']; ?>">
                <input type="number" name="nisn" value="<?php echo $isi['nisn']; ?>">
            </td>
        </tr>
        <tr>
            <td>Nama:</td>
            <td><input type="text" name="nama_siswa" value="<?php echo $isi['nama_siswa']; ?>" required></td>
        </tr>
        <tr>
            <td>Alamat:</td>
            <td><input type="text" name="alamat" value="<?php echo $isi['alamat']; ?>" required></td>
        </tr>
        <tr>
            <td>Tanggal Lahir:</td>
            <td><input type="date" name="ttl" value="<?php echo $isi['ttl']; ?>" required></td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td>
                <select name="gender" required>
                    <option value="">Pilihan--</option>
                    <option value="L" <?php echo ($isi['gender'] == 'L') ? 'selected' : ''; ?>>Laki-Laki</option>
                    <option value="P" <?php echo ($isi['gender'] == 'P') ? 'selected' : ''; ?>>Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Id Kelas:</td>
            <td><input type="number" name="id_kelas" value="<?php echo $isi['id_kelas']; ?>" required></td>
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