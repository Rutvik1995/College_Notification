<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class division_control extends CI_Controller
{



	function __construct()
	{
		parent:: __construct();
		$this->load->database();
		$this->load->model("division");
		//$this->load->model("stream2");
	}


	public function index()
	{
		
		$data=array();
		$this->load->database();
		$this->load->model("division");
		$this->load->helper('url');

		$this->data['result']=$this->division->getdata();

		$this->load->view('header');
		$this->load->view('division_display',$this->data);
		$this->load->view('footer');

	}


	public function DisplayDivision()
	{
		$data=array();
		$this->load->database();
		$this->load->model("division");
		$this->load->helper('url');

		$this->data['result']=$this->division->getdata();

		$this->load->view('header');
		$this->load->view('division_display',$this->data);
		$this->load->view('footer');

	}


	
	public function DivisionInsert1()
	{
		$this->load->helper('url');

		$this->load->view('header');
		$this->load->view('division_insert');
		$this->load->view('footer');

		
	}

	
	public function DivisionInsert2()
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

			
			'DivName'=>$this->input->post("txtName"),
			'DivRefer'=>$this->input->post("txtRef"),
			'IsDisplay' => $select1 



			);


		$this->division->insert($data);
		$this->load->database();
	
		$this->load->view('header');
		$this->load->view('division_insert');
		$this->load->view('footer');

	}





	public function DivisionEdit1()
	{
		$data=array();
		$this->load->database();
		$this->load->model("division");
		$this->load->helper('url');

		$id = $_GET['id'];
		//echo $id;
	

		$data['result']=$this->division->fetchstream($id);
		
		$this->load->view('header');			
		$this->load->view('division_edit',$data);
		$this->load->view('footer');

		
	}

	public function DivisionEdit2()
	{
		$data=array();
		$this->load->database();
		$this->load->model("division");
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



		$this->division->edit($data,$id);
		$this->load->database();
		redirect('index.php/division_control/DisplayDivision');
		

	}


	public function DivisionDelete1()
	{
		$data=array();
		$this->load->database();
		$this->load->model("division");
		$this->load->helper('url');

		$id = $_GET['id'];
		//echo $id;
	

		$data['result']=$this->division->fetchstream($id);
		
		$this->load->view('header');			
		$this->load->view('division_delete',$data);
		$this->load->view('footer');

	}

	public function DivisionDelete2()
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
			'DivName'=>$this->input->post("txtName"),
			'DivRefer'=>$this->input->post("txtRef"),
			'IsDisplay' => $select1 
				
			);



		$this->division->edit($data,$id);
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