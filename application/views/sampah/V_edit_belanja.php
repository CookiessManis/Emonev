ini halaman edit belanja

<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Form Edit Data Tipe</h1>
    </div>

    <div class="card">
      <div class="card-body">
    <form action="<?= base_url('C_belanja/edit_aksi') ?>" method="post">
      <div class="form-group">
        <label for="">No belanja</label>
        <input type="hidden" name="id_belanja" value="<?= $belanja->id_belanja; ?>">
        <input type="text" name="no_rek" class="form-control"  value="<?= $belanja->no_rek; ?>">
        <?= form_error('kode_tipe', '<div class="text-small text-danger">', '</div>') ?>
      </div>

      <div class="form-group"> 
        <label for="">sub belanja</label>
        <input type="text" name="rincian" class="form-control"  value="<?= $belanja->rincian; ?>">
        <?= form_error('nama_tipe', '<div class="text-small text-danger">', '</div>') ?>
      </div>

      <div class="form-group"> 
        <label for="">pagu</label>
        <input type="text" name="pagu" class="form-control"  value="<?= $belanja->pagu; ?>">
        <?= form_error('nama_tipe', '<div class="text-small text-danger">', '</div>') ?>
      </div>

      <div class="form-group"> 
        <label for="">npd</label>
        <input type="text" name="npd" class="form-control"  value="<?= $belanja->npd; ?>">
        <?= form_error('nama_tipe', '<div class="text-small text-danger">', '</div>') ?>
      </div>

      <div class="form-group"> 
        <label for="">realisasi</label>
        <input type="text" name="realisasi" class="form-control"  value="<?= $belanja->realisasi; ?>">
        <?= form_error('nama_tipe', '<div class="text-small text-danger">', '</div>') ?>
      </div>

      <div class="form-group"> 
        <label for="">target</label>
        <input type="text" name="target" class="form-control"  value="<?= $belanja->target; ?>">
        <?= form_error('nama_tipe', '<div class="text-small text-danger">', '</div>') ?>
      </div>

      <div class="form-group"> 
        
        <input hidden type="text" name="username" class="form-control"  value="<?= $belanja->username; ?>">
        <?= form_error('nama_tipe', '<div class="text-small text-danger">', '</div>') ?>
      </div>
      

      <button type="submit" class="btn btn-primary">Simpan</button>
      <button type="reset" class="btn btn-warning">Reset</button>

    </form>
      </div>
    </div>


  </section>
</div>