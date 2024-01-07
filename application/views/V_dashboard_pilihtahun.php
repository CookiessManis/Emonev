<!-- anggaran -->
<?php
$id_anggaran = $value->id_anggaran;
$data_anggaran = $this->M_login->get_chart($id_anggaran);
$data_anggaran2 = $this->M_login->realisasi2($id_anggaran);
$tes_anggaran = $dashboard_row->jumlah ;
 
foreach($data_anggaran as $value){
	$deviasi = $value->total_target - $value->total_realisasi;
$tes_anggaran -= $value->total_realisasi;
	$date = DateTime::createFromFormat('Y-n', "$value->tahun-$value->id_bulan");
  $formatted_date = $date->format('M Y');
	$arr_anggaran[] = ['x' => "new Date($value->tahun, $value->id_bulan - 1)", 'y' => $value->jumlah, 'formatted_date' => $formatted_date];
	$arr_realisasi[] = ['x' => "new Date($value->tahun, $value->id_bulan - 1)", 'y' => $value->total_realisasi, 'formatted_date' => $formatted_date];
	$arr_devisiasi[] = ['x' => "new Date($value->tahun, $value->id_bulan - 1)", 'y' => $deviasi, 'formatted_date' => $formatted_date];
	$arr_sisaAnggaran[] = ['x' => "new Date($value->tahun, $value->id_bulan - 1)", 'y' => $tes_anggaran, 'formatted_date' => $formatted_date];

}


?>

<!-- deviasi -->
<?php 

// if($anggaran->id_anggaran !== null){
// 	$sisa_anggarann = $anggaran->id_anggaran - $realisasi->realisasi;
// } else {
// 	"";
// }
$total_deviasi = $target->target - $realisasi->realisasi;
$realisasiValue = isset($realisasi->realisasi) ? (float)$realisasi->realisasi : 0;
?>


 <script>
      window.onload = function () {
        var chart = new CanvasJS.Chart("chartContainer", {
          animationEnabled: true,
          title: {
            <?php foreach ($data_anggaran as $data): ?>
								text: "Anggaran Tahun: <?= $data->tahun ?>",
						<?php endforeach; ?>
          },
          axisY: {
            includeZero: false,
            prefix: "Rp",
          },
          toolTip: {
            shared: true,
          },
          legend: {
            fontSize: 13,
          },
          data: [
            {
              type: "splineArea",
              showInLegend: true,
              name: "Anggaran",
              yValueFormatString: "Rp#,##0",
              xValueFormatString: "MMM YYYY",
              dataPoints: [
                
								<?php foreach ($arr_anggaran as $data): ?>
        				{ x: new Date(<?php echo $data['x']; ?>), y: <?php echo $data['y']; ?> },
    					<?php endforeach; ?>
							
              ],
            },
            {
              type: "splineArea",
              showInLegend: true,
              name: "Realisasi",
              yValueFormatString: "Rp#,##0",
              dataPoints: [
               
								 <?php foreach ($arr_realisasi as $data): ?>
        				{ x: new Date(<?php echo $data['x']; ?>), y: <?php echo $data['y']; ?> },
    					<?php endforeach; ?>

              ],
            },
            {
              type: "splineArea",
              showInLegend: true,
              name: "Deviasi",
              yValueFormatString: "Rp#,##0",
              dataPoints: [
                
								<?php foreach ($arr_devisiasi as $data): ?>
        				{ x: new Date(<?php echo $data['x']; ?>), y: <?php echo $data['y']; ?> },
    					<?php endforeach; ?>

              ],
            },
            {
              type: "splineArea",
              showInLegend: true,
              yValueFormatString: "Rp#,##0",
              name: "Sisa Anggaran",
              dataPoints: [
                
								 <?php foreach ($arr_sisaAnggaran as $data): ?>
        				{ x: new Date(<?php echo $data['x']; ?>), y: <?php echo $data['y']; ?> },
    					<?php endforeach; ?>

              ],
            },
          ],
        });
        chart.render();
      };
  </script>
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
              <select class="form-select border border-black" id="bulan">
                  <option class="text-center">pilih bulan</option>
                  <?php foreach ($bulan as $b) { ?>
                    <option value="<?= $b->id_bulan; ?>"><?= $b->nama_bulan; ?></option>
                 <?php  } ?>
                </select>
          </div>
        </div>
      </div>
    </div>
      <!-- Card -->
  <div id="belanja">
    <div class="card-container container-fluid">
      <div class="row mx-auto mx-xl-auto mx-xxl-auto ps-xxl-5 gy-5">
        <div class="col-lg-3 col-xl-3 ">
          <div class="card shadow">
            <div class="card-body ">
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
                  title="Rp. <?= number_format($dashboard_row->jumlah,2) ?>"
                >
                Rp. <?= number_format($dashboard_row->jumlah,2) ?>
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-xl-3">
          <div class="card shadow">
            <div class="card-body">
              <div class="card-text-container">
                <div class="d-flex">
                  <p class="card-text fw-light">Realisasi</p>
                  <div class="card-icon ms-auto">
                    <img src="<?= base_url('assets/img/icon-1.svg') ?>" alt="" />
                  </div>
                </div>

                <?php 
                if ($jumlahrealisasi->realisasi == null) { ?>
                  <p
                  class="card-text fw-bold"
                  data-bs-toggle="tooltip"
                  data-bs-placement="bottom"
                  title="Rp. 0.00"
                >
                Rp. 0.00
                </p>
                <?php }else{ ?>
                

                <p
                  class="card-text fw-bold"
                  data-bs-toggle="tooltip"
                  data-bs-placement="bottom"
                  title="Rp. <?= number_format($jumlahrealisasi->realisasi,2) ?>"
                >
                
                Rp. <?= number_format($jumlahrealisasi->realisasi,2) ?>
                </p>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>


        <div class="col-lg-3 col-xl-3">
          <div class="card shadow">
            <div class="card-body">
              <div class="card-text-container">
                <div class="d-flex">
                  <p class="card-text fw-light">target</p>
                  <div class="card-icon ms-auto">
                    <img src="<?= base_url('assets/img/icon-1.svg') ?>" alt="" />
                  </div>
                </div>

                <?php 
                if ($jumlahrealisasi->realisasi == null) { ?>
                  <p
                  class="card-text fw-bold"
                  data-bs-toggle="tooltip"
                  data-bs-placement="bottom"
                  title="Rp. 0.00"
                >
                Rp. 0.00
                </p>
                <?php }else{ ?>
                

                <p
                  class="card-text fw-bold"
                  data-bs-toggle="tooltip"
                  data-bs-placement="bottom"
                  title="Rp. <?= number_format($jumlahtarget->target,2) ?>"
                >
                
                Rp. <?= number_format($jumlahtarget->target,2) ?>
                </p>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-xl-3">
          <div class="card shadow">
            <div class="card-body">
              <div class="card-text-container">
                <div class="d-flex">
                  <p class="card-text fw-light">Deviasi</p>
                  <div class="card-icon ms-auto">
                    <img src="<?= base_url('assets/img/icon-1.svg') ?>" alt="" />
                  </div>
                </div>
                <?php if ($jumlahrealisasi->realisasi == null) {?>
                  <p
                  class="card-text fw-bold"
                  data-bs-toggle="tooltip"
                  data-bs-placement="bottom"
                  title="Rp. 0.00"
                >

                Rp. 0.00
                </p>
               <?php }else{ ?>

                <p
                  class="card-text fw-bold"
                  data-bs-toggle="tooltip"
                  data-bs-placement="bottom"
                  title="Rp. <?= $total_deviasi ?>"
                >

                Rp. <?= number_format($total_deviasi,2) ?>
                </p>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-xl-3">
          <div class="card shadow">
            <div class="card-body">
              <div class="card-text-container">
                <div class="d-flex">
                  <p class="card-text fw-light">Sisa Anggaran</p>
                  <div class="card-icon ms-auto">
                    <img src="<?= base_url('assets/img/icon-1.svg') ?>" alt="" />
                  </div>
                </div>
                <?php if($jumlahrealisasi->realisasi == null) {?>
                  <p
                  class="card-text fw-bold"
                  data-bs-toggle="tooltip"
                  data-bs-placement="bottom"
                  title="Rp. <?= number_format($dashboard_row->jumlah,2) ?>"
                >
                Rp. <?= number_format($dashboard_row->jumlah,2) ?>
                </p>
                <?php }else{ ?>

                  <?php 
                    $tes_sisa = $dashboard_row->jumlah - $realisasi->realisasi
                    ?>

                <p
                  class="card-text fw-bold"
                  data-bs-toggle="tooltip"
                  data-bs-placement="bottom"
                  title="Rp. <?= number_format($tes_sisa ,2) ?>"
                >
                  Rp <?= number_format($tes_sisa ,2) ?>
                </p>
                <?php } ?>
              </div>
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
            <?php foreach($dashboard2 as $b ){ ?>
                url: "<?= base_url('index.php/C_dashboard/load_bulan/' . $b->id_anggaran) ?>",
           <?php  } ?>
           data: "bulan=" + bulan,
           success:function(data){
            $("#belanja").html(data);
          }
      })
    }
</script>


		
