<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class student_control extends CI_Controller
{



	function __construct()
	{
		parent:: __construct();
		$this->load->database();
		$this->load->model("student");
		
	}


	public function index()
	{
		$data=array();
		$this->load->database();
		$this->load->model("student");
		$this->load->helper('url');

		$this->data['result']=$this->student->getdata();

		$this->load->view('header');
		$this->load->view('student_display',$this->data);
		$this->load->view('footer');
		
	}


	public function DisplayStudent()
	{
		$data=array();
		$this->load->database();
		$this->load->model("student");
		$this->load->helper('url');

		$this->data['result']=$this->student->getdata();

		$this->load->view('header');
		$this->load->view('student_display',$this->data);
		$this->load->view('footer');

	}


	
	public function StudentInsert1()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('student_insert');
		$this->load->view('footer');

	}

	public function StudentInsert()
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
					
			$result=$this->student->insert1($Stid,$SemId);
		 
		 	foreach($result as $r): 
		 	$Ssid= $r->Ssid;
			//echo $Ssid;			
 			endforeach;  

 			//echo $Ssid;


 		$DivId=$this->input->post("divdb");
		$result=$this->student->insert2($DivId,$Ssid);

		foreach($result as $r): 
		 	$c= $r->Ssdid;
			//echo $Ssdid;
 			endforeach;  

 			$data=array(
			
			'FirstName'=>$this->input->post("txtFName"),
			'LastName'=>$this->input->post("txtLName"),
			'Gender'=>$this->input->post("gender"),
			'MobileNo'=>$this->input->post("txtNumber"),
			'EmailId'=>$this->input->post("txtEmail"),
			'IdNo'=>$this->input->post("txtID"),
			'EnrollNo'=>$this->input->post("txtEnrollment"),
			'Ssdid'=>$c,
			'IsDisplay' => $select1
			 
			);

 			$this->student->insert($data);


 			$this->load->view('header');
			$this->load->view('student_insert');
			$this->load->view('footer');
		}	


		




		public function StudentInsert2()
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
			$DivId=$this->input->post("divdb");
			$result=$this->streamsemdiv->insert1($Stid,$SemId,$DivId);


			 foreach($result as $r): 
			 $c= $r->Ssdid;
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



	public function StudentEdit1()
	{
		$data=array();
		$this->load->database();
		$this->load->model("student");
		$this->load->helper('url');

		$id = $_GET['id'];
		//echo $id;
	

		$data['result']=$this->student->fetchstream($id);
		
		$this->load->view('header');			
		$this->load->view('student_edit',$data);
		$this->load->view('footer');
		
	}



	public function StreamSemDivEdit2()
	{
		$data=array();
		$this->load->database();
		$this->load->model("student");
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
					
			$result=$this->student->insert1($Stid,$SemId);
		 
		 	foreach($result as $r): 
		 	$Ssid= $r->Ssid;
			//echo $Ssid;			
 			endforeach;  

 			//echo $Ssid;


 		$DivId=$this->input->post("divdb");
		$result=$this->student->insert2($DivId,$Ssid);

		foreach($result as $r): 
		 	$c= $r->Ssdid;
			//echo $Ssdid;
 			endforeach;  

 			$data=array(
			
			'FirstName'=>$this->input->post("txtFName"),
			'LastName'=>$this->input->post("txtLName"),
			'Gender'=>$this->input->post("gender"),
			'MobileNo'=>$this->input->post("txtNumber"),
			'EmailId'=>$this->input->post("txtEmail"),
			'IdNo'=>$this->input->post("txtID"),
			'EnrollNo'=>$this->input->post("txtEnrollment"),
			'Ssdid'=>$c,
			'IsDisplay' => $select1

			 
			);



		$this->student->edit($data,$id);
		$this->load->database();
		redirect('index.php/student_control/DisplayStudent');


	}


	public function StudentDelete1()
	{
		$data=array();
		$this->load->database();
		$this->load->model("student");
		$this->load->helper('url');

		$id = $_GET['id'];
		//echo $id;
	

		$data['result']=$this->student->fetchstream($id);
		
		$this->load->view('header');					
		$this->load->view('student_delete',$data);
		$this->load->view('footer');

	}

	public function StudentDelete2()
	{
		$data=array();
		$this->load->database();
		$this->load->model("student");
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
					
			$result=$this->student->insert1($Stid,$SemId);
		 
		 	foreach($result as $r): 
		 	$Ssid= $r->Ssid;
			//echo $Ssid;			
 			endforeach;  

 			//echo $Ssid;


 		$DivId=$this->input->post("divdb");
		$result=$this->student->insert2($DivId,$Ssid);

		foreach($result as $r): 
		 	$c= $r->Ssdid;
			//echo $Ssdid;
 			endforeach;  

 			$data=array(
			
			'FirstName'=>$this->input->post("txtFName"),
			'LastName'=>$this->input->post("txtLName"),
			'Gender'=>$this->input->post("gender"),
			'MobileNo'=>$this->input->post("txtNumber"),
			'EmailId'=>$this->input->post("txtEmail"),
			'IdNo'=>$this->input->post("txtID"),
			'EnrollNo'=>$this->input->post("txtEnrollment"),
			'Ssdid'=>$c,
			'IsDisplay' => $select1

			 
			);
	
			
		$this->student->edit($data,$id);
		$this->load->database();
		redirect('index.php/student_control/DisplayStudent');
		
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