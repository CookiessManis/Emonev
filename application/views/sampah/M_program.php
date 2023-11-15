<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_program extends CI_Model
{
    public function get()
    {
        $this->db->select('*');
        $this->db->from('program');
        return $this->db->get()->result();
    }

    public function insert($data)
    {
        $this->db->insert('program', $data);
    }
}
