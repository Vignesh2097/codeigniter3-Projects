<?php defined('BASEPATH') OR exit('No direct script access allowed');

class data extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('date_model');
	}
	public function index(){
    $this->load->view('Viewpage');
	}
	public function getdata(){
		$data['options']=$this->date_model->get_Data();
		echo json_encode($data);
	}
		