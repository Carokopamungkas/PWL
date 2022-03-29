<html>
<head>
<title>Hasil</title>
</head>
<body>
<h3 align="center"><blink>Hasil Akhir Nilai</blink></h3>
<table align="center" border="2">
<?php
$nim = $_POST['nim'];
$studi = $_POST['studi'];
$tugas = $_POST['tugas'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$catat = $_POST['catat'];

?>

<?php
$na=(0.40*$tugas)+(0.30*$uts)+(0.30*$uas);
?>

<?php
if ($na <= 50 )
{
$nh = 'Tidak Lulus' ;
}
else if ($na <= 59 )
{
$nh = 'Tidak Lulus' ;
}

else if ($na <= 60 )
{
$nh = 'Lulus' ;
}
else if ($na <= 84 )
{
$nh = 'Lulus' ;
}
else
{
$nh = 'Lulus' ;
}
?>


<tr>
<th>Program Studi</th>
<th>Nim Mahasiswa</th>
<th>Nilai Akhir</th>
<th>Status</th>
<th>Catatan Khusus</th>
</tr>
<tr>
<td align="center"><?php echo$studi;?></td>
<td align="center"><?php echo$nim; ?></td>
<td align="center"><?php echo$na;?></td>
<td align="center"><?php echo$nh;?></td>
<td align="center">
<?php
if (isset($_POST['submit'])) {
	$catat=$_POST['catat'];
	for ($i=0; $i < count($catat) ; $i++){
		echo "$catat[$i].<br>";
    }
}
?>
</td>



</table>
</tr>
</body>
</html>
