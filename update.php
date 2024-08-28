<?php
// koneksi database 
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];

// update data ke database
mysqli_query($koneksi, "update data set nama='$nama', kelas='$kelas', jurusan='$jurusan' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
