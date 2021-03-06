<?php 
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
                <li><a href="keranjang.php">Keranjang</a></li>
                <li><a href="produk.php">Produk</a></li>
            </ul>
        </div>
    </header>

    <!-- search -->
    <div class="search">
        <div class="container">
            <form action="produk.php">
                <input type="text" name="search" placeholder="cari produk">
                <input type="submit" name="cari" value="Cari Produk">
            </form>
        </div>
    </div>

    <!-- kategori -->
    <div class="section">
        <div class="container">
            <h3>Kategori</h3>
            <div class="box">
                <?php 
                    $kategori = mysqli_query($conn, "SELECT * FROM tb_kategori ORDER BY
                        kategori_id DESC");
                    if(mysqli_num_rows($kategori) > 0){
                        while ($k = mysqli_fetch_array($kategori)){
                    
                 ?>
                    <a href="produk.php?kat=<?php echo $k['kategori_id'] ?>">
                        <div class="col-5">
                            <img src="img/icon-kategori.png" width="50px" style="margin-bottom: 5px;">
                            <p><?php echo $k['kategori_name'] ?></p>
                        </div>
                    </a>
                <?php }}else{ ?> 
                    <p>Kategori Tidak Ada</p>
                <?php } ?>   
            </div>
        </div>
    </div>

    <!-- new produk -->
    <div class="section">
        <div class="container">
            <h3>Produk Terbaru</h3>
            <div class="box">
                <?php 
                    $produk = mysqli_query($conn, "SELECT * FROM tb_produk ORDER BY produk_id DESC
                        LIMIT 8");
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