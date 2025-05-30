<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mapel</title>
     <!-- Feather Icons -->
<script src="https://unpkg.com/feather-icons"></script>
    <!-- Feather Icons -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
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
            width: 50%;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h3 {
            text-align: center;
            font-family: Arial, sans-serif;
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
        }

        td:first-child {
            text-align: right;
            font-weight: bold;
        }

        input[type="text"], input[type="number"], select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }

        input[type="text"]:focus, input[type="number"]:focus, select:focus {
            border-color: #007BFF;
            outline: none;
        }

        .btn-submit {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    
    <form method="post" action="tambah-mapel-aksi.php">
    <h3>Tambah Data Mapel</h3>
    <table>
        <a href="mapel.php"><i class="back-button" data-feather="arrow-left-circle"></i></a>
        <tr>
            <td>Id_Mapel:</td>
            <td><input type="number" name="id_mapel"></td>
        </tr>
        <tr>
            <td>Nama_Mapel:</td>
            <td><input type="text" name="nama_mapel"></td>
        </tr>
        <tr>
            <td>Id_Guru:</td>
            <td><input type="number" name="id_guru"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" class="btn-submit" name="submit" value="Submit"></td>
        </tr>
    </table>
</form>

</body>
</html>
<!-- Feather Icons script -->
<script>
    feather.replace();
</script>