<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('M_admin');
    //$this->load->model('M_sybase');
    $this->load->helper("form");
    if (!$this->session->userdata('log')) {
      redirect('login');
    }
	}

  public function index(){
    $this->load->view('templates/header_admin');
    $this->load->view('templates/admin_all');
    $this->load->view('admin/inicio_admin');
		$this->load->view('templates/footer_admin');
  }

// Funcion para insertar y editar proyector

  public function crear($idproyector = NULL){

  	$this->load->library('form_validation'); //se carga la libreria para validar un formulario


  		if($this->input->post()){

        $this->form_validation->set_rules('clave','clave','required|max_length[50]');
  		  $this->form_validation->set_rules('marca','marca','required|max_length[50]');
  		  $this->form_validation->set_rules('modelo','modelo','required|max_length[45]');
  		  $this->form_validation->set_rules('num_serie','num_serie','required|max_length[45]');
  		  $this->form_validation->set_rules('depto','depto','required|max_length[45]');

        if($this->form_validation->run()== FALSE){

          $this->load->view('templates/header_admin');
          $this->load->view('templates/admin_all');
          $this->load->view('admin/crea_proyector');
          $this->load->view('templates/footer_admin');
  			}
  			else{
  				if ($this->input->post('edita_proyector')) {
  					$this->M_admin->editar($idproyector);
            redirect('admin/listar_proyector');
            echo "Se actualizo satisfactoriamente";

  				}
  				else {
  					if($this->M_admin->getProyectores($this->input->post('clave'))){
  						echo "Ya existe dicho proyector";
  					}
  					else{
  						$this->M_admin->insert();
              redirect('admin/crear');
  						echo "El proyector se ha sido agregado satisfactoriamente";
  				}
  			}
  		}
  	}
  		else{
  			if ($idproyector == NULL) {
          $this->load->view('templates/header_admin');
          $this->load->view('templates/admin_all');
          $this->load->view('admin/crea_proyector');
          $this->load->view('templates/footer_admin');
  		} else
        {
  			$data['proyectores'] = $this->M_admin->getProyectorById($idproyector);
  			if (empty($data['proyectores'])) {
  					echo "No se encontro el ID del usuario";
  			}
  			else {

            $this->load->view('templates/header_admin');
            $this->load->view('templates/admin_all');
            $this->load->view('admin/crea_proyector', $data);
            $this->load->view('templates/footer_admin');
  			}
  		}
  	}
  }

// Esta funcion sirve para listar los proyectores
  public function listar_proyector(){
    $data['proyector'] = $this->M_admin->obtenerProyectores();
    $this->load->view('templates/header_admin');
    $this->load->view('templates/admin_all');
    $this->load->view('admin/lista_proyectores', $data);
    $this->load->view('templates/footer_admin');
  }


// Esta funcion sirve para eliminar a un proyector, por medio de la ID.
  public function borrar($idproyector = NULL){
    if ($idproyector != NULL) {
      $proyector = $this->M_admin->getProyectorById($idproyector);
      if (empty($proyector)) {
      	echo "No se encontro el registro";
      }
      else {
      	$this->M_admin->delProyector($idproyector);
        redirect('admin/listar_proyector');
        echo "El usuario se elimino satisfactoriamente";
      }
    }
    else {
      echo "ID no especificado";
    }
  }

// Esta funcion sirve para listar los usuarios
  public function listar_user(){
    $data['personal'] = $this->M_sybase->personal();
    $this->load->view('templates/header_admin');
    $this->load->view('templates/admin_all');
    $this->load->view('admin/listar_user', $data);
    $this->load->view('templates/footer_admin');
  }
}
