<?php
class datas_model extends CI_Model{
	public function getemp(){
		$this->load->database();
        $query = $this->db->get('empid_date');
        return $query->result();
        
    }	
				
}
?>