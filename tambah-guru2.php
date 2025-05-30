<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Guru</title>
    <!-- Feather Icons -->
<script src="https://unpkg.com/feather-icons"></script>
    <!-- Feather Icons -->
    
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

<!-- Form Tambah Data Guru -->
<form method="post" action="tambah-guru2-aksi.php">
    <table>
    <h3>Menambahkan Data Guru</h3>
    <a href="guru2.php"><i class="back-button" data-feather="arrow-left-circle"></i></a>
        <tr>
            <td>Id Guru:</td>
            <td><input type="number" name="id_guru"></td>
        </tr>
        <tr>
            <td>Nama:</td>
            <td><input type="text" name="nama_guru"></td>
        </tr>
        <tr>
            <td>Alamat:</td>
            <td><input type="text" name="alamat"></td>
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
            <td>Tanggal:</td>
            <td><input type="date" name="tanggal"></td>
        </tr>
        <tr>
            <td>Telp:</td>
            <td><input type="number" name="telp"></td>
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
