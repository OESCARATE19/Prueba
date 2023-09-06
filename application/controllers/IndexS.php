<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class IndexS extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_sucursal');
	}

	public function index(){
		$resultados = $this->Model_sucursal->getAll();
		$this->data['resultados'] = $resultados;
		$this->data['titulo'] = "Nuevo titulo";
		$this->load->view('IndexSucursal', $this->data);
	}

	public function eliminar($idSucursal) {
        // Llamar al modelo para eliminar el usuario por su ID
        $this->Model_sucursal->eliminar_Sucursal($idSucursal);

        // Redirigir a una página de éxito o a donde desees
        redirect('Index/');
    }

	public function guardarSucursal(){
        // Obtener los datos del formulario
        $data = array(
            'idSucursal' => $this->input->post('idSucursal'),
            'Nombre' => $this->input->post('Nombre'),
            'Ubicacion' => $this->input->post('Ubicacion'),
            'Horario' => $this->input->post('Horario')
        );

        // Insertar los datos en la tabla de clientes a través del modelo
        $this->Model_sucursal->insertarSucursal($data);

        // Redirigir a la página de éxito o donde sea necesario
        redirect('Index/');
	}
}
