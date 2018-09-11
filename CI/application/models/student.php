<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class student extends  CI_Model 
 {

 	
 	function getdata()
 	{

 		
 $this->db->select('StudentId,FirstName,LastName,Gender,MobileNo,EmailId,student.Ssdid,IdNo,EnrollNo,stream.StName,semester.SemName,DivName,streamsem.Ssid,division.DivId,IdNo,EnrollNo,stream.Stid,semester.SemId,student.IsDisplay');  

	$this->db->from('student');	
	
$this->db->join('streamsemdiv', 'student.Ssdid = streamsemdiv.Ssdid');
$this->db->join('streamsem ', 'streamsemdiv.Ssid = streamsem.Ssid');
$this->db->join('stream', 'streamsem.Stid = stream.Stid');
$this->db->join('semester', 'streamsem.SemId = semester.SemId');	
$this->db->join('division', 'streamsemdiv.DivId = division.DivId');
		
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
 		$this->db->insert('student',$data);
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

 	function insert2($DivId,$Ssid)
 	{
 		//$this->db->insert('streamsemdiv',$data);

 		$this->db->select('*');
       
     
 		$this->db->from('streamsemdiv');
 		$this->db->where('Ssid',$Ssid);
 		$this->db->where('DivId',$DivId);
 		
  		$query = $this->db->get();
        return  $query->result();

 	}


function login()
{
	
} 






 	function fetchstream($id)
 	{

 		
 $this->db->select('StudentId,FirstName,LastName,Gender,MobileNo,EmailId,student.Ssdid,IdNo,EnrollNo,stream.StName,semester.SemName,DivName,streamsem.Ssid,division.DivId,IdNo,EnrollNo,stream.Stid,semester.SemId,student.IsDisplay');  

	$this->db->from('student');	
	$this->db->where('StudentId',$id);
	
$this->db->join('streamsemdiv', 'student.Ssdid = streamsemdiv.Ssdid');
$this->db->join('streamsem ', 'streamsemdiv.Ssid = streamsem.Ssid');
$this->db->join('stream', 'streamsem.Stid = stream.Stid');
$this->db->join('semester', 'streamsem.SemId = semester.SemId');	
$this->db->join('division', 'streamsemdiv.DivId = division.DivId');
		
		$query = $this->db->get();
		
 		return $query->result();
 		
 	}




	function edit($data,$id)
 	{
 	$this->db->where('StudentId',$id);
    $this->db->update('student',$data);
 	}


}

?>