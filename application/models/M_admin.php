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


// Esta funcion edita un  proyector, por medio de ID
  public function editar($id, $data){
    $this->db->where('idproyector', $id);
    $this->db->update('proyectores', $data);
    
  }


// Esta funcion sirve para comprobar si no existe otro proyector con la misma clave
  public function getProyectores($clave){
      $this->db->where('clave', $clave);
      $query = $this->db->get('proyectores');

      return $query->result_array();
  }

// Esta funcion evita a que se abra la vista "crea_proyector" cuando el ID que se coloque en la URI no exista
  function getProyectorById($idproyector){
      $this->db->select();
      $this->db->from('proyectores');
      $this->db->where('idproyector', $idproyector);
      
      $query = $this->db->get();
      return $query->row();
     
  }



 // Esta funcion devuelve todos los registros de la tabla proyectores 
  public function proyectoresAll(){
    $this->db->order_by('clave', 'ASC');
    $query = $this->db->get('proyectores');

    return $query->result();
  }


// Esta funcion elimina un proyector por medio del ID.
  public function delProyector($idproyector){
  	$this->db->where('idproyector', $idproyector);
  	$this->db->delete('proyectores');
  }


  public function insert_user($data){
    $this->db->insert('usuarios', $data);
    echo 'Insertado correctamente';
  }


}