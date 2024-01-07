<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_anggaran extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_anggaran');
        $this->load->model('M_header');
        if(empty($this->session->userdata('username'))){
            $this->session->set_flashdata('pesan', 'Anda belum login !!!');
            redirect('index.php/C_login');
          }
    }

    public function index()
    {
        $data  = array(
            'title' => 'anggaran',
            'session_user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row(),
            'anggarantahun' => $this->M_anggaran->get_anggaran(),
        );
        $this->load->view('templates2/Header', $data);
        $this->load->view('V_anggaran', $data);
        $this->load->view('templates2/Footer', $data);
    }

    public function pilihtahun($id_anggaran)
    {
        $data = array(
            'title' => ' anggaran tahun',
            'session_user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row(),
            'value' => $this->M_header->get_header($id_anggaran),
            'anggaranpt' => $this->M_anggaran->get_anggaran(),
            'anggarantahunpt' => $this->M_anggaran->get_anggaran_pt($id_anggaran),
            'programpt' => $this->M_anggaran->get_anggarankerja_pt($id_anggaran),
        );
        $this->load->view('templates/Header', $data);
        $this->load->view('V_anggaran_pilihtahun', $data);
        $this->load->view('templates/Footer', $data);
    }

    public function insert_anggaran()
    {
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|is_unique[anggaran.tahun]', array(
            'is_unique' => 'Data Tahun Anggaran Tersebut Sudah ada'
        ));
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required', array(
            'required' => 'Jumlah Anggaran Wajib Diisi!'
        ));

        if ($this->form_validation->run() != false) {
            $tahun = $this->input->post('tahun');
            $jumlah = $this->input->post('jumlah');

            $data = array(
                'tahun' => $tahun,
                'jumlah' => $jumlah,
            );

            $this->M_anggaran->insert_anggaran($data);
            $this->session->set_flashdata('pesan', 'Data Anggaran Berhasil Ditambahkan');
            redirect('index.php/C_anggaran');
        } else {
            $data  = array(
                'title' => 'anggaran',
                'anggarantahun' => $this->M_anggaran->get_anggaran(),
            );
			$this->session->set_flashdata('gagal', 'Data Anggaran Sudah Ada');
			redirect('index.php/C_anggaran');

            $this->load->view('templates/Header', $data);
            $this->load->view('V_anggaran', $data);
            $this->load->view('templates/Footer', $data);
        }
    }

    public function update_anggaran()
    {
		$this->form_validation->set_rules('tahun','Tahun Anggaran','required');
		$existing_data = $this->M_anggaran->get();

		 // Check if the submitted value is the same as the existing value
        if ($this->input->post('tahun') == $existing_data['tahun']) {
            // The value is the same, no need for validation
        } else {
            // The value is different, perform validation
            $this->form_validation->set_rules('tahun', 'tahun Anggaran', 'is_unique[anggaran.tahun]', array(
            'is_unique' => 'Data Tahun Anggaran Tersebut Sudah ada'
        ));
        }

		 if ($this->form_validation->run() == FALSE) {
            // Form validation failed, show error messages or load the form again
			 $this->session->set_flashdata('validation_errors', 'Tahun Anggaran Sudah Ada');
            redirect($_SERVER['HTTP_REFERER']);
        } else {
        $id_anggaran = $this->input->post('id_anggaran');
        $tahun = $this->input->post('tahun');
        $jumlah = $this->input->post('jumlah');
        $data = array(
            'id_anggaran' => $id_anggaran,
            'tahun' => $tahun,
            'jumlah' => $jumlah,
        );
		// Update jumlah tanpa harus mengupdate tahun 
        $this->M_anggaran->update_anggaran($data);
        $this->session->set_flashdata('pesan', 'Data Anggaran Berhasil Diubah');
        redirect($_SERVER['HTTP_REFERER']);
		}
		$data = array(
            'id_anggaran' => $id_anggaran,
            'jumlah' => $jumlah,
        );


        $this->M_anggaran->update_anggaran($data);
        $this->session->set_flashdata('pesan', 'Data Anggaran Berhasil Diubah');
        redirect($_SERVER['HTTP_REFERER']);

    }

    public function insert_program()
{
    $this->form_validation->set_rules('program_kerja', 'Program Kerja', 'required|is_unique[program.program_kerja]', array(
        'is_unique' => 'Data Program Kerja tidak boleh sama'
    ));

    if ($this->form_validation->run() != false) {
        $program_kerja = $this->input->post('program_kerja');
        $id_anggaran = $this->input->post('id_anggaran');

        $data = array(
            'program_kerja' => $program_kerja,
            'id_anggaran' => $id_anggaran,
        );

        // Memeriksa apakah data sudah ada sebelumnya
        if (!$this->is_program_exists($program_kerja)) {
            $this->M_anggaran->insert_program($data);
            $this->session->set_flashdata('pesan', 'Data program berhasil ditambahkan');
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $this->session->set_flashdata('error', 'Data program sudah ada sebelumnya');
            redirect($_SERVER['HTTP_REFERER']);
        }
    } else {
        $this->session->set_flashdata('error', 'Data program gagal ditambahkan');
        redirect($_SERVER['HTTP_REFERER']);
    }
}

// Fungsi untuk memeriksa apakah program sudah ada sebelumnya
private function is_program_exists($program_kerja)
{
    return $this->M_anggaran->is_program_exists($program_kerja);
}


    public function update_program()
    {

        $id_program = $this->input->post('id_program');
        $program_kerja = $this->input->post('program_kerja');
        $id_anggaran = $this->input->post('id_anggaran');

        $data = array(
            'id_program' => $id_program,
            'program_kerja' => $program_kerja,
            'id_anggaran' => $id_anggaran,
        );
        $this->M_anggaran->update_program($data);
        $this->session->set_flashdata('pesan', 'data program berhasil di Ubah');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function delete_program($id_program)
    {
        $data['id_program'] = $id_program;
        $this->M_anggaran->delete_program($data);
        $this->session->set_flashdata('pesan', 'data program berhasil di hapus');
        redirect($_SERVER['HTTP_REFERER']);
    }
}
