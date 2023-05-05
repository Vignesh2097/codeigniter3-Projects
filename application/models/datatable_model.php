<?php
class datatable_model extends CI_Model{
	public function getemp($start,$length,$order_by,$sort){
		if($order_by!=null){
			$this->db->order_by($order_by,$sort);
			}
			return $this->db->offset($start)->limit($length)->get('empid_date');
		}
	public function getTotaldatas(){
			$query = $this->db->select('COUNT(*) as total_datas')->get('empid_date');
			$result = $query->row();
			if($result){
				return $result->total_datas;
			}
			return 0;

		}
	}
?>
		