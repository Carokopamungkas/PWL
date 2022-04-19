<?php
include "koneksi.php";
$idsepatu = $_POST['idsepatu'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$sql = "update sepatu set nama='$nama',harga='$harga',stok='$stok'  where idsepatu='$idsepatu'";
$hasil = mysqli_query($conn, $sql);
if (!$hasil) {
    echo ("query error");
} else {
    header('location:buku_sepatu.php');
}
