<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }


    public function index()
    {
        $this->_rules();
        if ($this->form_validation->run() == false) {
            $this->load->view('V_login');
        } else {
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));

            $cek = $this->M_login->login($username, $password);

            if ($cek == false) {
                $this->session->set_flashdata('pesan', 'Login Tidak berhasil');
                redirect('index.php/C_login');
            } else {
                $this->session->set_userdata('username', $cek->username);
                $this->session->set_userdata('nama', $cek->nama);
                $this->session->set_userdata('status', $cek->status);
                redirect('index.php/C_dashboard');
            }
        }
    }


    public function logout()
    {
        $this->session->sess_destroy();
        redirect('index.php/C_login');
    }


    public function _rules()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
    }
}
