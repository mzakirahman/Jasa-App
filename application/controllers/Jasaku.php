<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jasaku extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
    $this->load->library('form_validation');
    // $this->load->library('upload');
    // memanggil model
    $this->load->helper(array('form', 'url'));
    $this->load->model('Jasaku_model');
    $this->load->library('session');

  }
  public function create()
  {
    $data['title'] = 'Jasa App | My Jasa';
    $data['judul'] = 'Create Jasa elektronik';
    // memanggil session user 
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('tamplates/ui_header.php', $data);
    $this->load->view('tamplates/ui_sidebar.php', $data);
    $this->load->view('jasaku/create', $data);
    $this->load->view('tamplates/ui_footer.php', $data);
  }


  public function jasasaya()
  {
    $data['title'] = 'Jasa App | My Jasa';
    $data['judul'] = 'Jasa elektronik saya';
    // memanggil session user 
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    // memanggil model jasaku 
    $this->load->model('Jasaku_model', 'jasaku');
    $data['jasaSaya'] = $this->jasaku->getJasa();
    

    $this->load->view('tamplates/ui_header.php', $data);
    $this->load->view('tamplates/ui_sidebar.php', $data);
    $this->load->view('jasaku/jasasaya', $data);
    $this->load->view('tamplates/ui_footer.php', $data);
  }

  public function insertdata()
  {
    $id = $this->session->userdata('id');
    
    $user_id = $this->input->post($id);
    $juduljasa = $this->input->post('juduljasa');
    $nama = $this->input->post('nama');
    $no = $this->input->post('no');
    $harga = $this->input->post('harga');
    $alamat = $this->input->post('alamat');
    $deskripsi = $this->input->post('deskripsi');

    // get gambar 
    $config['upload_path'] = './assets/picture';
    $config['allowed_types'] = 'jpg|png|jpeg|gif';
    $config['max_size'] = '2048';  //2MB max
    $config['max_width'] = '4480'; // pixel
    $config['max_height'] = '4480'; // pixel
    $config['file_name'] = $_FILES['fotopost']['name'];

    $this->load->library('upload', $config);
    if (!empty($_FILES['fotopost']['name'])) {
      if ($this->upload->do_upload('fotopost')) {
        $foto = $this->upload->data();
        $data = array(
          'user_id' => $id,
          'juduljasa' => $juduljasa,
          'nama'      => $nama,
          'no'        => $no,
          'harga'      => $harga,
          'alamat'      => $alamat,
          'deskripsi' => $deskripsi,
          'foto'      => $foto['file_name'],
        );
        $this->Jasaku_model->insert($data);
        $this->session->set_flashdata('jasa', '<div class="alert alert-success" role="alert">Selamat! Anda Berhasil Membuat Jasa elektronik</div>');
        redirect('jasaku/create');
      } else {
        $this->session->set_flashdata('jasa', '<div class="alert alert-danger" role="alert">Ops! Terjadi Kesalahan, Mohon cek kembali data anda</div>');
      redirect('jasaku/create');
      }
    } else {
      $this->session->set_flashdata('jasa', '<div class="alert alert-danger" role="alert">Ops! Terjadi Kesalahan, Mohon cek kembali data anda</div>');
      redirect('jasaku/create');
    }
  }
}
