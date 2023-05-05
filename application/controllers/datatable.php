<?php 
class datatable extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('datatable_model');
		$this->load->helper('url');
		}
	public function index(){
		$this->load->view('dataview');
		}
	public function emp_data(){
		$draw=$this->input->get('draw');
        $start=$this->input->get('start');
		$length=$this->input->get('length');
		$order=$this->input->get('order');
		
		$col=0;
		$sort ="";
		if(!empty($order)){
			foreach($order as $o){
				$col=$o['column'];
				$sort=$o['dir'];
				}
				}
				$columns_valid=[
				"dates",
				"empid"
				];
				$order_by=null;
				
				if(isset($columns_valid[$col])){
					$order_by = $columns_valid[$col];
					}
			
			$total_datas = $this->datatable_model->getTotaldatas();
			$emp = $this->datatable_model->getemp($start,$length,$order_by,$sort);
			
			$data = array();
			foreach($emp->result() as $line){
				$data[] = array(
					$line->dates,
					$line->empid
				);
			}

			$output = array(
				'draw'=>$draw,
				'recordsTotal'=>$total_datas,
				'recordsFiltered'=>$total_datas,
				'data'=>$data
			);

			echo json_encode($output);
			exit();
		}
		
	}