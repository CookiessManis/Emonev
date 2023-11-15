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
				<!--  -->

					<?php $a = number_format(($seksi1->total_realisasi / $seksi1->total_target) * 100); ?>
					
					<h4 class="text-seksi fw-semibold"><?= $seksi1->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 1</p>
						<p>Target</p>
						<p>Rp <?= number_format($seksi1->total_target,2) ?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi1->total_realisasi,2)?></p>
						<h1><?= $a; ?>%</h1>
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
				<?php $a = number_format(($seksi2->total_realisasi / $seksi2->total_target) * 100); ?>
				<h4 class="text-seksi fw-semibold"><?= $seksi2->nama ?></h4>
				<div class="card-seksi shadow-sm mx-auto border border-dark">
					<p class="h5-seksi fw-semibold">Triwulan II</p>
					<p>Target</p>
					<p>Rp <?= number_format($seksi2->total_target,2) ?></p>
					<p>Realisasi</p>
					<p>Rp <?= number_format($seksi2->total_realisasi,2)?></p>
					<h1><?= $a; ?>%</h1>
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
			<!--  -->
			
				<?php $a = number_format(($seksi3->total_realisasi / $seksi3->total_target) * 100); ?>
				
				<h4 class="text-seksi fw-semibold"><?= $seksi3->nama ?></h4>
				<div class="card-seksi shadow-sm mx-auto border border-dark">
					<p class="h5-seksi fw-semibold">Triwulan III</p>
					<p>Target</p>
					<p>Rp <?= number_format($seksi3->total_target,2) ?></p>
					<p>Realisasi</p>
					<p>Rp <?= number_format($seksi3->total_realisasi,2)?></p>
					<h1><?= $a; ?>%</h1>
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
			<!--  -->
			
				<?php $a = number_format(($seksi4->total_realisasi / $seksi4->total_target) * 100); ?>
				<h4 class="text-seksi fw-semibold"><?= $seksi4->nama ?></h4>
				<div class="card-seksi shadow-sm mx-auto border border-dark">
					<p class="h5-seksi fw-semibold">Triwulan II</p>
					<p>Target</p>
					<p>Rp <?= number_format($seksi4->total_target,2) ?></p>
					<p>Realisasi</p>
					<p>Rp <?= number_format($seksi4->total_realisasi,2)?></p>
					<h1><?= $a; ?>%</h1>
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

					<?php $a = number_format(($seksi5->total_realisasi / $seksi5->total_target) * 100); ?>
					
					<h4 class="text-seksi fw-semibold"><?= $seksi5->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 1</p>
						<p>Target</p>
						<p>Rp <?= number_format($seksi5->total_target,2) ?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi5->total_realisasi,2)?></p>
						<h1><?= $a; ?>%</h1>
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
				<?php $a = number_format(($seksi6->total_realisasi / $seksi6->total_target) * 100); ?>
				<h4 class="text-seksi fw-semibold"><?= $seksi6->nama ?></h4>
				<div class="card-seksi shadow-sm mx-auto border border-dark">
					<p class="h5-seksi fw-semibold">Triwulan II</p>
					<p>Target</p>
					<p>Rp <?= number_format($seksi6->total_target,2) ?></p>
					<p>Realisasi</p>
					<p>Rp <?= number_format($seksi6->total_realisasi,2)?></p>
					<h1><?= $a; ?>%</h1>
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
			
				<?php $a = number_format(($seksi7->total_realisasi / $seksi7->total_target) * 100); ?>
				
				<h4 class="text-seksi fw-semibold"><?= $seksi7->nama ?></h4>
				<div class="card-seksi shadow-sm mx-auto border border-dark">
					<p class="h5-seksi fw-semibold">Triwulan III</p>
					<p>Target</p>
					<p>Rp <?= number_format($seksi7->total_target,2) ?></p>
					<p>Realisasi</p>
					<p>Rp <?= number_format($seksi7->total_realisasi,2)?></p>
					<h1><?= $a; ?>%</h1>
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
			
				<?php $a = number_format(($seksi8->total_realisasi / $seksi8->total_target) * 100); ?>
				<h4 class="text-seksi fw-semibold"><?= $seksi8->nama ?></h4>
				<div class="card-seksi shadow-sm mx-auto border border-dark">
					<p class="h5-seksi fw-semibold">Triwulan II</p>
					<p>Target</p>
					<p>Rp <?= number_format($seksi8->total_target,2) ?></p>
					<p>Realisasi</p>
					<p>Rp <?= number_format($seksi8->total_realisasi,2)?></p>
					<h1><?= $a; ?>%</h1>
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

					<?php $a = number_format(($seksi9->total_realisasi / $seksi9->total_target) * 100); ?>
					
					<h4 class="text-seksi fw-semibold"><?= $seksi9->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 1</p>
						<p>Target</p>
						<p>Rp <?= number_format($seksi9->total_target,2) ?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi9->total_realisasi,2)?></p>
						<h1><?= $a; ?>%</h1>
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
				<h4 class="text-seksi fw-semibold"><?= $seksi10->nama ?></h4>
				<div class="card-seksi shadow-sm mx-auto border border-dark">
					<p class="h5-seksi fw-semibold">Triwulan II</p>
					<p>Target</p>
					<p>Rp <?= number_format($seksi10->total_target,2) ?></p>
					<p>Realisasi</p>
					<p>Rp <?= number_format($seksi10->total_realisasi,2)?></p>
					<h1><?= $a; ?>%</h1>
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
			
				<?php $a = number_format(($seksi11->total_realisasi / $seksi11->total_target) * 100); ?>
				
				<h4 class="text-seksi fw-semibold"><?= $seksi11->nama ?></h4>
				<div class="card-seksi shadow-sm mx-auto border border-dark">
					<p class="h5-seksi fw-semibold">Triwulan III</p>
					<p>Target</p>
					<p>Rp <?= number_format($seksi11->total_target,2) ?></p>
					<p>Realisasi</p>
					<p>Rp <?= number_format($seksi11->total_realisasi,2)?></p>
					<h1><?= $a; ?>%</h1>
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
			
				<?php $a = number_format(($seksi12->total_realisasi / $seksi12->total_target) * 100); ?>
				<h4 class="text-seksi fw-semibold"><?= $seksi12->nama ?></h4>
				<div class="card-seksi shadow-sm mx-auto border border-dark">
					<p class="h5-seksi fw-semibold">Triwulan II</p>
					<p>Target</p>
					<p>Rp <?= number_format($seksi12->total_target,2) ?></p>
					<p>Realisasi</p>
					<p>Rp <?= number_format($seksi12->total_realisasi,2)?></p>
					<h1><?= $a; ?>%</h1>
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

					<?php $a = number_format(($seksi13->total_realisasi / $seksi13->total_target) * 100); ?>
					
					<h4 class="text-seksi fw-semibold"><?= $seksi13->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 1</p>
						<p>Target</p>
						<p>Rp <?= number_format($seksi13->total_target,2) ?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi13->total_realisasi,2)?></p>
						<h1><?= $a; ?>%</h1>
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
				<?php $a = number_format(($seksi14->total_realisasi / $seksi14->total_target) * 100); ?>
				<h4 class="text-seksi fw-semibold"><?= $seksi14->nama ?></h4>
				<div class="card-seksi shadow-sm mx-auto border border-dark">
					<p class="h5-seksi fw-semibold">Triwulan II</p>
					<p>Target</p>
					<p>Rp <?= number_format($seksi14->total_target,2) ?></p>
					<p>Realisasi</p>
					<p>Rp <?= number_format($seksi14->total_realisasi,2)?></p>
					<h1><?= $a; ?>%</h1>
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
			
				<?php $a = number_format(($seksi15->total_realisasi / $seksi15->total_target) * 100); ?>
				
				<h4 class="text-seksi fw-semibold"><?= $seksi15->nama ?></h4>
				<div class="card-seksi shadow-sm mx-auto border border-dark">
					<p class="h5-seksi fw-semibold">Triwulan III</p>
					<p>Target</p>
					<p>Rp <?= number_format($seksi15->total_target,2) ?></p>
					<p>Realisasi</p>
					<p>Rp <?= number_format($seksi15->total_realisasi,2)?></p>
					<h1><?= $a; ?>%</h1>
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
			
				<?php $a = number_format(($seksi16->total_realisasi / $seksi16->total_target) * 100); ?>
				<h4 class="text-seksi fw-semibold"><?= $seksi16->nama ?></h4>
				<div class="card-seksi shadow-sm mx-auto border border-dark">
					<p class="h5-seksi fw-semibold">Triwulan II</p>
					<p>Target</p>
					<p>Rp <?= number_format($seksi16->total_target,2) ?></p>
					<p>Realisasi</p>
					<p>Rp <?= number_format($seksi16->total_realisasi,2)?></p>
					<h1><?= $a; ?>%</h1>
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

					<?php $a = number_format(($seksi17->total_realisasi / $seksi17->total_target) * 100); ?>
					
					<h4 class="text-seksi fw-semibold"><?= $seksi17->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 1</p>
						<p>Target</p>
						<p>Rp <?= number_format($seksi17->total_target,2) ?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi17->total_realisasi,2)?></p>
						<h1><?= $a; ?>%</h1>
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
				<?php $a = number_format(($seksi18->total_realisasi / $seksi18->total_target) * 100); ?>
				<h4 class="text-seksi fw-semibold"><?= $seksi18->nama ?></h4>
				<div class="card-seksi shadow-sm mx-auto border border-dark">
					<p class="h5-seksi fw-semibold">Triwulan II</p>
					<p>Target</p>
					<p>Rp <?= number_format($seksi18->total_target,2) ?></p>
					<p>Realisasi</p>
					<p>Rp <?= number_format($seksi18->total_realisasi,2)?></p>
					<h1><?= $a; ?>%</h1>
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
			
				<?php $a = number_format(($seksi19->total_realisasi / $seksi19->total_target) * 100); ?>
				
				<h4 class="text-seksi fw-semibold"><?= $seksi19->nama ?></h4>
				<div class="card-seksi shadow-sm mx-auto border border-dark">
					<p class="h5-seksi fw-semibold">Triwulan III</p>
					<p>Target</p>
					<p>Rp <?= number_format($seksi19->total_target,2) ?></p>
					<p>Realisasi</p>
					<p>Rp <?= number_format($seksi19->total_realisasi,2)?></p>
					<h1><?= $a; ?>%</h1>
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
			
				<?php $a = number_format(($seksi20->total_realisasi / $seksi20->total_target) * 100); ?>
				<h4 class="text-seksi fw-semibold"><?= $seksi20->nama ?></h4>
				<div class="card-seksi shadow-sm mx-auto border border-dark">
					<p class="h5-seksi fw-semibold">Triwulan II</p>
					<p>Target</p>
					<p>Rp <?= number_format($seksi20->total_target,2) ?></p>
					<p>Realisasi</p>
					<p>Rp <?= number_format($seksi20->total_realisasi,2)?></p>
					<h1><?= $a; ?>%</h1>
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

					<?php $a = number_format(($seksi21->total_realisasi / $seksi21->total_target) * 100); ?>
					
					<h4 class="text-seksi fw-semibold"><?= $seksi21->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 1</p>
						<p>Target</p>
						<p>Rp <?= number_format($seksi21->total_target,2) ?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi21->total_realisasi,2)?></p>
						<h1><?= $a; ?>%</h1>
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
				<?php $a = number_format(($seksi22->total_realisasi / $seksi22->total_target) * 100); ?>
				<h4 class="text-seksi fw-semibold"><?= $seksi22->nama ?></h4>
				<div class="card-seksi shadow-sm mx-auto border border-dark">
					<p class="h5-seksi fw-semibold">Triwulan II</p>
					<p>Target</p>
					<p>Rp <?= number_format($seksi22->total_target,2) ?></p>
					<p>Realisasi</p>
					<p>Rp <?= number_format($seksi22->total_realisasi,2)?></p>
					<h1><?= $a; ?>%</h1>
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
			
				<?php $a = number_format(($seksi23->total_realisasi / $seksi23->total_target) * 100); ?>
				
				<h4 class="text-seksi fw-semibold"><?= $seksi23->nama ?></h4>
				<div class="card-seksi shadow-sm mx-auto border border-dark">
					<p class="h5-seksi fw-semibold">Triwulan III</p>
					<p>Target</p>
					<p>Rp <?= number_format($seksi23->total_target,2) ?></p>
					<p>Realisasi</p>
					<p>Rp <?= number_format($seksi23->total_realisasi,2)?></p>
					<h1><?= $a; ?>%</h1>
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
			
				<?php $a = number_format(($seksi24->total_realisasi / $seksi24->total_target) * 100); ?>
				<h4 class="text-seksi fw-semibold"><?= $seksi24->nama ?></h4>
				<div class="card-seksi shadow-sm mx-auto border border-dark">
					<p class="h5-seksi fw-semibold">Triwulan II</p>
					<p>Target</p>
					<p>Rp <?= number_format($seksi24->total_target,2) ?></p>
					<p>Realisasi</p>
					<p>Rp <?= number_format($seksi24->total_realisasi,2)?></p>
					<h1><?= $a; ?>%</h1>
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

					<?php $a = number_format(($seksi25->total_realisasi / $seksi25->total_target) * 100); ?>
					
					<h4 class="text-seksi fw-semibold"><?= $seksi25->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 1</p>
						<p>Target</p>
						<p>Rp <?= number_format($seksi25->total_target,2) ?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi25->total_realisasi,2)?></p>
						<h1><?= $a; ?>%</h1>
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
				<?php $a = number_format(($seksi26->total_realisasi / $seksi26->total_target) * 100); ?>
				<h4 class="text-seksi fw-semibold"><?= $seksi26->nama ?></h4>
				<div class="card-seksi shadow-sm mx-auto border border-dark">
					<p class="h5-seksi fw-semibold">Triwulan II</p>
					<p>Target</p>
					<p>Rp <?= number_format($seksi26->total_target,2) ?></p>
					<p>Realisasi</p>
					<p>Rp <?= number_format($seksi26->total_realisasi,2)?></p>
					<h1><?= $a; ?>%</h1>
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
			
				<?php $a = number_format(($seksi27->total_realisasi / $seksi27->total_target) * 100); ?>
				
				<h4 class="text-seksi fw-semibold"><?= $seksi27->nama ?></h4>
				<div class="card-seksi shadow-sm mx-auto border border-dark">
					<p class="h5-seksi fw-semibold">Triwulan III</p>
					<p>Target</p>
					<p>Rp <?= number_format($seksi27->total_target,2) ?></p>
					<p>Realisasi</p>
					<p>Rp <?= number_format($seksi27->total_realisasi,2)?></p>
					<h1><?= $a; ?>%</h1>
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
			
				<?php $a = number_format(($seksi28->total_realisasi / $seksi28->total_target) * 100); ?>
				<h4 class="text-seksi fw-semibold"><?= $seksi28->nama ?></h4>
				<div class="card-seksi shadow-sm mx-auto border border-dark">
					<p class="h5-seksi fw-semibold">Triwulan II</p>
					<p>Target</p>
					<p>Rp <?= number_format($seksi28->total_target,2) ?></p>
					<p>Realisasi</p>
					<p>Rp <?= number_format($seksi28->total_realisasi,2)?></p>
					<h1><?= $a; ?>%</h1>
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

					<?php $a = number_format(($seksi29->total_realisasi / $seksi29->total_target) * 100); ?>
					
					<h4 class="text-seksi fw-semibold"><?= $seksi29->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 1</p>
						<p>Target</p>
						<p>Rp <?= number_format($seksi29->total_target,2) ?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi29->total_realisasi,2)?></p>
						<h1><?= $a; ?>%</h1>
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
				<?php $a = number_format(($seksi30->total_realisasi / $seksi30->total_target) * 100); ?>
				<h4 class="text-seksi fw-semibold"><?= $seksi30->nama ?></h4>
				<div class="card-seksi shadow-sm mx-auto border border-dark">
					<p class="h5-seksi fw-semibold">Triwulan II</p>
					<p>Target</p>
					<p>Rp <?= number_format($seksi30->total_target,2) ?></p>
					<p>Realisasi</p>
					<p>Rp <?= number_format($seksi30->total_realisasi,2)?></p>
					<h1><?= $a; ?>%</h1>
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
			
				<?php $a = number_format(($seksi31->total_realisasi / $seksi31->total_target) * 100); ?>
				
				<h4 class="text-seksi fw-semibold"><?= $seksi31->nama ?></h4>
				<div class="card-seksi shadow-sm mx-auto border border-dark">
					<p class="h5-seksi fw-semibold">Triwulan III</p>
					<p>Target</p>
					<p>Rp <?= number_format($seksi31->total_target,2) ?></p>
					<p>Realisasi</p>
					<p>Rp <?= number_format($seksi31->total_realisasi,2)?></p>
					<h1><?= $a; ?>%</h1>
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
			
				<?php $a = number_format(($seksi32->total_realisasi / $seksi32->total_target) * 100); ?>
				<h4 class="text-seksi fw-semibold"><?= $seksi32->nama ?></h4>
				<div class="card-seksi shadow-sm mx-auto border border-dark">
					<p class="h5-seksi fw-semibold">Triwulan II</p>
					<p>Target</p>
					<p>Rp <?= number_format($seksi32->total_target,2) ?></p>
					<p>Realisasi</p>
					<p>Rp <?= number_format($seksi32->total_realisasi,2)?></p>
					<h1><?= $a; ?>%</h1>
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

					<?php $a = number_format(($seksi33->total_realisasi / $seksi33->total_target) * 100); ?>
					
					<h4 class="text-seksi fw-semibold"><?= $seksi33->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 1</p>
						<p>Target</p>
						<p>Rp <?= number_format($seksi33->total_target,2) ?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi33->total_realisasi,2)?></p>
						<h1><?= $a; ?>%</h1>
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
				<?php $a = number_format(($seksi34->total_realisasi / $seksi34->total_target) * 100); ?>
				<h4 class="text-seksi fw-semibold"><?= $seksi34->nama ?></h4>
				<div class="card-seksi shadow-sm mx-auto border border-dark">
					<p class="h5-seksi fw-semibold">Triwulan II</p>
					<p>Target</p>
					<p>Rp <?= number_format($seksi34->total_target,2) ?></p>
					<p>Realisasi</p>
					<p>Rp <?= number_format($seksi34->total_realisasi,2)?></p>
					<h1><?= $a; ?>%</h1>
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
			
				<?php $a = number_format(($seksi35->total_realisasi / $seksi35->total_target) * 100); ?>
				
				<h4 class="text-seksi fw-semibold"><?= $seksi35->nama ?></h4>
				<div class="card-seksi shadow-sm mx-auto border border-dark">
					<p class="h5-seksi fw-semibold">Triwulan III</p>
					<p>Target</p>
					<p>Rp <?= number_format($seksi35->total_target,2) ?></p>
					<p>Realisasi</p>
					<p>Rp <?= number_format($seksi35->total_realisasi,2)?></p>
					<h1><?= $a; ?>%</h1>
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
			
				<?php $a = number_format(($seksi36->total_realisasi / $seksi36->total_target) * 100); ?>
				<h4 class="text-seksi fw-semibold"><?= $seksi36->nama ?></h4>
				<div class="card-seksi shadow-sm mx-auto border border-dark">
					<p class="h5-seksi fw-semibold">Triwulan II</p>
					<p>Target</p>
					<p>Rp <?= number_format($seksi36->total_target,2) ?></p>
					<p>Realisasi</p>
					<p>Rp <?= number_format($seksi36->total_realisasi,2)?></p>
					<h1><?= $a; ?>%</h1>
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

					<?php $a = number_format(($seksi37->total_realisasi / $seksi37->total_target) * 100); ?>
					
					<h4 class="text-seksi fw-semibold"><?= $seksi37->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 1</p>
						<p>Target</p>
						<p>Rp <?= number_format($seksi37->total_target,2) ?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi37->total_realisasi,2)?></p>
						<h1><?= $a; ?>%</h1>
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
				<?php $a = number_format(($seksi38->total_realisasi / $seksi38->total_target) * 100); ?>
				<h4 class="text-seksi fw-semibold"><?= $seksi38->nama ?></h4>
				<div class="card-seksi shadow-sm mx-auto border border-dark">
					<p class="h5-seksi fw-semibold">Triwulan II</p>
					<p>Target</p>
					<p>Rp <?= number_format($seksi38->total_target,2) ?></p>
					<p>Realisasi</p>
					<p>Rp <?= number_format($seksi38->total_realisasi,2)?></p>
					<h1><?= $a; ?>%</h1>
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
			
				<?php $a = number_format(($seksi39->total_realisasi / $seksi39->total_target) * 100); ?>
				
				<h4 class="text-seksi fw-semibold"><?= $seksi39->nama ?></h4>
				<div class="card-seksi shadow-sm mx-auto border border-dark">
					<p class="h5-seksi fw-semibold">Triwulan III</p>
					<p>Target</p>
					<p>Rp <?= number_format($seksi39->total_target,2) ?></p>
					<p>Realisasi</p>
					<p>Rp <?= number_format($seksi39->total_realisasi,2)?></p>
					<h1><?= $a; ?>%</h1>
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
			
				<?php $a = number_format(($seksi40->total_realisasi / $seksi40->total_target) * 100); ?>
				<h4 class="text-seksi fw-semibold"><?= $seksi40->nama ?></h4>
				<div class="card-seksi shadow-sm mx-auto border border-dark">
					<p class="h5-seksi fw-semibold">Triwulan II</p>
					<p>Target</p>
					<p>Rp <?= number_format($seksi40->total_target,2) ?></p>
					<p>Realisasi</p>
					<p>Rp <?= number_format($seksi40->total_realisasi,2)?></p>
					<h1><?= $a; ?>%</h1>
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

					<?php $a = number_format(($seksi41->total_realisasi / $seksi41->total_target) * 100); ?>
					
					<h4 class="text-seksi fw-semibold"><?= $seksi41->nama ?></h4>
					<div class="card-seksi shadow-sm mx-auto border border-dark">
						<p class="h5-seksi fw-semibold">Triwulan 1</p>
						<p>Target</p>
						<p>Rp <?= number_format($seksi41->total_target,2) ?></p>
						<p>Realisasi</p>
						<p>Rp <?= number_format($seksi41->total_realisasi,2)?></p>
						<h1><?= $a; ?>%</h1>
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
				<?php $a = number_format(($seksi42->total_realisasi / $seksi42->total_target) * 100); ?>
				<h4 class="text-seksi fw-semibold"><?= $seksi42->nama ?></h4>
				<div class="card-seksi shadow-sm mx-auto border border-dark">
					<p class="h5-seksi fw-semibold">Triwulan II</p>
					<p>Target</p>
					<p>Rp <?= number_format($seksi42->total_target,2) ?></p>
					<p>Realisasi</p>
					<p>Rp <?= number_format($seksi42->total_realisasi,2)?></p>
					<h1><?= $a; ?>%</h1>
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
			
				<?php $a = number_format(($seksi43->total_realisasi / $seksi43->total_target) * 100); ?>
				
				<h4 class="text-seksi fw-semibold"><?= $seksi43->nama ?></h4>
				<div class="card-seksi shadow-sm mx-auto border border-dark">
					<p class="h5-seksi fw-semibold">Triwulan III</p>
					<p>Target</p>
					<p>Rp <?= number_format($seksi43->total_target,2) ?></p>
					<p>Realisasi</p>
					<p>Rp <?= number_format($seksi43->total_realisasi,2)?></p>
					<h1><?= $a; ?>%</h1>
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
			
				<?php $a = number_format(($seksi44->total_realisasi / $seksi44->total_target) * 100); ?>
				<h4 class="text-seksi fw-semibold"><?= $seksi44->nama ?></h4>
				<div class="card-seksi shadow-sm mx-auto border border-dark">
					<p class="h5-seksi fw-semibold">Triwulan II</p>
					<p>Target</p>
					<p>Rp <?= number_format($seksi44->total_target,2) ?></p>
					<p>Realisasi</p>
					<p>Rp <?= number_format($seksi44->total_realisasi,2)?></p>
					<h1><?= $a; ?>%</h1>
				</div>
			</div>
        </div>
		<?php } ?>

	</div>
</div>




</body>
</html>
