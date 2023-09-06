<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Model_empleado extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function getAll(){
		$this->db->select('CodEmpleado, Nombre, Telefono, Correo, Direccion');
		$this->db->from('empleado');
		$query = $this->db->get();
		return $query->result();
	}

	public function insertarEmpleado($data) {
        $this->db->insert('empleado', $data);
    }

	public function eliminar_empleado($CodEmpleado) {
        $this->db->where('CodEmpleado', $CodEmpleado);
        $this->db->delete('empleado');
    }
}