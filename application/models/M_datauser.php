<?php
class M_datauser extends CI_Model
{
  public function getAlluser()
  {
    return $this->db->get('user')->result_array();
  }
}
