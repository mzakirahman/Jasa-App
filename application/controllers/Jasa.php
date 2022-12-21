<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jasa extends CI_Controller
{
  public function index()
  {

    $data['title'] = 'Jasa App | All Jasa';
    $data['judul'] = 'Semua Jasa';
    // memanggil session user 
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


    $this->load->view('tamplates/ui_header.php', $data);
    $this->load->view('tamplates/ui_sidebar.php', $data);
    $this->load->view('Jasa/index', $data);
    $this->load->view('tamplates/ui_footer.php', $data);
  }
}
