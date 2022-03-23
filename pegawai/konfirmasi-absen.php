<?php
include '../layout/header.php';
$jenis_absen_get = $_GET['jenis_absen'];
$absen_get = $_GET['absen'];
$jenis_absen = $jenis_absen_get == 1 ? 'WFO' : 'WFH';
$absen = $absen_get == 1 ? 'MASUK' : 'PULANG';
$tanggal = date("d-m-Y");
$jam = date("G:i:s");
?>
<div class="container mt-4 mb-3">
   <div class="row mx-2">
      <a href="dashboard.php">
         <button class="btn btn-info shadow rounded-pill px-4 py-3 text-light fw-bold">
            <label style="font-size: 16px;" for=""><i class="bi bi-chevron-left"></i></label>
         </button>
      </a>
   </div>
   <div class="row mx-2 mb-4 py-3">
      <div class="col mt-2">
         <h6 class="fw-bold text-center">KONFIRMASI ABSEN </h6>
         <form name="form-upload-presensi" action="tambah-absen.php" method="POST">
            <div class="card p-1 radius-10 shadow py-3 mt-3">
               <div class="card-body">

                  <input class="form-control d-none" type="text" name="kode_absen" value="<?= $data->nip; ?>/<?= $tanggal; ?>/<?= $absen_get == 1 ? 'IN' : 'OUT'; ?>">
                  <input class="form-control d-none" type="text" name="nip" value="<?= $data->nip; ?>">
                  <input class="form-control d-none" type="text" name="tanggal" value="<?= $tanggal;  ?>">
                  <input class="form-control d-none" type="text" name="jenis_absen" value="<?= $jenis_absen_get; ?>">
                  <input class="form-control d-none" type="text" name="absen" value="<?= $absen_get; ?>">
                  <input class="form-control d-none" type="text" name="jam" value="<?= $jam; ?>">
                  <div class="mb-2">
                     <label for="form-label">Jenis Absen:</label>
                     <h6 class="fw-bold"> <?php echo $jenis_absen; ?> </h6>
                  </div>
                  <div class="mb-2">
                     <label for="form-label">Tanggal:</label>
                     <h6 class="fw-bold" id="tanggal">00/00/0000</h6>
                  </div>
                  <div class="mb-2">
                     <label for="form-label">Pukul:</label>
                     <h6 class="fw-bold" id="jam"></h6>
                  </div>
                  <div class="mb-2">
                     <label for="form-label">Absen:</label>
                     <h6 class="fw-bold"><?= $absen; ?></h6>
                  </div>
                  <div class="mb-4">
                     <label for="form-label">Koordinat:</label>
                     <h6 class="fw-bold text-success">Tersimpan</h6>
                  </div>
                  <div class="mb-2">
                     <button type="submit" class="btn btn-info w-100 py-3 rounded-pill btn-kirim text-light">KIRIM</button>
                     <button class="btn btn-info w-100 py-3 rounded-pill btn-loading d-none" type="button" disabled>
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        Loading...
                     </button>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>

<?php include '../layout/footer.php' ?>