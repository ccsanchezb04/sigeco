<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Horarios extends CI_model 
{
	var $codigo_horario = '';
	var $hora_inicio	= '';
	var $hora_fin		= '';
	var $jornada		= '';

	public function lsth()
	{
		$query = $this->db->get('horarios');
		return $query->result();
	}

	public function lstHm()
	{
		$query = $this->db->get_where('horarios', array('jornada' => 'MANANA'));
		return $query->result();
	}

	public function lstHt()
	{
		$query = $this->db->get_where('horarios', array('jornada' => 'TARDE'));
		return $query->result();
	}

	public function addHorario()
	{
		$this->codigo_horario = $this->input->post('id-horario');
		$this->hora_inicio	  = $this->input->post('hora-inicio');
		$this->hora_fin		  = $this->input->post('hora-fin');		
		$this->jornada		  = $this->input->post('jornada');


		if (!$this->db->insert('horarios', $this)) 
		{
			//echo mysql_error($query);
			echo "<script type='text/javascript'>";
			echo "alert('Problemas al adicionar el horario!');";
			echo "</script>";
		}
		else
		{
			//echo mysql_error($query);
			echo "<script type='text/javascript'>";
			echo "alert('El horario se adiciono con exito....!');";
			echo "window.location.replace('".base_url()."Admin/horario');";
			echo "</script>";
		}
	}

	public function lstHorario($codigo_horario)
	{
		$this->codigo_horario = $codigo_horario;

		$query = $this->db->get_where('horarios', array('codigo_horario' => $this->codigo_horario));
		return $query->result();
	}

	public function updHorario($codigo_horario)
	{
		$this->codigo_horario = $this->input->post('id-horario');
		$this->hora_inicio	  = $this->input->post('hora-inicio');
		$this->hora_fin		  = $this->input->post('hora-fin');			
		$this->jornada		  = $this->input->post('jornada');

		$this->db->where('codigo_horario', $this->codigo_horario);

		if (!$this->db->update('horarios', $this)) 
		{
			echo "<script type='text/javascript'>";
			echo "alert('Problemas al modificar el horario!');";
			echo "</script>";
		}
		else
		{
			echo "<script type='text/javascript'>";
			echo "alert('El horario se modifico con exito....!');";
			echo "window.location.replace('".base_url()."Admin/horario');";
			echo "</script>";
		}
	}

	public function dltHorario($codigo_horario)
	{
		$this->codigo_horario = $codigo_horario;
		$this->db->where('codigo_horario', $this->codigo_horario);

		if (!$this->db->delete('horarios')) 
		{
			echo "<script type='text/javascript'>";
			echo "alert('Problemas al eliminar el horario!');";
			echo "</script>";
		}
		else
		{
			echo "<script type='text/javascript'>";
			echo "alert('El horario se elimino con exito....!');";
			echo "window.location.replace('".base_url()."Admin/horario');";
			echo "</script>";
		}
	}
}