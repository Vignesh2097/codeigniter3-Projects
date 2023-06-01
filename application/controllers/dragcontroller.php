<?php
class dragcontroller extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('draganddrop');
		$this->load->helper('url');
	}
	public function index(){
		$this->load->view('drop');
		}
	public function names(){
		$data=$this->draganddrop->getnames();
		echo json_encode($data);
		}
	public function designation(){
		$position=$this->draganddrop->getdesignation();
		echo json_encode($position);
	}
	public function salary(){
		$salary=$this->draganddrop->getsalary();
		echo json_encode($salary);
	
}
}

?>