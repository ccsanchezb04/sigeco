<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url', 'form_validation');		
		$this->load->model('homeadmin');
		$this->load->model('materias');
		$this->load->model('grupos');
		$this->removeCache();
	}

	/*=====================================================================================================================================================================*/
	/*======================================================= USUARIOS ====================================================================================================*/
	/*=====================================================================================================================================================================*/
	
	public function index()	
	{
		$data['lsta'] = $this->homeadmin->lstAdmin();
		$data['lste'] = $this->homeadmin->lstEmpleado();
		$data['lstp'] = $this->homeadmin->lstProfesor();
		$data['seccion'] = 1;
		$this->load->view('layout/header');
		$this->load->view('admin/admin', $data);
		$this->load->view('layout/footer');
	}
	
	public function addUser()
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
			$this->form_validation->set_rules('estado', 'Estado', 'required');
			$this->form_validation->set_rules('rol', 'Rol', 'required');

			$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
  															<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '
  														  </div>');

			if ($this->form_validation->run() == true) 
			{
				$this->homeadmin->addUser();
			}		
		}
		$this->load->view('layout/header');
		$this->load->view('admin/usuario/add');
		$this->load->view('layout/footer');
	}

	public function lstUser($no_identificacion)
	{
		$data['lstu'] = $this->homeadmin->lstUser($no_identificacion);
		$this->load->view('layout/header');
		$this->load->view('admin/usuario/lst', $data);
		$this->load->view('layout/footer');
	}

	public function updUser($no_identificacion)
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
			$this->form_validation->set_rules('estado', 'Estado', 'required');
			$this->form_validation->set_rules('rol', 'Rol', 'required');

			$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
  															<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '
  														  </div>');

			if ($this->form_validation->run() == true) 
			{
				$this->homeadmin->updUser($no_identificacion);
			}			
		}

		$data['lstu'] = $this->homeadmin->lstUser($no_identificacion);
		$this->load->view('layout/header');
		$this->load->view('admin/usuario/upd', $data);
		$this->load->view('layout/footer');
	}

	public function dltUser($no_identificacion)
	{
		$this->homeadmin->dltUser($no_identificacion);
	}

	/*=====================================================================================================================================================================*/
	/*=====================================================================================================================================================================*/
	/*=====================================================================================================================================================================*/

	

	
	/*=====================================================================================================================================================================*/
	/*======================================================= MATERIAS ====================================================================================================*/
	/*=====================================================================================================================================================================*/


	public function materia()	
	{
		//$data['materia'] = $this->homeadmin->lstMp();
		$data['primaria'] 	= $this->materias->lstMp();
		$data['secundaria'] = $this->materias->lstMs();
		$data['media'] 		= $this->materias->lstMm();
		$this->load->view('layout/header');
		$this->load->view('admin/materia/materia', $data);
		$this->load->view('layout/footer');
	}

	public function addMateria()
	{
		if ($_POST) 
		{
			$this->form_validation->set_rules('nom-materia', 'Nombre Materia', 'required');
			$this->form_validation->set_rules('nivel', 'Nivel', 'required');

			$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
  															<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '
  														  </div>');

			if ($this->form_validation->run() == true) 
			{
				$this->materias->addMateria();
			}
		}

		$this->load->view('layout/header');
		$this->load->view('admin/materia/add');
		$this->load->view('layout/footer');
	}

	public function lstMateria($codigo_materia)
	{
		$data['lstm'] = $this->materias->lstMateria($codigo_materia);
		$this->load->view('layout/header');
		$this->load->view('admin/materia/lst', $data);
		$this->load->view('layout/footer');
	}

	public function updMateria($codigo_materia)
	{
		if ($_POST) 
		{
			
			$this->form_validation->set_rules('nom-materia', 'Nombre Materia', 'required');
			$this->form_validation->set_rules('nivel', 'Nivel', 'required');

			$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
	  															<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '
	  													  </div>');

				if ($this->form_validation->run() == true) 
				{
					$this->materias->updMateria($codigo_materia);
				}			
		}

		$data['lstm'] = $this->materias->lstMateria($codigo_materia);
		$this->load->view('layout/header');
		$this->load->view('admin/materia/upd', $data);
		$this->load->view('layout/footer');
	}

	public function dltMateria($codigo_materia)
	{
		$this->materias->dltMateria($codigo_materia);
	}

	/*=====================================================================================================================================================================*/
	/*=====================================================================================================================================================================*/
	/*=====================================================================================================================================================================*/

	/*=====================================================================================================================================================================*/
	/*========================================================= GRUPOS ======================================================================================================*/
	/*=====================================================================================================================================================================*/	

	public function grupo()	
	{
		//$data['materia'] = $this->homeadmin->lstMp();
		$data['primaria'] 	= $this->grupos->lstGp();
		$data['secundaria'] = $this->grupos->lstGs();
		$data['media'] 		= $this->grupos->lstGm();
		$this->load->view('layout/header');
		$this->load->view('admin/grupos/grupo', $data);
		$this->load->view('layout/footer');
	}

	public function addGrupo()
	{
		if ($_POST) 
		{
			$this->form_validation->set_rules('nivel', 'Nivel', 'required');
			$this->form_validation->set_rules('grupo', 'Nombre Grupo', 'required');
			$this->form_validation->set_rules('cupo', 'Cupo', 'required|is_numeric');

			$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
  															<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '
  														  </div>');

			if ($this->form_validation->run() == true) 
			{
				$this->grupos->addGrupo();
			}
		}

		$this->load->view('layout/header');
		$this->load->view('admin/grupos/add');
		$this->load->view('layout/footer');
	}

	public function lstGrupo($codigo_grupo)
	{
		$data['lstg'] = $this->grupos->lstGrupo($codigo_grupo);
		$this->load->view('layout/header');
		$this->load->view('admin/grupos/lst', $data);
		$this->load->view('layout/footer');
	}

	public function updGrupo($codigo_grupo)
	{
		if ($_POST) 
		{
			
			$this->form_validation->set_rules('nivel', 'Nivel', 'required');
			$this->form_validation->set_rules('grupo', 'Nombre Grupo', 'required');
			$this->form_validation->set_rules('cupo', 'Cupo', 'required|is_numeric');

			$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
	  															<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '
	  													  </div>');

				if ($this->form_validation->run() == true) 
				{
					$this->grupos->updGrupo($codigo_grupo);
				}			
		}

		$data['lstg'] = $this->grupos->lstGrupo($codigo_grupo);
		$this->load->view('layout/header');
		$this->load->view('admin/grupos/upd', $data);
		$this->load->view('layout/footer');
	}

	public function dltGrupo($codigo_grupo)
	{
		$this->grupos->dltGrupo($codigo_grupo);
	}

	/*=====================================================================================================================================================================*/
	/*=====================================================================================================================================================================*/
	/*=====================================================================================================================================================================*/

}

	