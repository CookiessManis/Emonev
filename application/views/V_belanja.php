<?php 

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
if($this->session->flashdata('error')){
echo '<div class="w-50 mx-auto py-3">
	<div class="bg-warning rounded alert alert-warning alert-dismissible fade show">
		<span class="text-center text-gray fw-semibold ">❌ ';
		echo $this->session->flashdata('error');
echo '</span>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
</div>';
}

?>
<?php if ($belanja2 == null) {?>
<!-- button kembali ke halaman utama -->
<div class="back-container d-lg-flex justify-content-between">
    <div class="back-sizing ">
        <a href="<?= base_url('index.php/C_dashboard/pilihtahun/'.$value->id_anggaran); ?>" class="text-decoration-none">
            <div class="d-flex justify-content-center">
                <img src="<?= base_url('assets/img/arrow-back.svg') ?>" alt="" />
                <p class="pt-3 back-texting">Kembali Ke Halaman Utama</p>
            </div>
        </a>
    </div>
    <div class="btn-tambahKegiatan">
        <?php if ($kegiatanb->username == $session_user->username OR $session_user->status == 2 ) { ?>
          <button class="btn btn-primary btn-tmbhKeg" data-bs-toggle="modal" data-bs-target="#ModalTambah">
            Tambah Belanja
          </button>  
        <?php }else{ ?>

        <?php } ?>
    </div>
</div>

<div class="px-5 pt-4 ">
			<h4 class='seksi fw-bold align-middle' >
				Sub Kegiatan : <?= $subKegiatan->sub_kegiatan ?>
		</h4>
</div>

<!-- card table -->
<div class="card-kegiatan-container">
    <div class="card card-kegiatan">
        <div class="card-body">
            <div class="d-lg-flex justify-content-between">
                <p class="card-table-texting fw-bold align-middle">Belanja</p>
                <!-- search -->
                <div class="d-flex">
                <div class="pe-lg-5 py-3 py-lg-0">
                <select class="form-select border border-black">
                  <option class="text-center">pilih bulan</option>
                  <?php foreach ($bulan as $b) { ?>
                    <option value="<?= $b->id_bulan; ?>"><?= $b->nama_bulan; ?></option>
                 <?php  } ?>
                </select>
              </div>
              
            </div>
            </div>

            <!-- table -->

            <div class="table-responsive">
                <table class="table table-striped"> 
                <thead>
                        <tr>
                            <th class="align-middle border border-black px-4 py-4 text-center">
                                Nomer Rekening
                            </th>
                            <th class="align-middle border border-black px-4 text-center">
                                Rincian Belanja
                            </th>
                            <th class="align-middle border border-black px-4 text-center">
                                Pagu (Tunai)
                            </th>
                            <th class="align-middle border border-black px-4 text-center">
                                NPD (Nota Pencairan Dana)
                            </th>
                            <th class="align-middle border border-black px-4 text-center">
                                Target
                            </th>
                            <th class="align-middle border border-black px-4 text-center">
                                Target (Fisik)
                            </th>
                            <th class="align-middle border border-black px-4 text-center">
                                Realisasi
                            </th>                           
                            <th class="align-middle border border-black px-4 text-center">
                                Realisasi (Fisik)
                            </th>
                            <th class="align-middle border border-black px-4 text-center">
                                Realisasi (%)
                            </th>
                            <th class="align-middle border border-black px-4 text-center">
                                Realisasi fisik (%)
                            </th>
							 <th class="align-middle border border-black px-4 text-center">
                                Bulan
                            </th>
                            <th class="align-middle border border-black px-4 text-center">
                                Detail
                            </th>
                        </tr>
                    </thead>

                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah -->
<!-- Modal -->
<div class="modal fade" id="ModalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">
                    Kelola Sub Belanja
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('index.php/C_belanja/insert') ?>" method="post">
                    <div class="mb-3">
                        <label for="">Nomer Rekening</label>
                        <input 
                        type="text" 
                        class="form-control"
                        name="no_rek" 
                        placeholder="Isi Nomer Rekening" 
                        />
                    </div>
                    <div class="mb-3">
                        <label for="">Rincian Belanja</label>
                        <input 
                        type="text"
                        name="rincian" 
                        class="form-control" 
                        placeholder="Isi Rincian Belanja" 
                        />
                    </div>
                    <div class="mb-3">
                        <label for="">Pagu (Tunai)</label>
                        <input 
                        type="number"
                        name="pagu" 
                        class="form-control" 
                        placeholder="Isi Pagu" 
                        />
                    </div>
                    <div class="mb-3">
                        <label for="">NPD (Nota Pencairan Dana)</label>
                        <input 
                        type="number"
                        name="npd" 
                        class="form-control" 
                        placeholder="Isi NPD" 
                        />
                    </div>
                    <div class="mb-3">
                        <label for="">Target</label>
                        <input 
                        type="number"
                        name="target" 
                        class="form-control" 
                        placeholder="Isi Target" 
                        />
                    </div>
                    <div class="mb-3">
                        <label for="">Target fisik</label>
                        <input 
                        type="number"
                        name="target_fisik" 
                        class="form-control" 
                        placeholder="Isi Target Fisik" 
                        />
                    </div>
                    
                    <div class="mb-3">
                        <label for="">Realisasi</label>
                        <input 
                        type="number"
                        name="realisasi" 
                        class="form-control" 
                        placeholder="Isi Realisasi" 
                        />
                        
                        <input type="hidden"
                        name="id_kegiatan"
                        value="<?= $kegiatanb->id_kegiatan; ?>">
                        <input 
                        hidden
                        type="text" 
                        name="username"
                        id=""
                        value="<?= $session_user->username; ?>">

                        <select name="id_anggaran" hidden id="">
							<?php foreach($anggaran as $value) { ?>
								<option selected value="<?= $value->jumlah ?>"><?= $value->jumlah ?></option>
							<?php }?>
						</select>

							<input type="text" hidden value="<?= $kegiatanb->id_anggaran ?>" name="id_ang">
                    </div>
                    <div class="mb-3">
                        <label for="">Realisasi fisik</label>
                        <input 
                        type="number"
                        name="realisasi_fisik" 
                        class="form-control" 
                        placeholder="Isi Realisasi fisik" 
                        />
                    </div>
                    <div class="mb-3">
                        <label for="">bentuk fisik</label>
                        <input 
                        type="text"
                        name="nama_fisik" 
                        class="form-control" 
                        placeholder="Isi bentuk fisik(cth: box/pcs/unit)" 
                        />
                    </div>
                    <div class="mb-3">
                    <label for="">Bulan</label>
              <select class="form-select" aria-label="Default select example" name="id_bulan" required>
                <option disabled selected>Pilih Bulan</option>
                <option value="1">Januari</option>
                <option value="2">Febuari</option>
                <option value="3">Maret</option>
                <option value="4">April</option>
                <option value="5">Mei</option>
                <option value="6">juni</option>
                <option value="7">juli</option>
                <option value="8">agustus</option>
                <option value="9">september</option>
                <option value="10">oktober</option>
                <option value="11">november</option>
                <option value="12">desember</option>
              </select>
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="button-kegiatan btn btn-secondary px-4" data-bs-dismiss="modal">
                    Batal
                </button>
                <button type="submit" class="button-kegiatan btn btn-primary px-4">
                    Simpan
                </button>
            </div>
		</form>
        </div>
    </div>
</div>
<?php }else{ ?>
<!-- button kembali ke halaman utama -->
<div class="back-container d-flex justify-content-between">
    <div class="back-sizing">
        <a href="<?= base_url('index.php/C_dashboard/pilihtahun/'.$value->id_anggaran); ?>" class="text-decoration-none">
            <div class="d-flex justify-content-center">
                <img src="<?= base_url('assets/img/arrow-back.svg') ?>" alt="" />
                <p class="pt-3 back-texting">Kembali Ke Halaman Utama</p>
            </div>
        </a>
    </div>
    <div class="btn-tambahKegiatan">
    <?php if ($kegiatanb->username == $session_user->username OR $session_user->status == 2) { ?>
          <button class="btn btn-primary btn-tmbhKeg" data-bs-toggle="modal" data-bs-target="#ModalTambah">
            Tambah Belanja
          </button>  
        <?php }else{ ?>
        <?php } ?>
    </div>
</div>

 


<div class="px-5 pt-4 ">
			<h4 class='seksi fw-bold align-middle' >
				Sub Kegiatan : <?= $subKegiatan->sub_kegiatan ?>
		</h4>
</div>

<?php foreach ($belanja as $ba) { ?>
                            <tr>
								<?php
							// Inisialisasi variabel $sisa di luar loop
							 $sisa = 0;
        					$found = false;

							foreach ($total_realisasi as $row) {

								// Periksa kondisi
								if ($row->id_ang == $ba->id_ang && !$found) {

									// Hitung nilai $sisa dan simpan di variabel
									$sisa = $row->id_anggaran - $row->total_realisasi;

									// Set flag to true to prevent further matches
									$found = true;

									// Hentikan loop setelah menemukan data yang sesuai
									break;
								}
							}
						}

							// Variabel $sisa sekarang berisi nilai yang dihitung di dalam loop
							?>
							
							<div class="px-5 ">
							<h4 class='seksi fw-bold align-middle' >
								<?=  "Sisa Anggaran: Rp." . number_format($sisa,2)?>
							</h4>
							</div>



<!-- card table -->
<div class="card-kegiatan-container">
	<div class="card card-kegiatan">
		<div class="card-body">
			<div class="d-flex justify-content-between">
				<p class="card-table-texting fw-bold align-middle">Belanja</p>
                <!-- search -->
                <div class="d-flex">
					<div class="pe-5">
						
						<!--  -->
						
			<div class="d-flex">
				<div class="search-container px-5">
					<div class="input-group">
						<button
						class="btn btn-outline-secondary"
						type="button"
                    id="button-addon1"
					>
                    🔍
				</button>
				<input
				id="myInput"
				onkeyup="myFunction()"
				type="text"
                    class="form-control border border-black"
                    aria-label="Example text with button addon"
                    aria-describedby="button-addon1"
                    placeholder="Cari Data Belanja"
					/>
                </div>
			</div>
			
			<div class="px-4">
				<select class="form-select border border-black" id="bulan">
				<option class="text-center">pilih bulan</option>
				<?php foreach ($bulan as $b) { ?>
                    <option value="<?= $b->id_bulan; ?>"><?= $b->nama_bulan; ?></option>
					<?php  } ?>
                </select>
			</div>
			</div>
			
			
			
			
			<!--  -->
			
		</div>
		
            </div>
            </div>

			
            <!-- table -->

            <div class="table-responsive">
                <table class="table table-striped" id="belanja"> 
                    <thead>
                        <tr>
                            <th class="align-middle border border-black px-4 py-4 text-center">
                                Nomer Rekening
                            </th>
                            <th class="align-middle border border-black px-4 text-center">
                                Rincian Belanja
                            </th>
                            <th class="align-middle border border-black px-4 text-center">
                                Pagu (Tunai)
                            </th>
                            <th class="align-middle border border-black px-4 text-center">
                                NPD (Nota Pencairan Dana)
                            </th>
                            <th class="align-middle border border-black px-4 text-center">
                                Target
                            </th>
                            <th class="align-middle border border-black px-4 text-center">
                                Target (Fisik)
                            </th>
                            <th class="align-middle border border-black px-4 text-center">
                                Realisasi
                            </th>                           
                            <th class="align-middle border border-black px-4 text-center">
                                Realisasi (Fisik)
                            </th>
                            <th class="align-middle border border-black px-4 text-center">
                                Realisasi (%)
                            </th>
                            <th class="align-middle border border-black px-4 text-center">
                                Realisasi fisik (%)
                            </th>
							 <th class="align-middle border border-black px-4 text-center">
                                Bulan
                            </th>
                            <th class="align-middle border border-black px-4 text-center">
                                Detail
                            </th>
                        </tr>
                    </thead>

					
                    
                    <tbody class="align-middle" id="myTable">
                        <?php foreach ($belanja as $ba) { ?>
                            <?php
                            $a = $ba->target != 0 ? number_format(($ba->realisasi / $ba->target) * 100) : null;
$b = $ba->target_fisik != 0 ? number_format(($ba->realisasi_fisik / $ba->target_fisik) * 100) : null;
                            ?>
                            
							

                            <tr>
								<td><?= $ba->no_rek; ?></td>
                                <td><?= $ba->rincian; ?></td>
                                <td>Rp.<?= number_format($ba->pagu,2); ?></td>
                                <td>Rp.<?= number_format($ba->npd,2) ?></td>
                                <td>Rp.<?= number_format($ba->target,2) ?></td>
                                <td><?= number_format($ba->target_fisik) ?> <?= $ba->nama_fisik; ?></td>
                                <td>Rp.<?= number_format($ba->realisasi,2) ?></td>
                                <td><?= number_format($ba->realisasi_fisik) ?> <?= $ba->nama_fisik; ?></td>
                                <td><?= $a; ?>%</td>
                                <td><?= $b; ?>%</td>                                
                                <td><?= $ba->nama_bulan ?></td>
                                <td>
                                <?php if ($ba->username == $session_user->username OR $session_user->status == 2) {?>
                                        <button 
                                    class="btn btn-warning text-white text-center" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#ModalUbah<?= $ba->id_belanja; ?>"
                                    >
                                        <span class="text-black text-center">📝</span>Ubah
                                    </button>
                                    <?php }else{ ?>
                                    
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- Modal Tambah -->
<!-- Modal -->
<div class="modal fade" id="ModalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">
                    Kelola Sub Belanja
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('index.php/C_belanja/insert') ?>" method="post">
                    <div class="mb-3">
                        <label for="">Nomer Rekening</label>
                        <input 
                        type="text" 
                        class="form-control"
                        name="no_rek" 
                        placeholder="Isi Nomer Rekening" 
                        />
                    </div>
                    <div class="mb-3">
                        <label for="">Rincian Belanja</label>
                        <input 
                        type="text"
                        name="rincian" 
                        class="form-control" 
                        placeholder="Isi Rincian Belanja" 
                        />
                    </div>
                    <div class="mb-3">
                        <label for="">Pagu (Tunai)</label>
                        <input 
                        type="number"
                        name="pagu" 
                        class="form-control" 
                        placeholder="Isi Pagu" 
                        />
                    </div>
                    <div class="mb-3">
                        <label for="">NPD (Nota Pencairan Dana)</label>
                        <input 
                        type="number"
                        name="npd" 
                        class="form-control" 
                        placeholder="Isi NPD" 
                        />
                    </div>
                    <div class="mb-3">
                        <label for="">Target</label>
                        <input 
                        type="number"
                        name="target" 
                        class="form-control" 
                        placeholder="Isi Target" 
                        />
                    </div>
                    <div class="mb-3">
                        <label for="">Target fisik</label>
                        <input 
                        type="number"
                        name="target_fisik" 
                        class="form-control" 
                        placeholder="Isi Target Fisik" 
                        />
                    </div>
                    
                    <div class="mb-3">
                        <label for="">Realisasi</label>
                        <input 
                        type="number"
                        name="realisasi" 
                        class="form-control" 
                        placeholder="Isi Realisasi" 
                        />
                        
                        <input type="hidden"
                        name="id_kegiatan"
                        value="<?= $kegiatanb->id_kegiatan; ?>">
                        <input 
                        hidden
                        type="text" 
                        name="username"
                        id=""
                        value="<?= $session_user->username; ?>">

                        <select name="id_anggaran" hidden id="">
							<?php foreach($anggaran as $value) { ?>
								<option selected value="<?= $value->jumlah ?>"><?= $value->jumlah ?></option>
							<?php }?>
						</select>

							<input type="text" hidden value="<?= $kegiatanb->id_anggaran ?>" name="id_ang">
                    </div>
                    <div class="mb-3">
                        <label for="">Realisasi fisik</label>
                        <input 
                        type="number"
                        name="realisasi_fisik" 
                        class="form-control" 
                        placeholder="Isi Realisasi fisik" 
                        />
                    </div>
                    <div class="mb-3">
                        <label for="">bentuk fisik</label>
                        <input 
                        type="text"
                        name="nama_fisik" 
                        class="form-control" 
                        placeholder="Isi bentuk fisik(cth: box/pcs/unit)" 
                        />
                    </div>
                    <div class="mb-3">
                    <label for="">Bulan</label>
              <select class="form-select" aria-label="Default select example" name="id_bulan" required>
                <option disabled selected>Pilih Bulan</option>
                <option value="1">Januari</option>
                <option value="2">Febuari</option>
                <option value="3">Maret</option>
                <option value="4">April</option>
                <option value="5">Mei</option>
                <option value="6">juni</option>
                <option value="7">juli</option>
                <option value="8">agustus</option>
                <option value="9">september</option>
                <option value="10">oktober</option>
                <option value="11">november</option>
                <option value="12">desember</option>
              </select>
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="button-kegiatan btn btn-secondary px-4" data-bs-dismiss="modal">
                    Batal
                </button>
                <button type="submit" class="button-kegiatan btn btn-primary px-4">
                    Simpan
                </button>
            </div>
		</form>
        </div>
    </div>
</div>

<!-- Modal Ubah -->
<!-- Modal -->
<?php
foreach ($belanja as $b) { ?>
    <div class="modal fade" id="ModalUbah<?= $b->id_belanja; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        Kelola Sub Belanja
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
				<div class="text-danger px-3" style="font-size:15px;">Mengubah Data Akan Merusak Penjumlahan Sisa Anggaran Sebagian</div>
                <div class="modal-body">
                    <form action="<?= base_url('index.php/C_belanja/update') ?>" method="post">
                        <div class="mb-3">
                            <label for="">Nomer Rekening</label>
                            <input type="hidden" name="id_belanja" value="<?= $b->id_belanja; ?>" />
                            <input type="text" name="no_rek" class="form-control" value="<?= $b->no_rek; ?>" placeholder="Isi Nomer Rekening" />
                        </div>
                        <div class="mb-3">
                            <label for="">Rincian Belanja</label>
                            <input type="text" name="rincian" class="form-control" placeholder="Isi Rincian Belanja" value="<?= $b->rincian; ?>" />
                        </div>
                        <div class="mb-3">
                            <label for="">Pagu</label>
                            <input type="text" name="pagu" class="form-control" placeholder="Isi Pagu" value="<?= $b->pagu; ?>" />
                        </div>
                        <div class="mb-3">
                            <label for="">NPD</label>
                            <input type="text" name="npd" class="form-control" placeholder="Isi NPD" value="<?= $b->npd; ?>" />
                        </div>
                        <div class="mb-3">
                            <label for="">Target</label>
                            <input type="text" name="target" class="form-control" placeholder="Isi Target" value="<?= $b->target; ?>" />
                        </div>
                        <div class="mb-3">
                            <label for="">target fisik</label>
                            <input type="text" name="target_fisik" class="form-control" placeholder="Isi Target" value="<?= $b->target_fisik; ?>" />
                        </div>
                        <div class="mb-3">
                            <label for="">Realisasi</label>
                            <input type="text" name="realisasi" class="form-control" placeholder="Isi Realisasi" value="<?= $b->realisasi; ?>" />
                        </div>
                        <div class="mb-3">
                            <label for="">Realisasi fisik</label>
                            <input type="text" name="realisasi_fisik" class="form-control" placeholder="Isi Realisasi" value="<?= $b->realisasi_fisik; ?>" />
                        </div>
                        <div class="mb-3">
                            <label for="">bentuk fisik</label>
                            <input type="text" name="nama_fisik" class="form-control" placeholder="Isi Realisasi" value="<?= $b->nama_fisik; ?>" />
                        </div>
						
						<select name="id_anggaran" hidden id="">
							<?php foreach($anggaran as $value) { ?>
								<option selected value="<?= $value->jumlah ?>"><?= $value->jumlah ?></option>
							<?php }?>
						</select>

						<input type="text" hidden value="<?= $kegiatanb->id_anggaran ?>" name="id_ang">

                        <input type="hidden" name="id_kegiatan" value="<?= $b->id_kegiatan; ?>" >
                        <div class="mb-3">
                            <label for="">Tanggal</label>
                            <select name="id_bulan" class="form-select" aria-label="Default select example">
                                <option selected value="<?= $b->id_bulan; ?>"><?= $b->nama_bulan; ?></option>
                                <option >Pilih Bulan</option>
                                    <option value="1">Januari</option>
                                    <option value="2">Febuari</option>
                                    <option value="3">Maret</option>
                                    <option value="4">April</option>
                                    <option value="5">Mei</option>
                                    <option value="6">juni</option>
                                    <option value="7">juli</option>
                                    <option value="8">agustus</option>
                                    <option value="9">september</option>
                                    <option value="10">oktober</option>
                                    <option value="11">november</option>
                                    <option value="12">desember</option>
                            </select>
                        </div>
                        
                </div>
                <div class="modal-footer justify-content-between">
                    
                      <a href="<?= base_url('index.php/C_belanja/delete/' . $b->id_belanja) ?> " class="button-kegiatan btn btn-danger px-4"> Hapus</a> 
                    
                    <div class="justify-content-around">
                        <button type="button" class="button-kegiatan btn btn-secondary px-4" data-bs-dismiss="modal">
                            Batal
                        </button>
                        <button type="submit" class="button-kegiatan btn btn-primary px-4">
                            Simpan
                        </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){
        $("#bulan").change(function(){
            belanja();
        });
    });

    function belanja(){
        var bulan = $("#bulan").val();
        $.ajax({
            <?php foreach($belanja as $b ){ ?>
                url: "<?= base_url('index.php/C_belanja/load_bulan/' . $b->id_kegiatan) ?>",
           <?php  } ?>
           data: "bulan=" + bulan,
           success:function(data){
            $("#belanja tbody").html(data);
          }
      })
    }
</script>
<?php } ?>
