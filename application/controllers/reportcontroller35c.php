<?php
class reportcontroller35c extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('report_modelc');
		$this->load->helper('url');

		}
	public function index(){
		$data['Region']=$this->report_modelc->getregion();
		$data['Category']=$this->report_modelc->getcategory();
		$data['Branch']=$this->report_modelc->getbranch();
		$data['Section']=$this->report_modelc->getsection();
		 $this->load->view('wireframedesign35c', $data);
  }
	public function get_categories_by_region(){
		$Region = $this->input->post('Region');
        $Category = $this->report_modelc->get_by_region($Region);
        echo json_encode($Category);
    }
	public function get_branch_by_region(){
		$Region = $this->input->post('Region');
		$Branch = $this->report_modelc->get_by_reg($Region);
		echo json_encode($Branch);
	}
	public function get_branch_by_category(){
		$Category = $this->input->post('Category');
        $Branch = $this->report_modelc->get_by_category($Category);
        echo json_encode($Branch);
    }
	public function get_section_by_region(){
		$Region = $this->input->post('Region');
		$Section = $this->report_modelc->get_by_regi($Region);
		echo json_encode($Section);
	}
	public function get_section_by_branch(){
		$Branch = $this->input->post('Branch');
        $Section = $this->report_modelc->get_by_branch($Branch);
        echo json_encode($Section);
    }
	public function get_section_by_category(){
		$Category = $this->input->post('Category');
        $Section = $this->report_modelc->get_by_cate($Category);
        echo json_encode($Section);
    }
	public function details_by_region(){
        $postData = $this->input->post();
        $data = $this->report_modelc->getdetailsbyregion($postData);
        echo json_encode(['data' => $data]);
    }
	public function details_by_category(){
        $postData = $this->input->post();
        $data = $this->report_modelc->getdetailsbycategory($postData);
        echo json_encode(['data' => $data]);
    }
	public function details_by_branch(){
        $postData = $this->input->post();
        $data = $this->report_modelc->getdetailsbybranch($postData);
        echo json_encode(['data' => $data]);
    }
	public function someMethod(){
	$currentDateTime = date('l,F d,Y');
	}
	}
	?>
