<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_prestamo extends CI_Model {
  
    private $dbm, $dbs;
 
    public function __construct(){
        parent:: __construct();
        $this->dbm = $this->load->database('default', TRUE);
        $this->dbs = $this->load->database('db2', TRUE);
    }


// Esta funcion te muestra el contenido de la tabla proyectores
    public function obtenerProyectores(){
        $this->dbm->order_by('clave', 'ASC');
        $query = $this->dbm->get('proyectores');

        return $query->result_array();
    }

    public function proyectores(){
        $this->dbm->order_by('clave', 'ASC');
        $this->dbm->select('*');
        $this->dbm->from('proyectores');

        $query = $this->dbm->get();
        return $query->result();
    }


        /*
        $this->dbs->order_by('hora_inicial','ASC');
        $this->dbs->select('nombre_completo_materia, nombre_carrera, nombre_empleado, apellidos_empleado, grupos.rfc, horarios.grupo, aula, horarios.periodo,  hora_inicial, hora_final, dia_semana');
        $this->dbs->from('horarios', 'materias_carreras');
        $this->dbs->join('materias', 'materias.materia = horarios.materia');
        $this->dbs->join('materias_carreras', 'materias_carreras.materia = horarios.materia');
        $this->dbs->join('grupos', 'grupos.rfc = horarios.rfc');
        $this->dbs->join('personal', 'personal.rfc = grupos.rfc');
        $this->dbs->join('carreras', 'carreras.carrera = materias_carreras.carrera');
        $this->dbs->where('horarios.rfc','AUCJ790311C95');
        $this->dbs->where('grupos.periodo', '20201');
        $this->dbs->where('horarios.periodo', '20201');
        */

    public function horario(){
        $this->dbs->order_by('horarios.dia_semana','ASC');
        $this->dbs->select('personal.rfc, personal.nombre_empleado, personal.apellidos_empleado, materias.nombre_completo_materia, horarios.grupo, dia_semana, horarios.hora_inicial, horarios.hora_final, horarios.aula');
        $this->dbs->from('horarios');
        $this->dbs->join('personal','personal.rfc = horarios.rfc');
        $this->dbs->join('materias', 'materias.materia = horarios.materia');
        $this->dbs->where('personal.rfc', 'AUCJ790311C95');
        $this->dbs->where('horarios.periodo', '20201');
  
        $query = $this->dbs->get();
        return $query->result_array();
    }

}  