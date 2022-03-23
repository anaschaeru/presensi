<?php include '../layout/header.php' ?>
<div class="container mt-4 mb-3">
   <div class="row mx-2">
      <a href="dashboard.php">
         <button class="btn btn-info shadow rounded-pill px-4 py-3 text-light fw-bold">
            <label style="font-size: 16px;" for=""><i class="bi bi-chevron-left"></i></label>
         </button>
      </a>
   </div>
   <div class="row mx-2 mb-4">
      <div class="col mt-2">
         <h6 class="fw-bold text-center">PROFIL</h6>
         <div class="card p-1 radius-10 shadow" style="margin-top: 55px;">
            <div class="card-body">
               <div class="text-center" style="margin-top: -70px;">
                  <img src="../img/users.png" class="rounded-pill" style="width: 150px;" alt="...">
               </div>
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
      </div>
   </div>
   <div class="row mx-2">
      <div class="col">
         <?php
         error_reporting(0);
         $pesan = ($_GET['pesan']) == "berhasil" ? "" : "d-none";
         ?>
         <div class="alert alert-success alert-dismissible fade show mt-2 my-alert <?= $pesan; ?>" role="alert">
            <strong>Password berhasil diganti!</strong> silakan logout terlebih dahulu.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
         <form action="ganti-pass.php?nip=<?= $data->nip; ?>" method="POST">
            <div class="card p-1 radius-10 shadow">
               <div class="card-body">
                  <div class="mb-3">
                     <label class="mb-2" for="">Ubah Password</label>
                     <input type="password" class="form-control py-2 px-3 radius-25" name="password">
                  </div>
                  <div class="mb-3">
                     <button type="submit" class="btn btn-info rounded-pill w-100 py-3 text-light">Simpan</button>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>

<?php include '../layout/footer.php' ?>