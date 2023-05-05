<?php
class Ajax_Model extends CI_Model 
{  
	public function checkuser($email) 
	{
		$this->db->where('email',$email);
		//The below function communicates with the database and checks whether the given mailid is present in the database or not
		$query=$this->db->get('student');
		if($query->num_rows()>0)
		{
		return 1;	
		}
		else
		{
		return 0;	
		}
    }
}
?>