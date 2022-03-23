<?php
include '../layout/header.php';
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
         <h6 class="fw-bold text-center">LOG ABSEN</h6>
         <?php
         $query_log = mysqli_query($koneksi, "SELECT * FROM absen WHERE nip=$nip ORDER BY id DESC");
         while ($data_log = mysqli_fetch_object($query_log)) {
         ?>
            <div class="row mb-2">
               <div class="col">
                  <div class="card shadow radius-10">
                     <div class="card-body border-4 border-start border-info">
                        <div class="row">
                           <div class="col">
                              <label for="">Tanggal Absen:</label>
                              <h6><?= $data_log->tanggal; ?></h6>
                              <h6><?= $data_log->jam; ?></h6>
                           </div>
                           <div class="col">
                              <label for="">Absen:</label>
                              <h6><?= $data_log->jenis_absen == 1 ? 'WFO' : 'WFH'; ?> / <?= $data_log->absen == 1 ? 'MASUK' : 'PULANG'; ?></h6>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         <?php
         } ?>
      </div>
   </div>
</div>

<?php include '../layout/footer.php' ?>