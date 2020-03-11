<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loginC extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->database();
    $this->load->model('M_login');
    $this->load->model('M_sybase');
    $this->load->helper("form");
    $this->load->helper('array');
  }
  
  public function index(){
    if ($this->session->userdata('loginC')) {
      redirect('prestamo/computo');
    }
		else {
      $this->load->view('sesion/login_c');
    }
	}

  
  public function login(){

      $rfc = $this->input->post('usuario');
      // $contraseña = $this->input->post('contraseña');
      $res = $this->M_sybase->login($rfc);

      if (!$res) {
          redirect('loginC');
      }
      else {
        $data = array(
          'rfc' => $res->rfc,
          'nombre' => $res->nombre_empleado,
          'apellidos' => $res->apellidos_empleado,
          'loginC' => TRUE
        );
      $this->session->set_userdata($data);
        redirect('prestamo/computo');
    }
  }
  
  public function logout(){
    $this->session->sess_destroy();
    redirect('inicio/depto');
  }

}