<?php
include '../layout/header.php';
?>
<div class="container mb-3">
   <div class="row">
      <div class="col px-0">
         <div class="p-5 bg-info rounded-bottom">
            <div class="container-fluid py-3">
               <div class="text-center text-light">
                  <img src="../img/banten-logo.png" class="img-fluid mb-3 logo" alt="">
                  <h4 class="fw-bold">PRESENSI NON ASN</h4>
                  <label class="fw-bold">SMK NEGERI 4 TANGERANG</label>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row mx-2 mb-2" style="margin-top: -40px;">
      <div class="col">
         <div class="card text-center radius-10 shadow pt-2">
            <div class="card-body">
               <h6 class="fw-bold" id="jam"></h6>
               <h6 id="tanggal"></h6>
            </div>
         </div>
      </div>
   </div>
   <div class="row mx-2">
      <div class="col">
         <div class="card p-1 radius-10 shadow">
            <div class="card-body">
               <table class="cap">
                  <tbody>
                     <tr>
                        <td>
                           Nama
                        </td>
                        <td>:</td>
                        <td class="cap">
                           <?= $nama; ?>
                        </td>
                     </tr>
                     <tr>
                        <td>NIP</td>
                        <td>:</td>
                        <td><?= $data->nip; ?></td>
                     </tr>
                     <tr>
                        <td>Jabatan</td>
                        <td>:</td>
                        <td><?= $data->jabatan; ?></td>
                     </tr>
                     <tr>
                        <td>Kantor</td>
                        <td>:</td>
                        <td>Satuan Pendidikan SMKN 4 Tangerang</td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
         <?php
         error_reporting(0);
         $cek_kirim = ($_GET['absen']) == "berhasil" ? "" : "d-none";
         ?>
         <div class="alert alert-success alert-dismissible fade show mt-4 my-alert <?= $cek_kirim; ?>" role="alert">
            <strong>Absen berhasil!</strong> lihat log absen.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
      </div>
   </div>
</div>
<div class="container py-4 bg-info mh-100" style="border-radius: 25px 25px 0px 0px;">
   <?php
   error_reporting(0);
   $tanggal_now = date("Y-m-d");
   $cek_absen = mysqli_query($koneksi, "SELECT * FROM absen WHERE nip='$data->nip' AND tanggal = '$tanggal_now' ORDER BY id ASC LIMIT 1");
   $query_cek_absen = mysqli_query($koneksi, "SELECT * FROM absen WHERE nip='$data->nip' AND tanggal = '$tanggal_now' ORDER BY id ASC LIMIT 1");
   $query_cek_pulang = mysqli_query($koneksi, "SELECT * FROM absen WHERE nip='$data->nip' AND tanggal = '$tanggal_now' ORDER BY id DESC LIMIT 1");
   $absen_cek = mysqli_fetch_object($cek_absen);
   $data_cek = mysqli_fetch_object($query_cek_absen);
   $data_cek_pulang = mysqli_fetch_object($query_cek_pulang);
   $cek_row_absen = mysqli_num_rows($cek_absen);
   $cek = mysqli_num_rows($query_cek_absen);

   if ($cek > 0) {
      if ($data_cek->jenis_absen == "1") {
         include 'wfo.php';
      } elseif ($data_cek->jenis_absen == "2") {
         include 'wfh.php';
      }
   } else {
      include 'wfo.php';
      include 'wfh.php';
   }
   ?>
   <div class="row px-3 py-2">
      <div class="col">
         <div class="row">
            <button onclick="document.location='log-absen.php'" class="btn btn-light w-100 text-start px-4 py-3" style="border-radius: 25px;" data-bs-toggle="modal">
               <h6 class="fw-bold">Log Absen</h6>
               <label>Berisi History Absen</label>
            </button>
         </div>
      </div>
   </div>
   <div class="row px-3 py-2">
      <div class="col">
         <div class="row">
            <button onclick="document.location='profil.php'" class="btn btn-secondary w-100" style="height: 60px; border-radius: 25px;" data-bs-toggle="modal" data-bs-target="#settingModal">
               <h6 class="fw-bold m-0">PROFIL</h6>
            </button>
         </div>
      </div>
   </div>
   <div class="row px-3 py-2">
      <div class="col mb-5">
         <div class="row">
            <button onclick="document.location='../logout.php'" class="btn btn-danger w-100" style="height: 60px; border-radius: 25px;" data-bs-toggle="modal" data-bs-target="#settingModal">
               <h6 class="fw-bold m-0">LOGOUT</h6>
            </button>
         </div>
      </div>
   </div>
</div>
<?php include '../layout/footer.php' ?>