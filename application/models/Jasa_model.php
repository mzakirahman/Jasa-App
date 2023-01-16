<?php
class Jasa_model extends CI_Model
{
  public function getAlljasa()
  {
    return $this->db->get('jasa')->result_array();
  }
  public function getJasaById($id)
  {
    return $this->db->get_where('jasa', ['id' => $id])->row_array();
  }
}
