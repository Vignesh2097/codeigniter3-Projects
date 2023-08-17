<?php
class User_model extends CI_Model {
    public function get_user_by_credentials($email, $password) {
        $this->db->select('*');
        $this->db->from('Table-A');
        $this->db->where('emailid', $email);
        $this->db->where('password', $password);
        $query = $this->db->get();
        return $query->row();
    }

    public function get_user_data($email) {
        $this->db->select('*');
        $this->db->from('Table-B');
        $this->db->where('emailid', $email);
        $query = $this->db->get();
        return $query->result();
    }
}
?>
