<?php
class drag extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('drag_model');
		$this->load->helper('url');
	}
	public function index(){
		$this->load->view('drag_drop');
		}
	public function Column(){
		$data=$this->drag_model->getcolumn();
		echo json_encode($data);

}
}

?>
		