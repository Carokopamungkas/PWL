<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h2>Tambah Data Sekolah</h2>
    <form method="POST" action="proses/sekolah/save.php"
    enctype="multipart/form-data">
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td>Logo</td>
            <td><input type="file" name="logo"></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit">Simpan</button></td>
        </tr>
    </table>
    </form>
</body>
</html>