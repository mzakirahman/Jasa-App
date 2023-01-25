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
  // FUNGSI DARI MITRANS
  public function token()
  {
    $nama = $this->input->post('nama');
    $harga = $this->input->post('harga');

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
    // $billing_address = array(
    //   'first_name'    => "Andri",
    //   'last_name'     => "Litani",
    //   'address'       => "Mangga 20",
    //   'city'          => "Jakarta",
    //   'postal_code'   => "16602",
    //   'phone'         => "081122334455",
    //   'country_code'  => 'IDN'
    // );

    // Optional
    // $shipping_address = array(
    //   'first_name'    => "Obet",
    //   'last_name'     => "Supriadi",
    //   'address'       => "Manggis 90",
    //   'city'          => "Jakarta",
    //   'postal_code'   => "16601",
    //   'phone'         => "08113366345",
    //   'country_code'  => 'IDN'
    // );

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
  {
    $result = json_decode($this->input->post('result_data'));
    echo 'RESULT <br><pre>';
    var_dump($result);
    echo '</pre>';
  }
}
