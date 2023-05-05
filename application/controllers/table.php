<?php
class table extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('table_model');
		$this->load->helper('url');
		}
	public function index(){
		$this->load->view('tableview');
		}
   public function get_data(){
	   $post = $this->input->post();
	   $data = $this->table_model->getdata($post);
	   echo json_encode($data);
}
}
?>
