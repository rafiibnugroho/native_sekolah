<!DOCTYPE html>

<html lang="en">
<head>

 <!-- Feather Icons -->
 <script src="https://unpkg.com/feather-icons"></script>
    <!-- Feather Icons -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
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

        input[type="text"],
        input[type="number"],
        input[type="date"],
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color:  #007BFF;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<form method="post" action="tambah-siswa-aksi.php">
    <table>
    <a href="siswa.php"><i class="back-button" data-feather="arrow-left-circle"></i></a>
        <tr>
            <td>NISN:</td>
            <td><input type="number" name="nisn"></td>
        </tr>
        <tr>
            <td>Nama:</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Alamat:</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td>Tanggal:</td>
            <td><input type="date" name="tanggal"></td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td>
                <select name="gender">
                    <option value="">Pilihan--</option>
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Id Kelas:</td>
            <td><input type="number" name="kelas"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Tambah"></td>
        </tr>
    </table>
</form>

</body>
</html>
<!-- Feather Icons script -->
<script>
    feather.replace();
</script>