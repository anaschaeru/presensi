<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$jenis_absen = $_POST['jenis_absen'];
$absen = $_POST['absen'];
$jam = $_POST['jam'];
$tanggal_sql = date('Y-m-d', strtotime($tanggal)); //date format

// menginput data ke database
mysqli_query($koneksi, "INSERT INTO absen VALUES('','$nip','$tanggal_sql','$jenis_absen','$absen','$jam')");

// mengalihkan halaman kembali ke index.php
header("location:dashboard.php?absen=berhasil");
