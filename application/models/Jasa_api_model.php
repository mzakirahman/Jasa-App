<?php
class Jasa_api_model extends CI_Model
{
  public function getJasa($id = null)
  {
    if ($id === null) {
      return $this->db->get('jasa')->result_array();
    } else {
      return $this->db->get_where('jasa', ['id' => $id])->result_array();
    }
  }
}
