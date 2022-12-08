<?php

defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Users extends REST_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Users_model');
  }
  public function index_get()
  {
    $id = $this->get('id');
    if ($id === null) {
      $user = $this->Users_model->getUsers();
    } else {
      $user = $this->Users_model->getUsers($id);
    }

    if ($user) {
      $this->response([
        'status' => true,
        'user' => $user
      ], REST_Controller::HTTP_OK);
    } else {
      $this->response([
        'status' => false,
        'massage' => 'id tidak di temukan'
      ], REST_Controller::HTTP_OK);
    }
  }

  // MENGHAPUS
  public function index_delete()
  {
    $id = $this->delete('id');
    if ($id === null) {
      $this->response([
        'status' => false,
        'massage' => 'end point tidak dapat di akses!'
      ], REST_Controller::HTTP_OK);
    } else {
      if ($this->Users_model->deleteUsers($id) > 0) {
        //ok
        $this->response([
          'status' => true,
          'id' => $id,
          'massage' => 'berhasil terhapus'
        ], REST_Controller::HTTP_OK);
      } else {
        //id not found
        $this->response([
          'status' => false,
          'massage' => 'id tidak di temukan'
        ], REST_Controller::HTTP_OK);
      }
    }
  }
  // MENAMBAHKAN DATA USER
  public function index_post()
  {
    $data = [
      'name' => $this->post('name'),
      'email' => $this->post('email'),
      'image' => 'default.jpg',
      'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
      'role_id' => 2,
      'is_active' => 1,
      'date_created' => time()
    ];
    if ($this->Users_model->createdUser($data) > 0) {
      $this->response([
        'status' => true,
        'massage' => 'Berhasil ditambahkan'
      ], REST_Controller::HTTP_OK);
    } else {
      //id not found
      $this->response([
        'status' => false,
        'massage' => 'Gagal menambahkan data'
      ], REST_Controller::HTTP_OK);
    }
  }
  // MENGUBAH DATA 
  public function index_put()
  {
    $id = $this->put('id');
    $data = [
      'name' => $this->put('name'),
      'email' => $this->put('email'),
      'image' => 'default.jpg',
      'password' => password_hash($this->put('password'), PASSWORD_DEFAULT),
      'role_id' => 2,
      'is_active' => 1,
      'date_created' => time()
    ];
    if ($this->Users_model->updateUser($data, $id) > 0) {
      $this->response([
        'status' => true,
        'massage' => 'Berhasil Merubah data Users'
      ], REST_Controller::HTTP_OK);
    } else {
      //id not found
      $this->response([
        'status' => false,
        'massage' => 'Gagal Merubah data Users'
      ], REST_Controller::HTTP_OK);
    }
  }
}
