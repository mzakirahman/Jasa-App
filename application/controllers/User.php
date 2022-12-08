<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
  // Fungsi block untuk setiap halaman 
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
  }

  public function index()
  {
    $data['title'] = 'Jasa App';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    $this->load->view('tamplates/ui_header.php', $data);
    $this->load->view('tamplates/ui_sidebar.php', $data);
    $this->load->view('user/index', $data);
    $this->load->view('tamplates/ui_footer.php', $data);
  }


  public function edit()
  {
    $data['title'] = 'Jasa App | Edit Profile';
    $data['judul'] = 'Edit Profile';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    $this->load->view('tamplates/ui_header.php', $data);
    $this->load->view('tamplates/ui_sidebar.php', $data);
    $this->load->view('user/edit', $data);
    $this->load->view('tamplates/ui_footer.php', $data);
  }
}
