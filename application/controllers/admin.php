<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();	
		$this->load->model('homeadmin');
		$this->load->model('materias');
		$this->load->model('grupos');
		$this->load->model('horarios');
		$this->removeCache();
	}

/*=====================================================================================================================================================================*/
/*======================================================= USUARIOS ====================================================================================================*/
/*=====================================================================================================================================================================*/

	public function admins()	
	{
		$config['base_url'] 	  = base_url().'Admin';
		$config['total_rows'] 	  = $this->db->where('rol', 'ADMIN')->count_all_results('usuarios');
		$config['per_page'] 	  = '2';
		$config['full_tag_open']  = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';

		$this->pagination->initialize($config);
	
		$data['lsta'] = $this->homeadmin->lstAdmin();
		$this->load->view('layout/header');
		$this->load->view('admin/admin', $data);
		$this->load->view('layout/footer');
	}

	public function job()
	{
		$config2['base_url'] 	  = base_url().'Admin';
		$config2['total_rows'] 	  = $this->db->where('rol', 'EMPLEADO')->count_all_results('usuarios');
		$config2['per_page'] 	  = '2';
		$config2['full_tag_open']  = '<ul class="pagination">';
		$config2['full_tag_close'] = '</ul>';
		$config2['cur_tag_open'] = '<li class="active"><a href="">';
		$config2['cur_tag_close'] = '</a></li>';
		$config2['num_tag_open'] = '<li>';
		$config2['num_tag_close'] = '</li>';

		$config2['first_tag_open'] = '<li>';
		$config2['first_tag_close'] = '</li>';
		$config2['last_tag_open'] = '<li>';
		$config2['last_tag_close'] = '</li>';
		$config2['next_tag_open'] = '<li>';
		$config2['next_tag_close'] = '</li>';
		$config2['prev_tag_open'] = '<li>';
		$config2['prev_tag_close'] = '</li>';

		$this->pagination->initialize($config2);

		$data['lste'] = $this->homeadmin->lstEmpleado();
		var_dump($data['lste']);
		$this->load->view('layout/header');
		$this->load->view('admin/admin', $data);
		$this->load->view('layout/footer');
	}

	public function teach()
	{
		$config3['base_url'] 	  = base_url().'Admin';
		$config3['total_rows'] 	  = $this->db->where('rol', 'PROFESOR')->count_all_results('usuarios');
		$config3['per_page'] 	  = '2';
		$config3['full_tag_open']  = '<ul class="pagination">';
		$config3['full_tag_close'] = '</ul>';
		$config3['cur_tag_open'] = '<li class="active"><a href="">';
		$config3['cur_tag_close'] = '</a></li>';
		$config3['num_tag_open'] = '<li>';
		$config3['num_tag_close'] = '</li>';

		$config3['first_tag_open'] = '<li>';
		$config3['first_tag_close'] = '</li>';
		$config3['last_tag_open'] = '<li>';
		$config3['last_tag_close'] = '</li>';
		$config3['next_tag_open'] = '<li>';
		$config3['next_tag_close'] = '</li>';
		$config3['prev_tag_open'] = '<li>';
		$config3['prev_tag_close'] = '</li>';

		$this->pagination->initialize($config3);

		$data['lstp'] = $this->homeadmin->lstProfesor();
		$this->load->view('layout/header');
		$this->load->view('admin/admin', $data);
		$this->load->view('layout/footer');
	}

	public function index()
	{
		$data['lsta'] = $this->homeadmin->lstAdmin();
		$data['lste'] = $this->homeadmin->lstEmpleado();
		$data['lstp'] = $this->homeadmin->lstProfesor();
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
/*========================================================= GRUPOS ====================================================================================================*/
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
			$this->form_validation->set_rules('grupo', 'Grupo', 'required');
			$this->form_validation->set_rules('nombre', 'Nombre', 'required');
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
			$this->form_validation->set_rules('nombre', 'Nombre', 'required');
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

/*=====================================================================================================================================================================*/
/*========================================================= HORARIOS ====================================================================================================*/
/*=====================================================================================================================================================================*/	

	public function horario()	
	{
		//$data['materia'] = $this->homeadmin->lstMp();		
		$data['lstHm'] 	= $this->horarios->lstHm();
		$data['lstHt'] 	= $this->horarios->lstHt();
		$this->load->view('layout/header');
		$this->load->view('admin/horario/horario', $data);
		$this->load->view('layout/footer');
	}

	public function addHorario()
	{
		if ($_POST) 
		{
			$this->form_validation->set_rules('hora-inicio', 'Hora Inicio', 'required');
			$this->form_validation->set_rules('hora-fin', 'Hora Fin', 'required');
			$this->form_validation->set_rules('jornada', 'Jornada', 'required');

			$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
  															<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '
  														  </div>');

			if ($this->form_validation->run() == true) 
			{
				$this->horarios->addHorario();
			}
		}

		$this->load->view('layout/header');
		$this->load->view('admin/horario/add');
		$this->load->view('layout/footer');
	}

	public function lstHorario($codigo_grupo)
	{
		$data['h'] 	= $this->horarios->lstHorario($codigo_grupo);
		$this->load->view('layout/header');
		$this->load->view('admin/horario/lst', $data);
		$this->load->view('layout/footer');
	}

	public function updHorario($codigo_horario)
	{
		if ($_POST) 
		{
			
			$this->form_validation->set_rules('hora-inicio', 'Hora Inicio', 'required');
			$this->form_validation->set_rules('hora-fin', 'Hora Fin', 'required');
			$this->form_validation->set_rules('jornada', 'Jornada', 'required');

			$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
	  															<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '
	  													  </div>');

				if ($this->form_validation->run() == true) 
				{
					$this->horarios->updHorario($codigo_horario);
				}			
		}

		$data['h'] 	= $this->horarios->lstHorario($codigo_horario);
		$this->load->view('layout/header');
		$this->load->view('admin/horario/upd', $data);
		$this->load->view('layout/footer');
	}

	public function dltHorario($codigo_horario)
	{
		$this->horarios->dltHorario($codigo_horario);
	}
/*=====================================================================================================================================================================*/
/*=====================================================================================================================================================================*/
/*=====================================================================================================================================================================*/

}

	