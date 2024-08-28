<!DOCTYPE html>
<html>

<head>
	<title>Tambah Data</title>
</head>

<body>
	<h2>SMK TELKOM</h2>
	<br>
	<a href="index.php">KEMBALI</a>
	<br />
	<br />
	<h3>TAMBAH DATA MAHASISWA</h3>
	<form method="post" action="tambahproses.php">
		<table>
			<tr>
				<td>nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td><input type="text" name="kelas"></td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td><input type="text" name="jurusan"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
</body>

</html>