<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
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
            'id' => $user['id'],
            'email' => $user['email'],
            'role_id' => $user['role_id']
          ];
          $this->session->set_userdata($data);
          if ($user['role_id'] == 1) {
            redirect('admin');
          } else {
            redirect('jasa/alljasa');
          }
        } else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
          redirect('auth');
        }
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Anda Belum di Aktifkan, Cek email!</div>');
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
    $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
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


  public function registration_menggunakan_email()
  {
    if ($this->session->userdata('email')) {
      redirect('user');
    }
    $this->form_validation->set_rules('name', 'Name', 'required|trim');
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', ['is_unique' => 'Email ini sudah terdaftar!']);
    $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
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
        'is_active' => 0,
        'date_created' => time()
        // 'date_created' => date('Y-m-d');

      ];
      // siap kan token 
      $token = base64_encode(random_bytes(32));
      $user_token = [
        'email' => $email,
        'token' => $token,
        'date_created' => time()
      ];


      $this->db->insert('user', $data);
      $this->db->insert('user_token', $user_token);
      // kirem email 
      $this->_sendEmail($token, 'verify');

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Akun anda telah dibuat. Silakan aktifkan Akun anda</div>');
      redirect('auth');
    }
  }

  private function _sendEmail($token, $type)
  {
    $config = [
      'protocol'  => 'smtp',
      'smtp_host' => 'ssl://smtp.googlemail.com',
      'smtp_user' => 'jasaelektronik407@gmail.com',
      'smtp_pass' => 'yquiietqmxnlbnps',
      'smtp_port' =>  465,
      'mailtype'  => 'html',
      'charset'   => 'utf-8',
      'newline'   => "\r\n"
    ];

    $this->email->initialize($config);
    $this->email->from('jasaelektronik407@gmail.com', 'jasa elektronik');
    $this->email->to($this->input->post('email'));

    if ($type == 'verify') {
      $this->email->subject('Account Verification');
      $this->email->message('Click this link to verify you account : <a href="' . base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Activate</a>');
    } else if ($type == 'forgot') {
      $this->email->subject('Reset Password');
      $this->email->message('Click this link to reset your password : <a href="' . base_url() . 'auth/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset Password</a>');
    }

    if ($this->email->send()) {
      return true;
    } else {
      echo $this->email->print_debugger();
      die;
    }
  }

  public function verify()
  {
    $email = $this->input->get('email');
    $token = $this->input->get('token');

    $user = $this->db->get_where('user', ['email' => $email])->row_array();


    if ($user) {
      $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

      if ($user_token) {
        if (time() - $user_token['date_created'] < (60 * 60 * 24)) {
          $this->db->set('is_active', 1);
          $this->db->where('email', $email);
          $this->db->update('user');

          // hapus user token karna sudah benar email dan token
          $this->db->delete('user_token', ['email' => $email]);
          $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">' . $email . ' Telah Aktif! Please Login.</div>');
          redirect('auth');
        } else {
          $this->db->delete('user', ['email' => $email]);
          $this->db->delete('user_token', ['email' => $email]);

          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Masa Aktivasi Sudah Habis!</div>');
          redirect('auth');
        }
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Gagal di aktifkan!</div>');
        redirect('auth');
      }
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Gagal di aktifkan!</div>');
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
    $data['title'] = 'Jasa App | blocked';
    $this->load->view('guest/guest_header.php', $data);
    $this->load->view('auth/blocked');
    $this->load->view('guest/guest_footer.php');

  }
  // forgot password
  public function forgotPassword()
  {
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    if ($this->form_validation->run() == false) {
      $data['title'] = 'Jasa App | Forgot Password';
      $this->load->view('guest/guest_header.php', $data);
      $this->load->view('auth/forgot-password.php', $data);
      $this->load->view('guest/guest_footer.php');
    } else {
      $email = $this->input->post('email');
      $user = $this->db->get_where('user', ['email' => $email, 'is_active' => 1])->row_array();
      if ($user) {
        $token = base64_encode(random_bytes(32));
        $user_token = [
          'email' => $email,
          'token' => $token,
          'date_created' => time()
        ];

        $this->db->insert('user_token', $user_token);
        $this->_sendEmail($token, 'forgot');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Please cek email untuk reset password!</div>');
        redirect('auth/forgotpassword');
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email tidak di temukan atau belum active</div>');
        redirect('auth/forgotpassword');
      }
    }
  }
  // RESET PASSWORD
  public function resetPassword()
  {
    $email = $this->input->get('email');
    $token = $this->input->get('token');

    // cek email
    $user = $this->db->get_where('user', ['email' => $email])->row_array();

    if ($user) {
      $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

      if ($user_token) {
        $this->session->set_userdata('reset_email', $email);
        $this->changePassword();
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset password failed! Wrong token.</div>');
        redirect('auth');
      }
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset password gagal!.</div>');
      redirect('auth');
    }
  }
  // CHANGE PASSWORD BARU || RESED PASSWORD BARU
  public function changePassword()
  {

    if (!$this->session->userdata('reset_email')) {
      redirect('auth');
    }

    $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[8]|matches[password2]');
    $this->form_validation->set_rules('password2', 'Repeat Password', 'trim|required|min_length[8]|matches[password1]');
    if ($this->form_validation->run() == false) {
      $data['title'] = 'Jasa App | Change Password';
      $this->load->view('guest/guest_header.php', $data);
      $this->load->view('auth/change-password.php', $data);
      $this->load->view('guest/guest_footer.php');
    } else {
      $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
      $email = $this->session->userdata('reset_email');

      $this->db->set('password', $password);
      $this->db->where('email', $email);
      $this->db->update('user');

      $this->session->unset_userdata('reset_email');



      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Reset password berhasil! Please login.</div>');
      redirect('auth');
    }
  }
}
