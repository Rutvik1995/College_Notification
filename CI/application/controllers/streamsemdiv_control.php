<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class streamsemdiv_control extends CI_Controller
{



	function __construct()
	{
		parent:: __construct();
		$this->load->database();
		$this->load->model("streamsemdiv");
		
	}


	public function index()
	{
		$data=array();
		$this->load->database();
		$this->load->model("streamsemdiv");
		$this->load->helper('url');

		$this->data['result']=$this->streamsemdiv->getdata();

		$this->load->view('header');
		$this->load->view('streamsemdiv_display',$this->data);
		$this->load->view('footer');
		
	}


	public function DisplayStreamSemDiv()
	{
		$data=array();
		$this->load->database();
		$this->load->model("streamsemdiv");
		$this->load->helper('url');

		$this->data['result']=$this->streamsemdiv->getdata();

		$this->load->view('header');
		$this->load->view('streamsemdiv_display',$this->data);
		$this->load->view('footer');

	}


	
	public function StreamSemDivInsert1()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('streamsemdiv_insert');
		$this->load->view('footer');

	}


		public function StreamSemDivInsert()
		{
			$this->load->database();


			$SemId=$this->input->post("semesterdb");
			$Stid=$this->input->post("streamdb");
					
			$result=$this->streamsemdiv->insert1($Stid,$SemId);
		 
		 	foreach($result as $r): 
		 	$c= $r->Ssid;
			echo $c;
 			endforeach;  

		
			$this->load->view('streamsemdiv_insert');

		}	

		public function StreamSemDivInsert2()
		{
			$this->load->database();
			$checked=$this->input->post("IsDisplay");
			if(isset($checked))
			{
				$select1 = 1;
			}
			else
			{
				$select1 = 0;
			}

			$SemId=$this->input->post("semesterdb");
			$Stid=$this->input->post("streamdb");
			$result=$this->streamsemdiv->insert1($Stid,$SemId);


			 foreach($result as $r): 
			 $c= $r->Ssid;
			 //echo $c;
 			 endforeach;  


			$data=array(
			'Ssid'=>$c,
			'DivId'=>$this->input->post("divdb"),
			'IsDisplay' => $select1
			 
			);

			$this->streamsemdiv->insert($data);
			//$this->load->database();
			
			$this->load->view('header');		
			$this->load->view('streamsemdiv_insert');
			$this->load->view('footer');

		}



	public function StreamSemDivEdit1()
	{
		$data=array();
		$this->load->database();
		$this->load->model("streamsemdiv");
		$this->load->helper('url');

		$id = $_GET['id'];
		//echo $id;
	

		$data['result']=$this->streamsemdiv->fetchstream($id);
		
		$this->load->view('header');			
		$this->load->view('streamsemdiv_edit',$data);
		$this->load->view('footer');
		
	}



	public function StreamSemDivEdit2()
	{
		$data=array();
		$this->load->database();
		$this->load->model("streamsemdiv");
		$this->load->helper('url');

		$id = $_GET['Did'];
		//echo $id;
	
	$checked=$this->input->post("IsDisplay");
			if(isset($checked))
			{
				$select1 = 1;
			}
			else
			{
				$select1 = 0;
			}
		
			$SemId=$this->input->post("semesterdb");
			$Stid=$this->input->post("streamdb");
					
			$result=$this->streamsemdiv->insert1($Stid,$SemId);
		 
		 	foreach($result as $r): 
		 	$c= $r->Ssid;
			//echo $c;
 			endforeach;  
	

		$data=array(
			'Ssid'=>$c,
			'DivId'=>$this->input->post("divdb"),
			'IsDisplay' => $select1 
				
			);



		$this->streamsemdiv->edit($data,$id);
		$this->load->database();
		redirect('index.php/streamsemdiv_control/DisplayStreamSemDiv');


	}


	public function StreamSemDivDelete1()
	{
		$data=array();
		$this->load->database();
		$this->load->model("streamsemdiv");
		$this->load->helper('url');

		$id = $_GET['id'];
		//echo $id;
	

		$data['result']=$this->streamsemdiv->fetchstream($id);
		
		$this->load->view('header');					
		$this->load->view('streamsemdiv_delete',$data);
		$this->load->view('footer');

	}

	public function StreamSemDivDelete2()
	{
		$data=array();
		$this->load->database();
		$this->load->model("streamsemdiv");
		$this->load->helper('url');

		$id = $_GET['Did'];
		echo $id;
	
	$checked=$this->input->post("IsDisplay");
			if(isset($checked))
			{
				$select1 = 1;
			}
			else
			{
				$select1 = 0;
			}
	
			$SemId=$this->input->post("semesterdb");
			$Stid=$this->input->post("streamdb");
					
			$result=$this->streamsemdiv->insert1($Stid,$SemId);
		 
		 	foreach($result as $r): 
		 	$c= $r->Ssid;
			//echo $c;
 			endforeach; 
		$data=array(
			'Ssid'=>$c,
			'DivId'=>$this->input->post("divdb"),
			'IsDisplay' => $select1 
				
			);


		$this->streamsemdiv->edit($data,$id);
		$this->load->database();
		redirect('index.php/streamsemdiv_control/DisplayStreamSemDiv');
		
	}



	public function StreamDelete()
	{

	$id = $_GET['did'];
	echo $id;
	
		$this->stream->delete($id);
			
		$data=array();
		$this->load->database();
		$this->load->model("stream");
		$this->load->helper('url');

		$this->data['result']=$this->stream->getdata();

		$this->load->view('stream_display',$this->data);

	}

}


?>