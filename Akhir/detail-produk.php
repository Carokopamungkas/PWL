<?php 
    error_reporting(0);
    include 'koneksi.php';
    $kontak = mysqli_query($conn, "SELECT telopon FROM tb_admin
        WHERE admin_id = 1");
    $a = mysqli_fetch_object($kontak);

    $produk = mysqli_query($conn, "SELECT * FROM tb_produk WHERE produk_id = '".$_GET['id']."' ");
    $p = mysqli_fetch_object($produk);

    $kerangjang = array (
        1 => 1,

    )

 ?>
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Garage Sepatu</title>
</head>
<body>
    <!-- header -->
    <header>
        <div class="container">
            <h1><a href="index.php">Garage Sepatu</a></h1>
            <ul>
                <li><a href="keranjang.php">Keranjang</a></li>
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

    <!-- produk detail -->
    <div class="section">
        <div class="container">
            <h3>Detail Produk</h3>
            <div class="box">
                <div class="col-2">
                    <img src="produk/<?php echo $p->produk_gambar ?>" width="100%">
                </div>
                <div class="col-2">

                    <h3><?php echo $p->produk_name ?></h3>
                    <h4>Rp. <?php echo $p->produk_harga ?></h4>
                    <p>Deskripsi : <br>
                        <?php echo $p->produk_dekripsi  ?>
                    
                    </p>
                    <a href="cart.php?id=<?php echo $p->produk_id ?>" class="btn btn-primary">beli</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    
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