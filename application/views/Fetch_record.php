<?php
class Fetch_record extends CI_Model
{
    public function displaydatabydob($date){
		
	$query=$this->db->query("select * from login where dob='$date'");
	return $query->result();
	}
}

	

?>