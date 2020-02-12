<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
  public function __construct(){
    parent::__construct();
    $this->load->database();
    $this->load->helper("form");
	}
  public function login($user,$contraseña){
    $this->db->where('nombre_usuario', $user);
    $this->db->where('contraseña', $contraseña);

    $result = $this->db->get('usuarios');
    if($result->num_rows() > 0) {
      return $result->row();
    }
    else {
      return false;
    }
  }
}