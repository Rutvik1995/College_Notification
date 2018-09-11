<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class streamsemdiv extends  CI_Model 
 {

 	
 	function getdata()
 	{

 		
 $this->db->select('s.StName,str.SemName,ss.Ssid,ssd.Ssdid,ssd.IsDisplay,div.DivName');  

	$this->db->from('streamsemdiv ssd');	
	
	$this->db->join('streamsem ss', 'ssd.Ssid = ss.Ssid');
	$this->db->join('stream s', 'ss.Stid = s.Stid');
	$this->db->join('semester str', 'ss.SemId = str.SemId');	
	$this->db->join('division div', 'ssd.DivId = div.DivId');
		/*
		$this->db->select('StName,SemName,Ssid,streamsem.IsDisplay');  

		$this->db->from('streamsem');
		$this->db->join('semester', 'streamsem.SemId = semester.SemId');
		$this->db->join('stream', 'streamsem.Stid = stream.Stid');
		
		*/



		$query = $this->db->get();
		
 		return $query->result();
 		
 	}	
 	


 	function delete($id)
 	{
 		$this->db->where('SemId',$id);
 		$this->db->delete('streamsemdiv');
 	}


 	function insert($data)
 	{
 		$this->db->insert('streamsemdiv',$data);
 	}

 	function insert1($Stid,$SemId)
 	{
 		//$this->db->insert('streamsemdiv',$data);

 		$this->db->select('*');
       
     
 		$this->db->from('streamsem');
 		$this->db->where('Stid',$Stid);
 		$this->db->where('SemId',$SemId);
  		$query = $this->db->get();
        return  $query->result();

 	}



public function fetchstream($id)
	{
 $this->db->select('s.StName,str.SemName,ss.Ssid,ssd.Ssdid,ssd.IsDisplay,div.DivName');  

	$this->db->from('streamsemdiv ssd');
	$this->db->where('Ssdid',$id);
	
	$this->db->join('streamsem ss', 'ssd.Ssid = ss.Ssid');
	$this->db->join('stream s', 'ss.Stid = s.Stid');
	$this->db->join('semester str', 'ss.SemId = str.SemId');	
	$this->db->join('division div', 'ssd.DivId = div.DivId');
		$query = $this->db->get();
        return  $query->result();	
	}


	function edit($data,$id)
 	{
 	$this->db->where('Ssdid',$id);
    $this->db->update('streamsemdiv' ,$data);
 	}


}

?>