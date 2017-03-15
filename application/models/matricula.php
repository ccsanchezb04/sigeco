<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Matricula extends CI_model 
{
	var $no_identificacion  = "";
	var $codigo_inscripcion = "";
	var $grupo				= "";
	var $estado 			= "";
	var $codigo_matricula	= "";
	var $fecha_inscripcion  = "";


	public function index()
	{
		$query = $this->db->get('usuarios');
		return $query->result();
	}

/* =========================================================================== */
	/* ================================ PRIMEROS ================================= */
	public function lst1a()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '1-A'));
		return $query->result();
	}

	public function lst1b()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '1-B'));
		return $query->result();
	}

	public function lst1c()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '1-C'));
		return $query->result();
	}

	public function lst1d()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '1-D'));
		return $query->result();
	}
	/* =========================================================================== */
/* =========================================================================== */

/* =========================================================================== */
	/* ================================ SEGUNDOS ================================= */
	public function lst2a()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '2-A'));
		return $query->result();
	}

	public function lst2b()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '2-B'));
		return $query->result();
	}

	public function lst2c()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '2-C'));
		return $query->result();
	}

	public function lst2d()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '2-D'));
		return $query->result();
	}
	/* =========================================================================== */
/* =========================================================================== */

/* =========================================================================== */
	/* ================================ TERCEROS ================================= */
	public function lst3a()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '3-A'));
		return $query->result();
	}

	public function lst3b()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '3-B'));
		return $query->result();
	}

	public function lst3c()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '3-C'));
		return $query->result();
	}

	public function lst3d()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '3-D'));
		return $query->result();
	}
	/* =========================================================================== */
/* =========================================================================== */

/* =========================================================================== */
	/* ================================= CUARTOS ================================= */
	public function lst4a()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '4-A'));
		return $query->result();
	}

	public function lst4b()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '4-B'));
		return $query->result();
	}

	public function lst4c()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '4-C'));
		return $query->result();
	}

	public function lst4d()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '4-D'));
		return $query->result();
	}
	/* =========================================================================== */
	/* =========================================================================== */

/* =========================================================================== */
	/* ================================ QUINTOS ================================= */
	public function lst5a()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '5-A'));
		return $query->result();
	}

	public function lst5b()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '5-B'));
		return $query->result();
	}

	public function lst5c()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '5-C'));
		return $query->result();
	}

	public function lst5d()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '5-D'));
		return $query->result();
	}
	/* =========================================================================== */
/* =========================================================================== */

/* =========================================================================== */
	/* ================================= SEXTOS ================================== */
	public function lst6a()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '6-A'));
		return $query->result();
	}

	public function lst6b()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '6-B'));
		return $query->result();
	}

	public function lst6c()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '6-C'));
		return $query->result();
	}

	public function lst6d()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '6-D'));
		return $query->result();
	}
	/* =========================================================================== */
/* =========================================================================== */

/* =========================================================================== */
	/* ================================ SEPTIMOS ================================= */
	public function lst7a()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '7-A'));
		return $query->result();
	}

	public function lst7b()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '7-B'));
		return $query->result();
	}

	public function lst7c()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '7-C'));
		return $query->result();
	}

	public function lst7d()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '7-D'));
		return $query->result();
	}
	/* =========================================================================== */
/* =========================================================================== */

/* =========================================================================== */
	/* ================================= OCTAVOS ================================= */
	public function lst8a()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '8-A'));
		return $query->result();
	}

	public function lst8b()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '8-B'));
		return $query->result();
	}

	public function lst8c()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '8-C'));
		return $query->result();
	}

	public function lst8d()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '8-D'));
		return $query->result();
	}
	/* =========================================================================== */
/* =========================================================================== */

/* =========================================================================== */
	/* ================================= NOVENOS ================================= */
	public function lst9a()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '9-A'));
		return $query->result();
	}

	public function lst9b()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '9-B'));
		return $query->result();
	}

	public function lst9c()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '9-C'));
		return $query->result();
	}

	public function lst9d()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '9-D'));
		return $query->result();
	}
	/* =========================================================================== */
/* =========================================================================== */

/* =========================================================================== */
	/* ================================= DECIMOS ================================= */
	public function lst10a()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '10-A'));
		return $query->result();
	}

	public function lst10b()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '10-B'));
		return $query->result();
	}

	public function lst10c()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '10-C'));
		return $query->result();
	}

	public function lst10d()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '10-D'));
		return $query->result();
	}
	/* =========================================================================== */
/* =========================================================================== */

/* =========================================================================== */
	/* ================================ UNDECIMOS ================================ */
	public function lst11a()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '11-A'));
		return $query->result();
	}

	public function lst11b()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '11-B'));
		return $query->result();
	}

	public function lst11c()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '11-C'));
		return $query->result();
	}

	public function lst11d()
	{
		$query = $this->db->get_where('matriculas', array('grupo' => '11-D'));
		return $query->result();
	}
	/* =========================================================================== */
/* =========================================================================== */

	public function addMat($no_identificacion)
	{
		$this->db->like('grupo', $this->input->post('grupo'));
		$this->db->from('matriculas');

		$cont = $this->db->count_all_results();

		if ($cont < 35) 
		{
			$this->no_identificacion = $no_identificacion;		

			$mat = array(   			
	   			'codigo_matricula'	  => $this->input->post('id-matricula'),
	   			'fecha_matricula'	  => $this->input->post('fecha-matricula'),
	   			'no_identificacion'	  => $this->input->post('id'),
	   			'inscripcion_codigo'  => $this->input->post('id-insc'),
	   			'estado'	          => $this->input->post('estado'),
	   			'grupo' 			  => $this->input->post('grupo')
			);

			
		
			$insc = array(			
				'estado'		 	 => $this->input->post('estado') 
			);

			if (!$this->db->insert('matriculas', $mat)) 
			{
				//echo mysql_error($query);			
				echo "<script type='text/javascript'>";
				echo "alert('Problemas al adicionar el estudiante!');";				
				echo "</script>";
			}
			else
			{
				$this->db->where('no_identificacion', $this->no_identificacion);
				$this->db->update('inscripciones', $insc);
				echo "<script type='text/javascript'>";
				echo "alert('La matricula del estudiante se adiciono con exito....!".$cont."');";
				echo "window.location.replace('".base_url()."Empleado/Matricula');";				
				echo "</script>";
			}
		}
		else
		{
			echo "<script type='text/javascript'>";
			echo "alert('Cupo maximo de estudiantes');";
			echo "window.location.replace('".base_url()."Empleado/Matricula');";
			echo "</script>";
		}
	}

	public function lstInsc($no_identificacion)
	{
		$this->no_identificacion = $no_identificacion;

		$query = $this->db->get_where('inscripciones', array('no_identificacion' => $this->no_identificacion));
		return $query->result();
	}

	public function lstMat($no_identificacion)
	{
		$this->no_identificacion = $no_identificacion;

		$query = $this->db->get_where('matriculas', array('no_identificacion' => $this->no_identificacion));
		return $query->result();
	}

	public function updMat($no_identificacion)
	{	
		$this->no_identificacion = $no_identificacion;		

		$mat = array(   			
   			// 'codigo_matricula'	  => $this->input->post('id-matricula'),
   			'fecha_matricula'	  => $this->input->post('fecha-matricula'),
   			'no_identificacion'	  => $this->input->post('id'),
   			'inscripcion_codigo'  => $this->input->post('id-insc'),
   			'estado'	          => $this->input->post('estado'),
   			'grupo' 			  => $this->input->post('grupo')
		);

		//var_dump($usu);
	
		$insc = array(			
			'estado'		 	 => $this->input->post('estado') 
		);

		$this->db->where('no_identificacion', $this->no_identificacion);

		if (!$this->db->update('matriculas', $mat)) 
		{						
			echo "<script type='text/javascript'>";
			echo "alert('Problemas al actualizar la matricula del estudiante!');";
			echo "</script>";
		}
		else
		{				
			$this->db->where('no_identificacion', $this->no_identificacion);
			$this->db->update('inscripciones', $insc);			
			echo "<script type='text/javascript'>";
			echo "alert('La matricula del estudiante se modifico con exito....!');";
			echo "window.location.replace('".base_url()."Empleado/matricula');";
			echo "</script>";
		}
	}
	
	public function dltMat($no_identificacion)
	{
		$this->no_identificacion = $no_identificacion;

		$insc = array('estado' => "INSCRITO" );

		$this->db->where('no_identificacion', $this->no_identificacion);

		if (!$this->db->delete('matriculas')) 
		{
			echo "<script type='text/javascript'>";
			echo "alert('Problemas al Eliminar el estudiante!');";
			echo "</script>";
		}
		else
		{
			$this->db->where('no_identificacion', $this->no_identificacion);
			$this->db->update('inscripciones', $insc);
			echo "<script type='text/javascript'>";
			echo "alert('La matricula del estudiante se elimino con exito....!');";
			echo "window.location.replace('".base_url()."Empleado');";
			echo "</script>";
		}
	}

	public function conAlnm($grupo)
	{
		$this->grupo = $grupo;

		$query1 = "SELECT *
		 		   FROM usuarios
		 		   INNER JOIN matriculas 
		           ON usuarios.no_identificacion = matriculas.no_identificacion
		 		   WHERE matriculas.grupo = '$this->grupo';";

		$query = $this->db->query($query1);
		return $query->result();
	}

	/*public function conDatos($grupo)
	{
		$this->grupo = $grupo;

		$query1 = 

		//echo "$query1";

		$query = $this->db->query("$query1");
		return $query1->result();
	}*/
}