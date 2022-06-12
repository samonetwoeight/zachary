<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	

	public function index()
	{
		if(isset($_SESSION['login'])){
			$info['title'] = 'Dashboard';
			$this->load->view('layout/header', $info);
			$this->load->view('dashboard/dashboard');
			$this->load->view('layout/footer');
		}else{
			redirect('Login');
		}
		
	}
}
