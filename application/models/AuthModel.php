<?php
class AuthModel extends CI_Model{
	public function loginUser($data){
		$this->db->select('*');
		$this->db->where('email',$data['email']);
		$this->db->where('password',$data['password']);
		$this->db->from('hd_registration');
		$this->db->limit(1);
		$query=$this->db->get();
		if($query->num_rows()==1){
			return $query->row();
		}else{
			return false;
	}
	}
	public function datadetails($email){
	$this->db->select('*');
        $this->db->from('all_complaint');
        $this->db->where('remail', $email);
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return FALSE;
        }
	}
	
	public function register($data){
		return $this->db->insert('hd_registration',$data);
		}
}
?>