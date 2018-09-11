<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class semester extends  CI_Model 
 {

 	
 	function getdata()
 	{


		$this->db->select('*');
 		$this->db->from('semester');
 		$query=$this->db->get();

 		return $query->result();
 		
 	}	
 	


 	function delete($id)
 	{
 		$this->db->where('SemId',$id);
 		$this->db->delete('semester');
 	}


 	function insert($data)
 	{
 		$this->db->insert('semester',$data);
 	}


 	public function fetchstream($id)
	{

		$this->db->select('*');
        $this->db->from('semester');
     
		$this->db->where('SemId',$id);
		$query = $this->db->get();
        return  $query->result();	
	}


	





	function edit($data,$id)
 	{
 	$this->db->where('SemId',$id);
    $this->db->update('semester' ,$data);
 	}


}

?>