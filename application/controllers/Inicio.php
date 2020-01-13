<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

  public function __construct(){
    parent::__construct();
    if ($this->session->userdata('log')) {
      redirect('admin');
    }
  }

  public function index(){
    $this->load->view('inicio/index');
  }

  public function depto(){
    $this->load->view('inicio/depto');
  }

}
