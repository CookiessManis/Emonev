<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_seksi extends CI_Model
{
    //sub bagian umum
	// triwulan 1
  public function get($id_anggaran)
  {
      $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
      $this->db->from('anggaran');
      $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
      $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
      $this->db->join('user', 'belanja.username = user.username');
      $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
      $this->db->where('anggaran.id_anggaran', $id_anggaran);
  
      // Add the condition for id_bulan
           $this->db->where('(belanja.id_bulan < 4 AND belanja.id_bulan > 0)');
  
      $this->db->where('belanja.username', 'umum'); // Replace 'malik' with the actual value you're looking for
      $this->db->group_by('anggaran.id_anggaran','belanja');
      return $this->db->get()->row();
  }
  
  // triwulan 2
   public function get2($id_anggaran)
  {
    $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
    $this->db->from('anggaran');
    $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
    $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
    $this->db->join('user', 'belanja.username = user.username');
    $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
    $this->db->where('anggaran.id_anggaran', $id_anggaran);
  
      // Add the condition for id_bulan
           $this->db->where('(belanja.id_bulan > 3 AND belanja.id_bulan < 7)');
  
      $this->db->where('belanja.username', 'umum'); // Replace 'malik' with the actual value you're looking for
      $this->db->group_by('anggaran.id_anggaran','belanja');
      return $this->db->get()->row();
  }
   
  // triwulan 3
   public function get3($id_anggaran)
  {
    $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
    $this->db->from('anggaran');
    $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
    $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
    $this->db->join('user', 'belanja.username = user.username');
    $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
    $this->db->where('anggaran.id_anggaran', $id_anggaran);
  
      // Add the condition for id_bulan
           $this->db->where('(belanja.id_bulan > 5 AND belanja.id_bulan < 10)');
  
      $this->db->where('belanja.username', 'umum'); // Replace 'malik' with the actual value you're looking for
      $this->db->group_by('anggaran.id_anggaran','belanja');
      return $this->db->get()->row();
  }
  // triwulan 4
   public function get4($id_anggaran)
  {
    $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
    $this->db->from('anggaran');
    $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
    $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
    $this->db->join('user', 'belanja.username = user.username');
    $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
    $this->db->where('anggaran.id_anggaran', $id_anggaran);
  
      // Add the condition for id_bulan
           $this->db->where('(belanja.id_bulan > 9 AND belanja.id_bulan < 13)');
  
      $this->db->where('belanja.username', 'umum'); // Replace 'malik' with the actual value you're looking for
      $this->db->group_by('anggaran.id_anggaran','belanja');
      return $this->db->get()->row();
  }


      //sub bagian prgram
	// triwulan 1
     public function get5($id_anggaran)
     {
         $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
         $this->db->from('anggaran');
         $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
         $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
         $this->db->join('user', 'belanja.username = user.username');
         $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
         $this->db->where('anggaran.id_anggaran', $id_anggaran);
     
         // Add the condition for id_bulan
              $this->db->where('(belanja.id_bulan < 4 AND belanja.id_bulan > 0)');
     
         $this->db->where('belanja.username', 'program'); // Replace 'malik' with the actual value you're looking for
         $this->db->group_by('anggaran.id_anggaran','belanja');
         return $this->db->get()->row();
     }
     
     // triwulan 2
      public function get6($id_anggaran)
     {
       $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
       $this->db->from('anggaran');
       $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
       $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
       $this->db->join('user', 'belanja.username = user.username');
       $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
       $this->db->where('anggaran.id_anggaran', $id_anggaran);
     
         // Add the condition for id_bulan
              $this->db->where('(belanja.id_bulan > 3 AND belanja.id_bulan < 7)');
     
         $this->db->where('belanja.username', 'program'); // Replace 'malik' with the actual value you're looking for
         $this->db->group_by('anggaran.id_anggaran','belanja');
         return $this->db->get()->row();
     }
       
     // triwulan 3
      public function get7($id_anggaran)
     {
       $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
       $this->db->from('anggaran');
       $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
       $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
       $this->db->join('user', 'belanja.username = user.username');
       $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
       $this->db->where('anggaran.id_anggaran', $id_anggaran);
     
         // Add the condition for id_bulan
              $this->db->where('(belanja.id_bulan > 5 AND belanja.id_bulan < 10)');
     
         $this->db->where('belanja.username', 'program'); // Replace 'malik' with the actual value you're looking for
         $this->db->group_by('anggaran.id_anggaran','belanja');
         return $this->db->get()->row();
     }
     // triwulan 4
      public function get8($id_anggaran)
     {
       $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
       $this->db->from('anggaran');
       $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
       $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
       $this->db->join('user', 'belanja.username = user.username');
       $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
       $this->db->where('anggaran.id_anggaran', $id_anggaran);
     
         // Add the condition for id_bulan
              $this->db->where('(belanja.id_bulan > 9 AND belanja.id_bulan < 13)');
     
         $this->db->where('belanja.username', 'program'); // Replace 'malik' with the actual value you're looking for
         $this->db->group_by('anggaran.id_anggaran','belanja');
         return $this->db->get()->row();
     }



     //sub bagian keuangan
	// triwulan 1
  public function get9($id_anggaran)
  {
      $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
      $this->db->from('anggaran');
      $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
      $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
      $this->db->join('user', 'belanja.username = user.username');
      $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
      $this->db->where('anggaran.id_anggaran', $id_anggaran);
  
      // Add the condition for id_bulan
           $this->db->where('(belanja.id_bulan < 4 AND belanja.id_bulan > 0)');
  
      $this->db->where('belanja.username', 'keuangan'); // Replace 'malik' with the actual value you're looking for
      $this->db->group_by('anggaran.id_anggaran','belanja');
      return $this->db->get()->row();
  }
  
  // triwulan 2
   public function get10($id_anggaran)
  {
    $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
    $this->db->from('anggaran');
    $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
    $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
    $this->db->join('user', 'belanja.username = user.username');
    $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
    $this->db->where('anggaran.id_anggaran', $id_anggaran);
  
      // Add the condition for id_bulan
           $this->db->where('(belanja.id_bulan > 3 AND belanja.id_bulan < 7)');
  
      $this->db->where('belanja.username', 'keuangan'); // Replace 'malik' with the actual value you're looking for
      $this->db->group_by('anggaran.id_anggaran','belanja');
      return $this->db->get()->row();
  }
   
  // triwulan 3
   public function get11($id_anggaran)
  {
    $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
    $this->db->from('anggaran');
    $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
    $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
    $this->db->join('user', 'belanja.username = user.username');
    $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
    $this->db->where('anggaran.id_anggaran', $id_anggaran);
  
      // Add the condition for id_bulan
           $this->db->where('(belanja.id_bulan > 5 AND belanja.id_bulan < 10)');
  
      $this->db->where('belanja.username', 'keuangan'); // Replace 'malik' with the actual value you're looking for
      $this->db->group_by('anggaran.id_anggaran','belanja');
      return $this->db->get()->row();
  }
  // triwulan 4
   public function get12($id_anggaran)
  {
    $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
    $this->db->from('anggaran');
    $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
    $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
    $this->db->join('user', 'belanja.username = user.username');
    $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
    $this->db->where('anggaran.id_anggaran', $id_anggaran);
  
      // Add the condition for id_bulan
           $this->db->where('(belanja.id_bulan > 9 AND belanja.id_bulan < 13)');
  
      $this->db->where('belanja.username', 'keuangan'); // Replace 'malik' with the actual value you're looking for
      $this->db->group_by('anggaran.id_anggaran','belanja');
      return $this->db->get()->row();
  }


      //seksi pengamanan dan pengawalan
	// triwulan 1
     public function get13($id_anggaran)
     {
         $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
         $this->db->from('anggaran');
         $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
         $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
         $this->db->join('user', 'belanja.username = user.username');
         $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
         $this->db->where('anggaran.id_anggaran', $id_anggaran);
     
         // Add the condition for id_bulan
              $this->db->where('(belanja.id_bulan < 4 AND belanja.id_bulan > 0)');
     
         $this->db->where('belanja.username', 'pamwal'); // Replace 'malik' with the actual value you're looking for
         $this->db->group_by('anggaran.id_anggaran','belanja');
         return $this->db->get()->row();
     }
     
     // triwulan 2
      public function get14($id_anggaran)
     {
       $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
       $this->db->from('anggaran');
       $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
       $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
       $this->db->join('user', 'belanja.username = user.username');
       $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
       $this->db->where('anggaran.id_anggaran', $id_anggaran);
     
         // Add the condition for id_bulan
              $this->db->where('(belanja.id_bulan > 3 AND belanja.id_bulan < 7)');
     
         $this->db->where('belanja.username', 'pamwal'); // Replace 'malik' with the actual value you're looking for
         $this->db->group_by('anggaran.id_anggaran','belanja');
         return $this->db->get()->row();
     }
        
     // triwulan 3
      public function get15($id_anggaran)
     {
       $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
       $this->db->from('anggaran');
       $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
       $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
       $this->db->join('user', 'belanja.username = user.username');
       $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
       $this->db->where('anggaran.id_anggaran', $id_anggaran);
     
         // Add the condition for id_bulan
              $this->db->where('(belanja.id_bulan > 5 AND belanja.id_bulan < 10)');
     
         $this->db->where('belanja.username', 'pamwal'); // Replace 'malik' with the actual value you're looking for
         $this->db->group_by('anggaran.id_anggaran','belanja');
         return $this->db->get()->row();
     }
     // triwulan 4
      public function get16($id_anggaran)
     {
       $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
       $this->db->from('anggaran');
       $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
       $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
       $this->db->join('user', 'belanja.username = user.username');
       $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
       $this->db->where('anggaran.id_anggaran', $id_anggaran);
     
         // Add the condition for id_bulan
              $this->db->where('(belanja.id_bulan > 9 AND belanja.id_bulan < 13)');
     
         $this->db->where('belanja.username', 'pamwal'); // Replace 'malik' with the actual value you're looking for
         $this->db->group_by('anggaran.id_anggaran','belanja');
         return $this->db->get()->row();
     }


     //seksi satuan perlindungan masyarakat
	// triwulan 1
  public function get17($id_anggaran)
  {
      $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
      $this->db->from('anggaran');
      $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
      $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
      $this->db->join('user', 'belanja.username = user.username');
      $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
      $this->db->where('anggaran.id_anggaran', $id_anggaran);
  
      // Add the condition for id_bulan
           $this->db->where('(belanja.id_bulan < 4 AND belanja.id_bulan > 0)');
  
      $this->db->where('belanja.username', 'linmas'); // Replace 'malik' with the actual value you're looking for
      $this->db->group_by('anggaran.id_anggaran','belanja');
      return $this->db->get()->row();
  }
  
  // triwulan 2
   public function get18($id_anggaran)
  {
    $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
    $this->db->from('anggaran');
    $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
    $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
    $this->db->join('user', 'belanja.username = user.username');
    $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
    $this->db->where('anggaran.id_anggaran', $id_anggaran);
  
      // Add the condition for id_bulan
           $this->db->where('(belanja.id_bulan > 3 AND belanja.id_bulan < 7)');
  
      $this->db->where('belanja.username', 'linmas'); // Replace 'malik' with the actual value you're looking for
      $this->db->group_by('anggaran.id_anggaran','belanja');
      return $this->db->get()->row();
  }
   
  // triwulan 3
   public function get19($id_anggaran)
  {
    $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
    $this->db->from('anggaran');
    $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
    $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
    $this->db->join('user', 'belanja.username = user.username');
    $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
    $this->db->where('anggaran.id_anggaran', $id_anggaran);
  
      // Add the condition for id_bulan
           $this->db->where('(belanja.id_bulan > 5 AND belanja.id_bulan < 10)');
  
      $this->db->where('belanja.username', 'linmas'); // Replace 'malik' with the actual value you're looking for
      $this->db->group_by('anggaran.id_anggaran','belanja');
      return $this->db->get()->row();
  }
  // triwulan 4
   public function get20($id_anggaran)
  {
    $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
    $this->db->from('anggaran');
    $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
    $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
    $this->db->join('user', 'belanja.username = user.username');
    $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
    $this->db->where('anggaran.id_anggaran', $id_anggaran);
  
      // Add the condition for id_bulan
           $this->db->where('(belanja.id_bulan > 9 AND belanja.id_bulan < 13)');
  
      $this->db->where('belanja.username', 'linmas'); // Replace 'malik' with the actual value you're looking for
      $this->db->group_by('anggaran.id_anggaran','belanja');
      return $this->db->get()->row();
  }
    


     //seksi kerja sama ketertiban umum dan ketenteraman
	// triwulan 1
     public function get21($id_anggaran)
     {
         $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
         $this->db->from('anggaran');
         $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
         $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
         $this->db->join('user', 'belanja.username = user.username');
         $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
         $this->db->where('anggaran.id_anggaran', $id_anggaran);
     
         // Add the condition for id_bulan
              $this->db->where('(belanja.id_bulan < 4 AND belanja.id_bulan > 0)');
     
         $this->db->where('belanja.username', 'kerjasama'); // Replace 'malik' with the actual value you're looking for
         $this->db->group_by('anggaran.id_anggaran','belanja');
         return $this->db->get()->row();
     }
     
     // triwulan 2
      public function get22($id_anggaran)
     {
       $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
       $this->db->from('anggaran');
       $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
       $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
       $this->db->join('user', 'belanja.username = user.username');
       $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
       $this->db->where('anggaran.id_anggaran', $id_anggaran);
     
         // Add the condition for id_bulan
              $this->db->where('(belanja.id_bulan > 3 AND belanja.id_bulan < 7)');
     
         $this->db->where('belanja.username', 'kerjasama'); // Replace 'malik' with the actual value you're looking for
         $this->db->group_by('anggaran.id_anggaran','belanja');
         return $this->db->get()->row();
     }
          
     // triwulan 3
      public function get23($id_anggaran)
     {
       $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
       $this->db->from('anggaran');
       $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
       $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
       $this->db->join('user', 'belanja.username = user.username');
       $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
       $this->db->where('anggaran.id_anggaran', $id_anggaran);
     
         // Add the condition for id_bulan
              $this->db->where('(belanja.id_bulan > 5 AND belanja.id_bulan < 10)');
     
         $this->db->where('belanja.username', 'kerjasama'); // Replace 'malik' with the actual value you're looking for
         $this->db->group_by('anggaran.id_anggaran','belanja');
         return $this->db->get()->row();
     }
     // triwulan 4
      public function get24($id_anggaran)
     {
       $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
       $this->db->from('anggaran');
       $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
       $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
       $this->db->join('user', 'belanja.username = user.username');
       $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
       $this->db->where('anggaran.id_anggaran', $id_anggaran);
     
         // Add the condition for id_bulan
              $this->db->where('(belanja.id_bulan > 9 AND belanja.id_bulan < 13)');
     
         $this->db->where('belanja.username', 'kerjasama'); // Replace 'malik' with the actual value you're looking for
         $this->db->group_by('anggaran.id_anggaran','belanja');
         return $this->db->get()->row();
     }

     //seksi penegakan dan penyidikan
	// triwulan 1
  public function get25($id_anggaran)
  {
      $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
      $this->db->from('anggaran');
      $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
      $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
      $this->db->join('user', 'belanja.username = user.username');
      $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
      $this->db->where('anggaran.id_anggaran', $id_anggaran);
  
      // Add the condition for id_bulan
           $this->db->where('(belanja.id_bulan < 4 AND belanja.id_bulan > 0)');
  
      $this->db->where('belanja.username', 'gakdik'); // Replace 'malik' with the actual value you're looking for
      $this->db->group_by('anggaran.id_anggaran','belanja');
      return $this->db->get()->row();
  }
  
  // triwulan 2
   public function get26($id_anggaran)
  {
    $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
    $this->db->from('anggaran');
    $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
    $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
    $this->db->join('user', 'belanja.username = user.username');
    $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
    $this->db->where('anggaran.id_anggaran', $id_anggaran);
  
      // Add the condition for id_bulan
           $this->db->where('(belanja.id_bulan > 3 AND belanja.id_bulan < 7)');
  
      $this->db->where('belanja.username', 'gakdik'); // Replace 'malik' with the actual value you're looking for
      $this->db->group_by('anggaran.id_anggaran','belanja');
      return $this->db->get()->row();
  }
    
  // triwulan 3
   public function get27($id_anggaran)
  {
    $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
    $this->db->from('anggaran');
    $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
    $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
    $this->db->join('user', 'belanja.username = user.username');
    $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
    $this->db->where('anggaran.id_anggaran', $id_anggaran);
  
      // Add the condition for id_bulan
           $this->db->where('(belanja.id_bulan > 5 AND belanja.id_bulan < 10)');
  
      $this->db->where('belanja.username', 'gakdik'); // Replace 'malik' with the actual value you're looking for
      $this->db->group_by('anggaran.id_anggaran','belanja');
      return $this->db->get()->row();
  }
  // triwulan 4
   public function get28($id_anggaran)
  {
    $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
    $this->db->from('anggaran');
    $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
    $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
    $this->db->join('user', 'belanja.username = user.username');
    $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
    $this->db->where('anggaran.id_anggaran', $id_anggaran);
  
      // Add the condition for id_bulan
           $this->db->where('(belanja.id_bulan > 9 AND belanja.id_bulan < 13)');
  
      $this->db->where('belanja.username', 'gakdik'); // Replace 'malik' with the actual value you're looking for
      $this->db->group_by('anggaran.id_anggaran','belanja');
      return $this->db->get()->row();
  }



      //seksi pengendalian dan operasional
	// triwulan 1
     public function get29($id_anggaran)
     {
         $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
         $this->db->from('anggaran');
         $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
         $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
         $this->db->join('user', 'belanja.username = user.username');
         $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
         $this->db->where('anggaran.id_anggaran', $id_anggaran);
     
         // Add the condition for id_bulan
              $this->db->where('(belanja.id_bulan < 4 AND belanja.id_bulan > 0)');
     
         $this->db->where('belanja.username', 'dalops'); // Replace 'malik' with the actual value you're looking for
         $this->db->group_by('anggaran.id_anggaran','belanja');
         return $this->db->get()->row();
     }
     
     // triwulan 2
      public function get30($id_anggaran)
     {
       $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
       $this->db->from('anggaran');
       $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
       $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
       $this->db->join('user', 'belanja.username = user.username');
       $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
       $this->db->where('anggaran.id_anggaran', $id_anggaran);
     
         // Add the condition for id_bulan
              $this->db->where('(belanja.id_bulan > 3 AND belanja.id_bulan < 7)');
     
         $this->db->where('belanja.username', 'dalops'); // Replace 'malik' with the actual value you're looking for
         $this->db->group_by('anggaran.id_anggaran','belanja');
         return $this->db->get()->row();
     }
         
     // triwulan 3
      public function get31($id_anggaran)
     {
       $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
       $this->db->from('anggaran');
       $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
       $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
       $this->db->join('user', 'belanja.username = user.username');
       $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
       $this->db->where('anggaran.id_anggaran', $id_anggaran);
     
         // Add the condition for id_bulan
              $this->db->where('(belanja.id_bulan > 5 AND belanja.id_bulan < 10)');
     
         $this->db->where('belanja.username', 'dalops'); // Replace 'malik' with the actual value you're looking for
         $this->db->group_by('anggaran.id_anggaran','belanja');
         return $this->db->get()->row();
     }
     // triwulan 4
      public function get32($id_anggaran)
     {
       $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
       $this->db->from('anggaran');
       $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
       $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
       $this->db->join('user', 'belanja.username = user.username');
       $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
       $this->db->where('anggaran.id_anggaran', $id_anggaran);
     
         // Add the condition for id_bulan
              $this->db->where('(belanja.id_bulan > 9 AND belanja.id_bulan < 13)');
     
         $this->db->where('belanja.username', 'dalops'); // Replace 'malik' with the actual value you're looking for
         $this->db->group_by('anggaran.id_anggaran','belanja');
         return $this->db->get()->row();
     }


     //seksi pembinaan, pengawasan, dan pepenyuluhan
	// triwulan 1
  public function get33($id_anggaran)
  {
      $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
      $this->db->from('anggaran');
      $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
      $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
      $this->db->join('user', 'belanja.username = user.username');
      $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
      $this->db->where('anggaran.id_anggaran', $id_anggaran);
  
      // Add the condition for id_bulan
           $this->db->where('(belanja.id_bulan < 4 AND belanja.id_bulan > 0)');
  
      $this->db->where('belanja.username', 'binwasluh'); // Replace 'malik' with the actual value you're looking for
      $this->db->group_by('anggaran.id_anggaran','belanja');
      return $this->db->get()->row();
  }
  
  // triwulan 2
   public function get34($id_anggaran)
  {
    $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
    $this->db->from('anggaran');
    $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
    $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
    $this->db->join('user', 'belanja.username = user.username');
    $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
    $this->db->where('anggaran.id_anggaran', $id_anggaran);
  
      // Add the condition for id_bulan
           $this->db->where('(belanja.id_bulan > 3 AND belanja.id_bulan < 7)');
  
      $this->db->where('belanja.username', 'binwasluh'); // Replace 'malik' with the actual value you're looking for
      $this->db->group_by('anggaran.id_anggaran','belanja');
      return $this->db->get()->row();
  }
   
  // triwulan 3
   public function get35($id_anggaran)
  {
    $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
    $this->db->from('anggaran');
    $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
    $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
    $this->db->join('user', 'belanja.username = user.username');
    $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
    $this->db->where('anggaran.id_anggaran', $id_anggaran);
  
      // Add the condition for id_bulan
           $this->db->where('(belanja.id_bulan > 5 AND belanja.id_bulan < 10)');
  
      $this->db->where('belanja.username', 'binwasluh'); // Replace 'malik' with the actual value you're looking for
      $this->db->group_by('anggaran.id_anggaran','belanja');
      return $this->db->get()->row();
  }
  // triwulan 4
   public function get36($id_anggaran)
  {
    $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
    $this->db->from('anggaran');
    $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
    $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
    $this->db->join('user', 'belanja.username = user.username');
    $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
    $this->db->where('anggaran.id_anggaran', $id_anggaran);
  
      // Add the condition for id_bulan
           $this->db->where('(belanja.id_bulan > 9 AND belanja.id_bulan < 13)');
  
      $this->db->where('belanja.username', 'binwasluh'); // Replace 'malik' with the actual value you're looking for
      $this->db->group_by('anggaran.id_anggaran','belanja');
      return $this->db->get()->row();
  }



      //seksi bina potensi masyarakat
	// triwulan 1
     public function get37($id_anggaran)
     {
         $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
         $this->db->from('anggaran');
         $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
         $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
         $this->db->join('user', 'belanja.username = user.username');
         $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
         $this->db->where('anggaran.id_anggaran', $id_anggaran);
     
         // Add the condition for id_bulan
              $this->db->where('(belanja.id_bulan < 4 AND belanja.id_bulan > 0)');
     
         $this->db->where('belanja.username', 'binpot'); // Replace 'malik' with the actual value you're looking for
         $this->db->group_by('anggaran.id_anggaran','belanja');
         return $this->db->get()->row();
     }
     
     // triwulan 2
      public function get38($id_anggaran)
     {
       $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
       $this->db->from('anggaran');
       $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
       $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
       $this->db->join('user', 'belanja.username = user.username');
       $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
       $this->db->where('anggaran.id_anggaran', $id_anggaran);
     
         // Add the condition for id_bulan
              $this->db->where('(belanja.id_bulan > 3 AND belanja.id_bulan < 7)');
     
         $this->db->where('belanja.username', 'binpot'); // Replace 'malik' with the actual value you're looking for
         $this->db->group_by('anggaran.id_anggaran','belanja');
         return $this->db->get()->row();
     }
        
     // triwulan 3
      public function get39($id_anggaran)
     {
       $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
       $this->db->from('anggaran');
       $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
       $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
       $this->db->join('user', 'belanja.username = user.username');
       $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
       $this->db->where('anggaran.id_anggaran', $id_anggaran);
     
         // Add the condition for id_bulan
              $this->db->where('(belanja.id_bulan > 5 AND belanja.id_bulan < 10)');
     
         $this->db->where('belanja.username', 'binpot'); // Replace 'malik' with the actual value you're looking for
         $this->db->group_by('anggaran.id_anggaran','belanja');
         return $this->db->get()->row();
     }
     // triwulan 4
      public function get40($id_anggaran)
     {
       $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
       $this->db->from('anggaran');
       $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
       $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
       $this->db->join('user', 'belanja.username = user.username');
       $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
       $this->db->where('anggaran.id_anggaran', $id_anggaran);
     
         // Add the condition for id_bulan
              $this->db->where('(belanja.id_bulan > 9 AND belanja.id_bulan < 13)');
     
         $this->db->where('belanja.username', 'binpot'); // Replace 'malik' with the actual value you're looking for
         $this->db->group_by('anggaran.id_anggaran','belanja');
         return $this->db->get()->row();
     }

     //seksi pengembangan kapasitas aparatur
	// triwulan 1
  public function get41($id_anggaran)
  {
      $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
      $this->db->from('anggaran');
      $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
      $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
      $this->db->join('user', 'belanja.username = user.username');
      $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
      $this->db->where('anggaran.id_anggaran', $id_anggaran);
  
      // Add the condition for id_bulan
           $this->db->where('(belanja.id_bulan < 4 AND belanja.id_bulan > 0)');
  
      $this->db->where('belanja.username', 'bangtas'); // Replace 'malik' with the actual value you're looking for
      $this->db->group_by('anggaran.id_anggaran','belanja');
      return $this->db->get()->row();
  }
  
  // triwulan 2
   public function get42($id_anggaran)
  {
    $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
    $this->db->from('anggaran');
    $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
    $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
    $this->db->join('user', 'belanja.username = user.username');
    $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
    $this->db->where('anggaran.id_anggaran', $id_anggaran);
  
      // Add the condition for id_bulan
           $this->db->where('(belanja.id_bulan > 3 AND belanja.id_bulan < 7)');
  
      $this->db->where('belanja.username', 'bangtas'); // Replace 'malik' with the actual value you're looking for
      $this->db->group_by('anggaran.id_anggaran','belanja');
      return $this->db->get()->row();
  }
  
  // triwulan 3
   public function get43($id_anggaran)
  {
    $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
    $this->db->from('anggaran');
    $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
    $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
    $this->db->join('user', 'belanja.username = user.username');
    $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
    $this->db->where('anggaran.id_anggaran', $id_anggaran);
  
      // Add the condition for id_bulan
           $this->db->where('(belanja.id_bulan > 5 AND belanja.id_bulan < 10)');
  
      $this->db->where('belanja.username', 'bangtas'); // Replace 'malik' with the actual value you're looking for
      $this->db->group_by('anggaran.id_anggaran','belanja');
      return $this->db->get()->row();
  }
  // triwulan 4
   public function get44($id_anggaran)
  {
    $this->db->select('belanja.username, user.nama, SUM(belanja.realisasi) as total_realisasi,SUM(belanja.target) as total_target');
    $this->db->from('anggaran');
    $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
    $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
    $this->db->join('user', 'belanja.username = user.username');
    $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
    $this->db->where('anggaran.id_anggaran', $id_anggaran);
  
      // Add the condition for id_bulan
           $this->db->where('(belanja.id_bulan > 9 AND belanja.id_bulan < 13)');
  
      $this->db->where('belanja.username', 'bangtas'); // Replace 'malik' with the actual value you're looking for
      $this->db->group_by('anggaran.id_anggaran','belanja');
      return $this->db->get()->row();
  }

    




  // ------------------------------------------

    // public function get_pilih_triwulan($id_triwulan)
    // {
    //     $this->db->select('*');
    //     $this->db->from('anggaran');
    //     $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
    //     $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan');
    //     $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
    //     $this->db->join('triwulan', 'bulan.id_triwulan = triwulan.id_triwulan');
    //     $this->db->where('triwulan.id_triwulan', $id_triwulan);
    //     return $this->db->get()->result();
    // }

    
    // public function get_triwulan1($id_anggaran)
    // {
    //     $this->db->select('*');
    //     $this->db->from('anggaran');
    //     $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran','right');
    //     $this->db->join('belanja', 'kegiatan.id_kegiatan = belanja.id_kegiatan','right');
    //     $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan','right');
    //     $this->db->join('triwulan', 'bulan.id_triwulan = triwulan.id_triwulan');
    //     $this->db->where('anggaran.id_anggaran', $id_anggaran);
    //     return $this->db->get()->result();
    // }

    // public function get_triwulan2($id_triwulan)
    // {
    //     $this->db->select('*');
    //     $this->db->from('anggaran');
    //     $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran','inner join');
    //     $this->db->join('belanja', 'belanja.id_kegiatan = kegiatan.id_kegiatan','inner join');
    //     $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan','inner join');
    //     $this->db->join('triwulan', 'bulan.id_triwulan = triwulan.id_triwulan','inner join');
    //     $this->db->where('triwulan.id_triwulan', $id_triwulan);
    //     return $this->db->get()->result();
    // }

    // public function get_header($id_triwulan)
    // {
    //     $this->db->select('*');
    //     $this->db->from('anggaran');
    //     $this->db->join('kegiatan', 'kegiatan.id_anggaran = anggaran.id_anggaran');
    //     $this->db->join('belanja', 'belanja.id_kegiatan = kegiatan.id_kegiatan');
    //     $this->db->join('bulan', 'belanja.id_bulan = bulan.id_bulan');
    //     $this->db->join('triwulan', 'bulan.id_triwulan = triwulan.id_triwulan');
    //     $this->db->where('triwulan.id_triwulan', $id_triwulan);
    //     return $this->db->get()->row();
    // }
}
