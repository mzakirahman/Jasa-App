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
      'nama' => $this->input->post('nama', true),
      'email' => $this->input->post('email', true),
      'pesan' => $this->input->post('pesan', true)
    ];

    $this->db->insert('kontakpesan', $data);
  }
  public function pagdatajasa($limit, $start, $keyword = null)
  {
    if ($keyword){
      $this->db->like('juduljasa', $keyword);
    }
    return $this->db->get('jasa', $limit, $start)->result_array();
  }

  public function CountAllJasa()
  {
    return $this->db->get('jasa')->num_rows();
  }
}
