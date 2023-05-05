<?php 
class date_model extends CI_Model{

function fetch_data($query)
 {
  $this->db->select("*");
  $this->db->from("login");
  if($query != '')
  {
   $this->db->like('firstname', $query);
   $this->db->like('lastname', $query);
   $this->db->or_like('email', $query);
   $this->db->or_like('dob', $query);
   $this->db->or_like('password', $query);
   $this->db->or_like('confirm', $query);
  }
  $this->db->order_by('id', 'DESC');
  return $this->db->get();
 }
}
?>