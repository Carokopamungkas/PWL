<?php
session_start();
$koneksi = new mysqli("localhost","root","","db_garagesepatu");



?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Garage Sepatu</title>
</head>
<body>
     <!-- header -->
    <header>
        <div class="container">
            <h1><a href="index.php">Garage Sepatu</a></h1>
            <ul>
                <li><a href="keranjang.php">Keranjang</a></li>
                <li><a href="logout-pembeli.php">keluar</a></li>
                <li><a href="produk.php">Produk</a></li>
            </ul>
        </div>
    </header>

</body>
</html>