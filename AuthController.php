<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if($this->session->has_userdata('authenticated'))
		{
			$this->session->set_flashdata('status','You are already logged in!');
			redirect('UserController/index');
		}
		$this->load->database();
		$this->load->model('AuthModel');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->library('session');
		
		}
	
	public function index(){
		$this->load->view('header');
		$this->load->view('register');
		}
	public function register(){
		$this->form_validation->set_rules('first_name','First Name','trim|required|alpha');
		$this->form_validation->set_rules('last_name','Last Name','trim|required|alpha');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[hd_registration.email]');
		$this->form_validation->set_rules('password','Password','trim|required');
		$this->form_validation->set_rules('confirm','Confirm Password','trim|required|matches[password]');
		$this->form_validation->set_rules('company','Name of the Organization','');
		if($this->form_validation->run()==FALSE){
			$this->index();
	}else{
		$data=array(
		'first_name' => $this->input->post('first_name'),
		'last_name' => $this->input->post('last_name'),
		'email' => $this->input->post('email'),
		'password' => $this->input->post('password'),
		'confirm' => $this->input->post('confirm'),
		'company' => $this->input->post('company')
		);
		$user=$this->AuthModel->register($data);
		if($user){
			$this->session->set_flashdata('status','Registration successful!You can now login.');
			redirect('AuthController/login');
		}
		else{
			$this->session->set_flashdata('status','Something went wrong.');
			redirect('AuthController/register');
			}
	}
	}
	public function login(){
		$this->load->view('header');
		$this->load->view('Logon');
		}
	public function login_user(){
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run()==FALSE){
			$this->login();
		}
		else{
			$data=[
			'email'=>$this->input->post('email'),
			'password'=>$this->input->post('password')
		];
		$profile=$this->AuthModel->loginUser($data);
		if($profile!=FALSE){
			echo 
			$auth_user=[
			'first_name'=>$profile->first_name,
			'last_name'=>$profile->last_name,
			'email'=>$profile->email,
			];
			$this->session->set_userdata('authenticated','1'); //To create session variable,here authenticated is the variable 
			$this->session->set_userdata('auth_user',$auth_user);
			$this->session->set_flashdata('status','You are logged in successfully');
			redirect('UserController/index');
		}
		else{
			$this->session->set_flashdata('status','Invalid Email or Password');
			redirect('AuthController/login');
		}
		
	}  		
}
   public function home(){
		$this->load->view('header');
		$this->load->view('newpage');
	}
  public function faq(){
	 $this->load->view('header');
	 $this->load->view('faq'); 
  }	
	
}
?>