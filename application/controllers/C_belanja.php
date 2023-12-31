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
            redirect('index.php/C_login');
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
            'bulan' => $this->M_belanja->get_data_bulan(),
			'anggaran' => $this->M_belanja->get_anggaran($id_kegiatan),
			'bulanKeg' => $this->M_belanja->bulan_id_kegiatan($id_kegiatan),
			'subKegiatan' => $this->M_belanja->get_sub_kegiatan($id_kegiatan),
			'total_realisasi' => $this->M_belanja->getRealisasiSumByIdAng(),
        );
        $this->load->view('templates/Header', $data);
        $this->load->view('V_belanja', $data);
        $this->load->view('templates/Footer', $data);
    }

    public function insert()
    {
       $this->form_validation->set_rules('id_bulan', 'ID Bulan', 'required'); // Add any additional rules as needed

	    if ($this->form_validation->run() == false) {
        $this->session->set_flashdata('error', 'Belanja gagal di tambahan, Bulan Wajib ditambahkan');
        redirect($_SERVER['HTTP_REFERER']);
		 } else {
        // Proceed with the insertion logic

        $no_rek             = $this->input->post('no_rek');
            $rincian            = $this->input->post('rincian');
            $pagu               = $this->input->post('pagu');
            $npd                = $this->input->post('npd');
            $realisasi          = $this->input->post('realisasi');
            $target             = $this->input->post('target');
            $id_bulan           = $this->input->post('id_bulan');
            $id_kegiatan        = $this->input->post('id_kegiatan');
            $username           = $this->input->post('username');
			$id_anggaran        = $this->input->post('id_anggaran');
			$id_ang 			= $this->input->post('id_ang');
            $realisasi_fisik    = $this->input->post('realisasi_fisik');
            $target_fisik       = $this->input->post('target_fisik');
            $nama_fisik         = $this->input->post('nama_fisik');
        // ... (other fields)

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
				// 'sisa_anggaran' => $sisa_anggaran,
				'id_ang' => $id_ang,
                'target_fisik' => $target_fisik,
                'realisasi_fisik' => $realisasi_fisik,
                'nama_fisik' => $nama_fisik,

            );

        $this->M_belanja->insert_data($data);
        $this->session->set_flashdata('pesan', 'Belanja berhasil di tambahan');
        redirect($_SERVER['HTTP_REFERER']);
    }
    }

    public function update()
    {
         $id_belanja         = $this->input->post('id_belanja');
            $no_rek             = $this->input->post('no_rek');
            $rincian            = $this->input->post('rincian');
            $pagu               = $this->input->post('pagu');
            $npd                = $this->input->post('npd');
            $realisasi          = $this->input->post('realisasi');
            $target             = $this->input->post('target');
            $id_bulan           = $this->input->post('id_bulan');
            $id_kegiatan  = $this->input->post('id_kegiatan');
			$id_anggaran        = $this->input->post('id_anggaran');
			$id_ang 			= $this->input->post('id_ang');
            $realisasi_fisik    = $this->input->post('realisasi_fisik');
            $target_fisik       = $this->input->post('target_fisik');
            $nama_fisik         = $this->input->post('nama_fisik');

				// Get the sum of realisasi for the given id_anggaran
			$total_realisasi = $this->M_belanja->get_total_realisasi($id_anggaran);

			// // Calculate sisa_anggaran
			// $sisa_anggaran = $id_anggaran -  ($total_realisasi + $realisasi);

			
            $data  = array(
                'id_belanja'    => $id_belanja,
                'no_rek'        => $no_rek,
                'rincian'       => $rincian,
                'pagu'          => $pagu,
                'npd'           => $npd,
                'realisasi'     => $realisasi,
                'target'        => $target,
                'id_bulan'      => $id_bulan,
                'id_kegiatan' => $id_kegiatan,
				'id_anggaran' => $id_anggaran,
				// 'sisa_anggaran' => $sisa_anggaran,
				'id_ang' => $id_ang,
                'target_fisik' => $target_fisik,
                'realisasi_fisik' => $realisasi_fisik,
                'nama_fisik' => $nama_fisik,
            );
            $this->M_belanja->update($data);
            $this->session->set_flashdata('pesan', 'Belanja berhasil di edit');
            redirect($_SERVER['HTTP_REFERER']);
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
            
            $a = number_format(($ba->realisasi / $ba->target) * 100); 
            $b = number_format(($ba->realisasi_fisik / $ba->target_fisik) * 100); ?>
            <tr>

                <td><?= $ba->no_rek; ?></td>
                                <td><?= $ba->rincian; ?></td>
                                <td>Rp.<?= number_format($ba->pagu,2); ?></td>
                                <td>Rp.<?= number_format($ba->npd,2) ?></td>
                                <td>Rp.<?= number_format($ba->target,2) ?></td>
                                <td><?= number_format($ba->target_fisik) ?></td>
                                <td>Rp.<?= number_format($ba->realisasi,2) ?></td>
                                <td><?= number_format($ba->realisasi_fisik) ?></td>
                                <td><?= $ba->id_bulan; ?></td>
                                <td><?= $a; ?>%</td>
                                <td><?= $b; ?>%</td>
                                
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
