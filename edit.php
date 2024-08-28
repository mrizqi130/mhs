<!DOCTYPE html>
<html>

<head>
	<title>Siswa SMK Telkom</title>
</head>

<body>
	<h2>SMK TELKOM</h2>
	<a href="index.php">KEMBALI</a>
	<h3>EDIT DATA SISWA</h3>
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi, "SELECT * FROM data WHERE id='$id'");
	while ($d = mysqli_fetch_array($data)) {
	?>
		<form method="post" action="update.php">
			<table>
				<tr>
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>Kelas</td>
					<td><input type="text" name="kelas" value="<?php echo $d['kelas']; ?>" </td>
				</tr>
				<tr>
					<td>Jurusan</td>
					<td><input type="text" name="jurusan" value="<?php echo $d['jurusan']; ?>" </td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>
			</table>
		</form>
	<?php
	}
	?>
</body>

</html>