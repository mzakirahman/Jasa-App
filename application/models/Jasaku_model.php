<?php
class Jasaku_model extends CI_Model
{
  public function insert($data)
  {
      $this->db->insert('jasa', $data);
      return TRUE;
  }


  public function getJasa()
  {
    $query = "SELECT `jasa`.*, `user`.`id`
                  FROM `jasa` JOIN `user`
                  ON `jasa`.`user_id` = `user`.`id`
                ";
                
    return $this->db->query($query)->result_array();
  }

  
}
