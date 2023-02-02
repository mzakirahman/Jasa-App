<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('Home_model');
    $this->load->helper('url');
    // Mitrans
    $params = array('server_key' => 'SB-Mid-server-ZAJ7F4rAEdZWQA4OUMyQaph9', 'production' => false);
    $this->load->library('veritrans');
    $this->veritrans->config($params);
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
    $data['jasa'] = $this->Home_model->AllDataJasa();

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
  public function notification()
  {

    echo 'test notification handler1';
    $json_result = file_get_contents('php://input');
    $result = json_decode($json_result, "true");

    $order_id = $result['order_id'];

    $data = [
      'status_code' => $result['status_code']
    ];

    if ($result['status_code'] == 200) {
      $this->db->update('transaksi_mitrans', $data, array('order_id' => $order_id));
    }


    //notification handler sample

    /*
		$transaction = $notif->transaction_status;
		$type = $notif->payment_type;
		$order_id = $notif->order_id;
		$fraud = $notif->fraud_status;

		if ($transaction == 'capture') {
		  // For credit card transaction, we need to check whether transaction is challenge by FDS or not
		  if ($type == 'credit_card'){
		    if($fraud == 'challenge'){
		      // TODO set payment status in merchant's database to 'Challenge by FDS'
		      // TODO merchant should decide whether this transaction is authorized or not in MAP
		      echo "Transaction order_id: " . $order_id ." is challenged by FDS";
		      } 
		      else {
		      // TODO set payment status in merchant's database to 'Success'
		      echo "Transaction order_id: " . $order_id ." successfully captured using " . $type;
		      }
		    }
		  }
		else if ($transaction == 'settlement'){
		  // TODO set payment status in merchant's database to 'Settlement'
		  echo "Transaction order_id: " . $order_id ." successfully transfered using " . $type;
		  } 
		  else if($transaction == 'pending'){
		  // TODO set payment status in merchant's database to 'Pending'
		  echo "Waiting customer to finish transaction order_id: " . $order_id . " using " . $type;
		  } 
		  else if ($transaction == 'deny') {
		  // TODO set payment status in merchant's database to 'Denied'
		  echo "Payment using " . $type . " for transaction order_id: " . $order_id . " is denied.";
		}*/
  }
}
