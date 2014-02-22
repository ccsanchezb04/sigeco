<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('Inicio');
		$this->load->model('grupos');
		$this->removeCache();

		if (!$this->session->userdata('rol')) 
		{
			redirect('login', 'refresh');
		}
	}

	public function index()
	{
		$data['res'] = $this->Inicio->mostrar();
		$this->load->view('layout/header');
		$this->load->view('inicio', $data);
		$this->load->view('layout/modals');
		$this->load->view('layout/footer');
	}
}