<?php
include "koneksi.php";
$idsepatu = $_GET['idsepatu'];
$sql = "delete from sepatu where idsepatu='$idsepatu'";
$hasil = mysqli_query($conn, $sql);
if (!$hasil) {
    echo ("query error");
} else {
    header('location:buku_sepatu.php');
}
