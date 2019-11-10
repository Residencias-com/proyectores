<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestamo extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->database();
    $this->load->model('M_admin');
    $this->load->helper("form");
  }

// Esta funcion hace un muestra los proyectores segun el depto que pertenecen
  public function prestamo(){
    if ($this->input->post('computo')) {
      $data['proyector'] = $this->M_admin->obtenerComputo();
      $this->load->view('templates/header_admin');
      $this->load->view('templates/navbar');
      $this->load->view('prestamo/prestamo',$data);
      $this->load->view('templates/footer_admin');
    }
    else {
      $data['proyector'] = $this->M_admin->obtenerAcademico();
      $this->load->view('templates/header_admin');
      $this->load->view('templates/navbar');
      $this->load->view('prestamo/prestamo',$data);
      $this->load->view('templates/footer_admin');
    }
  }
}
