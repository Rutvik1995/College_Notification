<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class msg_controll extends CI_Controller
{



	function __construct()
	{
		parent:: __construct();
		$this->load->database();
		$this->load->model("msg");
		//$this->load->model("stream2");
	}


	public function index()
	{
		
		$data=array();
		$this->load->database();
		$this->load->model("msg");
		$this->load->helper('url');

		$this->data['result']=$this->msg->getdata();

		$this->load->view('header');
		$this->load->view('msg_display2',$this->data);
		$this->load->view('footer');

	}


	public function DisplayMsg()
	{
		$data=array();
		$this->load->database();
		$this->load->model("msg");
		$this->load->helper('url');

		$this->data['result']=$this->msg->getdata();

		$this->load->view('header');
		$this->load->view('msg_display2',$this->data);
		$this->load->view('footer');

	}

	public function DisplayMsg1()
	{
		$data=array();
		$this->load->database();
		$this->load->model("msg");
		$this->load->helper('url');

		$this->data['result']=$this->msg->getdata();

		$this->load->view('header');
		$this->load->view('msg_display1',$this->data);
		$this->load->view('footer');

	}




	

	
	public function MsgInsert1()
	{
		$this->load->helper('url');

		$this->load->view('header');
		$this->load->view('msg_insert');
		$this->load->view('footer');

		
	}

	
	public function MsgInsert2()
	{
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
					
			$result=$this->msg->insert1($Stid,$SemId);
		 
		 	foreach($result as $r): 
		 	$Ssid= $r->Ssid;
			//echo $Ssid;			
 			endforeach;  

 			//echo $Ssid;


 		$DivId=$this->input->post("divdb");
		$result=$this->msg->insert2($DivId,$Ssid);

			foreach($result as $r): 
		 	$c= $r->Ssdid;
			//echo $Ssdid;
 			endforeach;  


			$FirstName=$this->input->post("txtSend");
			$result=$this->msg->insert3($FirstName);

			foreach($result as $r): 
		 	$c1= $r->UserId;
			//echo $Ssdid;
 			endforeach;  
 		

 			date_default_timezone_set('Asia/Kolkata');
			$date=date('d-m-Y H:i');




		$data=array(

			
			'MsgTitle'=>$this->input->post("txtTitle"),
			'Message'=>$this->input->post("txtMessage"),
			'ReasonMessage'=>$this->input->post("txtReason"),
			
			
			'Stid'=>$this->input->post("streamdb"),
			'UserId'=>$c1,
			'DOM'=>$date,
			'Ssdid'=>$c,
			'Ssid'=>$Ssid,				
			'IsDisplay' => $select1 



			);


		$this->msg->insert($data);
		$this->load->database();
	
		$this->load->view('header');
		$this->load->view('msg_insert');
		$this->load->view('footer');

	}





	public function MsgEdit1()
	{
		$data=array();
		$this->load->database();
		$this->load->model("msg");
		$this->load->helper('url');

		$id = $_GET['id'];
		//echo $id;
	

		$data['result']=$this->msg->fetchstream($id);
		
		$this->load->view('header');			
		$this->load->view('msg_edit',$data);
		$this->load->view('footer');

		
	}

	public function MsgEdit2()
	{
		$data=array();
		$this->load->database();
		$this->load->model("msg");
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
					
			$result=$this->msg->insert1($Stid,$SemId);
		 
		 	foreach($result as $r): 
		 	$Ssid= $r->Ssid;
			//echo $Ssid;			
 			endforeach;  

 			//echo $Ssid;


 		$DivId=$this->input->post("divdb");
		$result=$this->msg->insert2($DivId,$Ssid);

			foreach($result as $r): 
		 	$c= $r->Ssdid;
			//echo $Ssdid;
 			endforeach;  


			$FirstName=$this->input->post("txtSend");
			$result=$this->msg->insert3($FirstName);

			foreach($result as $r): 
		 	$c1= $r->UserId;
			//echo $Ssdid;
 			endforeach;  
 		

 			date_default_timezone_set('Asia/Kolkata');
			$date=date('d-m-Y H:i');




		$data=array(

			
			'MsgTitle'=>$this->input->post("txtTitle"),
			'Message'=>$this->input->post("txtMessage"),
			'ReasonMessage'=>$this->input->post("txtReason"),
			
			
			'Stid'=>$this->input->post("streamdb"),
			'UserId'=>$c1,
			'DOM'=>$date,
			'Ssdid'=>$c,
			'Ssid'=>$Ssid,				
			'IsDisplay' => $select1 



			);


	
		$this->msg->edit($data,$id);
		$this->load->database();
		redirect('index.php/msg_controll/Displaymsg1');
		

	}


	public function MsgDelete1()
	{
		$data=array();
		$this->load->database();
		$this->load->model("msg");
		$this->load->helper('url');

		$id = $_GET['id'];
		//echo $id;
	

		$data['result']=$this->msg->fetchstream($id);
		
		$this->load->view('header');			
		$this->load->view('msg_delete',$data);
		$this->load->view('footer');

	}

	public function UserDelete2()
	{
		$data=array();
		$this->load->database();
		$this->load->model("msg");
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
	

		$data=array(
			'DivName'=>$this->input->post("txtName"),
			'DivRefer'=>$this->input->post("txtRef"),
			'IsDisplay' => $select1 
				
			);



		$this->msg->edit($data,$id);
		$this->load->database();
		redirect('index.php/division_control/DisplayDivision');
		

	}



	public function DivisionDelete()
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