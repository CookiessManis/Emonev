
    <!-- button kembali ke halaman utama -->
    <div class="back-container d-flex justify-content-between">
      <div class="back-sizing">
        <a href="index.html" class="text-decoration-none">
          <div class="d-flex justify-content-center">
            <img src="img/arrow-back.svg" alt="" />
            <p class="pt-3 back-texting">Kembali Ke Halaman Utama</p>
          </div>
        </a>
      </div>

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
        <div class="anggaran-container">
          <div class="anggaran-select">
            <select class="form-select" name="tahun">
              <option value="" selected disabled>pilih Tahun</option>
              <?php foreach ($anggaran2 as $a) { ?>
              <option value="<?= $a->tahun; ?>"><?= $a->tahun; ?></option>
              <?php } ?>
            </select>
          </div>
        </div>
      </div>
    </div>

    <div class="d-flex justify-content-end">
      <div class="btn-tambahKegiatan">
        <button
          class="btn btn-warning btn-tmbhKeg text-white"
          data-bs-toggle="modal"
          data-bs-target="#ubahAnggaran"
        >
          Ubah Anggaran
        </button>
      </div>
    </div>

    <div class="anggaran-h1">
      <h2 class="fw-bold">Satuan Polisi Pamong Praja</h2>
    </div>

    <div class="anggaran-p">
      <p class="fw-medium">Tahun Anggaran <?= $anggaran->tahun; ?></p>
    </div>

    <div class="anggaran-value d-flex justify-content-center">
      <h1 class="fw-semibold">Rp. <?= number_format($anggaran->jumlah,2,',','.'); ?></h1>
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
              <tbody class="align-middle" id="myTable">
              <?php foreach ($program as $p) : ?>
                <tr class="text-start">
                  <td><?= $p->program_kerja; ?></td>
                </tr>
                <?php endforeach; ?>
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
          <form action="<?= base_url('C_anggaran/tambah') ?>" method="post">
          <div class="modal-body">
            <div class="mb-3">
              <label for="" class="fw-medium">Tahun Anggaran</label>
              <input type="date" name="tahun" class="form-control" placeholder="cth: 2002" />
            </div>
            <div class="mb-3">
              <label for="" class="fw-medium">Jumlah Anggaran</label>
              <input type="Number" name="jumlah" class="form-control" placeholder="200000" />
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Modal Ubah Anggaran-->
    <div
      class="modal fade"
      id="ubahAnggaran"
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
              type="submit"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <form action="<?= base_url('C_anggaran/tambah_program') ?>" method="post">
          <div class="modal-body">
            <div class="mb-3">
              <label for="" class="fw-medium">Program Kerja</label>
              <input
                name="program_kerja"
                type="text"
                class="form-control"
                placeholder="Isi Program Kerja"
              />
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </div>
    </div>
    </form>

