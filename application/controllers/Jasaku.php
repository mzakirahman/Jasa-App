<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jasaku extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
    $this->load->library('form_validation');
    // memanggil model
    $this->load->helper(array('form', 'url'));
  }
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
    $this->load->model('M_myjasa');
    $data['title'] = 'Jasa App | Add Jasa';
    $data['judul'] = 'Form Tambah Jasa Elektronik';
    // memanggil session user 
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('no-hp', 'No Handphone', 'required', 'numeric');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('nama_jasa', 'Nama Jasa', 'required');
    $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
    $this->form_validation->set_rules('harga', 'Harga', 'required', 'numeric');


    if ($this->form_validation->run() == FALSE) {
      $this->load->view('tamplates/ui_header.php', $data);
      $this->load->view('tamplates/ui_sidebar.php', $data);
      $this->load->view('Jasaku/addjasa', $data);
      $this->load->view('tamplates/ui_footer.php', $data);
    } else {

      $this->M_myjasa->tambahjasa();
      redirect('jasaku');
    }
  }
}
