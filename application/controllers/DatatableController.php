<?php
class DatatableController extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('datas_model');
		$this->load->helper('url');
		}
	public function index(){
		$this->load->view('datatable_view');
		}
	public function emp_data(){
		 $data = $this->datas_model->getemp();

        // Modify date format
        foreach($data as &$row) {
            $row->dates = date('d-m-Y', strtotime($row->dates));
        }

        // Return data as JSON
        echo json_encode($data);
    }
}
?>