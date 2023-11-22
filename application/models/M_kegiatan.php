<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_kegiatan extends CI_Model
{

    public function get($id_anggaran)
    {
        $this->db->select('anggaran.id_anggaran, kegiatan.*');
        $this->db->from('anggaran');
        $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
        $this->db->where('anggaran.id_anggaran', $id_anggaran);
        return $this->db->get_where()->result();
    }
    public function get2()
    {
        $this->db->select('kegiatan.id_kegiatan');
        $this->db->from('kegiatan');
        return $this->db->get_where()->row();
    }

    public function get_user_result(){
        $this->db->select('user.username');
        $this->db->from('user');
        return $this->db->get()->result();
    }

    public function insert($data)
    {
        $this->db->insert('kegiatan', $data);
    }

    public function update($data)
    {
        $this->db->where('id_kegiatan', $data['id_kegiatan']);
        $this->db->update('kegiatan', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_kegiatan', $data['id_kegiatan']);
        $this->db->delete('kegiatan', $data);
        $this->db->delete('belanja', $data);
    }
}
