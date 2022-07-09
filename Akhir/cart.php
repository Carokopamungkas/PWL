<?php 

session_start();
// mendapakan id dari url

$produk_id = $_GET['id'];

if(isset($_SESSION['keranjang'][$produk_id]))
{
    $_SESSION['keranjang'][$produk_id]+=1;
}

else
{
    $_SESSION['keranjang'][$produk_id] = 1;
}
//echo "<pre>";
//print_r($_SESSION);
//echo "</pre>";

//kehalaman keranjang

echo "<script>alert('produk telah masuk ke keranjng belanja');</script>";
echo "<script>location='keranjang.php';</script>";
?>