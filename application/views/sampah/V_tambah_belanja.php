<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Form Input Data Mobil</h1>
    </div>

    <div class="card">
      <div class="card-body">

        <form action="<?= base_url('C_belanja/tambah_belanja_aksi') ?>" enctype="multipart/form-data" method="post">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
               

              <div class="form-group">
                <label for="">no rekening</label>
                <input type="text" name="no_rek" class="form-control">
                <?= form_error('', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <label for="">rincian belanja</label>
                <input type="text" name="rincian" class="form-control">
                <?= form_error('nama tipe', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <label for="">pagu</label>
                <input type="text" name="pagu" class="form-control">
                <?= form_error('nama tipe', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <label for="">npd</label>
                <input type="text" name="npd" class="form-control">
                <?= form_error('nama tipe', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <label for="">realisasi</label>
                <input type="text" name="realisasi" class="form-control">
                <?= form_error('nama tipe', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <label for="">target</label>
                <input type="text" name="target" class="form-control">
                <?= form_error('nama tipe', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <input  hidden  type="text" name="username" class="form-control"   value="<?= $session_user->username; ?>">
                <?= form_error('nama tipe', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <button type="submit" class="btn btn-primary mt-4">Simpan</button>
              <button type="reset" class="btn btn-success mt-4">Reset</button>
            </div>
          </div>
        </form>
      </div>
    </div>


  </section>
</div>