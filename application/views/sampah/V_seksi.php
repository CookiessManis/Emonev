    <!-- button kembali ke halaman utama -->
    <div class="back-container d-flex justify-content-between">
      <div class="back-sizing">
        <a href="index.html" class="text-decoration-none">
          <div class="d-flex justify-content-center">
            <img src="<?= base_url('assets/img/arrow-back.svg') ?>" alt="" />
            <p class="pt-3 back-texting">Kembali Ke Halaman Utama</p>
          </div>
        </a>
      </div>
      <div class="dropdown-container">
        <div class="dropdown shadow-sm">
        <select class="form-select" onchange="location = this.value;">
							<option class="text-center">Pilih triwulan</option>
							<?php foreach($triwulan as $value) { ?>
								<option value="<?= base_url('C_seksi/pilih_triwulan/'. $value->id_triwulan  ) ?>" class="text-center">
									triwulan <?= $value->triwulan; ?>
								</option>
								<?php } ?>
							</select>
        </div>
      </div>
    </div>

 

    <div class="px-4 pt-5 text-center mx-auto">
      <div class="row mx-auto"><?php foreach ($seksi as $seksi => $s) { ?>
        <div class="col-3 py-3">
          <div
            class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
          >
            <div>
              <img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
            </div>
            <h4 class="text-seksi fw-semibold"><?= $s->username; ?></h4>
            <div class="card-seksi shadow-sm mx-auto border border-dark">
              <p class="h5-seksi fw-semibold">Triwulan <?= $s->triwulan; ?></p>
              <p>Target</p>
              <p>Rp. <?= number_format($s->target,2) ?></p>
              <p>Realisasi</p>
              <p>Rp. <?= number_format($jumlahrealisasi->realisasi,2) ?></p>
              <h1>90%</h1>
            </div>
          </div>
        </div><?php } ?>
      </div>
    </div>

