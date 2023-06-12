<?php
class Pivot_model extends CI_Model{
	public function fetchPivotData($rowField, $columnField, $dataField){
        $query = $this->db->query("SELECT * FROM employee");
		return $query->result_array();
    }

}
?>
