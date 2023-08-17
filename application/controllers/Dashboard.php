<?php
class Dashboard extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Dashboard_model'); // Load the model
        $this->load->library('session');
		$this->load->database();
		$this->load->helper('url');
    }
    
    public function index() {
        // Check if user is logged in
        if (!$this->session->userdata('id')) {
            redirect('Auth/login');
        }
        
        $this->load->view('dashboard_view');
    }
    
    public function get_data() {
        $user_id = $this->session->userdata('ticket_no');
        $data = $this->Dashboard_model->get_data_by_user_id($user_id);
        echo json_encode($data);
    }
}
?>