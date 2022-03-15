<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>
	<?php
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'tambah':
				$hasil = $bil1+$bil2;
				break;
			case 'kurang':
				$hasil = $bil1-$bil2;
				break;
			case 'kali':
				$hasil = $bil1*$bil2;
				break;
			case 'bagi':
				$hasil = $bil1/$bil2;
				break;
		}
	}
    ?>
   <div class="kalkulator">
		<h2 class="judul">KALKULATOR</h2>
		<form method="post" action="kalkulator1.php">
			<input type="text" name="bil1" class="bil" autocomplete="off"
			placeholder="Bilangan Pertama">
			<input type="text" name="bil2" class="bil" autocomplete="off"
			placeholder="Bilangan Kedua">
			<select class="opt" name="operasi">
				<option value="tambah">+</option>
				<option value="kurang">-</option>
				<option value="kali">*</option>
				<option value="bagi">/</option>
			</select>
			<input type="submit" name="hitung" value="Hitung" class="tombol">
		</form>
	
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil">
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>
	</div>
</body>
</html>