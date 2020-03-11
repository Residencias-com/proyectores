<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_sybase extends CI_Model{
    private $dbp, $dbm;
 
    public function __construct(){
        parent:: __construct();
        $this->dbm = $this->load->database('default', TRUE);
        $this->dbs = $this->load->database('db2', TRUE);
    }


    public function login($rfc){
        $this->dbs->select('*');
        $this->dbs->where('rfc', $rfc);
    
        $result = $this->dbs->get('personal');
        if($result->num_rows() > 0) {
          return $result->row();
        }
        else {
          return false;
        }
    }


    public function personal(){
        $this->dbs->order_by('','ASC');
        $query = $this->dbs->get('personal');

        return $query->result_array();
    }

    public function horario(){
        $this->dbs->order_by('','ASC');
        $this->dbs->where('rfc', 'AUCJ790311C95');
        $query = $this->dbs->get('horarios');
  
        return $query->result_array();
    }

}