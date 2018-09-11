<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class streamsem_control extends CI_Controller
{



	function __construct()
	{
		parent:: __construct();
		$this->load->database();
		$this->load->model("streamsem");
		//$this->load->model("stream2");
	}


	public function index()
	{
		$data=array();
		$this->load->database();
		$this->load->model("streamsem");
		$this->load->helper('url');

		$this->data['result']=$this->streamsem->getdata();

		$this->load->view('header');	
		$this->load->view('streamsem_display',$this->data);
		$this->load->view('footer');

		
	}


	public function DisplayStreamSem()
	{
		$data=array();
		$this->load->database();
		$this->load->model("streamsem");
		$this->load->helper('url');

		$this->data['result']=$this->streamsem->getdata();

		$this->load->view('header');
		$this->load->view('streamsem_display',$this->data);
		$this->load->view('footer');


	}


	
	public function StreamSemInsert1()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('streamsem_insert');
		$this->load->view('footer');
		
	}

	

		public function StreamSemInsert2()
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
	
			'Stid'=>$this->input->post("streamdb"),
			'SemId'=>$this->input->post("semesterdb"),
			'IsDisplay' => $select1 
			);

			$this->streamsem->insert($data);
			$this->load->database();
		
			$this->load->view('header');
			$this->load->view('streamsem_insert');
			$this->load->view('footer');



		}



	public function StreamSemEdit1()
	{
		$data=array();
		$this->load->database();
		$this->load->model("streamsem");
		$this->load->helper('url');

		$id = $_GET['id'];
		//echo $id;
	

		$data['result']=$this->streamsem->fetchstream($id);
		

			$this->load->view('header');
			$this->load->view('streamsem_edit',$data);
			$this->load->view('footer');	
		
	}



	public function StreamSemEdit2()
	{
		$data=array();
		$this->load->database();
		$this->load->model("streamsem");
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
			'Stid'=>$this->input->post("streamdb"),
			'SemId'=>$this->input->post("semesterdb"),
			'IsDisplay' => $select1 
				
			);



		$this->streamsem->edit($data,$id);
		$this->load->database();
		redirect('index.php/streamsem_control/DisplayStreamSem');
	
	}


	public function StreamSemDelete1()
	{
		$data=array();
		$this->load->database();
		$this->load->model("streamsem");
		$this->load->helper('url');

		$id = $_GET['id'];
		//echo $id;
	

		$data['result']=$this->streamsem->fetchstream($id);
		
		$this->load->view('header');				
		$this->load->view('streamsem_delete',$data);
		$this->load->view('footer');
		
	}

	public function StreamSemDelete2()
	{
		$data=array();
		$this->load->database();
		$this->load->model("streamsem");
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
	

		$data=array(
			'Stid'=>$this->input->post("streamdb"),
			'SemId'=>$this->input->post("semesterdb"),
			'IsDisplay' => $select1 
				
			);


		$this->streamsem->edit($data,$id);
		$this->load->database();
		redirect('index.php/streamsem_control/DisplayStreamSem');
		
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