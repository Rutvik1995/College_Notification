<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class user extends  CI_Model 
 {

 	
 	function getdata()
 	{

 		
 		//$this->db->select('*');
		//$this->db->from('streamsem');
		
		$this->db->select('UserId,StName,Username,user.FirstName,user.IsAdmin,stream.StName');  

		$this->db->from('user');
		$this->db->join('stream', 'user.Stid = stream.Stid');
		
		



		$query = $this->db->get();
		
 		return $query->result();
 		
 	}	
 	


 	function getdata2()
 	{	
 		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('IsAdmin', '1');
		$query = $this->db->get();
        return  $query->result();

 	}




 	function delete($id)
 	{
 		$this->db->where('SemId',$id);
 		$this->db->delete('streamsem');
 	}


 	function insert($data)
 	{
 		$this->db->insert('user',$data);
 	}


public function fetchstream($id)
	{
		
		
		$this->db->select('*');  

		$this->db->from('user');
		$this->db->where('UserId',$id);
		
		


		$query = $this->db->get();
        return  $query->result();	
	}


public function fetchstream2($id)
	{
		
		
		
		$this->db->select('UserId,StName,user.FirstName,user.IsAdmin,stream.StName,Username');  

		$this->db->from('user');
		$this->db->where('UserId',$id);
		$this->db->join('stream', 'user.Stid = stream.Stid');
		
		


		$query = $this->db->get();
        return  $query->result();	
	}






	function edit($data,$id)
 	{


 	$this->db->where('UserId',$id);
    $this->db->update('user' ,$data);
 	}


 	function validate($Username,$Password)
 	{
 			$this->db->select('*');  
 			$this->db->from('user');
 		$this->db->where('Username', $Username);
		$this->db->where('Password', $Password);


		$query = $this->db->get();
        return  $query->result();	
 	}





}

?>