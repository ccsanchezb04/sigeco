<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Grupos extends CI_model 
{

	var $codigo_grupo = '';	
	var $nivel 		  = '';
	var $grupo  	  = '';
	var $nombre_grupo = '';
	var $cupo 		  = '';

	public function lstg()
	{
		$query = $this->db->get('grupos');
		return $query->result();
	}

	public function lstGp()
	{
		$query = $this->db->get_where('grupos', array('nivel' => 'PRIMARIA'));
		return $query->result();
	}

	public function lstGs()
	{
		$query = $this->db->get_where('grupos', array('nivel' => 'SECUNDARIA'));
		return $query->result();
	}

	public function lstGm()
	{
		$query = $this->db->get_where('grupos', array('nivel' => 'MEDIA'));
		return $query->result();
	}

/*===========================================================================================*/

	public function lstp()
	{
		$query = $this->db->get_where('grupos', array('nombre_grupo' => 'PRIMERO'));
		return $query->result();
	}

	public function lsts()
	{
		$query = $this->db->get_where('grupos', array('nombre_grupo' => 'SEGUNDO'));
		return $query->result();
	}

	public function lstt()
	{
		$query = $this->db->get_where('grupos', array('nombre_grupo' => 'TERCERO'));
		return $query->result();
	}
	public function lstc()
	{
		$query = $this->db->get_where('grupos', array('nombre_grupo' => 'CUARTO'));
		return $query->result();
	}

	public function lstq()
	{
		$query = $this->db->get_where('grupos', array('nombre_grupo' => 'QUINTO'));
		return $query->result();
	}

	public function lstsx()
	{
		$query = $this->db->get_where('grupos', array('nombre_grupo' => 'SEXTO'));
		return $query->result();
	}

	public function lstsp()
	{
		$query = $this->db->get_where('grupos', array('nombre_grupo' => 'SEPTIMO'));
		return $query->result();
	}

	public function lsto()
	{
		$query = $this->db->get_where('grupos', array('nombre_grupo' => 'OCTAVO'));
		return $query->result();
	}

	public function lstn()
	{
		$query = $this->db->get_where('grupos', array('nombre_grupo' => 'NOVENO'));
		return $query->result();
	}

	public function lstd()
	{
		$query = $this->db->get_where('grupos', array('nombre_grupo' => 'DECIMO'));
		return $query->result();
	}

	public function lstud()
	{
		$query = $this->db->get_where('grupos', array('nombre_grupo' => 'UNDECIMO'));
		return $query->result();
	}
/*===========================================================================================*/

	

	public function addGrupo()
	{
		$this->codigo_grupo = $this->input->post('id-grupo');
		$this->nivel 		= $this->input->post('nivel');
		$this->grupo  	  	= $this->input->post('grupo');
		$this->nombre_grupo	= $this->input->post('nombre');		
		$this->cupo 		= $this->input->post('cupo');


		if (!$this->db->insert('grupos', $this)) 
		{
			//echo mysql_error($query);
			echo "<script type='text/javascript'>";
			echo "alert('Problemas al adicionar el grupo!');";
			echo "</script>";
		}
		else
		{
			//echo mysql_error($query);
			echo "<script type='text/javascript'>";
			echo "alert('El grupo se adiciono con exito....!');";
			echo "window.location.replace('".base_url()."Admin/grupo');";
			echo "</script>";
		}
	}

	public function lstGrupo($codigo_grupo)
	{
		$this->codigo_grupo = $codigo_grupo;

		$query = $this->db->get_where('grupos', array('codigo_grupo' => $this->codigo_grupo));
		return $query->result();
	}

	public function updGrupo($codigo_grupo)
	{
		$this->codigo_grupo = $this->input->post('id-grupo');
		$this->nivel 		= $this->input->post('nivel');
		$this->grupo  	  	= $this->input->post('grupo');
		$this->nombre_grupo	= $this->input->post('nombre');			
		$this->cupo 		= $this->input->post('cupo');

		$this->db->where('codigo_grupo', $this->codigo_grupo);

		if (!$this->db->update('grupos', $this)) 
		{
			echo "<script type='text/javascript'>";
			echo "alert('Problemas al modificar el grupo!');";
			echo "</script>";
		}
		else
		{
			echo "<script type='text/javascript'>";
			echo "alert('El grupo se modifico con exito....!');";
			echo "window.location.replace('".base_url()."Admin/grupo');";
			echo "</script>";
		}
	}

	public function dltGrupo($codigo_grupo)
	{
		$this->codigo_grupo = $codigo_grupo;
		$this->db->where('codigo_grupo', $this->codigo_grupo);

		if (!$this->db->delete('grupos')) 
		{
			echo "<script type='text/javascript'>";
			echo "alert('Problemas al eliminar el grupo!');";
			echo "</script>";
		}
		else
		{
			echo "<script type='text/javascript'>";
			echo "alert('El grupo se elimino con exito....!');";
			echo "window.location.replace('".base_url()."Admin/grupo');";
			echo "</script>";
		}
	}
}