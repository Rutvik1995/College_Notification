<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Api_model extends  CI_Model 
 {

 	
 	function get_data($Stid)
 	{

 		$retarray = array();

		$this->db->select('*');
 		$this->db->from('stream');
		if(!empty($Stid))
		{
			$this->db->where('Stid',$Stid);
		}
		
 		$query=$this->db->get();

 		if($query->num_rows() > 0)
 		{
 			$retarray = $query->result();
 		}
 		return $retarray;
 		
 	}	
 	

 
function get_data3($Stid)
{

		$this->db->select('*');
 		$this->db->from('stream');
 		if(!empty($Stid))
 		{	
 		$this->db->where('Stid',$Stid);
		}
	
		$query=$this->db->get();			
		
	
 		return $query->result();
 }	


function getdata_student($EnrollNo)
 	{

 		
 $this->db->select('StudentId,FirstName,LastName,Gender,MobileNo,EmailId,student.Ssdid,IdNo,EnrollNo,stream.StName,semester.SemName,DivName,streamsem.Ssid,division.DivId,IdNo,EnrollNo,stream.Stid,semester.SemId,student.IsDisplay');  

	$this->db->from('student');	
	
$this->db->join('streamsemdiv', 'student.Ssdid = streamsemdiv.Ssdid');
$this->db->join('streamsem ', 'streamsemdiv.Ssid = streamsem.Ssid');
$this->db->join('stream', 'streamsem.Stid = stream.Stid');
$this->db->join('semester', 'streamsem.SemId = semester.SemId');	
$this->db->join('division', 'streamsemdiv.DivId = division.DivId');
	
		if(!empty($EnrollNo))
 		{	
 		$this->db->where('EnrollNo',$EnrollNo);
		}
	



		$query = $this->db->get();
		
 		return $query->result();
 		
 	}	
 	


function getdata_message($DivName,$SemName)
 	{

 		
 		//$this->db->select('*');
		//$this->db->from('streamsem');
		
		$this->db->select('MsgId,MsgTitle,Message,DOM,message.Ssdid,message.Ssid,message.Stid,ReasonMessage,message.UserId,message.IsDisplay,stream.StName,semester.SemName,DivName,user.FirstName,ReasonMessage');  

		

$this->db->from('message');	
	
$this->db->join('streamsemdiv', 'message.Ssdid = streamsemdiv.Ssdid');
$this->db->join('streamsem ', 'streamsemdiv.Ssid = streamsem.Ssid');
$this->db->join('stream', 'streamsem.Stid = stream.Stid');
$this->db->join('semester', 'streamsem.SemId = semester.SemId');	
$this->db->join('division', 'streamsemdiv.DivId = division.DivId');

$this->db->join('user', 'message.UserId = user.UserId');
		

	if(!empty($DivName))
 		{	
 		$this->db->where('DivName',$DivName);
 		
		}

		if(!empty($SemName))
 		{	
 		$this->db->where('SemName',$SemName);
 		
		}



		$query = $this->db->get();
		
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