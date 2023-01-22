<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
  function __construct(){
		parent::__construct();		
		$this->load->model('Home_model');
    $this->load->helper('url');
	}
  public function index()
  {
    $data['jasa'] = $this->Home_model->AllDataJasa();
    $data['title'] = 'Jasa App | Home';
    $this->load->view('guest/guest_header.php', $data);
    $this->load->view('home/index', $data);
    $this->load->view('guest/guest_footer.php');
  }
  public function jasa()
  {
    if ($this->session->userdata('email')) {
      redirect('user');
    }
    $data['title'] = 'Jasa App | Jasa';

    $this->load->view('guest/guest_header.php', $data);
    $this->load->view('home/jasa', $data);
    $this->load->view('guest/guest_footer.php');
  }
  public function help()
  {
    if ($this->session->userdata('email')) {
      redirect('user');
    }
    $data['title'] = 'Jasa App | Blog';

    $this->load->view('guest/guest_header.php', $data);
    $this->load->view('home/help', $data);
    $this->load->view('guest/guest_footer.php');
  }
  public function contact()
  {
    if ($this->session->userdata('email')) {
      redirect('user');
    }
    $data['title'] = 'Jasa App | Contact';

    $this->load->view('guest/guest_header.php', $data);
    $this->load->view('home/contact', $data);
    $this->load->view('guest/guest_footer.php');
  }
}
