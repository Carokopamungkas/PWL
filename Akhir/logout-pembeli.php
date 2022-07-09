<?php
	session_start();
	session_destroy();
	echo "<script>alert('anda telah keluar')</script>";
	echo "<script>window.location='index.php'</script>";

?>