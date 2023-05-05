<?php
class data_model extends CI_Model{
	public function getDatas(){
		return $this->db->get('login')->result();
		
		