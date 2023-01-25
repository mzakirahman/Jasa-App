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
    $id = $this->session->userdata('id');
    $query = "SELECT `jasa`.*, `user`.`id`
                  FROM `jasa` JOIN `user`
                  ON `jasa`.`user_id` = `user`.`id`
                  WHERE `jasa`.`user_id` = $id
                ";      
    return $this->db->query($query)->result_array();
  }
  public function getAllTransaksi(){
    return $this->db->get('transaksi_mitrans')->result_array();
  }

}
