<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prueba extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('M_sybase');
        $this->load->model('M_prueba');
        $this->load->helper("form");
    }

    // public function index(){
    //     $data['horarios'] = $this->M_sybase->horario();
    //     //echo var_dump($data);
    //     $this->load->view('templates/header_admin');
    //     $this->load->view('templates/admin_all');
    //     $this->load->view('prestamo/horario', $data);
	// 	$this->load->view('templates/footer_admin');
    // }

    public function index(){
        $this->load->view('templates/header_admin');
        $this->load->view('templates/admin_all');
        $this->load->view('admin/inicio_admin');
        $this->load->view('templates/footer_admin');
    }
    
}