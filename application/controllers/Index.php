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
		$this->load->model('Model_empleado');
	}

	public function index(){
		$resultados = $this->Model_empleado->getAll();
		$this->data['resultados'] = $resultados;
		$this->data['titulo'] = "Nuevo titulo";
		$this->load->view('vIndex', $this->data);
	}

	public function eliminar($CodEmpleado) {
        // Llamar al modelo para eliminar el usuario por su ID
        $this->Model_empleado->eliminar_empleado($CodEmpleado);

        // Redirigir a una página de éxito o a donde desees
        redirect('Index/');
    }

	public function guardarEmpleado(){
        // Obtener los datos del formulario
        $data = array(
            'CodEmpleado' => $this->input->post('CodEmpleado'),
            'Nombre' => $this->input->post('Nombre'),
            'Telefono' => $this->input->post('Telefono'),
            'Correo' => $this->input->post('Correo'),
            'Direccion' => $this->input->post('Direccion')
        );

        // Insertar los datos en la tabla de clientes a través del modelo
        $this->Model_empleado->insertarEmpleado($data);

        // Redirigir a la página de éxito o donde sea necesario
        redirect('Index/');
	}
}
