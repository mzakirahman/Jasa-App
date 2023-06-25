<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->libsrary('form_validation');
  }

  public function index()
  {
    if ($this->session->userdata('email')) {
      redirect('user');
    }

    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

    if ($this->form_validation->run() == false) {
      $data['title'] = 'Jasa App | Login';
      $this->load->view('guest/guest_header.php', $data);
      $this->load->view('auth/login.php', $data);
      $this->load->view('guest/guest_footer.php');
    } else {
      //validasi lolos
      $this->_login();
    }
  }


  private function _login()
  {
    // jika email dan passwordnya benar 
    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $user = $this->db->get_where('user', ['email' => $email])->row_array();


    // jika usernya ada
    if ($user) {
      // jika usernya aktif
      if ($user['is_active'] == 1) {
        // cek password
        if (password_verify($password, $user['password'])) {
          $data = [
            'email' => $user['email'],
            'role_id' => $user['role_id']
          ];
          $this->session->set_userdata($data);
          if ($user['role_id'] == 1) {
            redirect('admin');
          } else {
            redirect('user');
          }
        } else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
          redirect('auth');
        }
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This email has not been activated!</div>');
        redirect('auth');
      }
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
      redirect('auth');
    }
  }



  public function registration()
  {
    if ($this->session->userdata('email')) {
      redirect('user');
    }
    $this->form_validation->set_rules('name', 'Name', 'required|trim');
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', ['is_unique' => 'Email ini sudah terdaftar!']);
    $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
      'matches' => 'Kata sandi tidak cocok!',
      'min_length' => 'Kata sandi terlalu pendek!'
    ]);
    $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
    if ($this->form_validation->run() == false) {
      $data['title'] = 'Jasa App | Registration';
      $this->load->view('guest/guest_header.php', $data);
      $this->load->view('auth/registration.php');
      $this->load->view('guest/guest_footer.php');
    } else {
      $email = $this->input->post('email', true);
      $data = [
        'name' => htmlspecialchars($this->input->post('name', true)),
        'email' => htmlspecialchars($email),
        'image' => 'default.jpg',
        'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
        'role_id' => 2,
        'is_active' => 1,
        'date_created' => time()
      ];
      $this->db->insert('user', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Akun anda telah dibuat. Silakan Login</div>');
      redirect('auth');
    }
  }
  public function logout()
  {
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('role_id');
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda telah logout!</div>');
    redirect('auth');
  }
  public function blocked()
  {
    echo 'access block ';
    // $this->load->view('auth/try');
  }
}
