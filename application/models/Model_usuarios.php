<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Model_usuarios extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function getAll(){
		$this->db->select('Nit, Nombre, Telefono, Correo, Direccionl');
		$this->db->from('cliente');
		$query = $this->db->get();
		return $query->result();
	}

	public function insertarCliente($data) {
        $this->db->insert('cliente', $data);
    }

	public function eliminar_usuario($Nit) {
        $this->db->where('Nit', $Nit);
        $this->db->delete('cliente');
    }
}