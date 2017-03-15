<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profesor extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();	
		$this->load->model('hometeacher');

		$this->load->model('homeadmin');
		$this->load->model('materias');
		$this->load->model('grupos');
		$this->load->model('horarios');
		$this->load->model('matricula');
		$this->load->model('asignacion');
		$this->load->model('asigjefe');
		$this->removeCache();
	}

/*=====================================================================================================================================================================*/
/*======================================================= USUARIOS ====================================================================================================*/
/*=====================================================================================================================================================================*/

	public function index()	
	{
		$data['mg'] = $this->hometeacher->lstMg();
		$data['p'] = $this->homeadmin->lstU();
		$this->load->view('layout/header');
		$this->load->view('profesor/profesor', $data);
		$this->load->view('layout/footer');
	}

	public function addCalif($grupo, $codigo_asignacion)
	{
		$grupo = $grupo;
		$asignacion_codigo = $codigo_asignacion;

		if ($_POST) 
		{			

			$cont = $this->input->post('contador');
			for ($i=1; $i <= $cont; $i++)
			{ 	
				$estado = $this->input->post('estado');
				$idCalif = $this->input->post('id-calif-$i');
				$id = $this->input->post("id$i");
				$idUs = $id;
				$nota1 = $this->input->post("nota1_$i");
				$nota2 = $this->input->post("nota2_$i");
				$nota3 = $this->input->post("nota3_$i");
				$nota4 = $this->input->post("nota4_$i");
				$notaF = $this->input->post("nota_f-$i");

				if ($estado == "true") 
				{
					$this->hometeacher->updCalif($nota1, $nota2, $nota3, $nota4, $notaF, $asignacion_codigo, $id);
				}
				else
				{
					$this->hometeacher->addCalif($nota1, $nota2, $nota3, $nota4, $notaF, $asignacion_codigo, $id);
				}				
			}
			$cont = $cont+1;			
			if ($cont == $i) 
			{
				echo "<script type='text/javascript'>";
				echo "alert('La calificacion por grupo se ha asignado con exito....!');";
				echo "window.location.replace('".base_url()."Profesor');";
				echo "</script>";
			}
			
		}
		$data['gm'] = $this->asignacion->asigMg($codigo_asignacion);
		$data['alnm'] = $this->matricula->conAlnm($grupo);
		$this->load->view('layout/header');
		$this->load->view('profesor/calificaciones/add', $data);
		$this->load->view('layout/footer');		
	}

	public function lstCalif($codigo_asignacion, $grupo_codigo)
	{
		$data['jefe'] =$this->asigjefe->lstAj($grupo_codigo);
		$data['gm'] = $this->asignacion->asigMg($codigo_asignacion);
		$data['calif'] = $this->hometeacher->lstCalif($codigo_asignacion);
		$this->load->view('layout/header');
		$this->load->view('profesor/calificaciones/lst', $data);
		$this->load->view('layout/footer');
	}
}