<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedular extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');

		if(!isset($_SESSION['login'])){
			redirect('Login');
		}
		$this->load->model('Schedular_model');
		$this->load->model('User_model');
	}
	

	public function index()
	{
		$info['title'] = 'Schedular';
		$info['addlink'] = base_url('AddSchedular');
		$results = $this->Schedular_model->getSchedular();
		$users = $this->Schedular_model->getUsers();
		foreach($users as $user){
			for($i=1000; $i <= 2200; $i+=50){
				$hour = substr($i, 0, 2);
				$min = substr($i, -2);
				if($min == 50){
					$min = 30;
				}
				$var = $hour.$min;
				$user->$var = '<button class="btn btn-light-success font-weight-bold p-2"><i class="fa-solid fa-check pr-0"></i></button>';
			}
			foreach($results as $result){
				if($result->StaffID == $user->ID){
					switch($result->Period){
						case "HALF":
							$duration = 1;
							break;
						case "ONE":
							$duration = 2;
							break;
						case "ONEHALF":
							$duration = 3;
							break;
						case "TWO":
							$duration = 4;
							break;
						default:
							$duration = 1;
					}
					$time = date('Hi', strtotime($result->StartTime));
					for($j=$time; $j<(50*$duration+$time); $j+=50){
						$hour = substr($j, 0, 2);
						$min = substr($j, -2);
						if($min == 50){
							$min = 30;
						}
						if($min == 80){
							$min = '00';
							$hour += 1;
						}
						$var = $hour.$min;
						$user->$var = '<button class="btn btn-light-danger font-weight-bold p-2" title="'.$result->CustomerName.'"><i class="fa-solid fa-xmark pr-0"></i></button>';
					}
				}
			}
		}
		$data['results'] = $users;
		if(isset($_GET['date'])){
			$data['date'] = date('Y-m-d', strtotime($_GET['date']));
			$data['prevdate'] = date('Y-m-d', strtotime($_GET['date'] . '-1 day'));
			$data['nextdate'] = date('Y-m-d', strtotime($_GET['date'] . '+1 day'));
		}else{
			$data['date'] = date('Y-m-d');
			$data['prevdate']= date('Y-m-d', strtotime(date('Y-m-d') . '-1 day'));
			$data['nextdate'] = date('Y-m-d', strtotime(date('Y-m-d') . '+1 day'));
		}

		$this->load->view('layout/header', $info);
		$this->load->view('schedular/schedular',$data);
		$this->load->view('layout/footer');
		
	}

	public function AddSchedular(){

		$info['title'] = 'Add Schedular';
		$data['Action'] = 'Add';
		$data['users'] = $this->Schedular_model->getUsers();

		if(isset($_POST['Submit'])){
			$this->form_validation->set_rules('Date', 'Date', 'required');
			$this->form_validation->set_rules('Number', 'Number of Pax', 'required');
			if ($this->form_validation->run() == FALSE){
				$this->load->view('layout/header', $info);
				$this->load->view('schedular/schedular_action', $data);
				$this->load->view('layout/footer');
			}else{
				$this->Schedular_model->addSchedular();
				redirect('Schedular');
			}
		}else{
			$this->load->view('layout/header', $info);
			$this->load->view('schedular/schedular_action', $data);
			$this->load->view('layout/footer');
		}
	}

	public function checkservice(){

		$results = $this->Schedular_model->checkservice();
		echo json_encode($results);
	}

	public function checktimeslot(){

		$staff = array();
		for($i=1000; $i <= 2200; $i+=50){
			$hour = substr($i, 0, 2);
			$min = substr($i, -2);
			if($min == 50){
				$min = 30;
			}
			$var = $hour.$min;
			$user[$var] = 'Y';
		}

		$results = $this->Schedular_model->getstaffschedule();

		foreach($results as $result){
			switch($result['Period']){
				case "HALF":
					$duration = 1;
					break;
				case "ONE":
					$duration = 2;
					break;
				case "ONEHALF":
					$duration = 3;
					break;
				case "TWO":
					$duration = 4;
					break;
				default:
					$duration = 1;
			}
			$time = date('Hi', strtotime($result['StartTime']));
			for($j=$time; $j<(50*$duration+$time); $j+=50){
				$hour = substr($j, 0, 2);
				$min = substr($j, -2);
				if($min == 50){
					$min = 30;
				}
				if($min == 80){
					$min = '00';
					$hour += 1;
				}
				$var = $hour.$min;
				$user[$var] = 'N';
			}
		}

		$timeslot = date('Hi', strtotime($_POST['Time']));
		$availableslot = array('Y','Y','Y','Y');
		$counter=0;
		for($k=$timeslot; $k<(50*4+$timeslot); $k+=50){
			$hour = substr($k, 0, 2);
			$min = substr($k, -2);
			if($min == 50){
				$min = 30;
			}
			if($min == 80){
				$min = '00';
				$hour += 1;
			}
			$var = $hour.$min;
			if($user[$var] == 'N'){
				$availableslot[$counter] = 'N';
			}
			$counter++;
		}

		echo json_encode($availableslot);
	}
}
