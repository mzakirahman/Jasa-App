<?php
class Admin_model extends CI_Model
{
  public function getallpesan()
  {
    return $this->db->get('kontakpesan')->result_array();
  }
}
