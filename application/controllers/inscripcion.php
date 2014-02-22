<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inscripcion extends CI_Controller 
{
	
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('inicio');
		$this->load->model('grupos');
		$this->removeCache();
	}

	public function inscripcion()
	{
		if ($_POST) 
		{
			$this->form_validation->set_rules('id', 'Identificacion', 'required');
			$this->form_validation->set_rules('nombres', 'Nombres', 'required');
			$this->form_validation->set_rules('apellidos', 'Apellidos', 'required');
			$this->form_validation->set_rules('password', 'Contraseña', 'required');
			$this->form_validation->set_rules('direccion', 'Direccion', 'required');
			$this->form_validation->set_rules('telfijo', 'Telefono Fijo', 'required|is_numeric');
			$this->form_validation->set_rules('telmovil', 'Telefono Movil', 'required|is_numeric');
			$this->form_validation->set_rules('correo', 'Correo Electronico', 'required|valid_mail');	
			$this->form_validation->set_rules('rol', 'Rol', 'required');
			$this->form_validation->set_rules('grupo', 'Grupo', 'required');
			$this->form_validation->set_rules('nom-acudiente', 'Nombres Acudiente', 'required');
			$this->form_validation->set_rules('ape-acudiente', 'Apellidos Acudiente', 'required');
			$this->form_validation->set_rules('telmovil-acudiente', 'Telefono Movil Acudiente', 'required|is_numeric');
			$this->form_validation->set_rules('correo-acudiente', 'Correo Electronico Acudiente', 'required|valid_mail');
			$this->form_validation->set_rules('nom-padre', 'Nombres Padre', 'required');
			$this->form_validation->set_rules('ape-padre', 'Apellidos Padre', 'required');
			$this->form_validation->set_rules('telmovil-padre', 'Telefono Movil Padre', 'required|is_numeric');
			$this->form_validation->set_rules('nom-madre', 'Nombres Madre', 'required');
			$this->form_validation->set_rules('ape-madre', 'Apellidos Madre', 'required');
			$this->form_validation->set_rules('telmovil-madre', 'Telefono Movil Madre', 'required|is_numeric');

			$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
  															<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '
  														  </div>');

			if ($this->form_validation->run() == true) 
			{
				$this->inicio->inscripcion();
			}		
		}
		$data['lstg'] = $this->grupos->lstg();
		$this->load->view('layout/header');
		$this->load->view('inscripcion', $data);
		$this->load->view('layout/footer');
	}
}