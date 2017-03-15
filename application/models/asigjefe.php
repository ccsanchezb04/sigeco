<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Asigjefe extends CI_model 
{

	var $codigo_aj 	  	   = '';
	var $grupo_codigo 	   = '';
	var $no_identificacion = '';

	public function asigJefe()
	{
		$query = $this->db->get('asig_jefes');
		return $query->result();
	}

	public function lstAsingj()
	{
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->join('asig_jefes', 'usuarios.no_identificacion = asig_jefes.no_identificacion');
		$this->db->join('grupos', 'grupos.codigo_grupo = asig_jefes.grupo_codigo');

		$query = $this->db->get();
		return $query->result();
	}

	/*public function conDatos($codigo_grupo)
	{
		$this->grupo_codigo = $codigo_grupo;

        $query = $this->db->get_where('asig_jefes', array('grupo_codigo' => $this->grupo_codigo));
		return $query->result();
	}*/

	public function addAj()
	{
		$this->codigo_aj 	  	 = $this->input->post('id-aj');
		$this->grupo_codigo 	 = $this->input->post('grupo');		
		$this->no_identificacion = $this->input->post('profesor');


		if (!$this->db->insert('asig_jefes', $this)) 
		{
			//echo mysql_error($query);
			echo "<script type='text/javascript'>";
			echo "alert('Problemas al adicionar la asignacion del jefe de grupo!');";
			echo "</script>";
		}
		else
		{
			//echo mysql_error($query);
			echo "<script type='text/javascript'>";
			echo "alert('La asignacion del jefe de grupo se adiciono con exito....!');";
			echo "window.location.replace('".base_url()."Empleado/asignacion');";
			echo "</script>";
		}
	}

	public function lstAj($grupo_codigo)
	{
		// $this->codigo_aj = $codigo_aj;
		// $this->no_identificacion = $no_identificacion;
		$this->grupo_codigo = $grupo_codigo;

		$query1 = "SELECT * 
				   FROM asig_jefes
				   INNER JOIN usuarios ON usuarios.no_identificacion = asig_jefes.no_identificacion
				   INNER JOIN grupos ON grupos.codigo_grupo = asig_jefes.grupo_codigo
				   WHERE asig_jefes.grupo_codigo = $grupo_codigo;";

        $query = $this->db->query($query1);
		return $query->result();

		/*$this->db->from('asig_jefes');
		$this->db->join('usuarios', 'usuarios.no_identificacion = asig_jefes.no_identificacion');
		$this->db->join('grupos', 'grupos.codigo_grupo = asig_jefes.grupo_codigo');

		$query = $this->db->get_where('asig_jefes.grupo_codigo', $this->grupo_codigo);*/		
		return $query->result();
	}

	public function updAj($codigo_aj)
	{
		$this->codigo_aj = $codigo_aj;
		
		$this->grupo_codigo 	 = $this->input->post('grupo');		
		$this->no_identificacion = $this->input->post('profesor');

		$this->db->where('codigo_aj', $this->codigo_aj);

		if (!$this->db->update('asig_jefes', $this)) 
		{
			echo "<script type='text/javascript'>";
			echo "alert('Problemas al modificar la asignacion del jefe de grupo!');";
			echo "</script>";
		}
		else
		{
			echo "<script type='text/javascript'>";
			echo "alert('La asignacion del jefe de grupo se modifico con exito....!');";
			echo "window.location.replace('".base_url()."Empleado/asignacion');";
			echo "</script>";
		}
	}

	public function dltAj($codigo_aj)
	{
		$this->codigo_aj = $codigo_aj;
		$this->db->where('codigo_aj', $this->codigo_aj);

		if (!$this->db->delete('asig_jefes')) 
		{
			echo "<script type='text/javascript'>";
			echo "alert('Problemas al Eliminar la asignacion del jefe de grupo!');";
			echo "</script>";
		}
		else
		{
			echo "<script type='text/javascript'>";
			echo "alert('La asignacion del jefe de grupo se elimino con exito....!');";
			echo "window.location.replace('".base_url()."Empleado/asignacion');";
			echo "</script>";
		}
	}
}