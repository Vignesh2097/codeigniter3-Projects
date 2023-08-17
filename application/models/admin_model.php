<?php
class admin_model extends CI_Model{
	
	public function getdata($email){
	
	return $this->db->where('email',$email)->get('admin')->row();
	}
	public function store($data){
			$this->db->insert('admin',$data);
			return true;
	}
	public function tickets(){
		return $this->db->get('all_complaint')->result();

	}
    public function update_ticket($ticket_id, $data)
    {
        $this->db->where('ticket_no', $ticket_id);
        $this->db->update('all_complaint', $data);
    }
	}
?>
