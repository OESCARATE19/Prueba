<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Model_sucursal extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function getAll(){
		$this->db->select('idSucursal, Nombre, Ubicacion, Horario');
		$this->db->from('sucursal');
		$query = $this->db->get();
		return $query->result();
	}

	public function insertarSucursal($data) {
        $this->db->insert('sucursal', $data);
    }

	public function eliminar_Sucursal($idSucursal) {
        $this->db->where('idSucursal', $idSucursal);
        $this->db->delete('sucursal');
    }
}