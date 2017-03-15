<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_model 
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

	public function mostrar()
	{
		$query = $this->db->get('usuarios');
		return $query->result();
	}

	public function inscripcion()
	{
		$usu = array(
   			'no_identificacion'   => $this->input->post('id'),
   			'nombres' 			  => $this->input->post('nombres'),
   			'apellidos' 		  => $this->input->post('apellidos'),
   			'password' 			  => $this->input->post('password'),
   			'direccion'           => $this->input->post('direccion'),
   			'tel_fijo' 			  => $this->input->post('telfijo'),
   			'tel_movil' 		  => $this->input->post('telmovil'),
   			'correo_electronico'  => $this->input->post('correo'),
   			'rol' 				  => $this->input->post('rol'),
   			'estado' 			  => $this->input->post('estado'),
   			'nombres_acudiente'   => $this->input->post('nom-acudiente'),
   			'apellidos_acudiente' => $this->input->post('ape-acudiente'),
   			'tel_movil_acudiente' => $this->input->post('telmovil-acudiente'),
   			'correo_acudiente'	  => $this->input->post('correo-acudiente'),
   			'nombres_padre' 	  => $this->input->post('nom-padre'),
   			'apellidos_padre' 	  => $this->input->post('ape-padre'),
   			'tel_movil_padre'     => $this->input->post('telmovil-padre'),
   			'nombres_madre' 	  => $this->input->post('nom-madre'),
   			'apellidos_madre' 	  => $this->input->post('ape-madre'),
   			'tel_movil_madre' 	  => $this->input->post('telmovil-madre'),
		);
	
		$insc = array(
			'codigo_inscripcion' => $this->input->post('id-insc'),
			'no_identificacion'  => $this->input->post('id'),
			'estado'		 	 => $this->input->post('estado-insc'),
			'grupo' 			 => $this->input->post('grupo'),
			'fecha_inscripcion'  => $this->input->post('fecha-inscripcion') 
		);

		if (!$this->db->insert('usuarios', $usu)) 
		{
			//echo mysql_error($query);			
			echo "<script type='text/javascript'>";
			echo "alert('Problemas al adicionar el estudiante!');";
			echo "</script>";
		}
		else
		{
			//echo mysql_error($query);
			$this->db->insert('inscripciones', $insc);
			echo "<script type='text/javascript'>";
			echo "alert('El estudiante se adiciono con exito....!');";
			echo "window.location.replace('".base_url()."');";
			echo "</script>";
		}
	}

	public function validateUser()
	{
		$this->no_identificacion = $this->input->post('id');
		$this->password 		 = $this->input->post('password');

		$query1="SELECT * FROM usuarios WHERE `no_identificacion`=$this->no_identificacion and `password`='$this->password' limit 1";
	
		$query=$this->db->query($query1);
		// $this->db->select('no_identificacion');
		// $this->db->where('no_identificacion', $this->no_identificacion);
		// $this->db->where('password', $this->password);
		// $this->db->limit(1);
		// $this->db->from('usuarios');
		// $query = $this->db->get();
			
		
		foreach ($query->result() as $key) 
		{
			$this->session->set_userdata(array('rol'=>$key->rol,
											   'idUser'=>$key->no_identificacion));
		}
		if ($query->num_rows() > 0) 
		{
			redirect('/login', 'refresh');
		}
		else
		{
			echo "<script>";
			echo "alert('No. de Identificacion O Contraseña Incorrectos');";
			echo "window.location.replace('".base_url()."');";
			echo "</script>";
		}
		
	}
}