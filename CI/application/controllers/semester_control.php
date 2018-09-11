<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class semester_control extends CI_Controller
{



	function __construct()
	{
		parent:: __construct();
		$this->load->database();
		$this->load->model("semester");
		//$this->load->model("stream2");
	}


	public function index()
	{
		$data=array();
		$this->load->database();
		$this->load->model("semester");
		$this->load->helper('url');

		$this->data['result']=$this->semester->getdata();

		$this->load->view('header');
		$this->load->view('semester_display',$this->data);
		$this->load->view('footer');


	}


	public function DisplaySemester()
	{
		$data=array();
		$this->load->database();
		$this->load->model("semester");
		$this->load->helper('url');

		$this->data['result']=$this->semester->getdata();

		$this->load->view('header');
		$this->load->view('semester_display',$this->data);
		$this->load->view('footer');

	}


	
	public function SemesterInsert1()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('semester_insert');
		$this->load->view('footer');
		
	}

	
	public function SemesterInsert2()
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
		$data=array(

			
			'SemName'=>$this->input->post("txtName"),
			'IsDisplay' => $select1 



			);


		$this->semester->insert($data);
		$this->load->database();
		
		$this->load->view('header');
		$this->load->view('semester_insert');
		$this->load->view('footer');

	}





	public function SemesterEdit1()
	{
		$data=array();
		$this->load->database();
		$this->load->model("semester2");
		$this->load->helper('url');

		$id = $_GET['id'];
		//echo $id;
	

		$data['result']=$this->semester2->fetchstream($id);
		
		$this->load->view('header');			
		$this->load->view('semester_edit',$data);
		$this->load->view('footer');

		
	}

	public function SemesterEdit2()
	{
		$data=array();
		$this->load->database();
		$this->load->model("semester");
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
			'SemName'=>$this->input->post("txtName"),
			'IsDisplay' => $select1 
				
			);



		$this->semester->edit($data,$id);
		$this->load->database();
		redirect('index.php/semester_control/DisplaySemester');
		//$this->load->view('stream_display');

	}


	public function SemesterDelete1()
	{
		$data=array();
		$this->load->database();
		$this->load->model("semester2");
		$this->load->helper('url');

		$id = $_GET['id'];
		//echo $id;
	

		$data['result']=$this->semester2->fetchstream($id);
		
		$this->load->view('header');			
		$this->load->view('semester_delete',$data);
		$this->load->view('footer');

	}

	public function SemesterDelete2()
	{
		$data=array();
		$this->load->database();
		$this->load->model("semester");
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
			'SemName'=>$this->input->post("txtName"),
			'IsDisplay' => $select1 
				
			);



		$this->semester->edit($data,$id);
		$this->load->database();
		redirect('index.php/semester_control/DisplaySemester');
		//$this->load->view('stream_display');

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