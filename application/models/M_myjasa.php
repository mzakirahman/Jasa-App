<?php
class M_myjasa extends CI_Model
{
  public function getAlljasa()
  {
    return $this->db->where('email')->result_array();
  }
  public function tambahjasa()
  {
    $data = [
      "nama" => $this->input->post('nama', true),
      "no-hp" => $this->input->post('no-hp', true),
      "alamat" => $this->input->post('alamat', true),
      "img_jasa" => $this->input->post('img_jasa', true),
      "email" => $this->input->post('email'),
      "nama_jasa" => $this->input->post('nama_jasa', true),
      "deskripsi" => $this->input->post('deskripsi', true),
      "harga" => $this->input->post('harga', true)
    ];
    $this->db->insert('jasa', $data);
  }
}
