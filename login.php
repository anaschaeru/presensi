<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$nip = $_POST['nip'];
$password = $_POST['password'];


// menyeleksi data user dengan nip dan password yang sesuai
$login = mysqli_query($koneksi, "SELECT * FROM data_pegawai WHERE nip='$nip' AND pass='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah nip dan password di temukan pada database
if ($cek > 0) {

    $data = mysqli_fetch_assoc($login);

    // cek jika user login sebagai admin
    if ($data['level'] == "1") {

        // buat session login dan nip
        $_SESSION['nip'] = $nip;
        $_SESSION['level'] = "1";
        // alihkan ke halaman dashboard admin
        header("location:halaman_admin.php");

        // cek jika user login sebagai pegawai
    } else if ($data['level'] == "2") {
        // buat session login dan nip
        $_SESSION['nip'] = $nip;
        $_SESSION['level'] = "2";
        $_SESSION['level'] = "2";
        // alihkan ke halaman dashboard pegawai
        header("location:pegawai/dashboard.php");

        // cek jika user login sebagai pengurus
    } else {

        // alihkan ke halaman login kembali
        header("location:index.php?pesan=gagal");
    }
} else {
    header("location:index.php?pesan=gagal");
}
