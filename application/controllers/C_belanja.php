<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_belanja extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_belanja');
        $this->load->model('M_anggaran');
        $this->load->model('M_kegiatan');
        $this->load->model('M_header');
        if(empty($this->session->userdata('username'))){
            $this->session->set_flashdata('pesan', 'Anda belum login !!!');
            redirect('C_login');
          }
    }

    public function index($id_kegiatan)
    {
        $data  = array(
            'title' => 'Belanja',
            'session_user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row(),
            'kegiatanb' => $this->M_belanja->get_data_kegiatan($id_kegiatan),
            'value' => $this->M_belanja->get_header($id_kegiatan),
            'belanja' => $this->M_belanja->get_data($id_kegiatan),
            'belanja2' => $this->M_belanja->get_data2($id_kegiatan),
            'bulan' => $this->M_belanja->get_data_bulan()
        );
        $this->load->view('templates/Header', $data);
        $this->load->view('V_belanja', $data);
        $this->load->view('templates/Footer', $data);
    }

    public function insert()
    {
        $this->_rules();

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('pesan', 'Belanja gagal di tambahan');
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $no_rek             = $this->input->post('no_rek');
            $rincian            = $this->input->post('rincian');
            $pagu               = $this->input->post('pagu');
            $npd                = $this->input->post('npd');
            $realisasi          = $this->input->post('realisasi');
            $target             = $this->input->post('target');
            $id_bulan           = $this->input->post('id_bulan');
            $id_kegiatan        =  $this->input->post('id_kegiatan');
            $username           =  $this->input->post('username');
			$id_anggaran        = $this->input->post('id_anggaran');

            $data  = array(
                'no_rek'        => $no_rek,
                'rincian'       => $rincian,
                'pagu'          => $pagu,
                'npd'           => $npd,
                'realisasi'     => $realisasi,
                'target'        => $target,
                'id_bulan'      => $id_bulan,
                'id_kegiatan'   => $id_kegiatan,
                'username'   => $username,
				'id_anggaran' => $id_anggaran,

            );
            $this->M_belanja->insert_data($data);
            $this->session->set_flashdata('pesan', 'Belanja berhasil di tambahan');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function update()
    {
        $this->_rules();

        if ($this->form_validation->run() == false) {
            redirect('C_dashboard');
        } else {
            $id_belanja         = $this->input->post('id_belanja');
            $no_rek             = $this->input->post('no_rek');
            $rincian            = $this->input->post('rincian');
            $pagu               = $this->input->post('pagu');
            $npd                = $this->input->post('npd');
            $realisasi          = $this->input->post('realisasi');
            $target             = $this->input->post('target');
            $id_bulan              = $this->input->post('id_bulan');
            $id_kegiatan  = $this->input->post('id_kegiatan');
            $data  = array(
                'id_belanja'    => $id_belanja,
                'no_rek'        => $no_rek,
                'rincian'       => $rincian,
                'pagu'          => $pagu,
                'npd'           => $npd,
                'realisasi'     => $realisasi,
                'target'        => $target,
                'id_bulan'         => $id_bulan,
                'id_kegiatan' => $id_kegiatan,
            );
            $this->M_belanja->update($data);
            $this->session->set_flashdata('pesan', 'Belanja berhasil di edit');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function delete($id_belanja)
    {
        $data['id_belanja'] = $id_belanja;
        $this->M_belanja->delete($data);
        $this->session->set_flashdata('pesan', 'Belanja berhasil di hapus');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function _rules()
    {
        $this->form_validation->set_rules('no_rek', 'No_rek', 'required');
        $this->form_validation->set_rules('rincian', 'Rincian', 'required');
        $this->form_validation->set_rules('pagu', 'Pagu', 'required');
        $this->form_validation->set_rules('npd', 'Npd', 'required');
        $this->form_validation->set_rules('realisasi', 'Realisasi', 'required');
        $this->form_validation->set_rules('target', 'Target', 'required');
    }

    public function load_bulan($id_kegiatan)
    {
        $username = $this->session->userdata('username');
        $status = $this->session->userdata('status');

        $bulan = $_GET['bulan'];

        $this->db->select('bulan.*,belanja.*');
        $this->db->from('bulan');
        $this->db->join('belanja','bulan.id_bulan = belanja.id_bulan');
        $this->db->where('bulan.id_bulan', $bulan);
        $this->db->where('belanja.id_kegiatan', $id_kegiatan);


        $data = $this->db->get()->result();

         

        foreach ($data as $ba) { 
            
            $a = number_format(($ba->realisasi / $ba->npd) * 100); ?>
            <tr>
                <td><?= $ba->no_rek; ?></td>
                <td><?= $ba->rincian; ?></td>
                <td><?= $ba->pagu; ?></td>
                <td><?= $ba->npd; ?></td>
                <td><?= $ba->realisasi; ?></td>
                <td><?= $a; ?>%</td>
                <td><?= $ba->target; ?></td>
                <td>
              <?php if ($ba->username == $username OR $status == 2) {?> 
              <button 
                    class="btn btn-warning text-white text-center" 
                    data-bs-toggle="modal" 
                    data-bs-target="#ModalUbah<?= $ba->id_belanja; ?>"
                    >
                        <span class="text-black text-center">📝</span>Ubah
                    </button> 
            <?php  }else{} ?>
                       

                    
                </td>
            </tr>

            <?php } ?>
            <?php 
    }   
}
