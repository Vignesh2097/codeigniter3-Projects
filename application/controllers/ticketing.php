<?php

use PHPMailer\PHPMailer\PHPMailer;

class ticketing extends CI_Controller
{
	public function __construct(){
	parent::__construct();
	$this->load->database();
	$this->load->helper('url');
	$this->load->library('form_validation');
	$this->load->model('ticketing_model');
	$this->load->model('admin_database');
	$this->load->library('session');
	
	
	}
	public function index(){
		$this->load->view('newpage');
	}
	public function reg(){
		$this->load->view('Home');
		}
	public function register(){
		if($this->input->post('register'))
		{
		$firstname=$this->input->post('first_name');
		$lastname=$this->input->post('last_name');
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$confirm=$this->input->post('confirm');
		$company=$this->input->post('company');
		
		$user_id=$this->ticketing_model->register_user($firstname,$lastname,$email,$password,$confirm,$company);
		if($user_id){
			$this->session->set_userdata('id', $user_id);
			$data['error'] = '<h3 style="color:rgb(2, 228, 0);">Registration successful!<br>You can now log in.</h3>';
            $this->load->view('Home',@$data);
		}
		else{
			$data['error']="<h3 style='color:red'>This user already exists<br>click login to continue</h3>";
			$this->load->view('Home',$data);
			
		}

		}else{
			$this->load->view('Home');
		}
	}
			
	public function login_form(){
		if($this->session->has_userdata('id')){
					redirect('ticketing/dashboard');
				}
				
			
				$this->load->view('User_login');
			}
	public function login(){
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');

				if($this->form_validation->run()==FALSE){
					$this->load->view('User_login');
				}else{
					$email = $this->input->post('email');
					$password = $this->input->post('password');
					$this->load->database();
					$this->load->model('ticketing_model');
					if($user = $this->ticketing_model->getUser($email)){
						if($user->password==$password){
							
							$this->load->library('session');
							$this->session->set_userdata('id',$user->id);
							redirect('ticketing/dashboard');
							
						}else{
							$data['error']="<h3 style='color:red'>Login Error</h3>";
;
						}
					}else{
						$data['error']="<h3 style='color:red'>Invalid login details<br>please register to continue</h3>";

					}
					$this->load->view('User_login',@$data);
				}
	}
			
	public function dashboard(){
		$this->load->view('dashboard');
	}
		
		public function create(){
				if($this->input->post('create')){
					redirect('ticketing/createtab');
					}
					else{
						echo "No page found";
						}
	$this->load->view('Home');
	}
	function createtab(){
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
			
			
			//To post the datas to another table 
			$date1 = $this->input->post('raised_date');
			$requester1 = $this->input->post('requester');
			$remail1 = $this->input->post('remail');
			$type1   = $this->input->post('request_type');
			$status1 =$this->input->post('status');
			$subject1 = $this->input->post('subject');
			$message1 = $this->input->post('message');
			$additional1 = $this->input->post('additional_message');


		$this->ticketing_model->save($date,$requester,$remail,$contact,$cemail,$type,$status,$subject,$message,$additional);
		$this->session->set_userdata('remail');

		
		
		//To connect another model file
        //$this->admin_database->savedata($date1,$requester1,$remail1,$type1,$status1,$subject1,$message1,$additional1);		
		echo "I have received your request";
		    $date = $this->input->post('raised_date');
		    $requester = $this->input->post('requester');
			$remail = $this->input->post('remail');
			$contact= $this->input->post('contact');
			$cemail = $this->input->post('cemail');
			$type   = $this->input->post('request_type');
			$status = $this->input->post('status');
			$subject = $this->input->post('subject');
			$message = $this->input->post('message');
			$additional =$this->input->post('additional_message');

			$from_address = "vignesh.n@positiveintegers.com";//Sender email
			$to_address = "sarathkumar.b@positiveintegers.com";//Receiver email
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
				$mailer->addAddress($to_address);
				$mailer->Subject=$subject;
				$mailer->isHTML(true);
				$mailer->Body=$body;
				$mailer->send();
				echo " and my team will get back to you shortly through email.
				<html>
						<style>
							table,th,td{
								border-collapse:collapse;
								border:1px solid black;
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
public function viewticket(){
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
public function update() {
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
		/*$ticketbox = array(
            'raised_date' => $this->input->post('raised_date'),
            'requester' => $this->input->post('requester'),
            'remail' => $this->input->post('remail'),
            'request_type' => $this->input->post('request_type'),
            'status' => $this->input->post('status'),
            'subject' => $this->input->post('subject'),
            'message' => $this->input->post('message'),
            'additional_message' => $this->input->post('additional_message'),
        );*/


        $this->ticketing_model->resubmit($ticketno, $ticket_data);
		//$this->admin_database->changesmade($ticketno, $ticketbox);

        // Redirect back to the datatable view or a success page
        redirect('ticketing/viewticket');
    }

    public function editticket($ticketno) {
        $data['ticket'] = $this->ticketing_model->displayticketsbyno($ticketno);

        if (!$data['ticket']) {
			echo "Whoops!!";
                    } else {
            $this->load->view('resubmit', $data);
        }
    }
	public function logout(){
		$this->session->unset_userdata('id');
		redirect('ticketing/login');
			}
	
	public function faq(){
		$this->load->view('faq');
	}
}
	
?>
			
			
	

















			
			
	


















