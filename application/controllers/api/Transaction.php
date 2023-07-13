<?php

defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Transaction extends REST_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Transaction_model');
  }
  public function index_get()
  {
    $id = $this->get('id');
    if ($id === null) {
      $Transaction = $this->Transaction_model->getTransaction();
    } else {
      $Transaction = $this->Transaction_model->getTransaction($id);
    }

    if ($Transaction) {
      $this->response([
        'status' => true,
        'Transaction' => $Transaction
      ], REST_Controller::HTTP_OK);
    } else {
      $this->response([
        'status' => false,
        'massage' => 'Transaction tidak di temukan'
      ], REST_Controller::HTTP_OK);
    }
  }
}
