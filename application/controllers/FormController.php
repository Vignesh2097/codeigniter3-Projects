<?php
  class FormController extends CI_Controller
  {
	public function __construct()
	{
	parent::__construct();
	$this->load->helper(array('form'));
	$this->load->library(array('form_validation'));
	}
   public function form()
   {
        $this->form_validation->set_rules('name','Name','required'); 
		$this->form_validation->set_rules('email','Email','required');

	   if ($this->form_validation->run() == FALSE) 
		{
			$this->load->view('Form');
		} 
		else 
		{
			$this->load->view('success_message');
		}
    }
  }
?>