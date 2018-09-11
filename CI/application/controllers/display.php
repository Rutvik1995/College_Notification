<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class display extends CI_Controller
{


	function __construct()
	{
		parent:: __construct();
		$this->load->database();
		$this->load->model("stream");
		$this->load->model("stream2");
	}


	public function index()
	{
		$data=array();
		$this->load->database();
		$this->load->model("stream");
		$this->load->helper('url');

		$this->data['result']=$this->stream->getdata();
		$this->load->view('header');
	//	$this->load->view('mainpage4');
		$this->load->view('login2');
		
		$this->load->view('footer');

	}



public function MainPage()
	{
		$data=array();
		$this->load->database();
		$this->load->model("stream");
		$this->load->helper('url');

		$this->data['result']=$this->stream->getdata();
		$this->load->view('header');
		$this->load->view('mainpage4');

		
		$this->load->view('footer');

	}

public function wrong()
{

	{
		$data=array();
		$this->load->database();
		$this->load->model("stream");
		$this->load->helper('url');

		$this->data['result']=$this->stream->getdata();
		$this->load->view('header');
		$this->load->view('mainpage');

		
		$this->load->view('footer');

	}


}




public function Login()
	{
		$data=array();
		$this->load->database();
	
		$this->load->helper('url');
		$this->load->model('user');
		
		
			$Username=$this->input->post("txtUser");
			$Password=$this->input->post("txtPass");
		
		$result = $this->user->validate($Username,$Password);

		if(!empty($result))
		{
			$this->load->helper('url');
			$this->load->view('header');
		$this->load->view('mainpage4');
		$this->load->view('footer');
		//redirect('index.php/display/MainPage');
		}
		else
		{
		redirect('index.php/display2');	
		}		



		
	}




	public function DisplayStream()
	{
		$data=array();
		$this->load->database();
		$this->load->model("stream");
		$this->load->helper('url');

		$this->data['result']=$this->stream->getdata();

		$this->load->view('header');
		$this->load->view('stream_display',$this->data);
		$this->load->view('footer');

	}







	
	public function StreamInsert1()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('stream_insert');
		$this->load->view('footer');
		
	}

	
	public function StreamInsert2()
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

			
			'StName'=>$this->input->post("txtName"),
			'IsDisplay' => $select1 



			);


		$this->stream->insert($data);
		$this->load->database();
		$this->load->view('header');
		$this->load->view('stream_insert');
		$this->load->view('footer');

	}





	public function StreamEdit1()
	{
		$data=array();
		$this->load->database();
		$this->load->model("stream2");
		$this->load->helper('url');

		$id = $_GET['id'];
		//echo $id;
	

		$data['result']=$this->stream2->fetchstream($id);
		
		
		$this->load->view('header');			
		$this->load->view('stream_edit',$data);
		$this->load->view('footer');

		
		
	}

	public function StreamEdit2()
	{
		$data=array();
		$this->load->database();
		$this->load->model("stream");
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
			'StName'=>$this->input->post("txtName"),
			'IsDisplay' => $select1 
				
			);



		$this->stream->edit($data,$id);
		$this->load->database();
		
		//$this->load->view('stream_display');
		redirect('index.php/display/DisplayStream');
	}


	public function StreamDelete1()
	{
		$data=array();
		$this->load->database();
		$this->load->model("stream2");
		$this->load->helper('url');

		$id = $_GET['id'];
		//echo $id;
	

		$data['result']=$this->stream2->fetchstream($id);
		
		$this->load->view('header');					
		$this->load->view('stream_delete',$data);
		$this->load->view('footer');

	}

	public function StreamDelete2()
	{
		$data=array();
		$this->load->database();
		$this->load->model("stream");
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
			'StName'=>$this->input->post("txtName"),
			'IsDisplay' => $select1 
				
			);



		$this->stream->edit($data,$id);
		$this->load->database();
		redirect('index.php/display/DisplayStream');
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



		public function DisplaySemester()
		{
			$this->load->helper('url');
			
			$this->load->controller('Semester_control');
			 // $this->semester_control->index();
		}



}





?>