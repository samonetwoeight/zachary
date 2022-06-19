<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('User_model');

		if(!isset($_SESSION['login'])){
			redirect('Login');
		}
	}
	

	public function index()
	{
		$info['title'] = 'Admin';
		$info['addlink'] = base_url('AddUser');
		$data = array();
        $limit_per_page = 50;
        $config['per_page'] = $limit_per_page;
        $start_index = ($this->input->get('page')) ? ( ( $this->input->get('page') - 1 ) * $config["per_page"] ) : 0;
        $total_records = $this->User_model->get_count();
 
        if ($total_records > 0) 
        {
            // get current page records
            $Yes = '<button class="btn btn-light-success font-weight-bold p-2"><i class="fa-solid fa-check pr-0"></i></button>';
            $No = '<button class="btn btn-light-danger font-weight-bold p-2"><i class="fa-solid fa-xmark pr-0"></i></button>';
            $results = $this->User_model->get_current_page_records($limit_per_page, $start_index);
            foreach($results as $result){
            	$result->Foot == 'Y' ? $result->Foot = $Yes : $result->Foot = $No;
            	$result->Body == 'Y' ? $result->Body = $Yes : $result->Body = $No;
            	$result->Guasa == 'Y' ? $result->Guasa = $Yes : $result->Guasa = $No;
            	$result->Cupping == 'Y' ? $result->Cupping = $Yes : $result->Cupping = $No;
            	$result->Tuina == 'Y' ? $result->Tuina = $Yes : $result->Tuina = $No;
            	$result->Sports == 'Y' ? $result->Sports = $Yes : $result->Sports = $No;
            }
            $data["results"] = $results;
             
            $config['base_url'] = base_url().'User';
            $config['total_rows'] = $total_records;
            
            $config += $this->getPaginationConfig();
             
            $this->pagination->initialize($config);
            $data["links"] = $this->pagination->create_links();
        }
        $data['page'] = $start_index + 1;
        $data['User'] = count($this->User_model->get_current_page_records($config['per_page'], $start_index)) + $start_index;
        $data['total_rows'] = $config['total_rows'];

		$this->load->view('layout/header', $info);
		$this->load->view('user/user', $data);
		$this->load->view('layout/footer');
		
	}

	public function AddUser(){

		$info['title'] = 'Add Admin';
		$data['Action'] = 'Add';
		$result = new StdClass();
		$result->FootCheck = 'checked';
		$result->Foot = 'Y';
		$result->BodyCheck = 'checked';
		$result->Body = 'Y';
		$result->GuasaCheck = 'checked';
		$result->Guasa = 'Y';
		$result->CuppingCheck = 'checked';
		$result->Cupping = 'Y';
		$result->TuinaCheck = 'checked';
		$result->Tuina = 'Y';
		$result->SportsCheck = 'checked';
		$result->Sports = 'Y';
		$data['result'] = $result;

		if(isset($_POST['Submit'])){
			$this->form_validation->set_rules('Name', 'Name', 'required');
			$this->form_validation->set_rules('Username', 'Username', 'required');
			$this->form_validation->set_rules('Password', 'Password', 'required');
			if ($this->form_validation->run() == FALSE){
				$this->load->view('layout/header', $info);
				$this->load->view('user/user_action',$data);
				$this->load->view('layout/footer');
			}else{
				$this->User_model->addUser();
				redirect('User');
			}

		}else{
			$this->load->view('layout/header', $info);
			$this->load->view('user/user_action', $data);
			$this->load->view('layout/footer');
		}
	}

	public function UpdateUser(){

		$info['title'] = 'Update User';
		$data['Action'] = 'Update';
		$result = $this->User_model->getUser();
		$result->Foot == 'Y' ? $result->FootCheck = 'checked' : $result->FootCheck = '';
		$result->Body == 'Y' ? $result->BodyCheck = 'checked' : $result->BodyCheck = '';
		$result->Guasa == 'Y' ? $result->GuasaCheck = 'checked' : $result->GuasaCheck = '';
		$result->Cupping == 'Y' ? $result->CuppingCheck = 'checked' : $result->CuppingCheck = '';
		$result->Tuina == 'Y' ? $result->TuinaCheck = 'checked' : $result->TuinaCheck = '';
		$result->Sports == 'Y' ? $result->SportsCheck = 'checked' : $result->SportsCheck = '';
		$data['result'] =  $result;

		if(isset($_POST['Submit'])){
			$this->form_validation->set_rules('Name', 'Name', 'required');
			$this->form_validation->set_rules('Username', 'Username', 'required');
			if ($this->form_validation->run() == FALSE){
				$this->load->view('layout/header', $info);
				$this->load->view('user/user_action',$data);
				$this->load->view('layout/footer');
			}else{
				$this->User_model->updateUser();
				redirect('User');
			}
		}else{
			$this->load->view('layout/header', $info);
			$this->load->view('user/user_action', $data);
			$this->load->view('layout/footer');
		}
	}

	public function DeleteUser(){

		$this->User_model->deleteUser();
		redirect('User');
	}
}
