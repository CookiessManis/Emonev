<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_header extends CI_Model
{
    public function get_header($id_anggaran)
    {
        $this->db->select('anggaran.id_anggaran');
        $this->db->from('anggaran');
        $this->db->where('id_anggaran', $id_anggaran);
        return $this->db->get()->row();
    }
}