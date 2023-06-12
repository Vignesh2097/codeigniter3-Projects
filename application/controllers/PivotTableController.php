<?php
class PivotTableController extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->model('Pivot_model');
		$this->load->helper('url');
    }
	public function index(){
        $this->load->view('pivot_table_form');
    }
	public function generate_pivot_table(){
        $rowField = $this->input->post('Employee_name');
        $columnField = $this->input->post('Employee_designation');
        $dataField = $this->input->post('Salary');
        $pivotData = $this->Pivot_model->fetchPivotData($rowField, $columnField, $dataField);

        $data['pivotData'] = $pivotData;

        $this->load->view('pivot_table_view', $data);
    }

}

?>
