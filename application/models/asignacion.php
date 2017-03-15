<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Asignacion extends CI_model 
{

	var $codigo_asignacion = '';
	var $no_identificacion = '';
	var $grupo_codigo	   = '';
	var $materia_codigo    = '';
	var $horario_codigo    = '';
	var $dia 			   = '';

	public function lsta()
	{
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->join('asignaciones', 'usuarios.no_identificacion = asignaciones.no_identificacion');
		$this->db->join('grupos', 'grupos.codigo_grupo = asignaciones.grupo_codigo');
		$this->db->join('materias', 'materias.codigo_materia = asignaciones.materia_codigo');
		$this->db->join('horarios', 'horarios.codigo_horario = asignaciones.horario_codigo');

		$query = $this->db->get();
		return $query->result();
	}

	public function asigMg($codigo_asignacion)
	{
		$this->codigo_asignacion = $codigo_asignacion;

		$query1 = "SELECT * 
				   FROM asignaciones
				   INNER JOIN usuarios ON asignaciones.no_identificacion = usuarios.no_identificacion
				   INNER JOIN grupos ON asignaciones.grupo_codigo = grupos.codigo_grupo
				   INNER JOIN materias ON asignaciones.materia_codigo = materias.codigo_materia
				   INNER JOIN horarios ON asignaciones.horario_codigo = horarios.codigo_horario
				   WHERE asignaciones.codigo_asignacion = $this->codigo_asignacion;";
                   
        $query = $this->db->query($query1);
		return $query->result();
	}

	public function asig($no_identificacion)
	{
		$this->no_identificacion = $no_identificacion;

		$query1 = "SELECT * 
				   FROM asignaciones
				   INNER JOIN usuarios ON asignaciones.no_identificacion = usuarios.no_identificacion
				   INNER JOIN grupos ON asignaciones.grupo_codigo = grupos.codigo_grupo
				   INNER JOIN materias ON asignaciones.materia_codigo = materias.codigo_materia
				   INNER JOIN horarios ON asignaciones.horario_codigo = horarios.codigo_horario
				   WHERE usuarios.no_identificacion = $this->no_identificacion;";
                   
        $query = $this->db->query($query1);
		return $query->result();
	}

	/*public function contAsig($no_identificacion)
	{
		$this->no_identificacion = $no_identificacion;

		$this->db->like('no_identificacion', $this->no_identificacion);
		$this->db->from('asignaciones');
		$this->db->count_all_results(); 

		$query = $this->db->get('asignaciones');
		return $query->result;

		
	} ==================== R E V I S A R    M A Ñ A N A*/

	public function addAsig()
	{
		$this->codigo_asignacion = $this->input->post('id-asig');
		$this->no_identificacion = $this->input->post('profesor');		
		$this->grupo_codigo	   	 = $this->input->post('grupo');
		$this->materia_codigo	 = $this->input->post('materia');
		$this->horario_codigo    = $this->input->post('horario');		
		$this->dia 			   	 = $this->input->post('dia');


		if (!$this->db->insert('asignaciones', $this)) 
		{
			//echo mysql_error($query);
			echo "<script type='text/javascript'>";
			echo "alert('Problemas al adicionar la asignacion de horario!');";
			echo "</script>";
		}
		else
		{
			//echo mysql_error($query);
			echo "<script type='text/javascript'>";
			echo "alert('La asignacion de horario se adiciono con exito....!');";
			echo "window.location.replace('".base_url()."Empleado/asignacion');";
			echo "</script>";
		}
	}

	public function lstAsig($no_identificacion)
	{
		$this->no_identificacion = $no_identificacion;

		$query1 = "SELECT * 
				   FROM asignaciones
				   INNER JOIN usuarios ON asignaciones.no_identificacion = usuarios.no_identificacion
				   INNER JOIN grupos ON asignaciones.grupo_codigo = grupos.codigo_grupo
				   INNER JOIN materias ON asignaciones.materia_codigo = materias.codigo_materia
				   INNER JOIN horarios ON asignaciones.horario_codigo = horarios.codigo_horario
				   WHERE asignaciones.no_identificacion = $this->no_identificacion;";
                   
        $query = $this->db->query($query1);
		return $query->result();
	}

	public function updAsig($no_identificacion)
	{
		$this->no_identificacion = $this->input->post('profesor');
		$this->grupo_codigo	   	 = $this->input->post('grupo');
		$this->materia_codigo	 = $this->input->post('materia');
		$this->horario_codigo    = $this->input->post('horario');
		$this->dia 			   	 = $this->input->post('dia');

		$this->db->where('no_identificacion', $this->no_identificacion);

		if (!$this->db->update('asignaciones', $this)) 
		{
			echo "<script type='text/javascript'>";
			echo "alert('Problemas al modificar la asignacion de horario!');";
			echo "</script>";
		}
		else
		{
			echo "<script type='text/javascript'>";
			echo "alert('La asignacion de horario se modifico con exito....!');";
			echo "window.location.replace('".base_url()."Empleado/asignacion');";
			echo "</script>";
		}
	}

	public function dltAsig($codigo_asignacion)
	{
		$this->codigo_asignacion = $codigo_asignacion;
		$this->db->where('codigo_asignacion', $this->codigo_asignacion);

		if (!$this->db->delete('asignaciones')) 
		{
			echo "<script type='text/javascript'>";
			echo "alert('Problemas al modificar la asignacion de horario!');";
			echo "</script>";
		}
		else
		{
			echo "<script type='text/javascript'>";
			echo "alert('La asignacion de horario se modifico con exito....!');";
			echo "window.location.replace('".base_url()."Empleado/asignacion#asig');";
			echo "</script>";
		}
	}
}