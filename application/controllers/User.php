<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

  public function __construct(){
		parent::__construct();
		$errors = $response = array();
	}
  public function index(){
    echo 'hello';
  }
  public function registerUser(){
    $response['status'] = 1;
    $response['data'] = $this->input->post();
    echo json_encode($response);
  }
}
?>
