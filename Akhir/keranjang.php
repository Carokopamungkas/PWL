<?php
session_start();



error_reporting(0);
    include 'koneksi.php';
    $kontak = mysqli_query($conn, "SELECT telopon FROM tb_admin
        WHERE admin_id = 1");
    $a = mysqli_fetch_object($kontak);

$koneksi = new mysqli("sql112.epizy.com","epiz_32134703","8U60PM6BvA36","epiz_32134703_db_garagesepatu");

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
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
                <li><a href="lg-pembeli.php">Login</a></li>
                <li><a href="produk.php">Produk</a></li>
            </ul>
        </div>
    </header>

    <!-- search -->
    <div class="search">
        <div class="container">
            <form action="produk.php">
                <input type="text" name="search" placeholder="cari produk" value="<?php echo $_GET['search']?>">
                <input type="hidden" name="kat" value="<?php echo $_GET['kat'] ?>">
                <input type="submit" name="cari" value="Cari Produk">
            </form>
        </div>
    </div>
   

    <section class="konten">
        <div class="container">
            <h1>keranjang belanja</h1>
            <hr>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Produk</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Total Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor=1; ?>
                    <?php foreach ($_SESSION["keranjang"] as $produk_id => $jumlah): ?>
                    <!--menampilkan produk-->
                    <?php
                    $ambil = $koneksi->query("SELECT * FROM tb_produk
                        WHERE produk_id = '$produk_id'");
                    $pecah = $ambil->fetch_assoc();
                    $subharga = $pecah["produk_harga"]*$jumlah;
                   
                    ?>
                
                    <tr>
                        <td><?php echo $nomor; ?></td>
                        <td><?php echo $pecah["produk_name"] ?></td>
                        <td>Rp. <?php echo number_format($pecah["produk_harga"]); ?></td>
                        <td><?php echo $jumlah ?></td>
                        <td>Rp. <?php echo number_format($subharga); ?></td>
                        <td>
                            <a href="hapus-keranjang.php?id=<?php echo $produk_id ?>" class="btn btn-danger btn-xs">hapus</a>
                        </td>
                    </tr>
                    <?php $nomor++; ?>
                    <?php endforeach ?>
                </tbody>
            </table>
            <a href="index.php" class="btn btn-default">Lanjutkan Belanja</a>
            <a href="lg-pembeli.php" class="btn btn-primary">Checkout</a>

        </div>
    </section>

    
    <!-- Footer-->

    <div class="footer">
        <div class="container">
            <h4>No.Hp</h4>
            <p><?php echo $a->telopon ?></p>

            <small>Copyright &copy; 2022 - Garage Sepatu.</small>
        </div>
    </div>


</body>
</html>