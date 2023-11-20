<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_dashboard extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_login');
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
        'value' => $this->M_header->get_header($id_anggaran),
        'dashboard_row' => $this->M_login->get_dashboard_row($id_anggaran),
        'jumlahrealisasi' => $this->M_login->get_sum_realisasi($id_anggaran),
				'get_chart' => $this->M_login->get_chart($id_anggaran),
				'get' => $this->M_login->get($id_anggaran),
				'target' => $this->M_login->target($id_anggaran),
				'realisasi' => $this->M_login->realisasi($id_anggaran),
				'anggaran' => $this->M_login->anggaran($id_anggaran)
      );
      $this->load->view('templates/Header', $data);
      $this->load->view('V_dashboard_pilihtahun', $data);
      $this->load->view('templates/Footer', $data);
  }
}
