<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class streamsem extends  CI_Model 
 {

 	
 	function getdata()
 	{

 		
 		//$this->db->select('*');
		//$this->db->from('streamsem');
		
		$this->db->select('StName,SemName,Ssid,streamsem.IsDisplay');  

		$this->db->from('streamsem');
		$this->db->join('semester', 'streamsem.SemId = semester.SemId');
		$this->db->join('stream', 'streamsem.Stid = stream.Stid');
		



		$query = $this->db->get();
		
 		return $query->result();
 		
 	}	
 	


 	function delete($id)
 	{
 		$this->db->where('SemId',$id);
 		$this->db->delete('streamsem');
 	}


 	function insert($data)
 	{
 		$this->db->insert('streamsem',$data);
 	}


public function fetchstream($id)
	{
		$this->db->select('StName,SemName,Ssid,streamsem.IsDisplay');  
		$this->db->from('streamsem');
		$this->db->where('Ssid',$id);
		$this->db->join('semester', 'streamsem.SemId = semester.SemId');
		$this->db->join('stream', 'streamsem.Stid = stream.Stid');
		$query = $this->db->get();
        return  $query->result();	
	}


	function edit($data,$id)
 	{
 	$this->db->where('Ssid',$id);
    $this->db->update('streamsem' ,$data);
 	}


}

?>