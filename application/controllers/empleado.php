<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Empleado extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('homeemployed');
		$this->load->model('matricula');
		$this->load->model('homeadmin');
		$this->load->model('grupos');	
		$this->removeCache();
	}

/* ================================================================================== */
/* ================================= INSCRIPCIONES ================================== */
	public function index()	
	{
		// ================================= PRIMEROS =================================
		$data['lst1a'] = $this->homeemployed->lst1a();
		$data['lst1b'] = $this->homeemployed->lst1b();
		$data['lst1c'] = $this->homeemployed->lst1c();
		$data['lst1d'] = $this->homeemployed->lst1d();
		// ============================================================================

		// ================================= SEGUNDOS =================================
		$data['lst2a'] = $this->homeemployed->lst2a();
		$data['lst2b'] = $this->homeemployed->lst2b();
		$data['lst2c'] = $this->homeemployed->lst2c();
		$data['lst2d'] = $this->homeemployed->lst2d();
		// ============================================================================

		// ================================= TERCEROS =================================
		$data['lst3a'] = $this->homeemployed->lst3a();
		$data['lst3b'] = $this->homeemployed->lst3b();
		$data['lst3c'] = $this->homeemployed->lst3c();
		$data['lst3d'] = $this->homeemployed->lst3d();
		// ============================================================================

		// ================================== CUARTOS =================================
		$data['lst4a'] = $this->homeemployed->lst4a();
		$data['lst4b'] = $this->homeemployed->lst4b();
		$data['lst4c'] = $this->homeemployed->lst4c();
		$data['lst4d'] = $this->homeemployed->lst4d();
		// ============================================================================

		// ================================== QUINTOS =================================
		$data['lst5a'] = $this->homeemployed->lst7a();
		$data['lst5b'] = $this->homeemployed->lst7b();
		$data['lst5c'] = $this->homeemployed->lst7c();
		$data['lst5d'] = $this->homeemployed->lst7d();
		// ============================================================================

		// ================================== SEXTOS ==================================
		$data['lst6a'] = $this->homeemployed->lst6a();
		$data['lst6b'] = $this->homeemployed->lst6b();
		$data['lst6c'] = $this->homeemployed->lst6c();
		$data['lst6d'] = $this->homeemployed->lst6d();
		// ============================================================================

		// ================================= SEPTIMOS =================================
		$data['lst7a'] = $this->homeemployed->lst7a();
		$data['lst7b'] = $this->homeemployed->lst7b();
		$data['lst7c'] = $this->homeemployed->lst7c();
		$data['lst7d'] = $this->homeemployed->lst7d();
		// ============================================================================

		// ================================== OCTAVOS =================================
		$data['lst8a'] = $this->homeemployed->lst8a();
		$data['lst8b'] = $this->homeemployed->lst8b();
		$data['lst8c'] = $this->homeemployed->lst8c();
		$data['lst8d'] = $this->homeemployed->lst8d();
		// ============================================================================

		// ================================== NOVENOS =================================
		$data['lst9a'] = $this->homeemployed->lst9a();
		$data['lst9b'] = $this->homeemployed->lst9b();
		$data['lst9c'] = $this->homeemployed->lst9c();
		$data['lst9d'] = $this->homeemployed->lst9d();
		// ============================================================================

		// ================================ DECIMOS =================================
		$data['lst10a'] = $this->homeemployed->lst10a();
		$data['lst10b'] = $this->homeemployed->lst10b();
		$data['lst10c'] = $this->homeemployed->lst10c();
		$data['lst10d'] = $this->homeemployed->lst10d();
		// ============================================================================

		// ================================ UNDECIMOS =================================
		$data['lst11a'] = $this->homeemployed->lst11a();
		$data['lst11b'] = $this->homeemployed->lst11b();
		$data['lst11c'] = $this->homeemployed->lst11c();
		$data['lst11d'] = $this->homeemployed->lst11d();
		// ============================================================================
		$this->load->view('layout/header');
		$this->load->view('empleado/empleado', $data);
		$this->load->view('layout/footer');
	}

	public function addInsc()
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
				$this->homeemployed->addInsc();
			}		
		}
		$data['lstg'] = $this->grupos->lstg();
		$this->load->view('layout/header');
		$this->load->view('empleado/inscripcion/add', $data);
		$this->load->view('layout/footer');
	}

	public function lstInsc($no_identificacion)
	{
		$data['lstu'] = $this->homeemployed->lstInsc($no_identificacion);
		$data['lsti'] = $this->homeemployed->lstdInsc($no_identificacion);
		$this->load->view('layout/header');
		$this->load->view('empleado/inscripcion/lst', $data);
		$this->load->view('layout/footer');
	}

	public function updInsc($no_identificacion)
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
				$this->homeemployed->updInsc($no_identificacion);
			}		
		}
		$data['lstg'] = $this->grupos->lstg();
		$data['lstu'] = $this->homeemployed->lstInsc($no_identificacion);
		$data['lsti'] = $this->homeemployed->lstdInsc($no_identificacion);
		$this->load->view('layout/header');
		$this->load->view('empleado/inscripcion/upd', $data);
		$this->load->view('layout/footer');
	}

	public function dltInsc($no_identificacion)
	{
		$this->homeemployed->dltInsc($no_identificacion);
	}
/* ================================================================================== */
/* ================================================================================== */

/* ================================================================================== */
/* =================================== MATRICULAS =================================== */
	public function matricula()	
	{
		// ================================= PRIMEROS =================================
		$data['lst1a'] = $this->matricula->lst1a();
		$data['lst1b'] = $this->matricula->lst1b();
		$data['lst1c'] = $this->matricula->lst1c();
		$data['lst1d'] = $this->matricula->lst1d();
		// ============================================================================

		// ================================= SEGUNDOS =================================
		$data['lst2a'] = $this->matricula->lst2a();
		$data['lst2b'] = $this->matricula->lst2b();
		$data['lst2c'] = $this->matricula->lst2c();
		$data['lst2d'] = $this->matricula->lst2d();
		// ============================================================================

		// ================================= TERCEROS =================================
		$data['lst3a'] = $this->matricula->lst3a();
		$data['lst3b'] = $this->matricula->lst3b();
		$data['lst3c'] = $this->matricula->lst3c();
		$data['lst3d'] = $this->matricula->lst3d();
		// ============================================================================

		// ================================== CUARTOS =================================
		$data['lst4a'] = $this->matricula->lst4a();
		$data['lst4b'] = $this->matricula->lst4b();
		$data['lst4c'] = $this->matricula->lst4c();
		$data['lst4d'] = $this->matricula->lst4d();
		// ============================================================================

		// ================================== QUINTOS =================================
		$data['lst5a'] = $this->matricula->lst7a();
		$data['lst5b'] = $this->matricula->lst7b();
		$data['lst5c'] = $this->matricula->lst7c();
		$data['lst5d'] = $this->matricula->lst7d();
		// ============================================================================

		// ================================== SEXTOS ==================================
		$data['lst6a'] = $this->matricula->lst6a();
		$data['lst6b'] = $this->matricula->lst6b();
		$data['lst6c'] = $this->matricula->lst6c();
		$data['lst6d'] = $this->matricula->lst6d();
		// ============================================================================

		// ================================= SEPTIMOS =================================
		$data['lst7a'] = $this->matricula->lst7a();
		$data['lst7b'] = $this->matricula->lst7b();
		$data['lst7c'] = $this->matricula->lst7c();
		$data['lst7d'] = $this->matricula->lst7d();
		// ============================================================================

		// ================================== OCTAVOS =================================
		$data['lst8a'] = $this->matricula->lst8a();
		$data['lst8b'] = $this->matricula->lst8b();
		$data['lst8c'] = $this->matricula->lst8c();
		$data['lst8d'] = $this->matricula->lst8d();
		// ============================================================================

		// ================================== NOVENOS =================================
		$data['lst9a'] = $this->matricula->lst9a();
		$data['lst9b'] = $this->matricula->lst9b();
		$data['lst9c'] = $this->matricula->lst9c();
		$data['lst9d'] = $this->matricula->lst9d();
		// ============================================================================

		// ================================ DECIMOS =================================
		$data['lst10a'] = $this->matricula->lst10a();
		$data['lst10b'] = $this->matricula->lst10b();
		$data['lst10c'] = $this->matricula->lst10c();
		$data['lst10d'] = $this->matricula->lst10d();
		// ============================================================================

		// ================================ UNDECIMOS =================================
		$data['lst11a'] = $this->matricula->lst11a();
		$data['lst11b'] = $this->matricula->lst11b();
		$data['lst11c'] = $this->matricula->lst11c();
		$data['lst11d'] = $this->matricula->lst11d();
		// ============================================================================
		$this->load->view('layout/header');
		$this->load->view('empleado/matricula/matricula', $data);
		$this->load->view('layout/footer');
	}

	public function addMat($no_identificacion)
	{
		if ($_POST) 
		{
			$this->form_validation->set_rules('id', 'Identificacion', 'required');
			$this->form_validation->set_rules('fecha-matricula', 'Fecha', 'required');
			$this->form_validation->set_rules('grupo', 'Grupo', 'required');
			$this->form_validation->set_rules('estado', 'Estado Institucional', 'required');			

			$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
  															<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '
  														  </div>');

			if ($this->form_validation->run() == true) 
			{
				$this->matricula->addMat($no_identificacion);
			}		
		}
		$data['lstg'] = $this->grupos->lstg($no_identificacion);
		$data['lsti'] = $this->matricula->lstInsc($no_identificacion);
		$this->load->view('layout/header');
		$this->load->view('empleado/matricula/add', $data);
		$this->load->view('layout/footer');
	}

	public function lstMat($no_identificacion)
	{
		$data['lstm'] = $this->matricula->lstMat($no_identificacion);
		$this->load->view('layout/header');
		$this->load->view('empleado/matricula/lst', $data);
		$this->load->view('layout/footer');
	}

	public function updMat($no_identificacion)
	{
		if ($_POST) 
		{
			$this->form_validation->set_rules('id', 'Identificacion', 'required');
			$this->form_validation->set_rules('fecha-matricula', 'Fecha', 'required');
			$this->form_validation->set_rules('grupo', 'Grupo', 'required');
			$this->form_validation->set_rules('estado', 'Estado Institucional', 'required');			

			$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
  															<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '
  														  </div>');

			if ($this->form_validation->run() == true) 
			{
				$this->matricula->updMat($no_identificacion);
			}		
		}
		$data['lstg'] = $this->grupos->lstg($no_identificacion);
		$data['lstm'] = $this->matricula->lstMat($no_identificacion);
		$this->load->view('layout/header');
		$this->load->view('empleado/matricula/upd', $data);
		$this->load->view('layout/footer');
	}

	public function dltMat($no_identificacion)
	{
		$this->matricula->dltMat($no_identificacion);
	}
/* ================================================================================== */
/* ================================================================================== */
}