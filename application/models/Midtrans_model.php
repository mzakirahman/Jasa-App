<?php
class Midtrans_model extends CI_Model
{
  public function getmidtrans($id = null)
  {
    if ($id === null) {
      return $this->db->get('midtrans')->result_array();
    } else {
      return $this->db->get_where('midtrans', ['id' => $id])->result_array();
    }
  }
 
}