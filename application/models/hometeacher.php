<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hometeacher extends CI_model 
{
	//=====================================================================
	//======================== VARIABLES USUARIO ==========================
	var $codigo_calificacion = '';
	var $primer_periodo		 = '';
	var $segundo_periodo   	 = '';
	var $tercer_periodo		 = '';
	var $cuarto_periodo	     = '';
	var $nota_final		     = '';
	var $asignacion_codigo 	 = '';
	var $no_identificacion	 = '';
	//=====================================================================
	//=====================================================================
	
	/*=====================================================================================================================================================================*/
	/*======================================================= CALIFICACIONES ====================================================================================================*/
	/*=====================================================================================================================================================================*/
	public function lstMg()
	{
		$this->no_identificacion = $this->session->userdata('idUser');

		$query1 = "SELECT * 
				   FROM asignaciones
				   INNER JOIN usuarios ON asignaciones.no_identificacion = usuarios.no_identificacion
				   INNER JOIN grupos ON asignaciones.grupo_codigo = grupos.codigo_grupo
				   INNER JOIN materias ON asignaciones.materia_codigo = materias.codigo_materia
				   INNER JOIN horarios ON asignaciones.horario_codigo = horarios.codigo_horario
				   WHERE usuarios.no_identificacion = '$this->no_identificacion';";
                   
        $query = $this->db->query($query1);
		return $query->result();
	}

	public function addCalif($nota1, $nota2, $nota3, $nota4, $notaF, $asignacion_codigo, $id)
	{
		$this->primer_periodo	   = $nota1;
		$this->segundo_periodo	   = $nota2;
		$this->tercer_periodo	   = $nota3;	
		$this->cuarto_periodo	   = $nota4;
		$this->nota_final		   = $notaF;
		$this->asignacion_codigo   = $asignacion_codigo;
		$this->no_identificacion   = $id;
		
			

		if (!$this->db->insert('calificaciones', $this)) 
		{
			//echo mysql_error($query);
			echo "<script type='text/javascript'>";
			echo "alert('Problemas al adicionar las calificaciones del grupo!');";
			echo "</script>";
		}
		else
		{
			//echo mysql_error($query);
			echo "<script type='text/javascript'>";
			//echo "alert('Las Calificaciones del grupo se adicionaron con exito....!');";
			//echo "window.location.replace('".base_url()."Admin');";
			echo "</script>";
		}
	}

	public function lstCalif($codigo_asignacion)
	{
		$this->asignacion_codigo = $codigo_asignacion;

		$query1 = "SELECT * 
				   FROM calificaciones
				   INNER JOIN usuarios ON calificaciones.no_identificacion = usuarios.no_identificacion
				   INNER JOIN asignaciones ON calificaciones.asignacion_codigo = asignaciones.codigo_asignacion				   
				   WHERE asignaciones.codigo_asignacion = $this->asignacion_codigo;";
                   
        $query = $this->db->query($query1);
		return $query->result();
	}

	public function updCalif($nota1, $nota2, $nota3, $nota4, $notaF, $asignacion_codigo, $id)
	{
		$this->no_identificacion = $id;
		$this->asignacion_codigo = $asignacion_codigo;
		
		$mod = array(
               'primer_periodo' => $nota1,
               'segundo_periodo' => $nota2,
               'tercer_periodo' => $nota3,
               'cuarto_periodo' => $nota4,
               'nota_final' => $notaF,
               'asignacion_codigo' => $asignacion_codigo,               
               'no_identificacion' => $id
        );
		//var_dump($mod);
		$this->db->where('no_identificacion', $this->no_identificacion);
		$this->db->where('asignacion_codigo', $this->asignacion_codigo);

		if (!$this->db->update('calificaciones', $mod)) 
		{
			echo "<script type='text/javascript'>";
			echo "alert('Problemas al Modificar el Usuario!');";
			echo "</script>";
		}
		else
		{
			echo "<script type='text/javascript'>";
			//echo "alert('El usuario se modifico con exito....!');";
			//echo "window.location.replace('".base_url()."Admin');";
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
