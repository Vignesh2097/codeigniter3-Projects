<?php
class login_model extends CI_Model{
	 public function getDatas(){
		 $this->db->select('dob');
         $details = $this->db->get('login');
         $data= $details->result_array();
         return $data;
	}
	public function getDetails($postData=array()){
		 $output = array();
		 if(isset($postData['dob'])){
			 $this->db->select('*');
			 $this->db->where('dob', $postData['dob']);
             $details = $this->db->get('login');
             $output = $details->result_array();
		}
		return $output;
		}
}


		
	
	

	
?>
   	

    		




		

		