<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_kegiatan extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_kegiatan');
    $this->load->model('M_anggaran');
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
      'title' => 'Halaman Kegiatan',
      'anggarank' => $this->M_anggaran->get_anggaran_pt($id_anggaran),
      'value' => $this->M_header->get_header($id_anggaran),
      'kegiatan' => $this->M_kegiatan->get($id_anggaran),
      'kegiatan2' => $this->M_kegiatan->get2(),
      'user' => $this->M_kegiatan->get_user_result(),
    );
    $this->load->view('templates/Header', $data);
    $this->load->view('V_kegiatan', $data);
    $this->load->view('templates/Footer', $data);
  }

  public function insert()
  {

		$this->form_validation->set_rules('no_kegiatan','No Kegiatan','required', array(
			'required' => "No Kegiatan Wajib Diisi",
			// 'is_unique' => "No Kegiatan Sudah Ada"
		));
		$this->form_validation->set_rules('sub_kegiatan','Sub Kegiatan','required', array(
			'required' => "Sub Kegiatan Wajib Diisi"
		));
		

		if($this->form_validation->run() != false){

    $no_kegiatan = $this->input->post('no_kegiatan');
    $sub_kegiatan = $this->input->post('sub_kegiatan');
    $username = $this->input->post('username');
    $id_anggaran = $this->input->post('id_anggaran');

    $data = array(
      'no_kegiatan' => $no_kegiatan,
      'sub_kegiatan' => $sub_kegiatan,
      'username' => $username,
      'id_anggaran' => $id_anggaran,
    );
    $this->M_kegiatan->insert($data);
    $this->session->set_flashdata('pesan', 'kegiatan berhasil di tambahan');
    redirect($_SERVER['HTTP_REFERER']);
		} else {
			$this->session->set_flashdata('gagal', 'kegiatan Gagal di tambahan');
			redirect($_SERVER['HTTP_REFERER']);
		}

  }

  public function update()
  {
    $id_kegiatan = $this->input->post('id_kegiatan');
    $no_kegiatan = $this->input->post('no_kegiatan');
    $sub_kegiatan = $this->input->post('sub_kegiatan');
    $id_anggaran = $this->input->post('id_anggaran');

    $data = array(
      'id_kegiatan' => $id_kegiatan,
      'no_kegiatan' => $no_kegiatan,
      'sub_kegiatan' => $sub_kegiatan,
      'id_anggaran' => $id_anggaran,
    );
    $this->M_kegiatan->update($data);
    $this->session->set_flashdata('pesan', ' kegiatan berhasil di perbarui');
    redirect($_SERVER['HTTP_REFERER']);
  }

  public function delete($id_kegiatan)
  {
    $data['id_kegiatan'] = $id_kegiatan;
    $this->M_kegiatan->delete($data);
    $this->session->set_flashdata('pesan', 'Kegiatan berhasil di hapus');
    redirect($_SERVER['HTTP_REFERER']);
  }

 public function load_user($id_anggaran)
 {
  $username = $this->session->userdata('username');
  $status = $this->session->userdata('status');

    $user = $_GET['seksi'];

    $this->db->select('user.*,kegiatan.*');
    $this->db->from('user');
    $this->db->join('kegiatan','user.username = kegiatan.username');
    $this->db->where('user.username', $user);
    $this->db->where('kegiatan.id_anggaran', $id_anggaran);

    $data = $this->db->get()->result();

      foreach ($data as $value) { ?>
        <tr class="text-center">
        <!-- untuk ke halaman belanja ubah link di onklik -->
                <td onclick="location.href='<?= base_url('C_belanja/index/'.$value->id_kegiatan) ?>'" class="td-pointer">
                <?= $value->no_kegiatan; ?>
                  </td>
                  <td onclick="location.href='<?= base_url('C_belanja/index/'.$value->id_kegiatan) ?>'" colspan="4"><?= $value->sub_kegiatan; ?></td>
                  <td>
                  <?php if ($value->username == $username OR $status == 2) {?> 
                    <button
                      class="btn btn-warning"
                      data-bs-toggle="modal"
                      data-bs-target="#editModal<?= $value->id_kegiatan; ?>"
                    >
                      Edit
                    </button>
                    <button
                      class="btn btn-danger"
                      data-bs-toggle="modal"
                      data-bs-target="#hapusModal<?= $value->id_kegiatan; ?>"
                    >
                      Hapus
                    </button>
                    <?php }else{} ?>
                  </td>
                </tr>  
      <?php } ?> 
      <?php 
 }
}
