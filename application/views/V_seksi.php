<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your View Title</title>
</head>
<body>
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
	  </div>
     

	<div class="px-4 pt-5 text-center mx-auto">
		<div class="row mx-auto">
<!-- 1 -->
<?php if ($seksi1 == null) { ?>
	<?php }else{ ?>
			<div class="col-3 py-3">
				<div
				class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
				>
				<div>
					<img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
				</div>
					
					<h4 class="text-seksi fw-semibold"><?= $seksi1->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 1</p>
						<p>target fisik</p>
						<p><?= number_format($seksi1->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi1->trealisasi_fisik) ?></p>
						
						<?php 
						if ($seksi1->total_realisasi == null) {
							// Handle the case where $seksi1->total_realisasi is null
						} else {
							$percentage = ($seksi1->total_target != 0) ? ($seksi1->total_realisasi / $seksi1->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>

						<p>target</p>
						<p>Rp <?= number_format($seksi1->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi1->total_realisasi,2)?></p>
						
						<?php 
						if ($seksi1->trealisasi_fisik == null) {
							// Handle the case where $seksi1->total_realisasi is null
						} else {
							$percentage = ($seksi1->ttarger_fisik != 0) ? ($seksi1->trealisasi_fisik / $seksi1->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>

<!-- 2 -->
<?php if ($seksi2 == null) { ?>
	<?php }else{ ?>
	 <div class="col-3 py-3">
          <div
		  class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
          >
		  <div>
			  <img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
            </div>
			<!--  -->

					
					<h4 class="text-seksi fw-semibold"><?= $seksi2->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 2</p>
						<p>target fisik</p>
						<p><?= number_format($seksi2->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi2->trealisasi_fisik) ?></p>
						<?php 
						if ($seksi2->total_realisasi == null) {
							// Handle the case where $seksi1->total_realisasi is null
						} else {
							$percentage = ($seksi2->total_target != 0) ? ($seksi2->total_realisasi / $seksi2->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>
						<p>target</p>
						<p>Rp <?= number_format($seksi2->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi2->total_realisasi,2)?></p>
						<?php 
						if ($seksi2->trealisasi_fisik == null) {
							// Handle the case where $seksi1->total_realisasi is null
						} else {
							$percentage = ($seksi2->ttarger_fisik != 0) ? ($seksi2->trealisasi_fisik / $seksi2->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>

<!-- 3 -->
<?php if ($seksi3 == null) { ?>
	<?php }else{ ?>
		<div class="col-3 py-3">
          <div
		  class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
          >
		  <div>
			  <img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
            </div>
					
					<h4 class="text-seksi fw-semibold"><?= $seksi3->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 3</p>
						<p>target fisik</p>
						<p><?= number_format($seksi3->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi3->trealisasi_fisik) ?></p>

						<?php 
						if ($seksi3->total_realisasi == null) {
						} else {
							$percentage = ($seksi3->total_target != 0) ? ($seksi3->total_realisasi / $seksi3->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>

						<p>target</p>
						<p>Rp <?= number_format($seksi3->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi3->total_realisasi,2)?></p>
						<?php 
						if ($seksi3->trealisasi_fisik == null) {
						} else {
							$percentage = ($seksi3->ttarger_fisik != 0) ? ($seksi3->trealisasi_fisik / $seksi3->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>



<!-- 4 -->
<?php if ($seksi4 == null) { ?>
	<?php }else{ ?>
		<div class="col-3 py-3">
          <div
		  class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
          >
		  <div>
			  <img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
            </div>
					
					<h4 class="text-seksi fw-semibold"><?= $seksi4->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 4</p>
						<p>target fisik</p>
						<p><?= number_format($seksi4->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi4->trealisasi_fisik) ?></p>
						<?php 
						if ($seksi4->total_realisasi == null) {
							// Handle the case where $seksi4->total_realisasi is null
						} else {
							$percentage = ($seksi4->total_target != 0) ? ($seksi4->total_realisasi / $seksi4->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>
						<p>target</p>
						<p>Rp <?= number_format($seksi4->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi4->total_realisasi,2)?></p>
						<?php 
						if ($seksi4->trealisasi_fisik == null) {
							// Handle the case where $seksi4->total_realisasi is null
						} else {
							$percentage = ($seksi4->ttarger_fisik != 0) ? ($seksi4->trealisasi_fisik / $seksi4->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>



		<!-- 1 -->
<?php if ($seksi5 == null) { ?>
	<?php }else{ ?>
			<div class="col-3 py-3">
				<div
				class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
				>
				<div>
					<img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
				</div>
					<!--  -->
					
					<h4 class="text-seksi fw-semibold"><?= $seksi5->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 1</p>
						<p>target fisik</p>
						<p><?= number_format($seksi5->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi5->trealisasi_fisik) ?></p>
						<?php 
						if ($seksi5->total_realisasi == null) {
							// Handle the case where $seksi5->total_realisasi is null
						} else {
							$percentage = ($seksi5->total_target != 0) ? ($seksi5->total_realisasi / $seksi5->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>
						<p>target</p>
						<p>Rp <?= number_format($seksi5->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi5->total_realisasi,2)?></p>
						<?php 
						if ($seksi5->trealisasi_fisik == null) {
							// Handle the case where $seksi5->total_realisasi is null
						} else {
							$percentage = ($seksi5->ttarger_fisik != 0) ? ($seksi5->trealisasi_fisik / $seksi5->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>


<!-- 2 -->
<?php if ($seksi6 == null) { ?>
	<?php }else{ ?>
	 <div class="col-3 py-3">
          <div
		  class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
          >
		  <div>
			  <img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
            </div>
				<!--  -->
					
					<h4 class="text-seksi fw-semibold"><?= $seksi6->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 2</p>
						<p>target fisik</p>
						<p><?= number_format($seksi6->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi6->trealisasi_fisik) ?></p>
						<?php 
						if ($seksi6->total_realisasi == null) {
							// Handle the case where $seksi6->total_realisasi is null
						} else {
							$percentage = ($seksi6->total_target != 0) ? ($seksi6->total_realisasi / $seksi6->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>
						<p>target</p>
						<p>Rp <?= number_format($seksi6->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi6->total_realisasi,2)?></p>
						<?php 
						if ($seksi6->trealisasi_fisik == null) {
							// Handle the case where $seksi6->total_realisasi is null
						} else {
							$percentage = ($seksi6->ttarger_fisik != 0) ? ($seksi6->trealisasi_fisik / $seksi6->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>


<!-- 3 -->
<?php if ($seksi7 == null) { ?>
	<?php }else{ ?>
		<div class="col-3 py-3">
          <div
		  class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
          >
		  <div>
			  <img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
            </div>
				<!--  -->
					
					<h4 class="text-seksi fw-semibold"><?= $seksi7->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 3</p>
						<p>target fisik</p>
						<p><?= number_format($seksi7->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi7->trealisasi_fisik) ?></p>
						<?php 
						if ($seksi7->total_realisasi == null) {
							// Handle the case where $seksi7->total_realisasi is null
						} else {
							$percentage = ($seksi7->total_target != 0) ? ($seksi7->total_realisasi / $seksi7->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>
						<p>target</p>
						<p>Rp <?= number_format($seksi7->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi7->total_realisasi,2)?></p>
						<?php 
						if ($seksi7->trealisasi_fisik == null) {
							// Handle the case where $seksi7->total_realisasi is null
						} else {
							$percentage = ($seksi7->ttarger_fisik != 0) ? ($seksi7->trealisasi_fisik / $seksi7->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>



<!-- 4 -->
<?php if ($seksi8 == null) { ?>
	<?php }else{ ?>
		<div class="col-3 py-3">
          <div
		  class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
          >
		  <div>
			  <img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
            </div>
				<!--  -->
					<h4 class="text-seksi fw-semibold"><?= $seksi8->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 4</p>
						<p>target fisik</p>
						<p><?= number_format($seksi8->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi8->trealisasi_fisik) ?></p>
						<?php 
						if ($seksi8->total_realisasi == null) {
							// Handle the case where $seksi8->total_realisasi is null
						} else {
							$percentage = ($seksi8->total_target != 0) ? ($seksi8->total_realisasi / $seksi8->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>

						<p>target</p>
						<p>Rp <?= number_format($seksi8->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi8->total_realisasi,2)?></p>
						
						<?php 
						if ($seksi8->trealisasi_fisik == null) {
							// Handle the case where $seksi8->total_realisasi is null
						} else {
							$percentage = ($seksi8->ttarger_fisik != 0) ? ($seksi8->trealisasi_fisik / $seksi8->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>


		<!-- 1 -->
<?php if ($seksi9 == null) { ?>
	<?php }else{ ?>
			<div class="col-3 py-3">
				<div
				class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
				>
				<div>
					<img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
				</div>
					<!--  -->
					<h4 class="text-seksi fw-semibold"><?= $seksi9->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 1</p>
						<p>target fisik</p>
						<p><?= number_format($seksi9->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi9->trealisasi_fisik) ?></p>
						
						<?php 
						if ($seksi9->total_realisasi == null) {
							// Handle the case where $seksi9->total_realisasi is null
						} else {
							$percentage = ($seksi9->total_target != 0) ? ($seksi9->total_realisasi / $seksi9->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>

						<p>target</p>
						<p>Rp <?= number_format($seksi9->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi9->total_realisasi,2)?></p>
						
						<?php 
						if ($seksi9->trealisasi_fisik == null) {
							// Handle the case where $seksi9->total_realisasi is null
						} else {
							$percentage = ($seksi9->ttarger_fisik != 0) ? ($seksi9->trealisasi_fisik / $seksi9->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>

					</div>	
				</div>
        </div>
<?php } ?>


<!-- 2 -->
<?php if ($seksi10 == null) { ?>
	<?php }else{ ?>
	 <div class="col-3 py-3">
          <div
		  class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
          >
		  <div>
			  <img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
            </div>
				<!--  -->
				<?php $a = number_format(($seksi10->total_realisasi / $seksi10->total_target) * 100); ?>
					<?php $b = number_format(($seksi10->trealisasi_fisik / $seksi10->ttarger_fisik) * 100); ?>
					
					<h4 class="text-seksi fw-semibold"><?= $seksi10->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 2</p>
						<p>target fisik</p>
						<p><?= number_format($seksi10->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi10->trealisasi_fisik) ?></p>
						
						<?php 
						if ($seksi10->total_realisasi == null) {
							// Handle the case where $seksi10->total_realisasi is null
						} else {
							$percentage = ($seksi10->total_target != 0) ? ($seksi10->total_realisasi / $seksi10->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>

						<p>target</p>
						<p>Rp <?= number_format($seksi10->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi10->total_realisasi,2)?></p>
						
						<?php 
						if ($seksi10->trealisasi_fisik == null) {
							// Handle the case where $seksi10->total_realisasi is null
						} else {
							$percentage = ($seksi10->ttarger_fisik != 0) ? ($seksi10->trealisasi_fisik / $seksi10->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>


<!-- 3 -->
<?php if ($seksi11 == null) { ?>
	<?php }else{ ?>
		<div class="col-3 py-3">
          <div
		  class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
          >
		  <div>
			  <img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
            </div>
			<!--  -->

					<h4 class="text-seksi fw-semibold"><?= $seksi11->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 3</p>
						<p>target fisik</p>
						<p><?= number_format($seksi11->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi11->trealisasi_fisik) ?></p>
						<?php 
						if ($seksi11->total_realisasi == null) {
							// Handle the case where $seksi11->total_realisasi is null
						} else {
							$percentage = ($seksi11->total_target != 0) ? ($seksi11->total_realisasi / $seksi11->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>

						<p>target</p>
						<p>Rp <?= number_format($seksi11->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi11->total_realisasi,2)?></p>
						
						<?php 
						if ($seksi11->trealisasi_fisik == null) {
							// Handle the case where $seksi11->total_realisasi is null
						} else {
							$percentage = ($seksi11->ttarger_fisik != 0) ? ($seksi11->trealisasi_fisik / $seksi11->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>


<!-- 4 -->
<?php if ($seksi12 == null) { ?>
	<?php }else{ ?>
		<div class="col-3 py-3">
          <div
		  class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
          >
		  <div>
			  <img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
            </div>
				<!--  -->
					
					
					<h4 class="text-seksi fw-semibold"><?= $seksi12->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 4</p>
						<p>target fisik</p>
						<p><?= number_format($seksi12->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi12->trealisasi_fisik) ?></p>
						
						<?php 
						if ($seksi12->total_realisasi == null) {
							// Handle the case where $seksi12->total_realisasi is null
						} else {
							$percentage = ($seksi12->total_target != 0) ? ($seksi12->total_realisasi / $seksi12->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>

						<p>target</p>
						<p>Rp <?= number_format($seksi12->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi12->total_realisasi,2)?></p>
						
						<?php 
						if ($seksi12->trealisasi_fisik == null) {
							// Handle the case where $seksi12->total_realisasi is null
						} else {
							$percentage = ($seksi12->ttarger_fisik != 0) ? ($seksi12->trealisasi_fisik / $seksi12->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>



		<!-- 1 -->
<?php if ($seksi13 == null) { ?>
	<?php }else{ ?>
			<div class="col-3 py-3">
				<div
				class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
				>
				<div>
					<img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
				</div>
					<!--  -->
					<h4 class="text-seksi fw-semibold"><?= $seksi13->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 1</p>
						<p>target fisik</p>
						<p><?= number_format($seksi13->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi13->trealisasi_fisik) ?></p>
						
						<?php 
						if ($seksi13->total_realisasi == null) {
							// Handle the case where $seksi13->total_realisasi is null
						} else {
							$percentage = ($seksi13->total_target != 0) ? ($seksi13->total_realisasi / $seksi13->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>

						<p>target</p>
						<p>Rp <?= number_format($seksi13->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi13->total_realisasi,2)?></p>
						
						<?php 
						if ($seksi13->trealisasi_fisik == null) {
							// Handle the case where $seksi13->total_realisasi is null
						} else {
							$percentage = ($seksi13->ttarger_fisik != 0) ? ($seksi13->trealisasi_fisik / $seksi13->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>


<!-- 2 -->
<?php if ($seksi14 == null) { ?>
	<?php }else{ ?>
	 <div class="col-3 py-3">
          <div
		  class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
          >
		  <div>
			  <img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
            </div>
				<!--  -->
					
					<h4 class="text-seksi fw-semibold"><?= $seksi14->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 2</p>
						<p>target fisik</p>
						<p><?= number_format($seksi14->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi14->trealisasi_fisik) ?></p>
						
						<?php 
						if ($seksi14->total_realisasi == null) {
							// Handle the case where $seksi14->total_realisasi is null
						} else {
							$percentage = ($seksi14->total_target != 0) ? ($seksi14->total_realisasi / $seksi14->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>

						<p>target</p>
						<p>Rp <?= number_format($seksi14->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi14->total_realisasi,2)?></p>
						
						<?php 
						if ($seksi14->trealisasi_fisik == null) {
							// Handle the case where $seksi14->total_realisasi is null
						} else {
							$percentage = ($seksi14->ttarger_fisik != 0) ? ($seksi14->trealisasi_fisik / $seksi14->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>


<!-- 3 -->
<?php if ($seksi15 == null) { ?>
	<?php }else{ ?>
		<div class="col-3 py-3">
          <div
		  class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
          >
		  <div>
			  <img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
            </div>
				<!--  -->
					
					<h4 class="text-seksi fw-semibold"><?= $seksi15->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 3</p>
						<p>target fisik</p>
						<p><?= number_format($seksi15->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi15->trealisasi_fisik) ?></p>
						
						<?php 
						if ($seksi15->total_realisasi == null) {
							// Handle the case where $seksi15->total_realisasi is null
						} else {
							$percentage = ($seksi15->total_target != 0) ? ($seksi15->total_realisasi / $seksi15->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>

						<p>target</p>
						<p>Rp <?= number_format($seksi15->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi15->total_realisasi,2)?></p>
						
						<?php 
						if ($seksi15->trealisasi_fisik == null) {
							// Handle the case where $seksi15->total_realisasi is null
						} else {
							$percentage = ($seksi15->ttarger_fisik != 0) ? ($seksi15->trealisasi_fisik / $seksi15->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>


<!-- 4 -->
<?php if ($seksi16 == null) { ?>
	<?php }else{ ?>
		<div class="col-3 py-3">
          <div
		  class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
          >
		  <div>
			  <img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
            </div>
				<!--  -->
				
					
					<h4 class="text-seksi fw-semibold"><?= $seksi16->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 4</p>
						<p>target fisik</p>
						<p><?= number_format($seksi16->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi16->trealisasi_fisik) ?></p>
						
						<?php 
						if ($seksi16->total_realisasi == null) {
							// Handle the case where $seksi16->total_realisasi is null
						} else {
							$percentage = ($seksi16->total_target != 0) ? ($seksi16->total_realisasi / $seksi16->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>

						<p>target</p>
						<p>Rp <?= number_format($seksi16->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi16->total_realisasi,2)?></p>
						
						<?php 
						if ($seksi16->trealisasi_fisik == null) {
							// Handle the case where $seksi16->total_realisasi is null
						} else {
							$percentage = ($seksi16->ttarger_fisik != 0) ? ($seksi16->trealisasi_fisik / $seksi16->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>



		<!-- 1 -->
<?php if ($seksi17 == null) { ?>
	<?php }else{ ?>
			<div class="col-3 py-3">
				<div
				class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
				>
				<div>
					<img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
				</div>
					<!--  -->
		
					<h4 class="text-seksi fw-semibold"><?= $seksi17->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 1</p>
						<p>target fisik</p>
						<p><?= number_format($seksi17->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi17->trealisasi_fisik) ?></p>
						
						<?php 
						if ($seksi17->total_realisasi == null) {
							// Handle the case where $seksi17->total_realisasi is null
						} else {
							$percentage = ($seksi17->total_target != 0) ? ($seksi17->total_realisasi / $seksi17->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>

						<p>target</p>
						<p>Rp <?= number_format($seksi17->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi17->total_realisasi,2)?></p>
						
						<?php 
						if ($seksi17->trealisasi_fisik == null) {
							// Handle the case where $seksi17->total_realisasi is null
						} else {
							$percentage = ($seksi17->ttarger_fisik != 0) ? ($seksi17->trealisasi_fisik / $seksi17->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>


<!-- 2 -->
<?php if ($seksi18 == null) { ?>
	<?php }else{ ?>
	 <div class="col-3 py-3">
          <div
		  class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
          >
		  <div>
			  <img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
            </div>
				<!--  -->
				
					
					<h4 class="text-seksi fw-semibold"><?= $seksi18->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 2</p>
						<p>target fisik</p>
						<p><?= number_format($seksi18->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi18->trealisasi_fisik) ?></p>
						<?php 
						if ($seksi18->total_realisasi == null) {
							// Handle the case where $seksi18->total_realisasi is null
						} else {
							$percentage = ($seksi18->total_target != 0) ? ($seksi18->total_realisasi / $seksi18->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>

						<p>target</p>
						<p>Rp <?= number_format($seksi18->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi18->total_realisasi,2)?></p>
						
						<?php 
						if ($seksi18->trealisasi_fisik == null) {
							// Handle the case where $seksi18->total_realisasi is null
						} else {
							$percentage = ($seksi18->ttarger_fisik != 0) ? ($seksi18->trealisasi_fisik / $seksi18->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>


<!-- 3 -->
<?php if ($seksi19 == null) { ?>
	<?php }else{ ?>
		<div class="col-3 py-3">
          <div
		  class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
          >
		  <div>
			  <img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
            </div>
				<!--  -->
				
					<h4 class="text-seksi fw-semibold"><?= $seksi19->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 3</p>
						<p>target fisik</p>
						<p><?= number_format($seksi19->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi19->trealisasi_fisik) ?></p>
						
						<?php 
						if ($seksi19->total_realisasi == null) {
							// Handle the case where $seksi19->total_realisasi is null
						} else {
							$percentage = ($seksi19->total_target != 0) ? ($seksi19->total_realisasi / $seksi19->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>

						<p>target</p>
						<p>Rp <?= number_format($seksi19->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi19->total_realisasi,2)?></p>
						
						<?php 
						if ($seksi19->trealisasi_fisik == null) {
							// Handle the case where $seksi19->total_realisasi is null
						} else {
							$percentage = ($seksi19->ttarger_fisik != 0) ? ($seksi19->trealisasi_fisik / $seksi19->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>



<!-- 4 -->
<?php if ($seksi20 == null) { ?>
	<?php }else{ ?>
		<div class="col-3 py-3">
          <div
		  class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
          >
		  <div>
			  <img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
            </div>
				<!--  -->
				
					
					<h4 class="text-seksi fw-semibold"><?= $seksi20->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 4</p>
						<p>target fisik</p>
						<p><?= number_format($seksi20->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi20->trealisasi_fisik) ?></p>
						
						<?php 
						if ($seksi20->total_realisasi == null) {
							// Handle the case where $seksi20->total_realisasi is null
						} else {
							$percentage = ($seksi20->total_target != 0) ? ($seksi20->total_realisasi / $seksi20->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>

						<p>target</p>
						<p>Rp <?= number_format($seksi20->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi20->total_realisasi,2)?></p>
						
						<?php 
						if ($seksi20->trealisasi_fisik == null) {
							// Handle the case where $seksi20->total_realisasi is null
						} else {
							$percentage = ($seksi20->ttarger_fisik != 0) ? ($seksi20->trealisasi_fisik / $seksi20->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>



		<!-- 1 -->
<?php if ($seksi21 == null) { ?>
	<?php }else{ ?>
			<div class="col-3 py-3">
				<div
				class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
				>
				<div>
					<img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
				</div>
					<!--  -->
			
					<h4 class="text-seksi fw-semibold"><?= $seksi21->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 1</p>
						<p>target fisik</p>
						<p><?= number_format($seksi21->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi21->trealisasi_fisik) ?></p>
						
						<?php 
						if ($seksi21->total_realisasi == null) {
							// Handle the case where $seksi21->total_realisasi is null
						} else {
							$percentage = ($seksi21->total_target != 0) ? ($seksi21->total_realisasi / $seksi21->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>

						<p>target</p>
						<p>Rp <?= number_format($seksi21->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi21->total_realisasi,2)?></p>
						
						<?php 
						if ($seksi21->trealisasi_fisik == null) {
							// Handle the case where $seksi21->total_realisasi is null
						} else {
							$percentage = ($seksi21->ttarger_fisik != 0) ? ($seksi21->trealisasi_fisik / $seksi21->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>


<!-- 2 -->
<?php if ($seksi22 == null) { ?>
	<?php }else{ ?>
	 <div class="col-3 py-3">
          <div
		  class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
          >
		  <div>
			  <img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
            </div>
				<!--  -->
				
					<h4 class="text-seksi fw-semibold"><?= $seksi22->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 2</p>
						<p>target fisik</p>
						<p><?= number_format($seksi22->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi22->trealisasi_fisik) ?></p>
						
						<?php 
						if ($seksi22->total_realisasi == null) {
							// Handle the case where $seksi22->total_realisasi is null
						} else {
							$percentage = ($seksi22->total_target != 0) ? ($seksi22->total_realisasi / $seksi22->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>

						<p>target</p>
						<p>Rp <?= number_format($seksi22->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi22->total_realisasi,2)?></p>
						
						<?php 
						if ($seksi22->trealisasi_fisik == null) {
							// Handle the case where $seksi22->total_realisasi is null
						} else {
							$percentage = ($seksi22->ttarger_fisik != 0) ? ($seksi22->trealisasi_fisik / $seksi22->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>


<!-- 3 -->
<?php if ($seksi23 == null) { ?>
	<?php }else{ ?>
		<div class="col-3 py-3">
          <div
		  class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
          >
		  <div>
			  <img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
            </div>
				<!--  -->
				
					
					<h4 class="text-seksi fw-semibold"><?= $seksi23->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 3</p>
						<p>target fisik</p>
						<p><?= number_format($seksi23->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi23->trealisasi_fisik) ?></p>
						
						<?php 
						if ($seksi23->total_realisasi == null) {
							// Handle the case where $seksi23->total_realisasi is null
						} else {
							$percentage = ($seksi23->total_target != 0) ? ($seksi23->total_realisasi / $seksi23->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>

						<p>target</p>
						<p>Rp <?= number_format($seksi23->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi23->total_realisasi,2)?></p>
						
						<?php 
						if ($seksi23->trealisasi_fisik == null) {
							// Handle the case where $seksi23->total_realisasi is null
						} else {
							$percentage = ($seksi23->ttarger_fisik != 0) ? ($seksi23->trealisasi_fisik / $seksi23->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>


<!-- 4 -->
<?php if ($seksi24 == null) { ?>
	<?php }else{ ?>
		<div class="col-3 py-3">
          <div
		  class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
          >
		  <div>
			  <img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
            </div>
				<!--  -->
			
					
					<h4 class="text-seksi fw-semibold"><?= $seksi24->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 4</p>
						<p>target fisik</p>
						<p><?= number_format($seksi24->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi24->trealisasi_fisik) ?></p>
						
						<?php 
						if ($seksi24->total_realisasi == null) {
							// Handle the case where $seksi24->total_realisasi is null
						} else {
							$percentage = ($seksi24->total_target != 0) ? ($seksi24->total_realisasi / $seksi24->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>

						<p>target</p>
						<p>Rp <?= number_format($seksi24->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi24->total_realisasi,2)?></p>
						
						<?php 
						if ($seksi24->trealisasi_fisik == null) {
							// Handle the case where $seksi24->total_realisasi is null
						} else {
							$percentage = ($seksi24->ttarger_fisik != 0) ? ($seksi24->trealisasi_fisik / $seksi24->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>



		<!-- 1 -->
<?php if ($seksi25 == null) { ?>
	<?php }else{ ?>
			<div class="col-3 py-3">
				<div
				class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
				>
				<div>
					<img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
				</div>
					<!--  -->
			
					<h4 class="text-seksi fw-semibold"><?= $seksi25->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 1</p>
						<p>target fisik</p>
						<p><?= number_format($seksi25->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi25->trealisasi_fisik) ?></p>
						
						<?php 
						if ($seksi25->total_realisasi == null) {
							// Handle the case where $seksi25->total_realisasi is null
						} else {
							$percentage = ($seksi25->total_target != 0) ? ($seksi25->total_realisasi / $seksi25->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>

						<p>target</p>
						<p>Rp <?= number_format($seksi25->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi25->total_realisasi,2)?></p>
						
						<?php 
						if ($seksi25->trealisasi_fisik == null) {
							// Handle the case where $seksi25->total_realisasi is null
						} else {
							$percentage = ($seksi25->ttarger_fisik != 0) ? ($seksi25->trealisasi_fisik / $seksi25->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>


<!-- 2 -->
<?php if ($seksi26 == null) { ?>
	<?php }else{ ?>
	 <div class="col-3 py-3">
          <div
		  class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
          >
		  <div>
			  <img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
            </div>
				<!--  -->
			
					<h4 class="text-seksi fw-semibold"><?= $seksi26->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 2</p>
						<p>target fisik</p>
						<p><?= number_format($seksi26->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi26->trealisasi_fisik) ?></p>
						
						<?php 
						if ($seksi26->total_realisasi == null) {
							// Handle the case where $seksi26->total_realisasi is null
						} else {
							$percentage = ($seksi26->total_target != 0) ? ($seksi26->total_realisasi / $seksi26->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>

						<p>target</p>
						<p>Rp <?= number_format($seksi26->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi26->total_realisasi,2)?></p>
						
						<?php 
						if ($seksi26->trealisasi_fisik == null) {
							// Handle the case where $seksi26->total_realisasi is null
						} else {
							$percentage = ($seksi26->ttarger_fisik != 0) ? ($seksi26->trealisasi_fisik / $seksi26->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>


<!-- 3 -->
<?php if ($seksi27 == null) { ?>
	<?php }else{ ?>
		<div class="col-3 py-3">
          <div
		  class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
          >
		  <div>
			  <img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
            </div>
				<!--  -->
			
					
					<h4 class="text-seksi fw-semibold"><?= $seksi27->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 3</p>
						<p>target fisik</p>
						<p><?= number_format($seksi27->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi27->trealisasi_fisik) ?></p>
						
						<?php 
						if ($seksi27->total_realisasi == null) {
							// Handle the case where $seksi27->total_realisasi is null
						} else {
							$percentage = ($seksi27->total_target != 0) ? ($seksi27->total_realisasi / $seksi27->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>

						<p>target</p>
						<p>Rp <?= number_format($seksi27->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi27->total_realisasi,2)?></p>
						
						<?php 
						if ($seksi27->trealisasi_fisik == null) {
							// Handle the case where $seksi27->total_realisasi is null
						} else {
							$percentage = ($seksi27->ttarger_fisik != 0) ? ($seksi27->trealisasi_fisik / $seksi27->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>



<!-- 4 -->
<?php if ($seksi28 == null) { ?>
	<?php }else{ ?>
		<div class="col-3 py-3">
          <div
		  class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
          >
		  <div>
			  <img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
            </div>
				<!--  -->
				
					
					<h4 class="text-seksi fw-semibold"><?= $seksi28->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 4</p>
						<p>target fisik</p>
						<p><?= number_format($seksi28->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi28->trealisasi_fisik) ?></p>
						
						<?php 
						if ($seksi27->total_realisasi == null) {
							// Handle the case where $seksi27->total_realisasi is null
						} else {
							$percentage = ($seksi27->total_target != 0) ? ($seksi27->total_realisasi / $seksi27->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>

						<p>target</p>
						<p>Rp <?= number_format($seksi27->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi27->total_realisasi,2)?></p>
						
						<?php 
						if ($seksi27->trealisasi_fisik == null) {
							// Handle the case where $seksi27->total_realisasi is null
						} else {
							$percentage = ($seksi27->ttarger_fisik != 0) ? ($seksi27->trealisasi_fisik / $seksi27->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>



		<!-- 1 -->
<?php if ($seksi29 == null) { ?>
	<?php }else{ ?>
			<div class="col-3 py-3">
				<div
				class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
				>
				<div>
					<img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
				</div>
					<!--  -->
			
					<h4 class="text-seksi fw-semibold"><?= $seksi29->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 1</p>
						<p>target fisik</p>
						<p><?= number_format($seksi29->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi29->trealisasi_fisik) ?></p>
						
						<?php 
						if ($seksi29->total_realisasi == null) {
							// Handle the case where $seksi29->total_realisasi is null
						} else {
							$percentage = ($seksi29->total_target != 0) ? ($seksi29->total_realisasi / $seksi29->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>

						<p>target</p>
						<p>Rp <?= number_format($seksi29->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi29->total_realisasi,2)?></p>
						
						<?php 
						if ($seksi29->trealisasi_fisik == null) {
							// Handle the case where $seksi29->total_realisasi is null
						} else {
							$percentage = ($seksi29->ttarger_fisik != 0) ? ($seksi29->trealisasi_fisik / $seksi29->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>


<!-- 2 -->
<?php if ($seksi30 == null) { ?>
	<?php }else{ ?>
	 <div class="col-3 py-3">
          <div
		  class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
          >
		  <div>
			  <img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
            </div>
	<!--  -->
	
					
					<h4 class="text-seksi fw-semibold"><?= $seksi30->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 2</p>
						<p>target fisik</p>
						<p><?= number_format($seksi30->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi30->trealisasi_fisik) ?></p>
						
						<?php 
						if ($seksi30->total_realisasi == null) {
							// Handle the case where $seksi30->total_realisasi is null
						} else {
							$percentage = ($seksi30->total_target != 0) ? ($seksi30->total_realisasi / $seksi30->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>

						<p>target</p>
						<p>Rp <?= number_format($seksi30->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi30->total_realisasi,2)?></p>
						
						<?php 
						if ($seksi30->trealisasi_fisik == null) {
							// Handle the case where $seksi30->total_realisasi is null
						} else {
							$percentage = ($seksi30->ttarger_fisik != 0) ? ($seksi30->trealisasi_fisik / $seksi30->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>


<!-- 3 -->
<?php if ($seksi31 == null) { ?>
	<?php }else{ ?>
		<div class="col-3 py-3">
          <div
		  class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
          >
		  <div>
			  <img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
            </div>
			<!--  -->
	
					<h4 class="text-seksi fw-semibold"><?= $seksi31->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 3</p>
						<p>target fisik</p>
						<p><?= number_format($seksi31->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi31->trealisasi_fisik) ?></p>
						
						<?php 
						if ($seksi31->total_realisasi == null) {
							// Handle the case where $seksi31->total_realisasi is null
						} else {
							$percentage = ($seksi31->total_target != 0) ? ($seksi31->total_realisasi / $seksi31->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>

						<p>target</p>
						<p>Rp <?= number_format($seksi31->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi31->total_realisasi,2)?></p>
						
						<?php 
						if ($seksi31->trealisasi_fisik == null) {
							// Handle the case where $seksi31->total_realisasi is null
						} else {
							$percentage = ($seksi31->ttarger_fisik != 0) ? ($seksi31->trealisasi_fisik / $seksi31->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>


<!-- 4 -->
<?php if ($seksi32 == null) { ?>
	<?php }else{ ?>
		<div class="col-3 py-3">
          <div
		  class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
          >
		  <div>
			  <img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
            </div>
			<!--  -->
	
					
					<h4 class="text-seksi fw-semibold"><?= $seksi32->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 4</p>
						<p>target fisik</p>
						<p><?= number_format($seksi32->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi32->trealisasi_fisik) ?></p>
						
						<?php 
						if ($seksi32->total_realisasi == null) {
							// Handle the case where $seksi32->total_realisasi is null
						} else {
							$percentage = ($seksi32->total_target != 0) ? ($seksi32->total_realisasi / $seksi32->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>

						<p>target</p>
						<p>Rp <?= number_format($seksi32->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi32->total_realisasi,2)?></p>
						
						<?php 
						if ($seksi32->trealisasi_fisik == null) {
							// Handle the case where $seksi32->total_realisasi is null
						} else {
							$percentage = ($seksi32->ttarger_fisik != 0) ? ($seksi32->trealisasi_fisik / $seksi32->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>


		<!-- 1 -->
<?php if ($seksi33 == null) { ?>
	<?php }else{ ?>
			<div class="col-3 py-3">
				<div
				class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
				>
				<div>
					<img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
				</div>
				<!--  -->
	
					
					<h4 class="text-seksi fw-semibold"><?= $seksi33->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 1</p>
						<p>target fisik</p>
						<p><?= number_format($seksi33->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi33->trealisasi_fisik) ?></p>
						
						<?php 
						if ($seksi33->total_realisasi == null) {
							// Handle the case where $seksi33->total_realisasi is null
						} else {
							$percentage = ($seksi33->total_target != 0) ? ($seksi33->total_realisasi / $seksi33->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>

						<p>target</p>
						<p>Rp <?= number_format($seksi33->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi33->total_realisasi,2)?></p>
						
						<?php 
						if ($seksi33->trealisasi_fisik == null) {
							// Handle the case where $seksi33->total_realisasi is null
						} else {
							$percentage = ($seksi33->ttarger_fisik != 0) ? ($seksi33->trealisasi_fisik / $seksi33->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>

<!-- 2 -->
<?php if ($seksi34 == null) { ?>
	<?php }else{ ?>
	 <div class="col-3 py-3">
          <div
		  class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
          >
		  <div>
			  <img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
            </div>
			<!--  -->
	
					
					<h4 class="text-seksi fw-semibold"><?= $seksi34->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 2</p>
						<p>target fisik</p>
						<p><?= number_format($seksi34->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi34->trealisasi_fisik) ?></p>
						<?php 
						if ($seksi34->total_realisasi == null) {
							// Handle the case where $seksi34->total_realisasi is null
						} else {
							$percentage = ($seksi34->total_target != 0) ? ($seksi34->total_realisasi / $seksi34->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>

						<p>target</p>
						<p>Rp <?= number_format($seksi34->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi34->total_realisasi,2)?></p>
						
						<?php 
						if ($seksi34->trealisasi_fisik == null) {
							// Handle the case where $seksi34->total_realisasi is null
						} else {
							$percentage = ($seksi34->ttarger_fisik != 0) ? ($seksi34->trealisasi_fisik / $seksi34->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>

<!-- 3 -->
<?php if ($seksi35 == null) { ?>
	<?php }else{ ?>
		<div class="col-3 py-3">
          <div
		  class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
          >
		  <div>
			  <img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
            </div>
			<!--  -->
	
					<h4 class="text-seksi fw-semibold"><?= $seksi35->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 3</p>
						<p>target fisik</p>
						<p><?= number_format($seksi35->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi35->trealisasi_fisik) ?></p>
						
						<?php 
						if ($seksi35->total_realisasi == null) {
							// Handle the case where $seksi35->total_realisasi is null
						} else {
							$percentage = ($seksi35->total_target != 0) ? ($seksi35->total_realisasi / $seksi35->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>

						<p>target</p>
						<p>Rp <?= number_format($seksi35->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi35->total_realisasi,2)?></p>
						
						<?php 
						if ($seksi35->trealisasi_fisik == null) {
							// Handle the case where $seksi35->total_realisasi is null
						} else {
							$percentage = ($seksi35->ttarger_fisik != 0) ? ($seksi35->trealisasi_fisik / $seksi35->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>


<!-- 4 -->
<?php if ($seksi36 == null) { ?>
	<?php }else{ ?>
		<div class="col-3 py-3">
          <div
		  class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
          >
		  <div>
			  <img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
            </div>
			<!--  -->
	
					
					<h4 class="text-seksi fw-semibold"><?= $seksi36->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 4</p>
						<p>target fisik</p>
						<p><?= number_format($seksi36->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi36->trealisasi_fisik) ?></p>
						
						<?php 
						if ($seksi36->total_realisasi == null) {
							// Handle the case where $seksi36->total_realisasi is null
						} else {
							$percentage = ($seksi36->total_target != 0) ? ($seksi36->total_realisasi / $seksi36->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>

						<p>target</p>
						<p>Rp <?= number_format($seksi36->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi36->total_realisasi,2)?></p>
						
						<?php 
						if ($seksi36->trealisasi_fisik == null) {
							// Handle the case where $seksi36->total_realisasi is null
						} else {
							$percentage = ($seksi36->ttarger_fisik != 0) ? ($seksi36->trealisasi_fisik / $seksi36->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>


		<!-- 1 -->
<?php if ($seksi37 == null) { ?>
	<?php }else{ ?>
			<div class="col-3 py-3">
				<div
				class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
				>
				<div>
					<img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
				</div>
				<!--  -->
	
					
					<h4 class="text-seksi fw-semibold"><?= $seksi37->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 1</p>
						<p>target fisik</p>
						<p><?= number_format($seksi37->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi37->trealisasi_fisik) ?></p>
						
						<?php 
						if ($seksi37->total_realisasi == null) {
							// Handle the case where $seksi37->total_realisasi is null
						} else {
							$percentage = ($seksi37->total_target != 0) ? ($seksi37->total_realisasi / $seksi37->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>

						<p>target</p>
						<p>Rp <?= number_format($seksi37->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi37->total_realisasi,2)?></p>
						
						<?php 
						if ($seksi37->trealisasi_fisik == null) {
							// Handle the case where $seksi37->total_realisasi is null
						} else {
							$percentage = ($seksi37->ttarger_fisik != 0) ? ($seksi37->trealisasi_fisik / $seksi37->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>

<!-- 2 -->
<?php if ($seksi38 == null) { ?>
	<?php }else{ ?>
	 <div class="col-3 py-3">
          <div
		  class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
          >
		  <div>
			  <img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
            </div>
			<!--  -->
	
					
					<h4 class="text-seksi fw-semibold"><?= $seksi38->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 2</p>
						<p>target fisik</p>
						<p><?= number_format($seksi38->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi38->trealisasi_fisik) ?></p>
						
						<?php 
						if ($seksi38->total_realisasi == null) {
							// Handle the case where $seksi38->total_realisasi is null
						} else {
							$percentage = ($seksi38->total_target != 0) ? ($seksi38->total_realisasi / $seksi38->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>

						<p>target</p>
						<p>Rp <?= number_format($seksi38->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi38->total_realisasi,2)?></p>
						
						<?php 
						if ($seksi38->trealisasi_fisik == null) {
							// Handle the case where $seksi38->total_realisasi is null
						} else {
							$percentage = ($seksi38->ttarger_fisik != 0) ? ($seksi38->trealisasi_fisik / $seksi38->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>

<!-- 3 -->
<?php if ($seksi39 == null) { ?>
	<?php }else{ ?>
		<div class="col-3 py-3">
          <div
		  class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
          >
		  <div>
			  <img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
            </div>
			<!--  -->
	
					<h4 class="text-seksi fw-semibold"><?= $seksi39->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 3</p>
						<p>target fisik</p>
						<p><?= number_format($seksi39->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi39->trealisasi_fisik) ?></p>
						
						<?php 
						if ($seksi39->total_realisasi == null) {
							// Handle the case where $seksi39->total_realisasi is null
						} else {
							$percentage = ($seksi39->total_target != 0) ? ($seksi39->total_realisasi / $seksi39->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>

						<p>target</p>
						<p>Rp <?= number_format($seksi39->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi39->total_realisasi,2)?></p>
						
						<?php 
						if ($seksi39->trealisasi_fisik == null) {
							// Handle the case where $seksi39->total_realisasi is null
						} else {
							$percentage = ($seksi39->ttarger_fisik != 0) ? ($seksi39->trealisasi_fisik / $seksi39->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>


<!-- 4 -->
<?php if ($seksi40 == null) { ?>
	<?php }else{ ?>
		<div class="col-3 py-3">
          <div
		  class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
          >
		  <div>
			  <img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
            </div>
			<!--  -->
	
					
					<h4 class="text-seksi fw-semibold"><?= $seksi40->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 4</p>
						<p>target fisik</p>
						<p><?= number_format($seksi40->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi40->trealisasi_fisik) ?></p>
						
						<?php 
						if ($seksi40->total_realisasi == null) {
							// Handle the case where $seksi40->total_realisasi is null
						} else {
							$percentage = ($seksi40->total_target != 0) ? ($seksi40->total_realisasi / $seksi40->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>

						<p>target</p>
						<p>Rp <?= number_format($seksi40->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi40->total_realisasi,2)?></p>
						
						<?php 
						if ($seksi40->trealisasi_fisik == null) {
							// Handle the case where $seksi40->total_realisasi is null
						} else {
							$percentage = ($seksi40->ttarger_fisik != 0) ? ($seksi40->trealisasi_fisik / $seksi40->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>


		<!-- 1 -->
<?php if ($seksi41 == null) { ?>
	<?php }else{ ?>
			<div class="col-3 py-3">
				<div
				class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
				>
				<div>
					<img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
				</div>
					<!--  -->
					
					<h4 class="text-seksi fw-semibold"><?= $seksi41->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 1</p>
						<p>target fisik</p>
						<p><?= number_format($seksi41->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi41->trealisasi_fisik) ?></p>
						
						<?php 
						if ($seksi41->total_realisasi == null) {
							// Handle the case where $seksi41->total_realisasi is null
						} else {
							$percentage = ($seksi41->total_target != 0) ? ($seksi41->total_realisasi / $seksi41->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>

						<p>target</p>
						<p>Rp <?= number_format($seksi41->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi41->total_realisasi,2)?></p>
						
						<?php 
						if ($seksi41->trealisasi_fisik == null) {
							// Handle the case where $seksi41->total_realisasi is null
						} else {
							$percentage = ($seksi41->ttarger_fisik != 0) ? ($seksi41->trealisasi_fisik / $seksi41->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>

<!-- 2 -->
<?php if ($seksi42 == null) { ?>
	<?php }else{ ?>
	 <div class="col-3 py-3">
          <div
		  class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
          >
		  <div>
			  <img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
            </div>
				<!--  -->
					
					<h4 class="text-seksi fw-semibold"><?= $seksi42->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 2</p>
						<p>target fisik</p>
						<p><?= number_format($seksi42->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi42->trealisasi_fisik) ?></p>
						
						<?php 
						if ($seksi42->total_realisasi == null) {
							// Handle the case where $seksi42->total_realisasi is null
						} else {
							$percentage = ($seksi42->total_target != 0) ? ($seksi42->total_realisasi / $seksi42->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>

						<p>target</p>
						<p>Rp <?= number_format($seksi42->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi42->total_realisasi,2)?></p>
						
						<?php 
						if ($seksi42->trealisasi_fisik == null) {
							// Handle the case where $seksi42->total_realisasi is null
						} else {
							$percentage = ($seksi42->ttarger_fisik != 0) ? ($seksi42->trealisasi_fisik / $seksi42->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>

<!-- 3 -->
<?php if ($seksi43 == null) { ?>
	<?php }else{ ?>
		<div class="col-3 py-3">
          <div
		  class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
          >
		  <div>
			  <img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
            </div>
				<!--  -->
					
					<h4 class="text-seksi fw-semibold"><?= $seksi43->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 3</p>
						<p>target fisik</p>
						<p><?= number_format($seksi43->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi43->trealisasi_fisik) ?></p>
						
						<?php 
						if ($seksi43->total_realisasi == null) {
							// Handle the case where $seksi43->total_realisasi is null
						} else {
							$percentage = ($seksi43->total_target != 0) ? ($seksi43->total_realisasi / $seksi43->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>

						<p>target</p>
						<p>Rp <?= number_format($seksi43->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi43->total_realisasi,2)?></p>
						
						<?php 
						if ($seksi43->trealisasi_fisik == null) {
							// Handle the case where $seksi43->total_realisasi is null
						} else {
							$percentage = ($seksi43->ttarger_fisik != 0) ? ($seksi43->trealisasi_fisik / $seksi43->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>


<!-- 4 -->
<?php if ($seksi44 == null) { ?>
	<?php }else{ ?>
		<div class="col-3 py-3">
          <div
		  class="card-container-seksi border-dark border h-100 pb-4 shadow mx-auto"
          >
		  <div>
			  <img src="<?= base_url('assets/img/logo.svg') ?>" class="logo-seksi" width="55" alt="" />
            </div>
				<!--  -->

					
					<h4 class="text-seksi fw-semibold"><?= $seksi44->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 4</p>
						<p>target fisik</p>
						<p><?= number_format($seksi44->ttarger_fisik) ?></p>
						<p>realisasi fisik</p>
						<p><?= number_format($seksi44->trealisasi_fisik) ?></p>
						
						<?php 
						if ($seksi44->total_realisasi == null) {
							// Handle the case where $seksi44->total_realisasi is null
						} else {
							$percentage = ($seksi44->total_target != 0) ? ($seksi44->total_realisasi / $seksi44->total_target) * 100 : 0;
							
							if ($percentage < 65) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
									?>

						<p>target</p>
						<p>Rp <?= number_format($seksi44->total_target,2)?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi44->total_realisasi,2)?></p>
						
						<?php 
						if ($seksi44->trealisasi_fisik == null) {
							// Handle the case where $seksi44->total_realisasi is null
						} else {
							$percentage = ($seksi44->ttarger_fisik != 0) ? ($seksi44->trealisasi_fisik / $seksi44->ttarger_fisik) * 100 : 0;
							
							if ($percentage < 50) { ?>
								<font color="red"><h1><?= number_format($percentage) ?>%</h1></font>
								<?php } else { ?>
									<h1><?= number_format($percentage) ?>%</h1>
									<?php }
						}
								?>
					</div>	
				</div>
        </div>
<?php } ?>

	</div>
</div>




</body>
</html>
