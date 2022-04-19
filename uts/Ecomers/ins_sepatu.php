<?php
include "koneksi.php";
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$sql = "insert into sepatu (nama,harga,stok) values ('$nama','$harga','$stok')";
$hasil = mysqli_query($conn, $sql);
if (!$hasil) {
    echo ("query error");
} else {
    header('location:buku_sepatu.php');
}
