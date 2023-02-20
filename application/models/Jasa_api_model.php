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
  // menghapus
  public function deleteJasa($id)
  {
    $this->db->delete('jasa', ['id' => $id]);
    return $this->db->affected_rows();
  }
  // MENAMBAHKAN DATA JASA 
  public function createdjasa($data)
  {
    $this->db->insert('jasa', $data);
    return $this->db->affected_rows();
  }
  // MERUBAH DATA
  public function updateJasa($data, $id)
  {
    $this->db->update('jasa', $data, ['id' => $id]);
    return $this->db->affected_rows();
  }
}
