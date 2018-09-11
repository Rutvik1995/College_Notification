<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class stream2 extends  CI_Model 
 {


 	public function fetchstream($id)
	{

		$this->db->select('*');
        $this->db->from('stream');
     
		$this->db->where('Stid',$id);

		 $query = $this->db->get();
		 return $query->result();
		
       	
	}
}

