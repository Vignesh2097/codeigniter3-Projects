<?php
class Gmail extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('Save_records');
	}
	public function login(){
		$this->load->view('Loginpage');//calling the login from view
		if($this->input->post('next'));// checking whether the next is working or not
		{
			//declaring variables for storing the form datas
			$firstname=$this->input->post('firstname');
			$lastname=$this->input->post('lastname');
			$date=$this->input->post('dob');
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			$confirm=$this->input->post('confirm');
			//calling the query present in Save_records stored in the save function
			$this->Save_records->save($firstname,$lastname,$date,$email,$password,$confirm);
			
		}
	}
	public function fetchdata()
	{
		$result['data']=$this->Save_records->displaydata();
		$this->load->view('Datas',$result);
	}
	public function deletedata(){
		$id=$this->input->get('id');
		$this->Save_records->deletedata($id);
	}

	public function updatedata(){
		$id=$this->input->get('id');
		$result['data']=$this->Save_records->displaydatabyId($id);
		$this->load->view('update_records',$result);
		
		if($this->input->post('update'));
		{
			$firstname=$this->input->post('firstname');
			$lastname=$this->input->post('lastname');
			$date=$this->input->post('dob');
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			$confirm=$this->input->post('confirm');
			$this->Save_records->updatedata($firstname,$lastname,$date,$email,$password,$confirm,$id);
			echo "Data updated successfully";
		}			
	}	
}
?>
			
			
	


















