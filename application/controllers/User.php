<?php
class User extends CI_Controller 
{
	public function __construct()
	{
	parent::__construct();
	$this->load->database();
	$this->load->helper('url');
	}

	public function index()
	{
		
		if($this->input->post('register'))
		{
		/*$n=$this->input->post('name');
		$e=$this->input->post('email');
		$p=$this->input->post('pass');
		$m=$this->input->post('mobile');
		$c=$this->input->post('course');*/
	
		extract($_POST);
		
		$que=$this->db->query("select * from student where email='$email'");
		$row = $que->num_rows();
		if($row)
		{
		$data['error']="<h3 style='color:red'>This user already exists</h3>";
		}
		else
		{
		$que=$this->db->query("insert into student values('','$name','$email','$pass','$mobile','$course')");
		
		$data['error']="<h3 style='color:blue'>Your account created successfully</h3>";
		}			
				
		}
	$this->load->view('student_registration',@$data);	
	}
	public function signin(){
		
		$data=array();
		
		if($this->input->post('signin')){
			$e=$this->input->post('email');
			$p=$this->input->post('pass');
			
			$query=$this->db->query("select * from student where email='".$e."' and password='".$p."'");
			$row=$query->num_rows();
			if($row)
			{
			redirect('User/dashboard');
			}
		    else
			{
		     $data['error']="<h3 style='color:red'>Unkown User</h3>";
			}
			}
			$this->load->view('signin',$data);
		}
	function dashboard(){
	$this->load->view('dashboard');
	}
		     
	}
			
		

?>