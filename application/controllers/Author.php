<?php
class Author extends CI_Controller{
	
	public function __construct(){
		
		 //To get all the properties of codeigniter,parent constructor is used
		parent::__construct();   //Otherwise we cannot use $this variable
		$this->load->helper('url');
		$this->load->database();
		$this->load->model('author_model');
		$this->load->library('pagination');
	}
	public function index(){
		
		// giving configuration
		$config['base_url']=base_url('author');
		$config['total_rows']=$this->author_model->getcount();
		$config['per_page']=10;
		$config['uri_segment']=2;
		
		//using configuration
		$this->pagination->initialize($config);
		
		if($this->uri->segment(2)!=null){
			$page=$this->uri->segment(2);
		}
		else{
			$page=0;
		}
		
		//to get the datas in view page	
	$data['links']=$this->pagination->create_links(); //this method generates the link for pagination and gives as html data 
	//to get the author's datas       //limit of the datas to be displayed per page,starting of the data
	$data['author']= $this->author_model->getauthors($config['per_page'],$page);
	$this->load->view('author_view',$data);
	}
}	
?>