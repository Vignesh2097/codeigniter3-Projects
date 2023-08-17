<?php
class User_model extends CI_Model {
    public function getUserByEmailPassword($email, $password) {
        $this->db->select('*');
        $this->db->from('hd_registration');
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get();
        return $query->row(); // Assuming only one matching record is expected
    }
	    public function getDataByEmail($email) {
        $this->db->select('*');
        $this->db->from('all_complaint');
        $this->db->where('email', $email);
        $query = $this->db->get();
        return $query->result();
    }

}
