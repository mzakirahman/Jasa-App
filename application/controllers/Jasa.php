<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jasa extends CI_Controller
{

  // ====== Fungsi block untuk setiap halaman 
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
    $this->load->model('Jasa_model');

  }

  public function alljasa()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    // model 
    $data['jasa'] = $this->Jasa_model->getAlljasa();
    $data['title'] = 'App Jasa | All Jasa';
    $data['judul'] = 'Silahkan Pilih Jasa elektronik';
    $this->load->view('tamplates/ui_header.php', $data);
    $this->load->view('tamplates/ui_sidebar.php', $data);
    $this->load->view('jasa/alljasa', $data);
    $this->load->view('tamplates/ui_footer.php', $data);
  }
  
  public function pesanjasa($role_id)
  {
    $data['pesanjasa'] = $this->db->get_where('jasa', ['id' => $role_id])->row_array();

  }

}