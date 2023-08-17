<?php
class DataController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
		$this->load->database();
		$this->load->helper('url');
    }
	public function index(){
		$this->load->view('logon');
	}
    public function getTableBData() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->User_model->getUserByEmailPassword($email, $password);

        if ($user) {
            $data = $this->User_model->getDataByEmail($user->email);
			redirect('DataController/dash');

            echo json_encode($data);
        } else {
            echo json_encode(array()); // Return empty array if user is not found
        }
    }
	public function dash(){
		$this->load->view('dash');
}
}
?>

