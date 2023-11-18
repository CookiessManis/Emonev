
<?php
  echo validation_errors('<div class="w-50 mx-auto py-3">
	<div class="bg-danger rounded alert alert-danger alert-dismissible fade show">
		<span class="text-center text-white fw-semibold ">❌ ', '</span>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
</div>');


//  flashdata berhasil
if($this->session->flashdata('pesan')){
echo '<div class="w-50 mx-auto py-3">
	<div class="bg-warning rounded alert alert-warning alert-dismissible fade show">
		<span class="text-center text-gray fw-semibold ">✅ ';
		echo $this->session->flashdata('pesan');
echo '</span>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
</div>';
}

?>


    <!-- button kembali ke halaman utama -->
    <div class="back-container d-lg-flex justify-content-between ">
      <div class="back-sizing">
        <a href="<?= base_url('index.php/C_dashboard')?>" class="text-decoration-none">
          <div class="d-flex justify-content-center">
            <img src="<?= base_url('assets/arrow-back.svg') ?>" alt="" />
            <p  class="pt-3 back-texting text-decoration-none">Kembali Ke Halaman Utama</p>
          </div>
        </a>
      </div>

	  
<?php if ($session_user->status == 2) {?>
  <div class="d-flex">
				 <div class="btn-tambahKegiatan">
          <button
            class="btn btn-primary btn-tmbhKeg"
            data-bs-toggle="modal"
            data-bs-target="#TambahAnggaran"
          >
            Tambah Anggaran
          </button>
				</div>
<?php }else{ ?>

  <?php } ?>
      

					<div class="anggaran-container">
						<div class="anggaran-select">
            <select class="form-select" onchange="location = this.value;">
							<option class="text-center">Pilih Tahun</option>
							<?php foreach($anggarantahun as $value) { ?>
								<option value="<?= base_url('index.php/C_anggaran/pilihtahun/'. $value->id_anggaran) ?>" class="text-center">
									<?= $value->tahun; ?>
								</option>
								<?php } ?>
							</select>
          </div>
        </div>
      </div>
    </div>
		


    <div class="anggaran-h1">
      <h2 class="fw-bold">Satuan Polisi Pamong Praja</h2>
    </div>


		
		<div class="anggaran-p">
			<p class="fw-medium">Tahun Anggaran ...</p>
		</div>
				<div class="anggaran-value d-flex justify-content-center">
					<h1 class="fw-semibold">Rp. ...</h1>
					<!-- <span class="text-anggaran">Ubah</span> -->
				</div>	
    <!-- card table -->
    <div class="card-kegiatan-container">
      <div class="card card-kegiatan">
        <div class="card-body">
          <!-- table -->
          <div class="d-flex justify-content-between py-2">
            <h4 class="text-start program-kerja fw-bold h4-programKerja">
              Program Kerja
            </h4>



            
          </div>

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr></tr>
              </thead>
							

							

              <tbody class="align-middle" id="myTable">
								<tr class="text-start">
									<td>...</td>
								</tr>	
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>


		 <!-- Modal Tambah Anggaran-->
    <div
      class="modal fade"
      id="TambahAnggaran"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">
              Tambah Anggaran
            </h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
					<?= form_open('index.php/C_anggaran/insert_anggaran') ?>
          <div class="modal-body">
						<div class="mb-3">
							<label for="" class="fw-medium">Tahun Anggaran</label>
							<input type="text" class="form-control" min="1900" maxlength="4" max="2099" step="1" placeholder="2002" name="tahun" required>
							<?= form_error('tahun') ?>
            </div>
            <div class="mb-3">
							<label for="" class="fw-medium">Jumlah Anggaran</label>
              <input type="Number" class="form-control" placeholder="200000" name="jumlah" required/>
            </div>
          </div>
          <div class="modal-footer">
						<button type="submit" class="btn btn-primary">Simpan</button>
          </div>
				<?php form_close(); ?>
				
			</div>
		</div>
	</div>
