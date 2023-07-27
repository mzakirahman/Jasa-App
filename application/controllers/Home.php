<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('Home_model');
    // Mitrans
    $params = array('server_key' => 'SB-Mid-server-ZAJ7F4rAEdZWQA4OUMyQaph9', 'production' => false);
    $this->load->library('veritrans');
    $this->veritrans->config($params);
    $this->load->helper('url');
    $this->load->library('form_validation');
  }
  public function index()
  {
    $this->load->model('Home_model', 'AllDataJasa');

    // ambil data keyword
    if ($this->input->post('ksubmit')){
      $data['keyword'] = $this->input->post('keyword');
    } else{
      $data['keyword'] = null;
    }
    // load library
    $this->load->library('pagination');
    // config pagination
    $config['total_rows'] = $this->Home_model->CountAllJasa();
    $config['per_page'] = 6;
    $config['attributes'] = array('class' => 'page-link');
    // initialize
    $this->pagination->initialize($config);
    $data ['start'] = $this->uri->segment(3);
    $data['jasa'] = $this->Home_model->pagdatajasa($config['per_page'],$data ['start'],$data['keyword']);

    $data['title'] = 'Jasa elektronik | Home';
    $this->load->view('guest/guest_header.php', $data);
    $this->load->view('home/index', $data);
    $this->load->view('guest/guest_footer.php');
  }
  public function jasa()
  {
    $data['jasa'] = $this->Home_model->AllDataJasa();

    // ambil data keyword
    if ($this->input->post('ksubmit')){
      $data['keyword'] = $this->input->post('keyword');
    } else{
      $data['keyword'] = null;
    }
    // load library
    $this->load->library('pagination');
    // config pagination
    $config['total_rows'] = $this->Home_model->CountAllJasa();
    $config['per_page'] = 6;
    $config['attributes'] = array('class' => 'page-link');
    // initialize
    $this->pagination->initialize($config);
    $data ['start'] = $this->uri->segment(3);
    $data['jasa'] = $this->Home_model->pagdatajasa($config['per_page'],$data ['start'],$data['keyword']);
    $data['title'] = 'Jasa elektronik | Jasa';

    $this->load->view('guest/guest_header.php', $data);
    $this->load->view('home/jasa', $data);
    $this->load->view('guest/guest_footer.php');
  }
  public function help()
  {
    if ($this->session->userdata('email')) {
      redirect('user');
    }
    $data['title'] = 'Jasa elektronik | Help';

    $this->load->view('guest/guest_header.php', $data);
    $this->load->view('home/help', $data);
    $this->load->view('guest/guest_footer.php');
  }

  public function contact()
  {
    $data['title'] = 'Jasa elektronik | Contact';
    $this->load->library('form_validation');

    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('pesan', 'Pesan', 'required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('guest/guest_header.php', $data);
      $this->load->view('home/contact', $data);
      $this->load->view('guest/guest_footer.php');
    } else {
      $this->Home_model->Contact();
      $this->session->set_flashdata('pesan', 'Dikirim');
      redirect('home/contact');
    }
  }
  public function notification()
  {

    echo 'test notification handler1';
    $json_result = file_get_contents('php://input');
    $result = json_decode($json_result, "true");

    $order_id = $result['order_id'];

    $data = [
      'status_code' => $result['status_code']
    ];

    if ($result['status_code'] == 200) {
      $this->db->update('transaksi_mitrans', $data, array('order_id' => $order_id));
    }
  }
}
