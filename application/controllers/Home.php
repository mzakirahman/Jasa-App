<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
  public function index()
  {
    if ($this->session->userdata('email')) {
      redirect('user');
    }
    $data['title'] = 'Jasa App | Home';

    $this->load->view('guest/guest_header.php', $data);
    $this->load->view('home/index', $data);
    $this->load->view('guest/guest_footer.php');
  }
}
