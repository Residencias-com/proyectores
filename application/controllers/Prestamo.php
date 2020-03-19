<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Prestamo extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    $this->load->database();
    $this->load->model('M_prestamo');
    $this->load->model('M_sybase');
    $this->load->helper("form");
  }
  
  public function computo(){
    if (!$this->session->userdata('loginC')) {
      redirect('loginC');
    }
    $data['proyector'] = $this->M_prestamo->obtenerProyectores();
    $this->load->view('prestamo/prestamo_c',$data);
    $this->load->view('templates/footer');
  }

  public function academico(){
    if (!$this->session->userdata('loginA')) {
      redirect('loginA');
    }
    $data['proyector'] = $this->M_prestamo->obtenerProyectores();
    $this->load->view('prestamo/prestamo_a',$data);
    $this->load->view('templates/footer');
  }

  public function prueba(){
    $data['pro'] = $this->M_prestamo->proyectores();
    $this->load->view('prestamo/prueba',$data);
    $this->load->view('templates/footer');
  }

  public function horarios(){
    $data['join'] = $this->M_prestamo->horario();
    echo var_dump($data);
  }

  public function horario_p(){
    $data['join'] = $this->M_sybase->horario();
    echo var_dump($data);
  }
  

}