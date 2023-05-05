<?php
class Import_model extends CI_Model{
	public function getUsers(){
			return $this->db->get('empid_date')->result();;
		}

		public function importUsers($import_data){
			$this->db->insert_batch('empid_date',$import_data);
		}
		
	}
