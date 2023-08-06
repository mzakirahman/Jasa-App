<?php

defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Midtrans extends REST_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Midtrans_model');
  }
  public function index_get()
  {
    $id = $this->get('id');
    if ($id === null) {
      $Midtrans = $this->Midtrans_model->getmidtrans();
    } else {
      $Midtrans = $this->Midtrans_model->getmidtrans($id);
    }

    if ($Midtrans) {
      $this->response([
        'status' => true,
        'Midtrans client' => $Midtrans
      ], REST_Controller::HTTP_OK);
    } else {
      $this->response([
        'status' => false,
        'massage' => 'Transaction belum dilakukan!'
      ], REST_Controller::HTTP_OK);
    }
  }
}
