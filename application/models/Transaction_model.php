<?php
class Transaction_model extends CI_Model
{
  public function getTransaction($id = null)
  {
    if ($id === null) {
      return $this->db->get('transaksi_mitrans')->result_array();
    } else {
      return $this->db->get_where('transaksi_mitrans', ['id' => $id])->result_array();
    }
  }
}
