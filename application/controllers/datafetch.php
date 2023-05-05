<?php

class datafetch extends CI_Controller
{
	public function __construct(){
    parent::__construct();
	$this->load->database();
	$this->load->model('Fetch_record');
	}
	public function displaydata(){
		$this->load->view('DOB');
		if($this->input->post('submit')){
		$date=$this->input->post('dob');
		
		$result['data']=$this->Fetch_record->displaydatabydob($date);
		$this->load->view('databydob',$result);	
		
}

}
}
?>

	

