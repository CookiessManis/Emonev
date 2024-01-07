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

if($this->session->flashdata('gagal')){
echo '<div class="w-50 mx-auto py-3">
	<div class="bg-danger rounded alert alert-warning alert-dismissible fade show">
		<span class="text-center text-white fw-semibold ">❌ ';
		echo $this->session->flashdata('gagal');
echo '</span>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
</div>';
}

?>
   <?php if ($kegiatan2 == null) {?>
     <!-- button kembali ke halaman utama -->
     <div class="back-container d-lg-flex justify-content-between">
      <div class="back-sizing">
        <a href="<?= base_url('index.php/C_dashboard/pilihtahun/'.$value->id_anggaran); ?>" class="text-decoration-none">
          <div class="d-flex justify-content-center">
            <img src="<?= base_url('assets/img/arrow-back.svg') ?>" alt="" />
            <p class="pt-3 back-texting">Kembali Ke Halaman Utama</p>
          </div>
        </a>
      </div>
      <div class="btn-tambahKegiatan">
        <button
          class="btn btn-primary btn-tmbhKeg"
          data-bs-toggle="modal"
          data-bs-target="#TambahModal"
        >
          Tambah Kegiatan
        </button>
      </div>
    </div>
    <!-- card table -->
    <div class="card-kegiatan-container">
      <div class="card card-kegiatan">
        <div class="card-body">
          <div class="d-lg-flex justify-content-between">
            <p class="card-table-texting fw-bold align-middle">Sub Kegiatan tahun <?= $anggarank->tahun; ?> </p>
            <div class="d-lg-flex justify-content-between">
              <div class="pe-5">
                <select class="form-select border border-black" >
                  <option class="text-center">pilih seksi</option>
                  <?php foreach ($user as $u) { ?>
                    <option selected value="<?= $u->username; ?>"><?= $u->username; ?></option>
                 <?php  } ?>
                </select>
              </div>
              <div class="search-container">
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
                    placeholder="Cari Data Kegiatan"
                  />
                </div>
              </div>
            </div>
          </div>

          <!-- table -->

          <div class="table-responsive">
            <table class="table table-striped" >
              <thead>
                <tr>
                  <th class="align-middle border border-black text-center w-25">
                    Nomor Sub Kegiatan
                  </th>
                  <th
                    colspan="4"
                    class="text-center border border-black align-middle w-50"
                  >
                    Sub Kegiatan
                  </th>
                  <th class="text-center border border-black align-middle w-50">
                    Detail
                  </th>
                </tr>
              </thead>
              
              <tbody class="align-middle myTable" id="myTable">
              <?php foreach ($kegiatan as $k) { ?>
                <tr class="text-center">
                  <!-- untuk ke halaman belanja ubah link di onklik -->
                  <td onclick="location.href='<?= base_url('index.php/C_belanja/index/'.$k->id_kegiatan) ?>'" class="td-pointer">
                    <?= $k->no_kegiatan; ?>
                  </td>
                  <td onclick="location.href='<?= base_url('index.php/C_belanja/index/'.$k->id_kegiatan) ?>'" colspan="4"><?= $k->sub_kegiatan; ?></td>
                  <td>
                    <button
                      class="btn btn-warning"
                      data-bs-toggle="modal"
                      data-bs-target="#editModal<?= $k->id_kegiatan; ?>"
                    >
                      Edit
                    </button>
                    <button
                      class="btn btn-danger"
                      data-bs-toggle="modal"
                      data-bs-target="#hapusModal<?= $k->id_kegiatan; ?>"
                    >
                      Hapus
                    </button>
                  </td>
                </tr>
               <?php } ?>
              </tbody>
            </table> 
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Tambah Kegiatan-->
    <div
      class="modal fade"
      id="TambahModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">
              Kelola Kegiatan
            </h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <form action="<?= base_url('index.php/C_kegiatan/insert') ?>" method="post">
          <div class="modal-body">
            <div class="mb-3">
              <label for="" class="fw-medium">Nomer Sub Kegiatan</label>
              <input
                name="no_kegiatan"
                type="text"
                class="form-control"
                placeholder="Isi Nomer Sub Kegiatan"
								required
              />
            </div>
            <div class="mb-3">
              <label for="" class="fw-medium">Sub Kegiatan</label>
              <input
                name="sub_kegiatan"
                type="text"
                class="form-control"
                placeholder="Isi Sub Kegiatan "
								required
              />
              <input  
                hidden  
                type="text" 
                name="username" 
                class="form-control"   
                value="<?= $session_user->username; ?>"
								
               >
              
               <input 
               hidden
               type="text" 
               name="id_anggaran" 
               value="<?= $anggarank->id_anggaran; ?>">
            </div>
         
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="button-kegiatan btn btn-secondary px-4"
              data-bs-dismiss="modal"
            >
              Batal
            </button>
            <button type="submit" class="button-kegiatan btn btn-primary px-4">
              Simpan
            </button>
          </div>
        </div>
      </div>
    </div>
    </form>

    <!-- Modal Edit Kegiatan -->
    <?php foreach ($kegiatan as $k) {?>
        
    
    <div
      class="modal fade"
      id="editModal<?= $k->id_kegiatan; ?>"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">
              Kelola Sub Kegiatan
            </h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <form action="<?= base_url('index.php/C_kegiatan/update') ; ?>" method="post">
          <div class="modal-body">
            <div class="mb-3">
                <input 
              type="hidden"
              name="id_kegiatan"
              value="<?= $k->id_kegiatan; ?>"
              class="form-control"

              >
              <input type="hidden"
              name="id_anggaran"
              value="<?= $k->id_anggaran; ?>">
              <label for="">Nomer Sub Kegiatan</label>
              
              <input
                type="text"
                name="no_kegiatan"
                value="<?= $k->no_kegiatan; ?>"
                class="form-control"
                placeholder="Isi Nomer Sub Kegiatan"
								required
              />
            </div>
            <div class="mb-3">
              <label for=""> Sub Kegiatan</label>
              <input
                type="text"
                name="sub_kegiatan"
                value="<?= $k->sub_kegiatan; ?>"
                class="form-control"
                placeholder="Isi Sub Kegiatan"
								required
              />
            </div>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Close
            </button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </div>
        </form> 
      </div>
    </div>
    <?php } ?>
    <!-- Modal Hapus Kegiatan -->
    <?php foreach ($kegiatan as $k ) { ?>
      
    
    <div
      class="modal fade"
      id="hapusModal<?= $k->id_kegiatan; ?>"
      data-bs-backdrop="static"
      data-bs-keyboard="false"
      tabindex="-1"
      aria-labelledby="staticBackdropLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">
              Konfirmasi Hapus
            </h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <form action="<?= base_url('index.php/C_kegiatan/delete/'.$k->id_kegiatan) ?>" method="post">
          <div class="modal-body">
            <h5 class="fw-bold">
              Apakah Anda Yakin Akan Menghapus Data "Dinas"?
            </h5>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Kembali
            </button>
            <button type="submit" class="btn btn-danger">Konfirmasi</button>
          </div>
        </div>
        </form>
      </div>
    </div>
   <?php } ?>

   <?php }else{ ?>
   <!-- button kembali ke halaman utama -->
    <div class="back-container d-lg-flex justify-content-between">
      <div class="back-sizing">
        <a href="<?= base_url('index.php/C_dashboard/pilihtahun/'.$value->id_anggaran); ?>" class="text-decoration-none">
          <div class="d-flex justify-content-center">
            <img src="<?= base_url('assets/img/arrow-back.svg') ?>" alt="" />
            <p class="pt-3 back-texting">Kembali Ke Halaman Utama</p>
          </div>
        </a>
      </div>
      <div class="btn-tambahKegiatan">
        <button
          class="btn btn-primary btn-tmbhKeg"
          data-bs-toggle="modal"
          data-bs-target="#TambahModal"
        >
          Tambah Kegiatan
        </button>
      </div>
    </div>

		<div class="px-5 pt-4 ">
			<h4 class='seksi fw-bold align-middle' >
				SEKSI : <?= $session_user->username ?>
			</h4>
		</div>

		 <?php $tes_sisa = $dashboard_row->jumlah - $realisasi->realisasi ?>
								
		<div class="px-5 pt-4 ">
			<h4 class='seksi fw-bold align-middle' >
				Sisa Anggaran : Rp.<?= number_format($tes_sisa,2) ?>
			</h4>
		</div>


    <!-- card table -->
    <div class="card-kegiatan-container">
      <div class="card card-kegiatan">
        <div class="card-body">
          <div class="d-lg-flex justify-content-between">
            <p class="card-table-texting fw-bold align-middle">Sub Kegiatan tahun <?= $anggarank->tahun; ?> </p>
            <div class="d-lg-flex justify-content-lg-between">
              <div class="pe-5">
                <select class="seksi-pilih form-select border border-black" id="seksi">
                  <option class="text-center">pilih seksi</option>
                  <?php foreach ($user as $u) { ?>
                    <option value="<?= $u->username; ?>"><?= $u->username; ?></option>
                 <?php  } ?>
                </select>
              </div>
              <div class="search-container">
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
                    placeholder="Cari Data Kegiatan"
                  />
                </div>
              </div>
            </div>
          </div>

          <!-- table -->

          <div class="table-responsive">
            <table class="table table-striped" id="kegiatan">
              <thead>
                <tr>
                  <th class="align-middle border border-black text-center w-25">
                    Nomor Sub Kegiatan
                  </th>
                  <th
                    colspan="4"
                    class="text-center border border-black align-middle w-50"
                  >
                    Sub Kegiatan
                  </th>
                  <th class="text-center border border-black align-middle w-50">
                    Detail
                  </th>
                </tr>
              </thead>
              
              <tbody class="align-middle myTable" id="myTable">
              <?php foreach ($kegiatan as $k) { ?>
                <tr class="text-center">
									<!-- <?php if($k->username == $session_user->username) { ?> -->
                  <!-- untuk ke halaman belanja ubah link di onklik -->
                  <td onclick="location.href='<?= base_url('index.php/C_belanja/index/'.$k->id_kegiatan) ?>'" class="td-pointer">
                    <?= $k->no_kegiatan; ?>
                  </td>
                  <td onclick="location.href='<?= base_url('index.php/C_belanja/index/'.$k->id_kegiatan) ?>'" colspan="4"><?= $k->sub_kegiatan; ?></td>
								
                  <?php if ($k->username == $session_user->username OR $session_user->status ==  2 ) {?>
                    <td>
                    <button
                      class="btn btn-warning"
                      data-bs-toggle="modal"
                      data-bs-target="#editModal<?= $k->id_kegiatan; ?>"
                    >
                      Edit
                    </button>
                    <button
                      class="btn btn-danger"
                      data-bs-toggle="modal"
                      data-bs-target="#hapusModal<?= $k->id_kegiatan; ?>"
                    >
                      Hapus
                    </button>
										<!-- <?php } ?> -->
                  </td>

                 <?php }else{ ?>
                    <td>
                    
                  </td>
                  <?php } ?>
                </tr>
               <?php } ?>
              </tbody>
            </table> 
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Tambah Kegiatan-->
    <div
      class="modal fade"
      id="TambahModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">
              Kelola Kegiatan
            </h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <form action="<?= base_url('index.php/C_kegiatan/insert') ?>" method="post">
          <div class="modal-body">
            <div class="mb-3">
              <label for="" class="fw-medium">Nomer Sub Kegiatan</label>
              <input
                name="no_kegiatan"
                type="text"
                class="form-control"
                placeholder="Isi Nomer Sub Kegiatan" required
              />
            </div>
            <div class="mb-3">
              <label for="" class="fw-medium">Sub Kegiatan</label>
              <input
                name="sub_kegiatan"
                type="text"
                class="form-control"
                placeholder="Isi Sub Kegiatan " required
              />
              <input  
                hidden  
                type="text" 
                name="username" 
                class="form-control"   
                value="<?= $session_user->username; ?>"
               >
              
               <input
               hidden 
               type="text" 
               name="id_anggaran" 
               value="<?= $anggarank->id_anggaran; ?>">
            </div>
         
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="button-kegiatan btn btn-secondary px-4"
              data-bs-dismiss="modal"
            >
              Batal
            </button>
            <button type="submit" class="button-kegiatan btn btn-primary px-4">
              Simpan
            </button>
          </div>
        </div>
      </div>
    </div>
    </form>

    <!-- Modal Edit Kegiatan -->
    <?php foreach ($kegiatan as $k) {?>
        
    
    <div
      class="modal fade"
      id="editModal<?= $k->id_kegiatan; ?>"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">
              Kelola Sub Kegiatan
            </h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <form action="<?= base_url('index.php/C_kegiatan/update') ; ?>" method="post">
          <div class="modal-body">
            <div class="mb-3">
                <input 
              type="hidden"
              name="id_kegiatan"
              value="<?= $k->id_kegiatan; ?>"
              class="form-control"
              >
              <input type="hidden"
              name="id_anggaran"
              value="<?= $k->id_anggaran; ?>">
              <label for="">Nomer Sub Kegiatan</label>
              
              <input
                type="text"
                name="no_kegiatan"
                value="<?= $k->no_kegiatan; ?>"
                class="form-control"
                placeholder="Isi Nomer Sub Kegiatan"
              />
            </div>
            <div class="mb-3">
              <label for=""> Sub Kegiatan</label>
              <input
                type="text"
                name="sub_kegiatan"
                value="<?= $k->sub_kegiatan; ?>"
                class="form-control"
                placeholder="Isi Sub Kegiatan"
              />
            </div>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Close
            </button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </div>
        </form> 
      </div>
    </div>
    <?php } ?>
    <!-- Modal Hapus Kegiatan -->
    <?php foreach ($kegiatan as $k ) { ?>
      
    
    <div
      class="modal fade"
      id="hapusModal<?= $k->id_kegiatan; ?>"
      data-bs-backdrop="static"
      data-bs-keyboard="false"
      tabindex="-1"
      aria-labelledby="staticBackdropLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">
              Konfirmasi Hapus
            </h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <form action="<?= base_url('index.php/C_kegiatan/delete/'.$k->id_kegiatan) ?>" method="post">
          <div class="modal-body">
            <h5 class="fw-bold">
              Apakah Anda Yakin Akan Menghapus Data "<?= $k->sub_kegiatan ?>"?
            </h5>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Kembali
            </button>
            <button type="submit" class="btn btn-danger">Konfirmasi</button>
          </div>
        </div>
        </form>
      </div>
    </div>
   <?php } ?>

   <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
   <script>
    $(document).ready(function(){
      $("#seksi").change(function(){
        kegiatan();
      });
    });

    function kegiatan(){
      var seksi = $("#seksi").val();
      $.ajax({
        <?php foreach($kegiatan as $k ){ ?>
          url: "<?= base_url('index.php/C_kegiatan/load_user/' . $k->id_anggaran) ?>",
          <?php } ?>
          data: "seksi=" + seksi,
          success:function(data){
            $("#kegiatan tbody").html(data);
          }
      })
    }
   </script>  <?php } ?>
