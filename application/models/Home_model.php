<?php
class Home_model extends CI_Model
{
  public function AllDataJasa()
  {
    return $this->db->get('jasa')->result_array();
  }

}
