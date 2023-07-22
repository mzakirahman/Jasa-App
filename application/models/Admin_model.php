<?php
class Admin_model extends CI_Model
{
  public function getallpesan()
  {
    return $this->db->get('kontakpesan')->result_array();
  }
  public function deletejasa($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('jasa');
  }
  public function deletetransaksi($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('transaksi_mitrans');
  }
  public function deleteuser($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('user');
  }
  public function deletepesan($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('kontakpesan');
  }
}
