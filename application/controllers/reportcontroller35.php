<?php
class reportcontroller35 extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('report_model');
		$this->load->helper('url');

		}
	public function index(){
		$data['Region']=$this->report_model->getregion();
		$data['Category']=$this->report_model->getcategory();
		$data['Branch']=$this->report_model->getbranch();
		$data['Section']=$this->report_model->getsection();
		 $this->load->view('wireframedesign35', $data);
  }
	public function get_categories_by_region() {
		$Region = $this->input->post('Region');
        $Category = $this->report_model->get_by_region($Region);
        echo json_encode($Category);
    }
	public function get_branch_by_category() {
		$Category = $this->input->post('Category');
        $Branch = $this->report_model->get_by_category($Category);
        echo json_encode($Branch);
    }
	
	public function get_section_by_branch() {
		$Branch = $this->input->post('Branch');
        $Section = $this->report_model->get_by_branch($Branch);
        echo json_encode($Section);
    }
	
	public function someMethod(){
	$currentDateTime = date('l,F d,Y');
	}
	}
	?>
