<?php
class Jasaku_model extends CI_Model
{
  public function insert($data)
  {
      $this->db->insert('jasa', $data);
      return TRUE;
  }
  public function jasasayaedit($juduljasa)
  {
    $this->db->get('jasa')->row_array();
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

  
  public function getAllTransaksi()
  {
    $id = $this->session->userdata('id');
    $query = "SELECT `transaksi_mitrans`.*, `user`.`id`
                  FROM `transaksi_mitrans` JOIN `user`
                  ON `transaksi_mitrans`.`user_id` = `user`.`id`
                  WHERE `transaksi_mitrans`.`user_id` = $id
                ";      
    return $this->db->query($query)->result_array();
  }

  public function pemesanjasa()
  {
    $id = $this->session->userdata('id');
    $query = "SELECT `transaksi_mitrans`.*, `user`.`id`
                  FROM `transaksi_mitrans` JOIN `user`
                  ON `transaksi_mitrans`.`jasa_id` = `user`.`id`
                  WHERE `transaksi_mitrans`.`jasa_id` = $id
                ";      
    return $this->db->query($query)->result_array();

  }


}
