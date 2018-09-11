<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class stream extends  CI_Model 
 {

 	
 	function getdata()
 	{


		$this->db->select('*');
 		$this->db->from('stream');
 		$query=$this->db->get();

 		return $query->result();
 		
 	}	
 	


 	function delete($id)
 	{
 		$this->db->where('Stid',$id);
 		$this->db->delete('stream');
 	}


 	function insert($data)
 	{
 		$this->db->insert('stream',$data);
 	}


 	public function fetchstream($id)
	{

		$this->db->select('*');
        $this->db->from('stream');
     
		$this->db->where('Stid',$id);
		$query1 = $this->db->get();
        return  $query1->result();	
	}


	function edit($data,$id)
 	{
 	$this->db->where('Stid',$id);
    $this->db->update('stream' ,$data);
 	}


}

?>