<?php
class Dashboard_model extends CI_Model {
    public function get_data_by_user_id($user_id) {
        $this->db->select('all_complaint.ticket_no,all_complaint.raised_date,all_complaint.requester,all_complaint.remail, all_complaint.contact,all_complaint.cemail,all_complaint.request_type,all_complaint.status,all_complaint.message,all_complaint.additional_message');
        $this->db->from('all_complaint');
        $this->db->join('hd_registration', 'hd_registration.email = all_complaint.remail');
        $this->db->where('hd_registration.id', $user_id);
        $query = $this->db->get();
        return $query->result();
    }
}
?>