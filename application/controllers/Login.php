<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	

	public function index()
	{
		if(isset($_POST['Submit'])){
			$_SESSION['login'] = TRUE;
			redirect('Dashboard');
		}else{
			$this->load->view('general/login');
		}
		
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('Login');
	}
}
