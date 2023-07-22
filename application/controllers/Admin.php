<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

  // ====== Fungsi block untuk setiap halaman 
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
    $this->load->model('Admin_model');
    $this->load->model('M_datauser');
  }

  public function index()
  {

    $data['title'] = 'Dashboard';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


    $this->load->view('tamplates/admin_header.php', $data);
    $this->load->view('tamplates/admin_sidebar.php', $data);
    $this->load->view('tamplates/admin_topbar.php', $data);
    $this->load->view('admin/index', $data);
    $this->load->view('tamplates/admin_footer.php');
  }
  public function pemesan()
  {

    $this->load->model('M_datauser', 'transaksi');
    $data['alltransaksi'] = $this->transaksi->getAllMitrans();

    $data['title'] = 'Pemesan Jasa';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


    $this->load->view('tamplates/admin_header.php', $data);
    $this->load->view('tamplates/admin_sidebar.php', $data);
    $this->load->view('tamplates/admin_topbar.php', $data);
    $this->load->view('admin/pemesan', $data);
    $this->load->view('tamplates/admin_footer.php');
  }
  public function role()
  {
    $data['title'] = 'Role';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $data['role'] = $this->db->get('user_role')->result_array();

    $this->load->view('tamplates/admin_header.php', $data);
    $this->load->view('tamplates/admin_sidebar.php', $data);
    $this->load->view('tamplates/admin_topbar.php', $data);
    $this->load->view('admin/role', $data);
    $this->load->view('tamplates/admin_footer.php');
  }
  public function roleAccess($role_id)
  {
    $data['title'] = 'Admin | Role Access';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

    $this->db->where('id !=', 1);
    $data['menu'] = $this->db->get('user_menu')->result_array();

    $this->load->view('tamplates/admin_header.php', $data);
    $this->load->view('tamplates/admin_sidebar.php', $data);
    $this->load->view('tamplates/admin_topbar.php', $data);
    $this->load->view('admin/role-access', $data);
    $this->load->view('tamplates/admin_footer.php');
  }
  public function changeAccess()
  {
    $menu_id = $this->input->post('menuId');
    $role_id = $this->input->post('roleId');

    $data = [
      'role_id' => $role_id,
      'menu_id' => $menu_id
    ];

    $result = $this->db->get_where('user_access_menu', $data);

    if ($result->num_rows() < 1) {
      $this->db->insert('user_access_menu', $data);
    } else {
      $this->db->delete('user_access_menu', $data);
    }

    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Changed!</div>');
  }
  public function jasa()
  {

    $this->load->model('M_datauser', 'jasa');
    $data['alljasa'] = $this->jasa->getAllJasa();

    $data['title'] = 'jasa';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->load->view('tamplates/admin_header.php', $data);
    $this->load->view('tamplates/admin_sidebar.php', $data);
    $this->load->view('tamplates/admin_topbar.php', $data);
    $this->load->view('admin/jasa', $data);
    $this->load->view('tamplates/admin_footer.php');
  }

  public function transaksi()
  {
    $this->load->model('M_datauser', 'transaksi');
    $data['alltransaksi'] = $this->transaksi->getAllMitrans();

    $data['title'] = 'Transaksi';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->load->view('tamplates/admin_header.php', $data);
    $this->load->view('tamplates/admin_sidebar.php', $data);
    $this->load->view('tamplates/admin_topbar.php', $data);
    $this->load->view('admin/transaksi', $data);
    $this->load->view('tamplates/admin_footer.php');
  }
  public function user()
  {
    // panggil models - nama table - nama models - nama function
    $datauser['user'] = $this->M_datauser->getAlluser();
    $data['title'] = 'User';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->load->view('tamplates/admin_header.php', $data);
    $this->load->view('tamplates/admin_sidebar.php', $data);
    $this->load->view('tamplates/admin_topbar.php', $data);
    $this->load->view('admin/user', $datauser);
    $this->load->view('tamplates/admin_footer.php');
  }
  public function pesan()
  {
    // session
    $data['title'] = 'Pesan Saran';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    // model 
    $this->load->model('Admin_model', 'admin');
    $data['pesan'] = $this->admin->getallpesan();


    $this->load->view('tamplates/admin_header.php', $data);
    $this->load->view('tamplates/admin_sidebar.php', $data);
    $this->load->view('tamplates/admin_topbar.php', $data);
    $this->load->view('admin/pesan', $data);
    $this->load->view('tamplates/admin_footer.php');
  }

  public function hapusjasa($id)
  {
    $this->Admin_model->deletejasa($id);
    redirect('admin/jasa');
  }
  public function hapustransaksi($id)
  {
    $this->Admin_model->deletetransaksi($id);
    redirect('admin/transaksi');
  }
  public function hapususer($id)
  {
    $this->Admin_model->deleteuser($id);
    redirect('admin/user');
  }
  public function hapuspesan($id)
  {
    $this->Admin_model->deletepesan($id);
    redirect('admin/pesan');
  }
}
