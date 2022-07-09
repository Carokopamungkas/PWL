<?php 
 
$hostname = "sql112.epizy.com";
$username = "epiz_32134703";
$password = "8U60PM6BvA36";
$dbname = "epiz_32134703_db_garagesepatu";
 
$conn = mysqli_connect($hostname, $username, $password, $dbname);
 
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 
?>