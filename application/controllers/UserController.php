<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;

class UserController extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Authentication');
		$this->load->model('ticketing_model');
	}
		
	public function index(){
		$this->load->view('header');
		$this->load->view('ticketbox');
		}
	public function raiseticket(){
		if($this->input->post('submit')){
			$date = $this->input->post('raised_date');
			$requester = $this->input->post('requester');
			$remail = $this->input->post('remail');
			$contact= $this->input->post('contact');
			$cemail = $this->input->post('cemail');
			$type   = $this->input->post('request_type');
			$status = $this->input->post('status');
			$subject = $this->input->post('subject');
			$message = $this->input->post('message');
			$additional = $this->input->post('additional_message');
			
			
			

		$this->ticketing_model->save($date,$requester,$remail,$contact,$cemail,$type,$status,$subject,$message,$additional);

		$from_address="vignesh.n@positiveintegers.com";
		
		echo "I have received your request";
		   
			$body = "<html>
						<style>
							table,th,td{
								border-collapse:collapse;
								border:1px solid black;
							}
						</style>
						<body>
							<p>Someone has contacted you!</p>
							<br><br>
							<h3>Sender Details<h3><br>
							<table>
								<tr>
								    <th>Date</th>
									<th>Requester</th>
									<th>Email</th>
									<th>Assigned to</th>
									<th>Email</th>
									<th>Request Type</th>
									<th>Status</th>
									<th>Subject</th>
									<th>Message</th>
									<th>Additional Message</th>
								</tr>
								<tr>
								    <td>".$date."</td>
									<td>".$requester."</td>
									<td>".$remail."</td>
									<td>".$contact."</td>
									<td>".$cemail."</td>
									<td>".$type."</td>
									<td>".$status."</td>
									<td>".$subject."</td>
									<td>".$message."</td>
									<td>".$additional."</td>
								</tr>
							</table>
						</body>
					</html>";

			$mailer = new PHPMailer(true);
			try{
				$mailer->isSMTP();
				$mailer->Host="smtp.gmail.com";
				$mailer->SMTPAuth =true;
				$mailer->Username="vignesh.n@positiveintegers.com";
				$mailer->Password="xbjfyoherhvhqkzk";
				$mailer->SMTPSecure=PHPMailer::ENCRYPTION_SMTPS;
				$mailer->Port="465";
				$mailer->setFrom($from_address);
				$mailer->addAddress($cemail);
				$mailer->Subject=$subject;
				$mailer->isHTML(true);
				$mailer->Body=$body;
				$mailer->send();
				echo " and my team will get back to you shortly through email.
				<html>
						<style>
							table,th,td{
								border-collapse:collapse;
								border:2px solid black;
							}
						</style>
						<body>
							<br><br>
							<h3>Your Request has been received<h3><br>
							<table>
								<tr>
                                    <th>Date</th>
                                    <td>".$date."</td>
                                </tr>
                                <tr>								
									<th>Requester</th>
									<td>".$requester."</td>
								</tr>
								<tr>
									<th>Email</th>
									<td>".$remail."</td>
								</tr>
								<tr>
									<th>Assigned to</th>
								    <td>".$contact."</td>
		
								</tr>
                                <tr>								
									<th>Email</th>
									<td>".$cemail."</td>
								</tr>
								<tr>
									<th>Request Type</th>
									<td>".$type."</td>
								</tr>
								<tr>
									<th>Status</th>
									<td>".$status."</td>
								</tr>

								<tr>
									<th>Subject</th>
									<td>".$subject."</td>

								</tr>
                                <tr>								
									<th>Message</th>
									<td>".$message."</td>
								</tr>
								<tr>								
									<th>Additional Message</th>
									<td>".$additional."</td>
								</tr>
							</table>
						</body>
					</html>";

			}catch(Exception $e){
				echo "Mail Error:".$mailer->ErrorInfo;
			}
	
	}
		
}
public function dataticket(){
	$this->form_validation->set_rules('email','Email','required');
	$this->form_validation->set_rules('password','Password','required');
		
		if($this->form_validation->run()==FALSE){
			$this->login();
		}
		else{
			$email=$this->input->post('email');
			$password=$this->input->post('password');
		
		$detail=$this->AuthModel->datadetails($email);
		if($detail!=FALSE){
			echo 
			$auth_user=[
			'first_name'=>$detail->first_name,
			'last_name'=>$detail->last_name,
			'email'=>$detail->email,
			];
			$this->session->set_userdata('authenticated','1'); //To create session variable,here authenticated is the variable 
			$this->session->set_userdata('auth_user',$auth_user);
			$this->session->set_flashdata('status','You are logged in successfully');
			redirect('UserController/viewticket');
		}
		else{
			$this->session->set_flashdata('status','Invalid Email or Password');
			redirect('AuthController/login');
		}
		
	}  		
}

public function viewticket(){
$this->load->view('header');
$this->load->view('dashboard2');
}

public function get_tickets(){
	$data=$this->ticketing_model->gettickets();

$result=array();
foreach($data as $row){
 $row['edit_disabled']=($row['status']==='Completed')? true : false;
$result[]=$row; 
}
        echo json_encode(array('data' => $result));
    }
public function update(){
        $ticketno = $this->input->post('ticket_no');
        $ticket_data = array(
            'raised_date' => $this->input->post('raised_date'),
            'requester' => $this->input->post('requester'),
            'remail' => $this->input->post('remail'),
            'contact' => $this->input->post('contact'),
            'cemail' => $this->input->post('cemail'),
            'request_type' => $this->input->post('request_type'),
            'status' => $this->input->post('status'),
            'subject' => $this->input->post('subject'),
            'message' => $this->input->post('message'),
            'additional_message' => $this->input->post('additional_message'),
        );
		

        $this->ticketing_model->resubmit($ticketno, $ticket_data);
		redirect('UserController/viewticket');
    }

    public function editticket($ticketno) {
        $data['ticket'] = $this->ticketing_model->displayticketsbyno($ticketno);

        if (!$data['ticket']) {
			echo "Whoops!!";
                    } else {
            $this->load->view('resubmit', $data);
        }
    }


}

?>