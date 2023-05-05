<?php
class table_model extends CI_Model{
	public function getdata($post=null){
		     
     $draw = $post['draw'];
     $start = $post['start'];
     $length = $post['length']; 
     $index = $post['order'][0]['column']; 
     $name = $post['columns'][$index]['data'];
     $sort = $post['order'][0]['dir'];
     $search = $post['search']['value'];

     
     $query = "";
     if($search != ''){
        $query = "(dates like '%".$search."%'or empid like'%".$search."%' ) ";
     }

     //total datas without filtering
     $this->db->select('count(*) as allcount');
     $emp = $this->db->get('empid_date')->result();
     $totaldatas = $emp[0]->allcount;

     //total datas with filtering
     $this->db->select('count(*) as allcount');
     if($query != '')
        $this->db->where($query);
     $emp = $this->db->get('empid_date')->result();
     $totaldataswithfilter = $emp[0]->allcount;

     //fetch datas
     $this->db->select('*');
     if($query != '')
        $this->db->where($query);
     $this->db->order_by($name, $sort);
     $this->db->limit($length, $start);
     $emp = $this->db->get('empid_date')->result();

     $data = array();

     foreach($emp as $line ){

        $data[] = array( 
           "dates"=>$line->dates,
           "empid"=>$line->empid
        ); 
     }

     //output
     $output = array(
        "draw" => intval($draw),
        "recordsTotal" => $totaldatas,
        "recordFiltered" => $totaldataswithfilter,
        "data" => $data
     );

     return $output; 
   }

}
?>
