<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="">
    <title>Berhasil Login</title>
</head>
<body>
    <div class="container-logout">
        <form action="" method="POST" class="login-email">
            <?php echo "<h1>Selamat Datang, " . $_SESSION['username'] ."!". "</h1>"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Garage Sepatu</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="store.js" async></script>

<style>
.mySlides {display:none;}
</style>
</head>
<body>
	
	<header class="main-header">
            <nav class="main-nav nav">
                <ul>
                    <li><a href="#">HOME</a></li>
					<li><a href="buku_sepatu.php">STOK BARANG</a></li>
                </ul>
            </nav>
            <h1 class="band-name band-name-large">Garage Sepatu</h1>
			<h1 class="band-name band-name-large">Selamat datang di Garage Sepatu, di sini kita menyediakan berbagai merek sepatu buatan Indonesia</h1>
        </header>
	

		<div class="blog">
			<div class="content">
				<div class="post-info">
				</div>
				<div class="w3-content w3-section" style="max-width:600px">
					<img class="mySlides" src="ventela_publik_Hi.jpg" style="width:100%">
					<img class="mySlides" src="ventela_publik_low.jpg" style="width:100%">

					<img class="mySlides" src="compas_b_Hi.jpg" style="width:100%">
					<img class="mySlides" src="compass_b_low.jpg" style="width:100%">
				  </div>
				  <script>
					var myIndex = 0;
					carousel();
					
					function carousel() {
					  var i;
					  var x = document.getElementsByClassName("mySlides");
					  for (i = 0; i < x.length; i++) {
						x[i].style.display = "none";  
					  }
					  myIndex++;
					  if (myIndex > x.length) {myIndex = 1}    
					  x[myIndex-1].style.display = "block";  
					  setTimeout(carousel, 2000); // Change image every 2 seconds
					}
					</script>
		
			</div>
		</div>
	</div>
	
	 <footer class="main-footer">
            <div class="container main-footer-container">
                <h3 class="band-name">Garage Sepatu</h3>
                <ul class="nav footer-nav">
				 <li>
                        <a href="" target="">
                            <img src="fb.png">
                        </a>
                    </li>
					<li>
                        <a href="" target="">
                            <img src="ig.jpg">
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
</body>
</html>




             
            <div class="input-group">
            <a href="logout.php" class="btn">Logout</a>
            </div>
        </form>
    </div>
</body>
</html>