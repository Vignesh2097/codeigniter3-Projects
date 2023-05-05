<?php
  class AjaxController extends CI_Controller
  {
	
	public function index()
	   {
		   $this->load->view('Ajaxform');
	   }	   
	
   public function savedata()
   {
     //The datas from the view file has been called by an array called $data 
	$data = array(
	'name' => $this->input->post('name'),
	'email'=>$this->input->post('email'),
	'course'=>$this->input->post('course')
		);
		
		//calling the modelfile
		$this->load->model('AjaxModel');
		//calling the $data array 
		$result=$this->AjaxModel->saveData($data);
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