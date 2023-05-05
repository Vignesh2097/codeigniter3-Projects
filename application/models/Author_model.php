<?php
class Author_model extends CI_Model{
	
	public function getcount(){
		
		//To return how much datas are present in a table to the controller
		return $this->db->count_all_results('author');
	}
		
	public function getauthors($limit,$start){		//to get the datas of the author
        $this->db->limit($limit,$start);
        $query=$this->db->get('author');    //to get datas from author table		
		
		//To return the datas from $query as object
		return $query->result();
	}
	}
	?>
		
		