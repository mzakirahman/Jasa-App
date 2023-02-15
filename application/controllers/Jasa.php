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
    $this->load->library('form_validation');
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
  // FUNGSI DARI MITRANS
  public function token()
  {
    $nama = $this->input->post('nama');
    $harga = $this->input->post('harga');
    // $jasa_id = $this->input->post('jasa_id');
    // var_dump ($jasa_id);
    // die;
    // Required
    $transaction_details = array(
      'order_id' => rand(),
      'gross_amount' => $harga, // no decimal allowed for creditcard
    );

    // Optional
    $item1_details = array(
      'id' => 'a1',
      'price' => $harga,
      'quantity' => 1,
      'name' => "Pembayaran : " . $nama
    );

    // Optional
    $item_details = array($item1_details);

    // Optional
    $customer_details = array(
      'first_name'    => $nama,
      // 'last_name'     => "Litani",
      'email'         => "andri@litani.com",
      'phone'         => "081122334455",
      // 'billing_address'  => $billing_address,
      // 'shipping_address' => $shipping_address
    );

    // Data yang akan dikirim untuk request redirect_url.
    $credit_card['secure'] = true;
    //ser save_card true to enable oneclick or 2click
    //$credit_card['save_card'] = true;

    $time = time();
    $custom_expiry = array(
      'start_time' => date("Y-m-d H:i:s O", $time),
      'unit' => 'minute',
      'duration'  => 1440

    );

    $transaction_data = array(
      'transaction_details' => $transaction_details,
      'item_details'       => $item_details,
      'customer_details'   => $customer_details,
      'credit_card'        => $credit_card,
      'expiry'             => $custom_expiry
    );

    error_log(json_encode($transaction_data));
    $snapToken = $this->midtrans->getSnapToken($transaction_data);
    error_log($snapToken);
    echo $snapToken;
  }

  public function finish()
  // REDIRECT KE HALAMAN TRANSKASI
  {

    $namapemesan = $this->input->post('namapemesan');
    $nama = $this->input->post('nama');
    $nohp = $this->input->post('nohp');
    $jeniskerusakan = $this->input->post('jeniskerusakan');
    $alamat = $this->input->post('alamat');
    $id = $this->session->userdata('id');
    $jasa_id = $this->input->post('jasa_id');
  

    $result = json_decode($this->input->post('result_data'), true);
    // var_dump ($jasa_id );
    // die;
    $data = [
      'user_id' => $id,
      'jasa_id' => $jasa_id,
      'nama' => $nama,
      'namapemesan' => $namapemesan,
      'nohp' => $nohp,
      'jeniskerusakan' => $jeniskerusakan,
      'alamat' => $alamat,
      'order_id' => $result['order_id'],
      'gross_amount' => $result['gross_amount'],
      'payment_type' => $result['payment_type'],
      'transaction_time' => $result['transaction_time'],
      'bank' => $result['va_numbers'][0]["bank"],
      'va_number' => $result['va_numbers'][0]["va_number"],
      'pdf_url' => $result['pdf_url'],
      'status_code' => $result['status_code']
    ];
    $simpan =  $this->db->insert('transaksi_mitrans', $data);

    if ($simpan) {
      $this->session->set_flashdata('bayar', '<div class="alert alert-success" role="alert">Selamat! Anda Berhasil Membuat Jasa elektronik</div>');
      redirect('jasaku/transaksi');
    } else {
      $this->session->set_flashdata('bayar', '<div class="alert alert-success" role="alert">Selamat! Anda Berhasil Membuat Jasa elektronik</div>');
      redirect('jasa/pesanjasa');
    }
  }
}
