<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {
  function __construct(){
      parent::__construct();
      $this->load->database();
  }
  public function insert(){
      $datos = $this->input->post();
      unset($datos['inserta_proyector']);

      $this->db->insert('proyectores',$datos);
  }
}
