<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestamo extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->database();
    $this->load->model('M_admin');
    $this->load->helper("form");
  }
}
