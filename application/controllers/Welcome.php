<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->render('welcome_message');
	}

	private function render($content){
		$this->load->view('layout/header');
		$this->load->view($content);
		$this->load->view('layout/footer');
	}
}
