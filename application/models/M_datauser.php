<?php
class M_datauser extends CI_Model
{
  public function getAlluser()
  {
    return $this->db->get('user')->result_array();
  }
  public function getAllJasa()
  {
    return $this->db->get('jasa')->result_array();
  }
  public function getAllMitrans()
  {
    return $this->db->get('transaksi_mitrans')->result_array();
    
  }
}
