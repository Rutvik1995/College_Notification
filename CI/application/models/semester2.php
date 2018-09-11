<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class semester2 extends  CI_Model 
 {


 	public function fetchstream($id)
	{

		$this->db->select('*');
        $this->db->from('semester');
     
		$this->db->where('SemId',$id);

		 $query = $this->db->get();
		 return $query->result();
		
       	
	}
}

