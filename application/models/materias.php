<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Materias extends CI_model 
{

	var $codigo_materia = '';
	var $nombre 		= '';
	var $nivel 			= '';

	public function lstMp()
	{
		$query = $this->db->get_where('materias', array('nivel' => 'PRIMARIA'));
		return $query->result();
	}

	public function lstMs()
	{
		$query = $this->db->get_where('materias', array('nivel' => 'SECUNDARIA'));
		return $query->result();
	}

	public function lstMm()
	{
		$query = $this->db->get_where('materias', array('nivel' => 'MEDIA'));
		return $query->result();
	}

	public function addMateria()
	{
		$this->codigo_materia = $this->input->post('id-materia');
		$this->nombre 		  = $this->input->post('nom-materia');		
		$this->nivel 	 	  = $this->input->post('nivel');


		if (!$this->db->insert('materias', $this)) 
		{
			//echo mysql_error($query);
			echo "<script type='text/javascript'>";
			echo "alert('Problemas al adicionar la Materia!');";
			echo "</script>";
		}
		else
		{
			//echo mysql_error($query);
			echo "<script type='text/javascript'>";
			echo "alert('La materia se adiciono con exito....!');";
			echo "window.location.replace('".base_url()."index.php/Admin/materia');";
			echo "</script>";
		}
	}

	public function lstMateria($codigo_materia)
	{
		$this->codigo_materia = $codigo_materia;

		$query = $this->db->get_where('materias', array('codigo_materia' => $this->codigo_materia));
		return $query->result();
	}

	public function updMateria($codigo_materia)
	{
		$this->codigo_materia = $this->input->post('id-materia');
		$this->nombre 		  = $this->input->post('nom-materia');		
		$this->nivel 	 	  = $this->input->post('nivel');

		$this->db->where('codigo_materia', $this->codigo_materia);

		if (!$this->db->update('materias', $this)) 
		{
			echo "<script type='text/javascript'>";
			echo "alert('Problemas al modificar la materia!');";
			echo "</script>";
		}
		else
		{
			echo "<script type='text/javascript'>";
			echo "alert('La materia se modifico con exito....!');";
			echo "window.location.replace('".base_url()."index.php/Admin/materia');";
			echo "</script>";
		}
	}

	public function dltMateria($codigo_materia)
	{
		$this->codigo_materia = $codigo_materia;
		$this->db->where('codigo_materia', $this->codigo_materia);

		if (!$this->db->delete('materias')) 
		{
			echo "<script type='text/javascript'>";
			echo "alert('Problemas al Eliminar La materia!');";
			echo "</script>";
		}
		else
		{
			echo "<script type='text/javascript'>";
			echo "alert('La materia se elimino con exito....!');";
			echo "window.location.replace('".base_url()."index.php/Admin/materia');";
			echo "</script>";
		}
	}
}