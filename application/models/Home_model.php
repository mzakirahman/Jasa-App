<?php
class Home_model extends CI_Model
{
  public function AllDataJasa()
  {
    return $this->db->get('jasa')->result_array();
  }
  public function Contact()
  {
    $data = [
    'nama' => $this->input->post('nama' , true),
    'email' => $this->input->post('email', true),
    'pesan' => $this->input->post('pesan', true)
    ];

    $this->db->insert('kontakpesan', $data);
  }

}
