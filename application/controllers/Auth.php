<?php
class Auth extends CI_Controller {
    public function __construct() {
        parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('session');
        $this->load->model('auth_model'); // Load the model
    }
	public function index(){
		$this->load->view('logon');
	}
    
    public function login() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        
        $user_data = $this->auth_model->get_user_by_email_password($email, $password);
        
        if ($user_data) {
            $this->session->set_userdata('id', $user_data->id);
            echo "success";
        } else {
            echo "failure";
        }
    }
}
?>