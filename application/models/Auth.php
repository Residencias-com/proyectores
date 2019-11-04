<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Model {
  function __construct(){
    $this->load->database();
  }
  public function login($usuario, $password){
    $data = $this->db->get_where('usuarios', array('nombre' => $usuario, 'contraseña' => $password),1);
    if (!$data->result()) {
      return false;
    }
    return $data->row();
  }
}
