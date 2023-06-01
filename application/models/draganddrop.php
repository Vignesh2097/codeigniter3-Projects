<?php
class draganddrop extends CI_Model{
	public function getnames(){
			 return $this->db->query('select Employee_name from employee')->result();
		}
	public function getdesignation(){
		return $this->db->query('select Employee_designation from employee')->result();
}
   public function getsalary(){
		return $this->db->query('select Salary from employee')->result();
}
}

?>