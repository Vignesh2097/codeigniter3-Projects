<?php
class user_database extends CI_Model{
	public function statusupdate($ticketid, $data1)
    {
        $this->db->where('ticket_no', $ticketid);
        $this->db->update('my_complaint', $data1);
    }
}
?>