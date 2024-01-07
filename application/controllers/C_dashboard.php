<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_dashboard extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_login');
    $this->load->model('M_belanja');
    $this->load->model('M_header');
    if(empty($this->session->userdata('username'))){
      $this->session->set_flashdata('pesan', 'Anda belum login !!!');
      redirect('index.php/C_login');
    }
  }

  public function index()
  {
    $data['title'] = "Dashboard Utama";
    $data['session_user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row();
    $data['dashboard'] = $this->M_login->get_dashboard_result();
   
    $this->load->view('templates2/Header', $data);
    $this->load->view('V_dashboard', $data);
    $this->load->view('templates2/Footer', $data);
  }


  public function pilihtahun($id_anggaran)
  {
      $data = array(
        'title' => "Dashboard Utama",
        'session_user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row(),
        'dashboard' => $this->M_login->get_dashboard_result(),
        'dashboard2' => $this->M_login->get_dashboard_result2($id_anggaran),
        'value' => $this->M_header->get_header($id_anggaran),
        'dashboard_row' => $this->M_login->get_dashboard_row($id_anggaran),
        'jumlahrealisasi' => $this->M_login->get_sum_realisasi($id_anggaran),
        'jumlahtarget' => $this->M_login->get_sum_target($id_anggaran),
				'get_chart' => $this->M_login->get_chart($id_anggaran),
				// 'get' => $this->M_login->get($id_anggaran),
				'target' => $this->M_login->target($id_anggaran),
				'realisasi' => $this->M_login->realisasi($id_anggaran),
        'bulan' => $this->M_belanja->get_data_bulan(),
				// 'anggaran' => $this->M_login->anggaran($id_anggaran)
      );
      $this->load->view('templates/Header', $data);
      $this->load->view('V_dashboard_pilihtahun', $data);
      $this->load->view('templates/Footer', $data);
  }

  public function load_bulan($id_ang)
  {
    $username = $this->session->userdata('username');
    $status = $this->session->userdata('status');

    $bulan = $_GET['bulan'];

        $this->db->select('SUM(belanja.realisasi) as jml_realisasi, SUM(belanja.target) as jml_target, anggaran.id_anggaran');
        $this->db->from('bulan');
        $this->db->join('belanja','bulan.id_bulan = belanja.id_bulan');
        $this->db->join('anggaran', 'belanja.id_ang = anggaran.id_anggaran');
        $this->db->where('bulan.id_bulan', $bulan);
        $this->db->where('belanja.id_ang', $id_ang);
       
        $data = $this->db->get()->result(); 
        foreach ($data as $data) {
          if ($data->jml_realisasi == null) {?>
            <div class="card-container container-fluid">
      <div class="d-flex justify-content-center mx-auto mx-xl-auto mx-xxl-auto ps-xxl-5">
       
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

                
                  <p
                  class="card-text fw-bold"
                  data-bs-toggle="tooltip"
                  data-bs-placement="bottom"
                  title="Rp. 0.00"
                >
                Rp. 0.00
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
                  <p class="card-text fw-light">target</p>
                  <div class="card-icon ms-auto">
                    <img src="<?= base_url('assets/img/icon-1.svg') ?>" alt="" />
                  </div>
                </div>
                  <p
                  class="card-text fw-bold"
                  data-bs-toggle="tooltip"
                  data-bs-placement="bottom"
                  title="Rp. 0.00"
                >
                Rp. 0.00
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
                  <p class="card-text fw-light">Deviasi</p>
                  <div class="card-icon ms-auto">
                    <img src="<?= base_url('assets/img/icon-1.svg') ?>" alt="" />
                  </div>
                </div>
                  <p
                  class="card-text fw-bold"
                  data-bs-toggle="tooltip"
                  data-bs-placement="bottom"
                  title="Rp. 0.00"
                >

                Rp. 0.00
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

        <?php   }else{
          
        
        $total_deviasi = $data->jml_target - $data->jml_realisasi  ; ?>
          
   
       <div class="card-container container-fluid">
      <div class="d-flex justify-content-center mx-auto mx-xl-auto mx-xxl-auto ps-xxl-5">
       
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
                if ($data->jml_realisasi == null) { ?>
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
                  title="Rp. <?= number_format($data->jml_realisasi,2) ?>"
                >
                
                Rp. <?= number_format($data->jml_realisasi,2) ?>
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
                if ($data->jml_realisasi == null) { ?>
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
                  title="Rp. <?= number_format($data->jml_target,2) ?>"
                >
                
                Rp. <?= number_format($data->jml_target,2) ?>
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
                <?php if ($data->jml_realisasi == null) {?>
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
      </div>
    </div>

  <?php } ?>  
  
    
    <?php } ?>
            <?php 
    }   
}

