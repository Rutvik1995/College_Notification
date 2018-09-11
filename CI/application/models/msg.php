<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class msg extends  CI_Model 
 {

 	
 	function getdata()
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
		




		$query = $this->db->get();
		
 		return $query->result();
 		
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

 		function insert3($FirstName)
 	{
 		//$this->db->insert('streamsemdiv',$data);

 		$this->db->select('*');
       
     
 		$this->db->from('User');
 		$this->db->where('FirstName',$FirstName);
 	
 		
  		$query = $this->db->get();
        return  $query->result();

 	}






 	function delete($id)
 	{
 		$this->db->where('Message',$id);
 		$this->db->delete('streamsem');
 	}


 	function insert($data)
 	{
 		$this->db->insert('message',$data);
 	}


public function fetchstream($id)
	{

				$this->db->select('MsgId,MsgTitle,Message,DOM,message.Ssdid,message.Ssid,message.Stid,ReasonMessage,message.UserId,message.IsDisplay,stream.StName,semester.SemName,DivName,user.FirstName,ReasonMessage');  

		

$this->db->from('message');	
$this->db->where('MsgId',$id);	
$this->db->join('streamsemdiv', 'message.Ssdid = streamsemdiv.Ssdid');
$this->db->join('streamsem ', 'streamsemdiv.Ssid = streamsem.Ssid');
$this->db->join('stream', 'streamsem.Stid = stream.Stid');
$this->db->join('semester', 'streamsem.SemId = semester.SemId');	
$this->db->join('division', 'streamsemdiv.DivId = division.DivId');

$this->db->join('user', 'message.UserId = user.UserId');
		




		$query = $this->db->get();
		
 		return $query->result();
 		
 	}	
 
	


	function edit($data,$id)
 	{
 	$this->db->where('MsgId',$id);
    $this->db->update('message' ,$data);
 	}


}

?>