<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_login extends CI_Model
{

    public function login($username, $password)
    {
        $username = set_value('username');
        $password = set_value('password');

        $result = $this->db->where('username', $username)
            ->where('password', md5($password))
            ->limit(1)
            ->get('user');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    // untuk pilih tahun
    public function get_dashboard_result()
    {
        $this->db->select('anggaran.id_anggaran, anggaran.tahun');
        $this->db->from('anggaran');
        $this->db->order_by('tahun','desc');
        return $this->db->get()->result();
    }
    public function get_dashboard_row($id_anggaran)
    {
        $this->db->select('anggaran.jumlah');
        $this->db->from('anggaran');
        $this->db->where('anggaran.id_anggaran', $id_anggaran);
        return $this->db->get()->row();
    }

	// public function get_chart_anggaran($id_anggaran)
	// {
	// 	$this->db->select('*');
	// 	$this->db->from('anggaran');
	// 	$this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
    //     $this->db->join('belanja', 'belanja.id_kegiatan = kegiatan.id_kegiatan');
    //     $this->db->where('anggaran.id_anggaran', $id_anggaran);
    //     return $this->db->get()->result();
	// }
	

    public function get_sum_realisasi($id_anggaran){
        $this->db->select_sum('realisasi');
        $this->db->from('anggaran');
        $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
        $this->db->join('belanja', 'belanja.id_kegiatan = kegiatan.id_kegiatan');
        $this->db->where('anggaran.id_anggaran', $id_anggaran);
        return $this->db->get('')->row();
    }
  

	public function get_chart($id_anggaran)
	{
		$this->db->select('*,SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target,SUM(belanja.npd) as total_npd,SUM(belanja.pagu) as total_pagu');
		$this->db->from('belanja');
		$this->db->join('anggaran','anggaran.id_anggaran = belanja.id_anggaran');
		$this->db->join('bulan','bulan.id_bulan = belanja.id_bulan');
		$this->db->where('belanja.id_anggaran',$id_anggaran);
		$this->db->group_by('belanja.id_belanja');
		return $this->db->get()->result();
	}

}
