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
    // mitrans 
    $params = array('server_key' => 'SB-Mid-server-ZAJ7F4rAEdZWQA4OUMyQaph9', 'production' => false);
    $this->load->library('midtrans');
    $this->midtrans->config($params);
    $this->load->helper('url');
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

  public function pesanjasa($id)
  {
    $data['title'] = 'Jasa | Pesan';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    // model 
    $data['jasa'] = $this->Jasa_model->getJasaById($id);
    $this->load->view('tamplates/ui_header.php', $data);
    $this->load->view('tamplates/ui_sidebar.php', $data);
    $this->load->view('jasa/pesanjasa', $data);
    $this->load->view('tamplates/ui_footer.php', $data);
  }
}
