<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homeadmin extends CI_model 
{
	//=====================================================================
	//======================== VARIABLES USUARIO ==========================
	var $no_identificacion   = '';
	var $nombres 			 = '';
	var $apellidos 		   	 = '';
	var $password 	 		 = '';
	var $direccion 		     = '';
	var $tel_fijo 		     = '';
	var $tel_movil 		  	 = '';
	var $correo_electronico  = '';
	var $rol				 = '';
	var $nombres_acudiente   = '';
	var $apellidos_acudiente = '';
	var $tel_movil_acudiente = '';
	var $nombres_padre 	   	 = '';
	var $apellidos_padre 	 = '';
	var $tel_movil_padre 	 = '';
	var $nombres_madre 	   	 = '';
	var $apellidos_madre 	 = '';
	var $tel_movil_madre 	 = '';	
	var $estado 		     = '';
	var $am_codigo 	   		 = '';
	//=====================================================================
	//=====================================================================
	
	/*=====================================================================================================================================================================*/
	/*======================================================= USUARIOS ====================================================================================================*/
	/*=====================================================================================================================================================================*/
	public function lstAdmin()
	{
		$query = $this->db->get_where('usuarios', array('rol' => 'ADMIN'));
		return $query->result();
	}

	public function lstEmpleado()
	{
		$query = $this->db->get_where('usuarios', array('rol' => 'EMPLEADO'));
		return $query->result();
	}

	public function lstProfesor()
	{
		$query = $this->db->get_where('usuarios', array('rol' => 'PROFESOR'));
		return $query->result();
	}

	public function addUser()
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
		$this->am_codigo 	       = $this->input->post('am_codigo');


		if (!$this->db->insert('usuarios', $this)) 
		{
			//echo mysql_error($query);
			echo "<script type='text/javascript'>";
			echo "alert('Problemas al Adicionar el Usuario!');";
			echo "</script>";
		}
		else
		{
			//echo mysql_error($query);
			echo "<script type='text/javascript'>";
			echo "alert('El usuario se adiciono con exito....!');";
			echo "window.location.replace('".base_url()."Admin');";
			echo "</script>";
		}
	}

	public function lstUser($no_identificacion)
	{
		$this->no_identificacion = $no_identificacion;

		$query = $this->db->get_where('usuarios', array('no_identificacion' => $this->no_identificacion));
		return $query->result();
	}

	public function updUser($no_identificacion)
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
		$this->am_codigo 	       = $this->input->post('am_codigo');

		$this->db->where('no_identificacion', $this->no_identificacion);

		if (!$this->db->update('usuarios', $this)) 
		{
			echo "<script type='text/javascript'>";
			echo "alert('Problemas al Modificar el Usuario!');";
			echo "</script>";
		}
		else
		{
			echo "<script type='text/javascript'>";
			echo "alert('El usuario se modifico con exito....!');";
			echo "window.location.replace('".base_url()."Admin');";
			echo "</script>";
		}
	}

	public function dltUser($no_identificacion)
	{
		$this->no_identificacion = $no_identificacion;
		$this->db->where('no_identificacion', $this->no_identificacion);

		if (!$this->db->delete('usuarios')) 
		{
			echo "<script type='text/javascript'>";
			echo "alert('Problemas al Eliminar el Usuario!');";
			echo "</script>";
		}
		else
		{
			echo "<script type='text/javascript'>";
			echo "alert('El usuario se elimino con exito....!');";
			echo "window.location.replace('".base_url()."Admin');";
			echo "</script>";
		}
	}
	
}
	/*=====================================================================================================================================================================*/
	/*=====================================================================================================================================================================*/
	/*=====================================================================================================================================================================*/


	/*=====================================================================================================================================================================*/
	/*======================================================= MATERIAS ====================================================================================================*/
	/*=====================================================================================================================================================================*/
