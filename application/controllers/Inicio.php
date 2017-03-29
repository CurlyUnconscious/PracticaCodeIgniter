<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function __construct(){
		parent:__construct();
		$this->load->model('idioma_model');
	}

	public function index()
	{
		$info['saludo'] = $this->Idioma_model->saludo();
		$info['despedida'] = $this->Idioma_model->despedida();
		$this->load->view('plantillas/header');
		$this->load->view('welcome_message', $info);
		$this->load->view('plantillas/footer');
	}
}