<html>
<head>
<title> Inputan Data Mahasiswa |Archer.web.id</title>
</head>
<body>
	<table border="0">
	<form action="proses.php" method="post" name="input" >
		<h3> Input Nilai Mahasiswa</h3>
			<tr>
			<td>NIM Mahasiswa</td>
				<td><input type="text" name="nim"></td>
				</tr>
			<tr>
				<td>Program Studi</td>
				<td><select name="studi">
				<option value>Pilih Program Studi</option>
				<option value="Teknik Informatika S1">A11 (TI)</option>
				<option value="Sistem Informatika S1">A12 (SI)</option>
				<option value="Teknik Informatika D3">A22 (TI)</option>
				</select></td>
			</tr>
	
			<tr>
				<td>Nilai Tugas</td>
				<td><input type="number" min="1" max="100" name="tugas"></td>
			</tr>
			<tr>
				<td>Nilai UTS</td>
				<td><input type="number" min="1" max="100" name="uts"></td>
			</tr>
			<tr>
				<td>Nilai UAS</td>
				<td><input type="number" min="1" max="100" name="uas"></td>
			</tr>
			<tr>
				<td>Catatan Khusus</td>
				<td><input type="checkbox" name="catat[]" value="Kehadiran >= 70%">
					Kehadiran >= 70%</td>
				<td><input type="checkbox" name="catat[]" value="Interaksi dikelas">
					Interaksi dikelas</td>
				<td><input type="checkbox" name="catat[]" value="Tidak terlambat mengumpulkan tugas">
					Tidak terlambat mengumpulkan tugas</td>
			</tr>
			<tr>
			<td colspan="1">
			<div align="left">
			<input type="submit" name="submit" value="Submit"/>
			<input type="reset" name="Reset" value="Reset"/>
			</div>
			</td>
			</tr>
	</table>
	</form>
</body>
</html>