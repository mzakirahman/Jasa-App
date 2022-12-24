<?php
class M_datajasa extends CI_Model
{
  public function getAlljasa()
  {
    return $this->db->get('jasa')->result_array();
  }
}
