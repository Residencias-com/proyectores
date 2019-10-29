<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {
  function __construct(){
      parent::__construct();
      $this->load->database();
  }

// Esta funcion inserta los datos del POST a la tabla proyectores
  public function insert(){
      $datos = $this->input->post();
      unset($datos['inserta_proyector']);

      $this->db->insert('proyectores',$datos);
  }

// Esta funcion edita un  proyector, por medio de ID
  public function editar($idproyector){

    $data = array(
      'clave' => $this->input->post('clave'),
			'marca' => $this->input->post('marca'),
			'modelo' => $this->input->post('modelo'),
			'num_serie' => $this->input->post('num_serie'),
			'depto' => $this->input->post('depto'),
    );
    $this->db->where('idproyector', $idproyector);
    $this->db->update('proyectores', $data);
  }

}
