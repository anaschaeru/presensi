<?php
include '../koneksi.php';

session_start();

// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['level'] == "") {
   header("location:index.php?pesan=gagal");
}

$nip = $_SESSION['nip'];
$query = mysqli_query($koneksi, "SELECT * FROM data_pegawai WHERE nip='$nip'");
$data = mysqli_fetch_object($query);
$nama = strtolower($data->nama);

$query_absen = mysqli_query($koneksi, "SELECT * FROM absen WHERE nip='$nip'");
$data_absen = mysqli_fetch_object($query_absen);

date_default_timezone_set("Asia/Jakarta");
?>
<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

   <link rel="stylesheet" href="../style.css">

   <title>Aplikasi Presensi Non ASN - SMK Negeri 4 Tangerang</title>
</head>

<body class="body-img">