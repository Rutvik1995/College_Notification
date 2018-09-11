<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class division extends  CI_Model 
 {

 	
 	function getdata()
 	{


		$this->db->select('*');
 		$this->db->from('division');
 		$query=$this->db->get();

 		return $query->result();
 	
 	}	
 	


 	function delete($id)
 	{
 		$this->db->where('DivId',$id);
 		$this->db->delete('division');
 	}


 	function insert($data)
 	{
 		$this->db->insert('division',$data);
 	}


 	public function fetchstream($id)
	{

		$this->db->select('*');
        $this->db->from('division');
     
		$this->db->where('DivId',$id);
		$query = $this->db->get();
        return  $query->result();	
	}


	





	function edit($data,$id)
 	{
 	$this->db->where('DivId',$id);
    $this->db->update('division',$data);
 	}


}

?>