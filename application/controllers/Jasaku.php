<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jasaku extends CI_Controller
{
  public function index()
  {

    $data['title'] = 'Jasa App | My Jasa';
    $data['judul'] = 'Jasa Saya!';
    // memanggil session user 
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


    $this->load->view('tamplates/ui_header.php', $data);
    $this->load->view('tamplates/ui_sidebar.php', $data);
    $this->load->view('Jasaku/index', $data);
    $this->load->view('tamplates/ui_footer.php', $data);
  }
  public function addjasa()
  {

    $data['title'] = 'Jasa App | Add Jasa';
    $data['judul'] = 'Form Tambah Jasa Elektronik';
    // memanggil session user 
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


    $this->load->view('tamplates/ui_header.php', $data);
    $this->load->view('tamplates/ui_sidebar.php', $data);
    $this->load->view('Jasaku/addjasa', $data);
    $this->load->view('tamplates/ui_footer.php', $data);
  }
}
