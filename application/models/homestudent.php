<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homestudent extends CI_model 
{
	//=====================================================================
	//======================== VARIABLES USUARIO ==========================
	/*var $codigo_calificacion = '';
	var $primer_periodo		 = '';
	var $segundo_periodo   	 = '';
	var $tercer_periodo		 = '';
	var $cuarto_periodo	     = '';
	var $nota_final		     = '';
	var $asignacion_codigo 	 = '';
	var $no_identificacion	 = '';*/
	//=====================================================================
	//=====================================================================
	
	/*=====================================================================================================================================================================*/
	/*======================================================= CALIFICACIONES ====================================================================================================*/
	/*=====================================================================================================================================================================*/
	public function lstCalifAlmn()
	{
		$this->no_identificacion = $this->session->userdata('idUser');

		$query1 = "SELECT * 
				   FROM calificaciones
				   INNER JOIN usuarios ON calificaciones.no_identificacion = usuarios.no_identificacion
				   INNER JOIN asignaciones ON calificaciones.asignacion_codigo = asignaciones.codigo_asignacion				   
				   WHERE usuarios.no_identificacion = '$this->no_identificacion';";
                   
        $query = $this->db->query($query1);
		return $query->result();
	}

	/*public function addCalif($nota1, $nota2, $nota3, $nota4, $asignacion_codigo, $id)
	{
		$this->primer_periodo	   = $nota1;
		$this->segundo_periodo	   = $nota2;
		$this->tercer_periodo	   = $nota3;	
		$this->cuarto_periodo	   = $nota4;
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

	public function lstCalif($no_identificacion)
	{
		$this->no_identificacion = $no_identificacion;

		$query = $this->db->get_where('usuarios', array('no_identificacion' => $this->no_identificacion));
		return $query->result();
	}

	public function updCalif($nota1, $nota2, $nota3, $nota4, $asignacion_codigo, $id)
	{
		$this->no_identificacion = $id;
		
		$mod = array(
               'primer_periodo' => $nota1,
               'segundo_periodo' => $nota2,
               'tercer_periodo' => $nota3,
               'cuarto_periodo' => $nota4,
               'asignacion_codigo' => $asignacion_codigo,
               'no_identificacion' => $id
        );

		$this->db->where('no_identificacion', $this->no_identificacion);
		

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
	}*/	
}
	/*=====================================================================================================================================================================*/
	/*=====================================================================================================================================================================*/
	/*=====================================================================================================================================================================*/


	/*=====================================================================================================================================================================*/
	/*======================================================= MATERIAS ====================================================================================================*/
	/*=====================================================================================================================================================================*/
