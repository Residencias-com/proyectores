<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->helper("form");
	}

  public function index(){
      $this->load->view('templates/header_admin');
      $this->load->view('templates/admin_all');
      $this->load->view('admin/inicio_admin');
		  $this->load->view('templates/footer_admin');
    }
}
