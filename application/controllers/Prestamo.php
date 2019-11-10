<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestamo extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->database();
    $this->load->model('M_admin');
    $this->load->helper("form");
  }
  public function computo(){
    $data['proyector'] = $this->M_admin->obtenerProyectores();
    $this->load->view('templates/header_admin');
    $this->load->view('templates/navbar');
    $this->load->view('prestamo/prestamo_c',$data);
    $this->load->view('templates/footer_admin');
  }
  public function academico(){
    $data['proyector'] = $this->M_admin->obtenerProyectores();
    $this->load->view('templates/header_admin');
    $this->load->view('templates/navbar');
    $this->load->view('prestamo/prestamo_a',$data);
    $this->load->view('templates/footer_admin');
  }
}
