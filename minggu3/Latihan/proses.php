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
$ct1 = $_POST['ct1'];
$ct2 = $_POST['ct2'];
$ct3 = $_POST['ct3'];
?>

<?php
$na=(0.40*$tugas)+(0.30*$uts)+(0.30*$uas);
?>

<?php
if ($na <= 40 )
{
$nh = 'Tidak Lulus' ;
}
else if ($na <= 50 )
{
$nh = 'Tidak Lulus' ;
}

else if ($na <= 70 )
{
$nh = 'Lulus' ;
}
else if ($na <= 80 )
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
</table>
</tr>
</body>
</html>
