<?php
class Auth_model extends CI_Model {
    public function get_user_by_email_password($email, $password) {
        $this->db->select('*');
        $this->db->from('hd_registration');
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get();
        return $query->row();
    }
}
?>
