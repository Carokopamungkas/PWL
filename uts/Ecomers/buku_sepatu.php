<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="">
    <title>Berhasil Login</title>
</head>
<body>
    <div class="container-logout">
        <form action="" method="POST" class="login-email">
            <?php echo "<h1>Selamat Datang, " . $_SESSION['username'] ."!". "</h1>"; ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <script src="store.js" async></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Garage Sepatu</title>
</head>

<body>
<body>
        <header class="main-header">
            <nav class="main-nav nav">
                <ul>
                    <li><a href="#">HOME</a></li>
                   
                    <li><a href="buku_sepatu.php">STOK BARANG</a></li>
                    
                </ul>
            </nav>
            <h1 class="band-name band-name-large">Garage Sepatu</h1>
        </header>

    <div class="container">
        <h1>Daftar Sepatu</h1>
        <?php
        include "koneksi.php";
        $sql = "select * from sepatu";
        $hasil = mysqli_query($conn, $sql);
        ?>
        <a href='add_sepatu.php' class='btn btn-primary'>Add New</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Sepatu</th>
                    <th scope="col">Harga Sepatu</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($r = mysqli_fetch_assoc($hasil)) {
                    echo "                
                    <tr>
                        <th scope='row'>" . $r['idsepatu'] . "</th>
                        <td>" . $r['nama'] . "</td>  
                        <td>" . $r['harga'] . "</td>
                        <td>" . $r['stok'] . "</td>
                        <td>
                        <a href='edit_sepatu.php?idsepatu=" . $r['idsepatu'] . "' class='btn btn-primary'>Edit</a>
                        <a href='del_sepatu.php?idsepatu=" . $r['idsepatu'] . "' class='btn btn-primary'>Delete</a>
                        </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
       
            <div class="input-group">
            <a href="logout.php" class="btn">Logout</a>
            </div>
        </form>
    </div>
</body>
</html>
</body>

</html>