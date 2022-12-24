<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jasa extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
    // memanggil model
    $this->load->model('M_datajasa');
  }

  public function index()
  {

    $data['title'] = 'Jasa App | All Jasa';
    $data['judul'] = 'Semua Jasa';
    // memanggil session user 
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $data['jasa'] = $this->M_datajasa->getAlljasa();


    $this->load->view('tamplates/ui_header.php', $data);
    $this->load->view('tamplates/ui_sidebar.php', $data);
    $this->load->view('Jasa/index', $data);
    $this->load->view('tamplates/ui_footer.php', $data);
  }
}
