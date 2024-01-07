<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_seksi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_seksi');
        $this->load->model('M_header');
        if(empty($this->session->userdata('username'))){
            $this->session->set_flashdata('pesan', 'Anda belum login !!!');
            redirect('index.php/C_login');
          }
    }

    public function index($id_anggaran)
    {

        $data  = array(
			'session_user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row(),
			
            'title' => 'seksi',
            'value' => $this->M_header->get_header($id_anggaran),
            'seksi1' => $this->M_seksi->get($id_anggaran),
            'seksi2' => $this->M_seksi->get2($id_anggaran),
            'seksi3' => $this->M_seksi->get3($id_anggaran),
            'seksi4' => $this->M_seksi->get4($id_anggaran),

            'seksi5' => $this->M_seksi->get5($id_anggaran),
            'seksi6' => $this->M_seksi->get6($id_anggaran),
            'seksi7' => $this->M_seksi->get7($id_anggaran),
            'seksi8' => $this->M_seksi->get8($id_anggaran),

            'seksi9' => $this->M_seksi->get9($id_anggaran),
            'seksi10' => $this->M_seksi->get10($id_anggaran),
            'seksi11' => $this->M_seksi->get11($id_anggaran),
            'seksi12' => $this->M_seksi->get12($id_anggaran),

            'seksi13' => $this->M_seksi->get13($id_anggaran),
            'seksi14' => $this->M_seksi->get14($id_anggaran),
            'seksi15' => $this->M_seksi->get15($id_anggaran),
            'seksi16' => $this->M_seksi->get16($id_anggaran),

            'seksi17' => $this->M_seksi->get17($id_anggaran),
            'seksi18' => $this->M_seksi->get18($id_anggaran),
            'seksi19' => $this->M_seksi->get19($id_anggaran),
            'seksi20' => $this->M_seksi->get20($id_anggaran),

            'seksi21' => $this->M_seksi->get21($id_anggaran),
            'seksi22' => $this->M_seksi->get22($id_anggaran),
            'seksi23' => $this->M_seksi->get23($id_anggaran),
            'seksi24' => $this->M_seksi->get24($id_anggaran),

            'seksi25' => $this->M_seksi->get25($id_anggaran),
            'seksi26' => $this->M_seksi->get26($id_anggaran),
            'seksi27' => $this->M_seksi->get27($id_anggaran),
            'seksi28' => $this->M_seksi->get28($id_anggaran),

            'seksi29' => $this->M_seksi->get29($id_anggaran),
            'seksi30' => $this->M_seksi->get30($id_anggaran),
            'seksi31' => $this->M_seksi->get31($id_anggaran),
            'seksi32' => $this->M_seksi->get32($id_anggaran),

            'seksi33' => $this->M_seksi->get33($id_anggaran),
            'seksi34' => $this->M_seksi->get34($id_anggaran),
            'seksi35' => $this->M_seksi->get35($id_anggaran),
            'seksi36' => $this->M_seksi->get36($id_anggaran),

            'seksi37' => $this->M_seksi->get37($id_anggaran),
            'seksi38' => $this->M_seksi->get38($id_anggaran),
            'seksi39' => $this->M_seksi->get39($id_anggaran),
            'seksi40' => $this->M_seksi->get40($id_anggaran),

            'seksi41' => $this->M_seksi->get41($id_anggaran),
            'seksi42' => $this->M_seksi->get42($id_anggaran),
            'seksi43' => $this->M_seksi->get43($id_anggaran),
            'seksi44' => $this->M_seksi->get44($id_anggaran),
            
        );
        $this->load->view('templates/Header', $data);
        $this->load->view('V_seksi', $data);
        $this->load->view('templates/Footer', $data);
    }


    // public function pilih_triwulan($id_triwulan)
    // {
    //     $data  = array(
    //         'title' => 'seksi',
    //         'value' => $this->M_seksi->get_header($id_triwulan),
    //         'seksi' => $this->M_seksi->get_pilih_triwulan($id_triwulan),
    //         'triwulan' => $this->M_seksi->get_triwulan2($id_triwulan),
    //         'jumlahrealisasi' => $this->M_seksi->get_pilih_sum_realisasi($id_triwulan),
    //         'jumlahtarget' => $this->M_seksi->get_pilih_sum_target($id_triwulan),
    //     );
    //     $this->load->view('templates/Header', $data);
    //     $this->load->view('V_seksi', $data);
    //     $this->load->view('templates/Footer', $data);
    // }
}
