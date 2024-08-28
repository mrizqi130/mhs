<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'mhs');

if (mysqli_connect_errno()) {
	echo "koneksi gagal COBA LAGI" . mysqli_connect_error();
}
