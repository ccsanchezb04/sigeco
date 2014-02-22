<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homeemployed extends CI_model 
{
	var $no_identificacion   = '';
	var $nombres 			 = '';
	var $apellidos 		   	 = '';
	var $password 	 		 = '';
	var $direccion 		     = '';
	var $tel_fijo 		     = '';
	var $tel_movil 		  	 = '';
	var $correo_electronico  = '';
	var $rol				 = '';
	var $grupo				 = '';
	var $fecha_inscripcion	 = '';
	var $nombres_acudiente   = '';
	var $apellidos_acudiente = '';
	var $tel_movil_acudiente = '';
	var $correo_acudiente 	 = '';
	var $nombres_padre 	   	 = '';
	var $apellidos_padre 	 = '';
	var $tel_movil_padre 	 = '';
	var $nombres_madre 	   	 = '';
	var $apellidos_madre 	 = '';
	var $tel_movil_madre 	 = '';
	var $estado 		     = '';
	var $estado_insc	     = '';
	var $am_codigo 	   		 = '';

	public function index()
	{
		$query = $this->db->get('usuarios');
		return $query->result();
	}

	public function addInsc()
	{
		$this->no_identificacion   = $this->input->post('id');
		$this->nombres 			   = $this->input->post('nombres');
		$this->apellidos 		   = $this->input->post('apellidos');
		$this->password 		   = $this->input->post('password');
		$this->direccion 		   = $this->input->post('direccion');
		$this->tel_fijo 		   = $this->input->post('telfijo');
		$this->tel_movil 		   = $this->input->post('telmovil');
		$this->correo_electronico  = $this->input->post('correo');
		$this->rol				   = $this->input->post('rol');
		$this->estado 		       = $this->input->post('estado');
		$this->estado_insc	       = $this->input->post('estado-insc');
		$this->grupo			   = $this->input->post('grupo');
		$this->fecha_inscripcion   = $this->input->post('fecha-inscripcion');			
		$this->nombres_acudiente   = $this->input->post('nom-acudiente');
		$this->apellidos_acudiente = $this->input->post('ape-acudiente');
		$this->tel_movil_acudiente = $this->input->post('telmovil-acudiente');		
		$this->correo_acudiente	   = $this->input->post('correo-acudiente');
		$this->nombres_padre 	   = $this->input->post('nom-padre');
		$this->apellidos_padre 	   = $this->input->post('ape-padre');
		$this->tel_movil_padre 	   = $this->input->post('telmovil-padre');		
		$this->nombres_madre 	   = $this->input->post('nom-madre');
		$this->apellidos_madre 	   = $this->input->post('ape-madre');
		$this->tel_movil_madre 	   = $this->input->post('telmovil-madre');		
		$this->am_codigo 	       = $this->input->post('am_codigo');


		if (!$this->db->insert('usuarios', $this)) 
		{
			//echo mysql_error($query);
			$this->db->set('no_identificacion', $this->no_identificacion);
			$this->db->set('estado', $this->estado_insc);
			$this->db->set('fecha_inscripcion', $this->fecha_inscripcion);
			$this->db->insert('inscripciones');
			echo "<script type='text/javascript'>";
			echo "alert('Problemas al adicionar el estudiante!');";
			echo "</script>";
		}
		else
		{
			//echo mysql_error($query);
			echo "<script type='text/javascript'>";
			echo "alert('El estudiante se adiciono con exito....!');";
			echo "window.location.replace('".base_url()."Empleado');";
			echo "</script>";
		}
	}

	/* =========================================================================== */
	/* ================================ PRIMEROS ================================= */
	public function lst1a()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '1-A'));
		return $query->result();
	}

	public function lst1b()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '1-B'));
		return $query->result();
	}

	public function lst1c()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '1-C'));
		return $query->result();
	}

	public function lst1d()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '1-D'));
		return $query->result();
	}
	/* =========================================================================== */
	/* =========================================================================== */

	/* =========================================================================== */
	/* ================================ SEGUNDOS ================================= */
	public function lst2a()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '2-A'));
		return $query->result();
	}

	public function lst2b()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '2-B'));
		return $query->result();
	}

	public function lst2c()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '2-C'));
		return $query->result();
	}

	public function lst2d()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '2-D'));
		return $query->result();
	}
	/* =========================================================================== */
	/* =========================================================================== */

	/* =========================================================================== */
	/* ================================ TERCEROS ================================= */
	public function lst3a()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '3-A'));
		return $query->result();
	}

	public function lst3b()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '3-B'));
		return $query->result();
	}

	public function lst3c()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '3-C'));
		return $query->result();
	}

	public function lst3d()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '3-D'));
		return $query->result();
	}
	/* =========================================================================== */
	/* =========================================================================== */

	/* =========================================================================== */
	/* ================================= CUARTOS ================================= */
	public function lst4a()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '4-A'));
		return $query->result();
	}

	public function lst4b()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '4-B'));
		return $query->result();
	}

	public function lst4c()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '4-C'));
		return $query->result();
	}

	public function lst4d()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '4-D'));
		return $query->result();
	}
	/* =========================================================================== */
	/* =========================================================================== */

	/* =========================================================================== */
	/* ================================ QUINTOS ================================= */
	public function lst5a()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '5-A'));
		return $query->result();
	}

	public function lst5b()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '5-B'));
		return $query->result();
	}

	public function lst5c()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '5-C'));
		return $query->result();
	}

	public function lst5d()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '5-D'));
		return $query->result();
	}
	/* =========================================================================== */
	/* =========================================================================== */

	/* =========================================================================== */
	/* ================================= SEXTOS ================================== */
	public function lst6a()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '6-A'));
		return $query->result();
	}

	public function lst6b()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '6-B'));
		return $query->result();
	}

	public function lst6c()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '6-C'));
		return $query->result();
	}

	public function lst6d()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '6-D'));
		return $query->result();
	}
	/* =========================================================================== */
	/* =========================================================================== */

	/* =========================================================================== */
	/* ================================ SEPTIMOS ================================= */
	public function lst7a()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '7-A'));
		return $query->result();
	}

	public function lst7b()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '7-B'));
		return $query->result();
	}

	public function lst7c()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '7-C'));
		return $query->result();
	}

	public function lst7d()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '7-D'));
		return $query->result();
	}
	/* =========================================================================== */
	/* =========================================================================== */

	/* =========================================================================== */
	/* ================================= OCTAVOS ================================= */
	public function lst8a()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '8-A'));
		return $query->result();
	}

	public function lst8b()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '8-B'));
		return $query->result();
	}

	public function lst8c()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '8-C'));
		return $query->result();
	}

	public function lst8d()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '8-D'));
		return $query->result();
	}
	/* =========================================================================== */
	/* =========================================================================== */

	/* =========================================================================== */
	/* ================================= NOVENOS ================================= */
	public function lst9a()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '9-A'));
		return $query->result();
	}

	public function lst9b()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '9-B'));
		return $query->result();
	}

	public function lst9c()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '9-C'));
		return $query->result();
	}

	public function lst9d()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '9-D'));
		return $query->result();
	}
	/* =========================================================================== */
	/* =========================================================================== */

	/* =========================================================================== */
	/* ================================= DECIMOS ================================= */
	public function lst10a()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '10-A'));
		return $query->result();
	}

	public function lst10b()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '10-B'));
		return $query->result();
	}

	public function lst10c()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '10-C'));
		return $query->result();
	}

	public function lst10d()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '10-D'));
		return $query->result();
	}
	/* =========================================================================== */
	/* =========================================================================== */

	/* =========================================================================== */
	/* ================================ UNDECIMOS ================================ */
	public function lst11a()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '11-A'));
		return $query->result();
	}

	public function lst11b()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '11-B'));
		return $query->result();
	}

	public function lst11c()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '11-C'));
		return $query->result();
	}

	public function lst11d()
	{
		$query = $this->db->get_where('inscripciones', array('grupo' => '11-D'));
		return $query->result();
	}
	/* =========================================================================== */
	/* =========================================================================== */
}