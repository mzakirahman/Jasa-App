<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Snap extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $params = array('server_key' => 'SB-Mid-server-ZAJ7F4rAEdZWQA4OUMyQaph9', 'production' => false);
    $this->load->library('midtrans');
    $this->midtrans->config($params);
    $this->load->helper('url');

    // panggil model
    $this->load->model('Jasaku_model');
  }

  public function index()
  {
    $this->load->view('checkout_snap');
  }

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
    $customer_details = array(
      'first_name'    => $nama,
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

  // public function finish()
  // {

  //   $result = json_decode($this->input->post('result_data'));
  //   echo 'RESULT <br><pre>';
  //   var_dump($result);
  //   echo '</pre>';
  // }
}
