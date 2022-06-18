<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Schedular_model extends CI_Model {

	public function getSchedular(){

		$this->db->from('schedular a');
		$this->db->join('users b', 'b.ID = a.StaffID', 'left');
		$this->db->where('DATE_FORMAT(a.StartTime, "%Y-%m-%d") =', date('Y-m-d'));
		$q = $this->db->get();

		return $q->result();

	}

	public function getUsers(){
		$this->db->where('Status', 'Y');
		$q = $this->db->get('users');

		return $q->result();
	}

	public function addSchedular(){

		for($i=1; $i<=$_POST['Number']; $i++){
			$this->db->set('StaffID', $_POST['Staff'.$i]);
			$this->db->set('CustomerName', $_POST['CustomerName'.$i]);
			$this->db->set('Service', $_POST['Service'.$i]);
			$this->db->set('StartTime', $_POST['Date'].' '.$_POST['Time'].':00');
			$this->db->set('Period', $_POST['Duration'.$i]);
			$this->db->set('Status', 'Y');
			$this->db->set('InsertBy', 1);
			$this->db->set('InsertDate', date('Y-m-d H:i:s'));
			$this->db->insert('schedular');
		}

		return TRUE;
	}


}

?>