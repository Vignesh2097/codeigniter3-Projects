<?php
class report_model extends CI_Model{
	public function getregion(){
		 $this->db->distinct();
        $this->db->select('Region');
        $query = $this->db->get('all_datas');
        return $query->result();
    }
	public function getcategory(){
		$this->db->distinct();
        $this->db->select('Category');
        $query = $this->db->get('all_datas');
        return $query->result();
    }
	public function getbranch(){
		 $this->db->distinct();
        $this->db->select('Branch');
        $query = $this->db->get('all_datas');
        return $query->result();
    }
	public function getsection(){
		 $this->db->distinct();
        $this->db->select('Section');
        $query = $this->db->get('all_datas');
        return $query->result();
	}
	public function get_by_region($Region){
		$query=$this->db->query("SELECT Category FROM all_datas WHERE Region='$Region'");
		return $query->result();
	}
	public function get_by_category($Category){
		$query=$this->db->query("SELECT Branch FROM all_datas WHERE Category='$Category'");
		return $query->result();
	}
	public function get_by_branch($Branch){
		$query=$this->db->query("SELECT Section FROM all_datas WHERE Branch='$Branch'");
		return $query->result();
	}
	
		
	
	
		
    
    }

		

?>