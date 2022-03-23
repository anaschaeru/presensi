<div class="row px-3 py-2">
   <div class="col">
      <div class="row">
         <button class="btn btn-light w-100 text-start px-4 py-3" style="border-radius: 25px;" data-bs-toggle="modal" data-bs-target="#wfhModal">
            <h6 class="fw-bold">WFH</h6>
            <label>Work From Home</label>
         </button>
      </div>
   </div>
</div>
<!-- Modal WFH -->
<div class="modal fade" id="wfhModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body text-center">
            <h5 class="fw-bold">Work From Home</h5>
            <div class="row p-3">
               <div class="col mb-3">
                  <button onclick="document.location='konfirmasi-absen.php?jenis_absen=2&absen=1'" class="btn btn-success p-5 justify-align-end w-100 mb-3 " <?= $data_cek->absen == 1 ? "disabled" : ""; ?>>
                     <i class="bi bi-box-arrow-in-left" style="font-size: 40px;"></i>
                  </button><br>
                  <label>Masuk</label>
               </div>
               <div class="col mb-3">
                  <button onclick="document.location='konfirmasi-absen.php?jenis_absen=2&absen=2'" class="btn btn-danger p-5 justify-align-end w-100 mb-3" <?= $data_cek_pulang->absen == 2 ? "disabled" : ""; ?><?= $cek_row_absen <= 0 ? "disabled" : ""; ?>>
                     <i class="bi bi-box-arrow-right" style="font-size: 40px;"></i>
                  </button><br>
                  <label>Pulang</label>
               </div>
            </div>
            <button class="btn btn-info text-light" data-bs-dismiss="modal">
               Kembali
            </button>
         </div>
      </div>
   </div>
</div>