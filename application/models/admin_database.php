<?php 
class admin_database extends CI_Model{
public function savedata($date1,$requester1,$remail1,$type1,$status1,$subject1,$message1,$additional1)
	{
	$query="insert into all_complaint values('','$date1','$requester1','$remail1','$type1','$status1','$subject1','$message1','$additional1')";
	$this->db->query($query);
	}
public function changesmade($ticketno, $ticketbox){
	$this->db->where('ticket_no', $ticketno);
   $this->db->update('all_complaint', $ticketbox);
		
}
}
?>