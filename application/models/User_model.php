<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	public function get_count(){

		$this->db->where('Status', 'Y');
        $query = $this->db->get('users');
        return $query->num_rows();
	}

	public function get_current_page_records($limit, $start){

		
		$this->db->where('Status', 'Y');
        $this->db->limit($limit, $start);
        $query = $this->db->get('users');
 
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            } 
            return $data;
        }
        return false;
	}

	public function getUser(){
		$this->db->where('ID', $_GET['uid']);
		$q = $this->db->get('users');

		return $q->row();
	}
 

	public function addUser(){

		$this->db->set('Name', $_POST['Name']);
		$this->db->set('Username', $_POST['Username']);
		$this->db->set('Password', $_POST['Password']);
		$this->db->set('Foot', $_POST['Foot']);
		$this->db->set('Body', $_POST['Body']);
		$this->db->set('Guasa', $_POST['Guasa']);
		$this->db->set('Cupping', $_POST['Cupping']);
		$this->db->set('Tuina', $_POST['Tuina']);
		$this->db->set('Sports', $_POST['Sports']);
		$this->db->set('Status', 'Y');
		$this->db->set('InsertBy', '1');
		$this->db->set('InsertDate', date('Y-m-d H:i:s'));
		return $this->db->insert('users');
	}

	public function updateUser(){

		if($_POST['Password'] != ''){
			$this->db->set('Password', $_POST['Password']);
		}
		$this->db->set('Name', $_POST['Name']);
		$this->db->set('Foot', $_POST['Foot']);
		$this->db->set('Body', $_POST['Body']);
		$this->db->set('Guasa', $_POST['Guasa']);
		$this->db->set('Cupping', $_POST['Cupping']);
		$this->db->set('Tuina', $_POST['Tuina']);
		$this->db->set('Sports', $_POST['Sports']);
		$this->db->set('UpdateBy', '1');
		$this->db->set('UpdateDate', date('Y-m-d H:i:s'));
		$this->db->where('ID', $_GET['uid']);
		return $this->db->update('users');
	}

	public function deleteUser(){

		$this->db->set('Status', 'N');
		$this->db->where('ID', $_GET['uid']);
		return $this->db->update('users');
	}

}

?>