<?php
class Users_model extends CI_Model
{
  public function getUsers($id = null)
  {
    if ($id === null) {
      return $this->db->get('user')->result_array();
    } else {
      return $this->db->get_where('user', ['id' => $id])->result_array();
    }
  }
  // menghapus
  public function deleteUsers($id)
  {
    $this->db->delete('user', ['id' => $id]);
    return $this->db->affected_rows();
  }

  // MENAMBAHKAN DATA USER 
  public function createdUser($data)
  {
    $this->db->insert('user', $data);
    return $this->db->affected_rows();
  }

  // MERUBAH DATA
  public function updateUser($data, $id)
  {
    $this->db->update('user', $data, ['id' => $id]);
    return $this->db->affected_rows();
  }
}
