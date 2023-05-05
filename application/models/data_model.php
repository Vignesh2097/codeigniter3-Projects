<?php
class data_model extends CI_Model{
	public function getDatas(){
		return $this->db->get('login')->result();//To return all the rows from table login result method is used here

	}
	public function getdata($dob) {
    $this->db->where('dob',$dob);
    $query = $this->db->get('login');
    return $query->result();
}


		
	
	
}
	
?>
   	

    		




		

		