<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  public function __construct(){
    parent::__construct();
    // $this->load->helper(array('getmenu','url'));
    $this->load->library(array('form_validation', 'session'));
    $this->load->helper(array('auth/login_rules'));
    $this->load->model('Auth');
  }

  public function index(){
		$this->load->view('sesion/login');
	}

}
