

  </head>
  <body>
  <div class="back-container d-flex justify-content-between">
      <div class="d-flex justify content">
					<div class="anggaran-container">
						<div class="anggaran-select">
            <select class="form-select" onchange="location = this.value;">
							<option class="text-center">Pilih Tahun</option>
							<?php foreach($dashboard as $value) { ?>
								<option value="<?= base_url('index.php/C_dashboard/pilihtahun/'. $value->id_anggaran) ?>" class="text-center">
									<?= $value->tahun; ?>
								</option>
								<?php } ?>
							</select>
          </div>
        </div>
      </div>
    </div>
      <!-- Card -->
    <div class="card-container container-fluid">
      <div class="row mx-auto mx-xl-auto mx-xxl-auto ps-xxl-5">
        <div class="col-lg-3 col-12 gy-3 col-xl-3">
          <div class="card shadow">
            <div class="card-body">
              <div class="card-text-container">
                <div class="d-flex">
                  <p class="card-text fw-light">Anggaran</p>
                  <div class="card-icon ms-auto">
                    <img src="<?= base_url('assets/img/icon-1.svg') ?>" alt="" />
                  </div>
                </div>

                <p
                  class="card-text fw-bold text-truncate"
                  data-bs-toggle="tooltip"
                  data-bs-placement="bottom"
                  title="..."
                >
                 ...
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-12 gy-3 col-xl-3">
          <div class="card shadow">
            <div class="card-body">
              <div class="card-text-container">
                <div class="d-flex">
                  <p class="card-text fw-light">Realisasi</p>
                  <div class="card-icon ms-auto">
                    <img src="<?= base_url('assets/img/icon-1.svg') ?>" alt="" />
                  </div>
                </div>

                <p
                  class="card-text fw-bold"
                  data-bs-toggle="tooltip"
                  data-bs-placement="bottom"
                  title="..."
                >
                
                ...
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-12 gy-3 col-xl-3">
          <div class="card shadow">
            <div class="card-body">
              <div class="card-text-container">
                <div class="d-flex">
                  <p class="card-text fw-light">Deviasi</p>
                  <div class="card-icon ms-auto">
                    <img src="<?= base_url('assets/img/icon-1.svg') ?>" alt="" />
                  </div>
                </div>

                <p
                  class="card-text fw-bold"
                  data-bs-toggle="tooltip"
                  data-bs-placement="bottom"
                  title="..."
                >

                ...
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-12 gy-3 col-xl-3">
          <div class="card shadow">
            <div class="card-body">
              <div class="card-text-container">
                <div class="d-flex">
                  <p class="card-text fw-light">Sisa Anggaran</p>
                  <div class="card-icon ms-auto">
                    <img src="<?= base_url('assets/img/icon-1.svg') ?>" alt="" />
                  </div>
                </div>

                <p
                  class="card-text fw-bold"
                  data-bs-toggle="tooltip"
                  data-bs-placement="bottom"
                  title="..."
                >
                 ...
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- chart -->
    <div class="chart-js">
      <div class="card-container container-fluid">
        <div class="card w-100 h-75 py-3">
          <div id="chartContainer" style="height: 300px; width: 100%"></div>
          <script
            type="text/javascript"
            src="https://cdn.canvasjs.com/canvasjs.min.js"
          ></script>
        </div>
      </div>
    </div>
