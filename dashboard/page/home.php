<?php
if (isset($_SESSION['alert'])) : ?>
  <script>
    let Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true
    })
    <?php
    echo $_SESSION['alert'];
    unset($_SESSION['alert']);
    ?>
  </script>
<?php endif ?>
<div class="row">
  <!-- [ sample-page ] start -->
  <div class="col-md-12 col-lg-6">
    <div class="card">
      <div class="card-body">

        <h5 class="card-title mb-2">Hai, <?= $_SESSION['nama_akun'] ?> ! 👋😉</h5>
        <p class="mb-4">
          <span style="font-size: x-large;" class="fw-bold text-black">Si-NaMiRA</span><br>Sistem Manajemen Monitoring Program Kerja<br>BBPMP Provinsi Jawa Timur<br>Tahun <?= date('Y') ?>
        </p>

      </div>
      <div class="d-flex align-items-end justify-content-end">
        <img class="position-absolute " width="35%" src="../../assets/images/man-with-laptop-light.png">
      </div>

    </div>
  </div>
  <!-- [ sample-page ] end -->
</div>
<div class="row">
  <div class="col-md-8">
    <div class="card border border-primary">
      <div class="card-header text-center bg-primary">
        <h4 class="font-weight-bold text-white">Kalender SINaMiRA</h4>
      </div>
      <div class="card-body text-center">
        <div id='calendar'></div>
      </div>
    </div>
  </div>
</div>
<!-- modal -->
<div class="modal fade" id="detailCalendarActivity" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="exampleEditModal" aria-hidden="true" aria-modal="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4><i class="bx bx-folder-plus"></i> Ubah Status Kegiatan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label class="form-label font-weight-bold">Area Kerja</label>
          <p><?= $showFileKegiatan['nama_area'] ?></p>
        </div>
        <div class="form-group">
          <label class="form-label font-weight-bold">Nama Program Kerja</label>
          <p><?= $showFileKegiatan['nama_program'] ?></p>
        </div>
        <div class="form-group">
          <label class="form-label font-weight-bold">Nama Kegiatan</label>
          <p><?= $showFileKegiatan['nama_kegiatan'] ?></p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- modal -->