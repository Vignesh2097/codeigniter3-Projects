<?php
class AjaxModel extends CI_Model 
{  
    public function saveData($data) 
	{
		//The result $data should be inserted into the table student 
		
		if($this->db->insert('student',$data))
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
