<?php
	session_start();
	$produk_id = $_GET['id'];
	unset($_SESSION["keranjang"][$produk_id]);

	echo "<script>alert('produk dihapus dari keranjang')</script>";
	echo "<script>window.location='keranjang.php'</script>";

?>