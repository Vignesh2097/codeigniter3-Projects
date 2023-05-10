<?php 
	class login_controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->model('login_model');
			$this->load->helper('url');
			}
		public function index(){
			$date= $this->login_model->getDatas();
			$data['date'] = $date;
			$this->load->view('login_form',$data);
			}
		public function Details(){
			$postData = $this->input->post();
			$data = $this->login_model->getDetails($postData);
			echo json_encode($data);
		
	}
	}

?>
	