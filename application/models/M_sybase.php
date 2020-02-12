<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_sybase extends CI_Model{
    private $dbp, $dbm;
 
    public function __construct(){
        parent:: __construct();
        $this->dbm = $this->load->database('default', TRUE);
        $this->dbs = $this->load->database('db2', TRUE);
    }

    public function personal(){
        $this->dbm->order_by('','ASC');
        $query = $this->dbm->get('personal');

        return $query->result_array();
    }

    public function horario(){
        $this->dbs->order_by('','ASC');
        $this->dbs->where('rfc', 'AUCJ790311C95');
        $query = $this->dbs->get('horarios');
  
        return $query->result_array();
    }

}