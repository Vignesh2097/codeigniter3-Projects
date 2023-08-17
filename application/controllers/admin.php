<?php
class admin extends CI_Controller{
	public function __construct(){
	parent::__construct();
	$this->load->database();
	$this->load->helper('url');
	$this->load->library('form_validation');
	$this->load->model('admin_model');
	$this->load->model('user_database');
	}
	public function index(){
		$this->load->view('admin_form');
	}
	public function submit(){
		if($this->input->post('register'))
		{
		$firstname=$this->input->post('firstname');
		$lastname=$this->input->post('lastname');
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$confirm=$this->input->post('confirm');
		$company=$this->input->post('company');
		
		$que=$this->db->query("select * from admin where email='".$email."'");
		$row = $que->num_rows();
		if($row)
		{
		$data['error']="<h3 style='color:red'>This user already exists<br>click login to continue</h3>";
		}
		else
		{
		$que=$this->db->query("insert into admin values('','$firstname','$lastname','$email','$password','$confirm','$company')");
		
		$data['error']="<h3 style='color:blue'>Your account has been created successfully<br>click login to continue</h3>";
		}			
				
		}
	$this->load->view('admin_form',@$data);	
	}
	public function sign(){
		if($this->session->has_userdata('id')){
					redirect('admin/success');
				}
				
			
				$this->load->view('admin_view');
			}
	public function signin(){
		$this->form_validation->set_rules('email','Email','required');
				$this->form_validation->set_rules('password','Password','required');

				if($this->form_validation->run()==FALSE){
					$this->load->view('admin_view');
				}else{
					$email = $this->input->post('email');
					$password = $this->input->post('password');
					$this->load->database();
					$this->load->model('admin_model');
					if($user = $this->admin_model->getdata($email)){
						if($user->password==$password){
							
							$this->load->library('session');
							$this->session->set_userdata('id',$user->id);
							redirect('admin/success');
							
						}else{
							$data['error']="<h3 style='color:red'>Login Error</h3>";
;
						}
					}else{
						$data['error']="<h3 style='color:red'>Invalid login details<br>please register to continue</h3>";

					}
					$this->load->view('admin_view',@$data);
				}

			
			}
	
	function success(){
		$this->load->view('Success');
	}
	public function logout(){
		$this->session->unset_userdata('id');
		redirect('admin/signin');
			}
	
public function view(){
$data['tickets']=$this->admin_model->tickets();
$this->load->view('dashboard3',$data);	
}

public function update(){
	$ticket_id = $this->input->post('ticket_id');
    $column_name = $this->input->post('column_name');
    $new_value = $this->input->post('new_value');
	
	/*$ticketid = $this->input->post('ticket_id');
    $columnname = $this->input->post('column_name');
    $newvalue = $this->input->post('new_value');*/


    $data = array($column_name => $new_value);
	/*$data1 = array($columnname => $newvalue);*/

   $this->admin_model->update_ticket($ticket_id, $data);
/*$this->user_database->statusupdate($ticketid,$data1);*/

   echo json_encode(array('status' => 'success'));

/*public function search(){
	$query=$this->input->get('query');
	$data=$this->admin_model->searchpost($query);
	$this->load->view('dashboard3',array('data'=>$data));*/
}
} 
	
	
?>