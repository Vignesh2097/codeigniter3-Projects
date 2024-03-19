<?php
class ticketing_model extends CI_Model{
	public function register_user($firstname,$lastname,$email,$password,$confirm,$company){
		$this->db->where('email', $email);
		$query = $this->db->get('hd_registration');

    if ($query->num_rows() > 0) {
        return false; 
    }

		$data = array(
            'first_name' => $firstname,
			'last_name' => $lastname,
			'email' => $email,
            'password' => $password,
			'confirm' => $confirm,
			'company' => $company
        );

        $this->db->insert('hd_registration', $data); 

        if ($this->db->affected_rows() > 0) {
            return $this->db->insert_id(); 
        }

        return false; 
    }
	public function getUser($email){
		return $this->db->where('email',$email)->get('hd_registration')->row();
	}
		
	public function save($date,$requester,$remail,$contact,$cemail,$type,$status,$subject,$message,$additional)
	{
			$query="insert into all_complaint values('','$date','$requester','$remail','$contact','$cemail','$type','$status','$subject','$message','$additional')";
			$this->db->query($query);
	}

	public function gettickets()
    {
		$this->db->select('ticket_no,raised_date,requester,remail,contact,cemail,request_type,status,subject,message,additional_message');
        $query = $this->db->get('all_complaint');
        return $query->result_array();
    }
	public function displayticketsbyno($ticketno){
		        return $this->db->get_where('all_complaint', array('ticket_no' => $ticketno))->row_array();
	}
	public function resubmit($ticketno,$ticket_data){
		$this->db->where('ticket_no', $ticketno);
        $this->db->update('all_complaint', $ticket_data);
		
	}
}
?>