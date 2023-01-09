<?php
class Jasaku_model extends CI_Model
{
  public function insert($data)
  {
      $this->db->insert('jasa', $data);
      return TRUE;
  }
  public function jasa_user()
  {
    $query = "SELECT `jasa`.*, `user`.`email`
                  FROM `jasa` JOIN `user`
                  ON `jasa`.`email` = `user`.`email`
                ";
    return $this->db->query($query)->result_array();
  }
  public function getjasa()
  {
    return $this->db->get('jasa')->result_array();
  }
  
}
