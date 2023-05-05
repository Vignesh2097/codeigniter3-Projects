<?php 
	class Select extends CI_Controller{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->load->model('data_model');

		}
		/*public function index(){
			$this->load->view('select_form');
		}*/
		public function index(){
		//The model file and the method name is being called here
		$dobs=$this->data_model->getDatas();//used for fetching the datas as a collection object from the table and storing it in a variable 
		//To Pass the variable $datas to the view we are giving it with an array index datas inorder to access the function given in getDatas
		$this->load->view('select_form',array('dobs'=>$dobs));
		}
		
		public function fetch() { 
		$dob = $this->input->get('dob');
		$fetch = $this->data_model->getdob($dob); 
		
			
			}
	}







?>
	