<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_belanja extends CI_Model
{
    public function get_data($id_kegiatan)
    {
        $this->db->select('belanja.*, kegiatan.id_kegiatan');
        $this->db->from('kegiatan');
        $this->db->join('belanja','kegiatan.id_kegiatan = belanja.id_kegiatan');
        $this->db->where('kegiatan.id_kegiatan', $id_kegiatan);
        return $this->db->get_where()->result();
    }
    public function get_data2($id_kegiatan)
    {
        $this->db->select('belanja.id_belanja');
        $this->db->from('kegiatan');
        $this->db->join('belanja','kegiatan.id_kegiatan = belanja.id_kegiatan');
        $this->db->where('kegiatan.id_kegiatan', $id_kegiatan);
        return $this->db->get_where()->row();
    }

    public function get_data_kegiatan($id_kegiatan)
    {
        $this->db->select('kegiatan.id_kegiatan, kegiatan.username, kegiatan.id_anggaran');
        $this->db->from('kegiatan');
        $this->db->where('id_kegiatan', $id_kegiatan);
        return $this->db->get()->row();
    }

    public function get_data_bulan(){
        $this->db->select('bulan.id_bulan, bulan.nama_bulan');
        $this->db->from('bulan');
        return $this->db->get()->result();
    }
    public function get_anggaran($id_kegiatan){
        $this->db->select('*');
        $this->db->from('kegiatan');
		$this->db->join('anggaran','kegiatan.id_anggaran = anggaran.id_anggaran');
		$this->db->where('kegiatan.id_kegiatan',$id_kegiatan);
        return $this->db->get()->result();
    }

    // public function get_data_by_id($id)
    // {
    //     $this->db->select('*');
    //     $this->db->from('belanja');
    //     $this->db->where('belanja.id_belanja', $id);
    //     return $this->db->get()->row();
    // }


	// In M_belanja model
public function get_total_realisasi($id_anggaran)
{
    $this->db->select_sum('realisasi');
    $this->db->from('belanja');
    $this->db->where('id_anggaran', $id_anggaran);
    $query = $this->db->get();

    return $query->row()->realisasi;
}

    public function insert_data($data)
    {
        $this->db->insert('belanja', $data);
    }

    public function update($data)
    {
        $this->db->where('id_belanja', $data['id_belanja']);
        $this->db->update('belanja', $data);
    }


    public function delete($data)
    {
        $this->db->where('id_belanja', $data['id_belanja']);
        $this->db->delete('belanja', $data);
    }

    public function get_header($id_kegiatan)
    {
        $this->db->select('anggaran.id_anggaran');
        $this->db->from('anggaran');
        $this->db->join('kegiatan', ' anggaran.id_anggaran = kegiatan.id_anggaran');
        $this->db->where('id_kegiatan', $id_kegiatan);
        return $this->db->get()->row();
    }

}
