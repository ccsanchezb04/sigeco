<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('inicio');
		$this->load->model('grupos');
		$this->load->model('homeemployed');
		$this->removeCache();
	}

	public function index()
	{
		switch ($this->session->userdata('rol')) 
		{
			case 'ADMIN':
				redirect(base_url().'Admin', 'refresh');
				break;

			case 'EMPLEADO':
				redirect(base_url().'Empleado', 'refresh');
				break;

			case 'PROFESOR':
				redirect(base_url().'Profesor', 'refresh');
				break;

			case 'ALUMNO':
				redirect(base_url().'Estudiante', 'refresh');
				break;
			
			default:
				$this->form_validation->set_rules('id', 'No. de Identificacion', 'required');
    			$this->form_validation->set_rules('password', 'Contraseña', 'required');

    			$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
  																<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '
  															  </div>');

	    		if ($this->form_validation->run() == true) 
	    		{
	    			$this->inicio->validateUser();
	    			$this->inicio->inscripcion();
	    		}
				break;
		}
		$this->load->view('layout/header');
		$this->load->view('inicio');		
		$this->load->view('login');
		$this->load->view('layout/footer');
	}

	public function close()
	{
		$this->session->sess_destroy();
	    redirect(base_url(), 'refresh');
}

}