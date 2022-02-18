<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diario extends CI_Controller {

	public function __construct(){

		parent:: __construct();
		$this->load->library(array('form_validation', 'pagination', 'session', 'upload', 'email'));
		$this->load->model(array());
		$this->load->helper(array('string', 'download', 'email', 'form', 'url'));

	}
	
	public function inicio(){

		$data['title'] = "Diario Escolar";
		$data['description'] = "Diario escolar para controlo de estudantes";
		
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('sidebar');
		$this->load->view('pages/diario/capa_diario', $data);
    	$this->load->view('footer2');
		
		
	}
}
