<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login1 extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->database();
    $this->load->model('M_login');
    $this->load->model('M_sybase');
    $this->load->helper("form");
    $this->load->helper('array');
  }
  
  public function index(){
    $data['abc'] = array(
      'depto' => $this->input->post(),
    );
    
    $this->load->view('sesion/login_e1');
    var_dump($data);
  }

  
  public function login(){

      $rfc = $this->input->post('usuario');
      // $contraseña = $this->input->post('contraseña');
      $res = $this->M_sybase->login($rfc);

      if (!$res) {
          redirect('login1');
      }
      else {
        $data = array(
          'rfc' => $res->rfc,
          'nombre' => $res->nombre_empleado,
          'apellidos' => $res->apellidos_empleado,
          'login' => TRUE
        );
      $this->session->set_userdata($data);
      if ($this->input->post('loginC')) {
        redirect('prestamo/computo');
      }
      elseif ($this->input->post('loginA')) {
        redirect('prestamo/academico');
      }
    }
  }
  
  public function logout(){
    $this->session->sess_destroy();
    redirect('inicio');
  }

}