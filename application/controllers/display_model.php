<?php
class display_model extends CI_Model 
{
function displaydata()
	{
	$query=$this->db->query("select * from login");
	return $query->result();
	}
}
	?>