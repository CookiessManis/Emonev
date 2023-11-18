<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_anggaran extends CI_Model
{

    // untuk menampilkan tahun anggaran
    public function get_anggaran()
    {
        $this->db->select('anggaran.tahun, anggaran.id_anggaran');
        $this->db->from('anggaran');
        $this->db->order_by('tahun', 'desc');
        return $this->db->get()->result();
    }
    public function get()
    {
        $this->db->select('anggaran.tahun, anggaran.id_anggaran');
        $this->db->from('anggaran');
        $this->db->order_by('tahun', 'desc');
        return $this->db->get()->row_array();
    }

    // // buat return redirect
    // public function anggaran()
    // {
    //     $this->db->select('*');
    //     $this->db->from('anggaran');
    //     return $this->db->get()->row();
    // }

    // buat memanggil data  berdasarkan id_anggaran
    public function get_anggaran_pt($id_anggaran)
    {
        $this->db->select('*');
        $this->db->from('anggaran');
        $this->db->where('id_anggaran', $id_anggaran);
        return $this->db->get()->row();
    }

    //baut manggi data tahun berdasarkan id_anggaran
    public function get_anggarankerja_pt($id_anggaran)
    {
        $this->db->select('anggaran.tahun, anggaran.id_anggaran, program.id_program, program.program_kerja');
        $this->db->from('anggaran');
        $this->db->join('program', 'program.id_anggaran = anggaran.id_anggaran');
        $this->db->where('anggaran.id_anggaran', $id_anggaran);
        return $this->db->get()->result();
    }

    public function insert_anggaran($data)
    {
        $this->db->insert('anggaran', $data);
    }

    public function update_anggaran($data)
    {
        $this->db->where('id_anggaran', $data['id_anggaran']);
        $this->db->update('anggaran', $data);
    }

    public function insert_program($data)
    {
        $this->db->insert('program', $data);
    }

    public function update_program($data)
    {
        $this->db->where('id_program', $data['id_program']);
        $this->db->update('program', $data);
    }

    public function delete_program($data)
    {
        $this->db->where('id_program', $data['id_program']);
        $this->db->delete('program', $data);
    }
}
