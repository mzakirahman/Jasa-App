<?php
class Jasaku_model extends CI_Model
{
  public function insert($data)
  {
      $this->db->insert('jasa', $data);
      return TRUE;
  }
}
