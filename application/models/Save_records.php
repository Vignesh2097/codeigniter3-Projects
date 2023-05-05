<?php
class Save_records extends CI_Model 
{
	function save($firstname,$lastname,$date,$email,$password,$confirm)
	{
	$query="insert into login values('','$firstname','$lastname','$date','$email','$password','$confirm')";
	$this->db->query($query);
	}
	function displaydata()
	{
	$query=$this->db->query("select * from login");
	return $query->result();
	}
    function deletedata($id){
		$this->db->query("delete from login where id='".$id."'");
	}
	function displaydatabyId($id){
	$query=$this->db->query("select * from login where id='".$id."'");
	return $query->result();
	}	
	function updatedata($firstname,$lastname,$date,$email,$password,$confirm,$id)
	{
	$query=$this->db->query("update login set firstname='$firstname',lastname='$lastname',dob='$date',email='$email',password='$password',confirm='$confirm'  where id='".$id."'");
	}	
}





?>