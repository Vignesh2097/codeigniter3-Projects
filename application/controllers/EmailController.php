<?php
class EmailController extends CI_Controller 
{

    public function __construct() 
	{
        parent:: __construct();
	//To load the property helper url from helpers folder
        $this->load->helper('url');
    }

    public function index() 
	{
   //To load the view email
        $this->load->view('email');
    }

    function send() 
	{
		//To load the configuration from application/config/email.php
        $this->load->config('email');
        $this->load->library('email');
        
		//To load the smtp_user from application/config/email.php
        $from = $this->config->item('smtp_user');
        $to = $this->input->post('to');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');

       //To get all the variables such as from,to,subject,message and store it in $this 
        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);

        if ($this->email->send()) 
		{
            echo 'Email has been sent successfully';
        } 
		else 
		{
            show_error($this->email->print_debugger());
        }
    }
}
?>