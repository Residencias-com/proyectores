<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {
  function __construct(){
      parent::__construct();
      $this->load->database();
  }

// Esta funcion inserta los datos del POST a la tabla proyectores
  public function insert($data){
    $this->db->insert('proyectores', $data);
    return $this->db->insert_id();
  }
  // public function insert(){
  //   $datos = $this->input->post();
  //   unset($datos['inserta_proyector']);

  //   $this->db->insert('proyectores',$datos);
  // } 

// Esta funcion edita un  proyector, por medio de ID
  public function editar($idproyector, $data){

    $this->db->where('idproyector', $idproyector);
    $this->db->update('proyectores', $data);
  }
  // public function editar($idproyector){

  //   $data = array(
  //     'clave' => $this->input->post('clave'),
	// 		'marca' => $this->input->post('marca'),
	// 		'modelo' => $this->input->post('modelo'),
	// 		'num_serie' => $this->input->post('num_serie'),
	// 		'depto' => $this->input->post('depto'),
  //   );
  //   $this->db->where('idproyector', $idproyector);
  //   $this->db->update('proyectores', $data);
  // }

// Esta funcion sirve para comprobar si no existe otro proyector con la misma clave
  public function getProyectores($clave){
      $this->db->where('clave', $clave);
      $query = $this->db->get('proyectores');

      return $query->result_array();
  }

// Esta funcion evita a que se abra la vista "crea_proyector" cuando el ID que se coloque en la URI no exista
  function getProyectorById($idproyector){
      $this->db->select('*');
      $this->db->from('proyectores');
      $this->db->where('idproyector', $idproyector);
      $query = $this->db->get();

      return $query->row();
  }

//   function getProyectorById($idproyector){
//     $this->db->select('clave');
//     $this->db->where('idproyector', $idproyector);
//     $query = $this->db->get('proyectores');

//     return $query->result_array();
//   }

// Esta funcion te muestra el contenido de la tabla proyectores
  public function obtenerProyectores(){
      $this->db->order_by('clave', 'ASC');
      $query = $this->db->get('proyectores');

      return $query->result_array();
  }

// Esta funcion elimina un proyector por medio del ID.
  public function delProyector($idproyector){
  	$this->db->where('idproyector', $idproyector);
  	$this->db->delete('proyectores');
  }
}
