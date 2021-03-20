<?php

class Controller_satu extends CI_Controller{
	public function index(){
		$data['judul'] = 'Home';
		#$this->load->view('templates/header', $data);
		$this->load->view('view_home');
		#$this->load->view('templates/footer');
	}

}