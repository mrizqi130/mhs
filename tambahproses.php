<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];

// mengimput data ke database
mysqli_query($koneksi, "insert into data values('','$nama','$kelas','$jurusan')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
