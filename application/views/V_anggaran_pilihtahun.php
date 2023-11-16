
    <!-- button kembali ke halaman utama -->
    <div class="back-container d-flex justify-content-between">
      <div class="back-sizing">
        <a href="<?= base_url('index.php/C_dashboard/pilihtahun/'.$value->id_anggaran)?>" class="text-decoration-none">
          <div class="d-flex justify-content-center">
            <img src="<?= base_url('assets/arrow-back.svg') ?>" alt="" />
            <p  class="pt-3 back-texting text-decoration-none">Kembali Ke Halaman Utama</p>
          </div>
        </a>
      </div>
			<?php if($session_user->status == 2)  { ?>

			<div class="btn-tambahKegiatan">
				<a href="<?= base_url('index.php/C_anggaran') ?>">
					<button
          class="btn btn-primary btn-tmbhKeg text-white"
					>
          Tambah Anggaran
        </button>
			</a>
     </div>
			 <?php } ?>

    </div>

     
    <div class="d-flex justify-content-end">
      <?php if ($session_user->status == 2) {?>
      <div class="btn-tambahKegiatan">
        <button
          class="btn btn-warning btn-tmbhKeg text-white"
          data-bs-toggle="modal"
          data-bs-target="#ubahAnggaran<?= $anggarantahunpt->id_anggaran; ?>"
        >
          Ubah Anggaran
        </button>
     </div>
    <?php }else{ ?>
      <?php } ?>
			<div class="anggaran-container">
				<div class="anggaran-select">
						<select class="form-select" name="" id="" onchange="location = this.value;">
					<option class="text-center">Pilih Tahun</option>
					<?php foreach($anggaranpt as $value) { ?>
									<option value="<?= base_url('index.php/C_anggaran/pilihTahun/'. $value->id_anggaran) ?>" class="text-center">
										<?= $value->tahun?>
								</option>
								<?php } ?>
						</select>
          </div>
        </div>
	  
    </div>


    <div class="anggaran-h1">
      <h2 class="fw-bold">Satuan Polisi Pamong Praja</h2>
    </div>


		
		<div class="anggaran-p">
			<p class="fw-medium">Tahun Anggaran <?= $anggarantahunpt->tahun ?></p>

		</div>
				<div class="anggaran-value d-flex justify-content-center">
					<h1 class="fw-semibold">Rp. <?= number_format($anggarantahunpt->jumlah,2) ?></h1>
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

            <button
              class="btn btn-primary rounded-3"
              data-bs-toggle="modal"
              data-bs-target="#TambahProgram"
            >
              Tambah Program Kerja
            </button>
          </div>

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr></tr>
              </thead>
							<?php foreach($programpt as $key) { ?>

							

              <tbody class="align-middle" id="myTable">
								<tr class="text-start">
									
									<td><?= $key->program_kerja?></td>
									<td class="text-end">
										<button class="btn btn-warning" 
										data-bs-toggle="modal"
            				data-bs-target="#ubahProgramKerja<?= $key->id_program; ?>">Ubah</button>
										<button class="btn btn-danger"
										data-bs-toggle="modal"
            data-bs-target="#hapusProgramKerja<?= $key->id_program; ?>">Hapus</button>
									</td>
								</tr>	
              </tbody>

							<?php } ?>
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
          <div class="modal-body">
            <div class="mb-3">
              <label for="" class="fw-medium">Tahun Anggaran</label>
              <input type="date" class="form-control" placeholder="cth: 2002" />
            </div>
            <div class="mb-3">
              <label for="" class="fw-medium">Jumlah Anggaran</label>
              <input type="Number" class="form-control" placeholder="200000" />
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </div>
    </div>

    

    <!-- Modal Ubah Anggaran-->

    <div
      class="modal fade"
      id="ubahAnggaran<?= $anggarantahunpt->id_anggaran; ?>"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">
              Ubah Anggaran
            </h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
          <form action="<?= base_url('index.php/C_anggaran/update_anggaran') ?>" method="post">
            <div class="mb-3">
              <input 
              type="hidden" 
              value="<?= $anggarantahunpt->id_anggaran; ?> " 
              name="id_anggaran"
              >
              <label for="" class="fw-medium">Tahun Anggaran</label>
              <input type="number" class="form-control" placeholder="cth: 2002"
              name="tahun"
              value="<?= $anggarantahunpt->tahun; ?>"
              />
            </div>
            <div class="mb-3">
              <label for="" class="fw-medium">Jumlah Anggaran</label>
              <input type="Number" class="form-control" placeholder="200000" 
              name="jumlah"
              value="<?= $anggarantahunpt->jumlah; ?>"/>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Simpan
            </button>
              </form>
          </div>
        </div>
      </div>
    </div>

    <!-- modal tambah program kerja -->
    <div
      class="modal fade"
      id="TambahProgram"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">
              Tambah Program Kerja
            </h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
          <form action="<?= base_url('index.php/C_anggaran/insert_program') ?>" method="post">
							
							<div class="mb-3">
								<label for="" class="fw-medium">Program Kerja</label>
								<input
                type="text"
                class="form-control"
                placeholder="Isi Program Kerja"
								name="program_kerja"
								/>
							</div>
							<div class="mb-3">
								<label for="" class="fw-medium">Tahun</label>
								<select name="id_anggaran" class="form-select">
									<option selected  value="<?= $anggarantahunpt->id_anggaran ?>"><?=$anggarantahunpt->tahun?></option>
								</select>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</form>

        </div>
      </div>
    </div>
    <!-- modal ubah program kerja -->
    <?php foreach ($programpt as  $p) { ?>
    

    <div
      class="modal fade"
      id="ubahProgramKerja<?= $p->id_program; ?>" 
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">
              Tambah Program Kerja
            </h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
          <form action="<?= base_url('index.php/C_anggaran/update_program') ?>" method="post">
            <div class="mb-3">
              <label for="" class="fw-medium">Program Kerja</label>
              <input type="hidden"
              name="id_program"
              value="<?= $p->id_program; ?>"
              />
              
              <input
                type="text"
                class="form-control"
                placeholder="Isi Program Kerja"
                name="program_kerja"
                value="<?= $p->program_kerja; ?>"
              />
            </div>
            <div class="mb-3">
								<label for="" class="fw-medium">Tahun</label>
								<select name="id_anggaran" class="form-select">
									<option selected  value="<?= $p->id_anggaran ?>"><?=$p->tahun?></option>
								</select>
							</div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </div>
        
      </div>
    </div></form>
  <?php } ?>


		<!-- Modal Hapus Program Kerja-->
    <?php foreach ($programpt as $p) { ?>
   
    
    <div
      class="modal fade"
      id="hapusProgramKerja<?= $p->id_program; ?>"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">
              Hapus Anggaran
            </h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
          <form action="<?= base_url('index.php/C_anggaran/delete_program/'.$p->id_program) ?>" method="post">
            <p>Apakah Anda yakin ingin menghapus data ini ?</p>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Hapus</button>
          </div>
        </div>
    </form>
      </div>
    </div>
  <?php } ?>
