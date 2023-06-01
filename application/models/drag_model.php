<?php
class drag_model extends CI_Model{
	public function getcolumn(){
			 return $this->db->query('select * from employee')->result();
		}
}

?>

		
