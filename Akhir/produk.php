<?php 
    error_reporting(0);
    include 'koneksi.php';
    $kontak = mysqli_query($conn, "SELECT telopon FROM tb_admin
        WHERE admin_id = 1");
    $a = mysqli_fetch_object($kontak);
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

    

    <!-- new produk -->
    <div class="section">
        <div class="container">
            <h3>Produk</h3>
            <div class="box">
                <?php
                    if($_GET['search'] != ''|| $_GET['kat'] != ''){
                       $where = "AND produk_name LIKE '%".$_GET['search']."%' AND kategori_id LIKE '".$_GET['kat']."%' ";
                    }

                    $produk = mysqli_query($conn, "SELECT * FROM tb_produk WHERE produk_size  $where ORDER BY produk_id DESC");
                    if(mysqli_num_rows($produk) > 0){
                        while($p = mysqli_fetch_array($produk)){
                 ?>
                    <a href="detail-produk.php?id=<?php echo $p['produk_id'] ?>">
                    <div class="col-4">
                        <img src="produk/<?php echo $p['produk_gambar'] ?>">
                        <p class="nama"><?php echo $p['produk_name'] ?></p>
                        <p class="harga">Rp. <?php echo $p['produk_harga'] ?></p>
                    </div>
                    </a>
                <?php }}else{ ?>
                    <p>Produk tidak ada</p>
                <?php }  ?>
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