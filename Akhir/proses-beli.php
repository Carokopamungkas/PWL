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
    <script src="store.js" async></script>
    <title>Garage Sepatu</title>
</head>
<body>
    <!-- header -->
    <header>
        <div class="container">
            <h1><a href="index.php">Garage Sepatu</a></h1>
            <ul>
                <li><a href="Keranjang.php">Keranjang</a></li>
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
    
    <section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">Rp.</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
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