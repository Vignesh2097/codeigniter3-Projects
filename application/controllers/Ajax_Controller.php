<?php
 class Ajax_Controller extends CI_Controller
  {
	
	public function index()
	   {
		   $this->load->view('Ajax_form');
	   }	   
	
	public function checkUser()
   {
      
		$email=$this->input->post('email');
		
		$this->load->model('Ajax_Model');
		
		$result=$this->Ajax_Model->checkuser($email);
		if($result)
		{
		echo  1;	
		}
		else
		{
		echo  0;	
		}
    }	
   
  }
?>