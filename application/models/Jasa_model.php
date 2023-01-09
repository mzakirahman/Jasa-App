<?php
class Jasa_model extends CI_Model
{
  public function getAlljasa()
  {
    return $this->db->get('jasa')->result_array();
  }
}
