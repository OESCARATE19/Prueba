<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Index extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_usuarios');
	}

	public function index(){
		$resultados = $this->Model_usuarios->getAll();
		$this->data['resultados'] = $resultados;
		$this->data['titulo'] = "Nuevo titulo";
		$this->load->view('vIndex', $this->data);
	}

	public function eliminar($Nit) {
        // Llamar al modelo para eliminar el usuario por su ID
        $this->Model_usuarios->eliminar_usuario($Nit);

        // Redirigir a una página de éxito o a donde desees
        redirect('index/');
    }

	public function guardarCliente(){
        // Obtener los datos del formulario
        $data = array(
            'Nit' => $this->input->post('Nit'),
            'Nombre' => $this->input->post('Nombre'),
            'Telefono' => $this->input->post('Telefono'),
            'Correo' => $this->input->post('Correo'),
            'Direccionl' => $this->input->post('Direccionl')
        );

        // Insertar los datos en la tabla de clientes a través del modelo
        $this->Model_usuarios->insertarCliente($data);

        // Redirigir a la página de éxito o donde sea necesario
        redirect('index/');
	}
}
