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

  public function hapusjasasaya($no)
  {
    $this->db->where('no', $no);
    $this->db->delete('jasa');
  }

  public function getjasabyid($no)
  {
    return $this->db->get_where('jasa', ['no' => $no])->row_array();
  }

  public function jasaedit($no)
  {
    $foto = $this->upload->data();
    $data = [
      "juduljasa" => $this->input->post('juduljasa', true),
      "nama" => $this->input->post('nama', true),
      "no" => $this->input->post('no', true),
      "harga" => $this->input->post('harga', true),
      "alamat" => $this->input->post('alamat', true),
      "deskripsi" => $this->input->post('deskripsi', true),
      "foto" => $foto['file_name']
    ];

    $this->db->where('no', $this->input->post('no'));
    return $this->db->update('jasa', $data);
  }
}
