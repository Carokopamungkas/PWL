<?php 
 
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "db_garagesepatu";
 
$conn = mysqli_connect($hostname, $username, $password, $dbname);
 
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 
?>