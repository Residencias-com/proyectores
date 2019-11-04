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

  public function validate(){
    $this->form_validation->set_error_delimiters('', '');
    $rules = getLoginRules();//En estas variables se van a guardar nuestras reglas
    $this->form_validation->set_rules($rules);
    if ($this->form_validation->run() === FALSE) {// Si falla algo que nos muestre los errores!
      $errors = array(
        'username' =>  form_error('username'),
        'password' => form_error('password'),
      );
      echo json_encode($errors);
      $this->output->set_status_header(400);
    }else {
      $usr  = $this->input->post('username');
      $pass = $this->input->post('password');
      if (!$res = $this->Auth->login($usr, $pass)) {//si este metodo manda falso, mandar el error a JS
        echo json_encode(array('msg' => 'Verifica tus credenciales'));
        $this->output->set_status_header(401);
        exit;
      }
      $data = array(
        'id'   => $res->id,
        'name' => $res->nombre
      );
      $this->session->set_userdata($data);
      echo json_encode(array("url" => base_url('admin')));
    }
  }

}
