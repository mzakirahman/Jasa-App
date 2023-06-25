<?php

defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Jasa extends REST_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Jasa_api_model');
  }
  public function index_get()
  {
    $id = $this->get('id');
    if ($id === null) {
      $jasa = $this->Jasa_api_model->getJasa();
    } else {
      $jasa = $this->Jasa_api_model->getJasa($id);
    }

    if ($jasa) {
      $this->response([
        'status' => true,
        'jasa' => $jasa
      ], REST_Controller::HTTP_OK);
    } else {
      $this->response([
        'status' => false,
        'massage' => 'id tidak di temukan'
      ], REST_Controller::HTTP_OK);
    }
  }
}
