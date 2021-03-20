<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('m_admin');
		$this->load->model('m_pelanggan');
	}
	public function index()
	{
		$this->load->view('login');
	}

	public function login(){
		$username = $this->input->post('username');
		$pass = $this->input->post('password');
		$tipe = $this->input->post('account_type');
		$result = false;
		if($tipe == "member"){
			$result = $this->m_pelanggan->getByUsernameAndPassword($username, $pass);
		} else if($tipe == "admin"){
			$result = $this->m_admin->getByUsernameAndPassword($username, $pass);
		}
		if($result){
			$this->session->set_userdata('username', $username);
			$this->session->set_userdata('tipe', $tipe);
			redirect('home');
		} else {
			$this->session->set_flashdata('login', 'Username atau password salah');
			redirect('login');
		}
	}

	//public function manager(){
	//	$this->load->view('login_manager');
	//}

	//public function tukang_jahit(){
	//	$this->load->view('login_tukangjahit');
	//}
}
