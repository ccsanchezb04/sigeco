<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class QualificationMod extends CI_Model {

	public function lstCalif($estu_id)
	{
		$this->db->select('*');
		$this->db->from('anav_calificaciones');		
		$this->db->join('anav_materias', 'mate_id = calif_idmate', 'INNER');					
		$this->db->join('anav_estudiantes', 'estu_id = calif_idestu', 'INNER');		
		$this->db->join('anav_usuarios', 'usua_id = estu_idusua', 'INNER');			
		$this->db->where('calif_idestu', $estu_id);	
		$this->db->where('mate_idestado', 1);		
		$this->db->where('estu_idestado', 1);		
		
		$query = $this->db->get();
		return $query->result();
	}

}

/* End of file qualificationMod.php */
/* Location: ./application/models/qualificationMod.php */