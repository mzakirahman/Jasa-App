<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
  // Fungsi block untuk setiap halaman 
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
    $this->load->model('Jasa_model');
    $this->load->helper('url');
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data['title'] = 'Jasa elektronik';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    $this->load->view('tamplates/ui_header.php', $data);
    $this->load->view('tamplates/ui_sidebar.php', $data);
    $this->load->view('user/index', $data);
    $this->load->view('tamplates/ui_footer.php', $data);
  }

  public function jasa()
  {
    $data['title'] = 'Jasa elektronik';
    $data['judul'] = 'Silahkan Pilih Jasa elektronik';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    $data['jasa'] = $this->Jasa_model->getAlljasa();
    $this->load->view('tamplates/ui_header.php', $data);
    $this->load->view('tamplates/ui_sidebar.php', $data);
    $this->load->view('user/jasa', $data);
    $this->load->view('tamplates/ui_footer.php', $data);
  }

  public function help()
  {
    $data['title'] = 'Jasa elektronik';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    $this->load->view('tamplates/ui_header.php', $data);
    // $this->load->view('tamplates/ui_sidebar.php', $data);

    $this->load->view('user/help', $data);
    $this->load->view('tamplates/ui_footer.php', $data);
  }

  public function contact()
  {
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    $data['title'] = 'Jasa elektronik | Contact';
    $this->load->library('form_validation');

    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('pesan', 'Pesan', 'required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('tamplates/ui_header.php', $data);
      $this->load->view('user/contact', $data);
      $this->load->view('tamplates/ui_footer.php');
    } else {
      $this->Home_model->Contact();
      $this->session->set_flashdata('pesan', 'Dikirim');
      redirect('user/contact');
    }
  }


  public function edit()
  {
    $data['title'] = 'Jasa elektronik | Edit Profile';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['judul'] = 'Edit Profile';
    $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
    if ($this->form_validation->run() == false) {
      $data['user'] = $this->db->get_where('user', ['email' =>
      $this->session->userdata('email')])->row_array();
      $this->load->view('tamplates/ui_header.php', $data);
      $this->load->view('tamplates/ui_sidebar.php', $data);
      $this->load->view('user/edit', $data);
      $this->load->view('tamplates/ui_footer.php', $data);
    } else {
      $name = $this->input->post('name');
      $email = $this->input->post('email');

      // cek jika ada gambar yang akan diupload
      $upload_image = $_FILES['image']['name'];

      if ($upload_image) {
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']      = '2048';
        $config['upload_path'] = './assets/img/profile/';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
          $old_image = $data['user']['image'];
          if ($old_image != 'default.jpg') {
            unlink(FCPATH . 'assets/img/profile/' . $old_image);
          }
          $new_image = $this->upload->data('file_name');
          $this->db->set('image', $new_image);
        } else {
          echo $this->upload->dispay_errors();
        }
      }

      $this->db->set('name', $name);
      $this->db->where('email', $email);
      $this->db->update('user');

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been updated!</div>');
      redirect('user');
    }
  }
  public function gantipassword()
  {
    $data['title'] = 'Jasa elektronik | Password';
    $data['judul'] = 'Ganti Password';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
    $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[8]|matches[new_password2]');
    $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[8]|matches[new_password1]');

    if ($this->form_validation->run() == false) {
      $this->load->view('tamplates/ui_header.php', $data);
      $this->load->view('tamplates/ui_sidebar.php', $data);
      $this->load->view('user/gantipassword', $data);
      $this->load->view('tamplates/ui_footer.php', $data);
    } else {
      $current_password = $this->input->post('current_password');
      $new_password = $this->input->post('new_password1');
      if (!password_verify($current_password, $data['user']['password'])) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong current password!</div>');
        redirect('user/gantipassword');
      } else {
        if ($current_password == $new_password) {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New password cannot be the same as current password!</div>');
          redirect('user/gantipassword');
        } else {
          // password sudah ok
          $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

          $this->db->set('password', $password_hash);
          $this->db->where('email', $this->session->userdata('email'));
          $this->db->update('user');

          $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password changed!</div>');
          redirect('user/gantipassword');
        }
      }
    }
  }
}
