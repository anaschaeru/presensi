<?php
include '../koneksi.php';
$nip = $_GET['nip'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "UPDATE data_pegawai SET pass='$password' WHERE nip='$nip'");

header("location:profil.php?pesan=berhasil");
