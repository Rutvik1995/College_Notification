<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class user_control extends CI_Controller
{



	function __construct()
	{
		parent:: __construct();
		$this->load->database();
		$this->load->model("user");
		//$this->load->model("stream2");
	}


	public function index()
	{
		
		$data=array();
		$this->load->database();
		$this->load->model("user");
		$this->load->helper('url');

		$this->data['result']=$this->user->getdata();

		$this->load->view('header');
		$this->load->view('user_display1',$this->data);
		$this->load->view('footer');

	}


	public function DisplayUser()
	{
		$data=array();
		$this->load->database();
		$this->load->model("user");
		$this->load->helper('url');

		$this->data['result']=$this->user->getdata();

		$this->load->view('header');
		$this->load->view('user_display',$this->data);
		$this->load->view('footer');

	}


		public function DisplayUser2()
		{
			$data=array();
		$this->load->database();
		$this->load->model("user");
		$this->load->helper('url');

		$this->data['result']=$this->user->getdata2();

		$this->load->view('header');
		$this->load->view('user_display2',$this->data);
		$this->load->view('footer');

		

		}


	
	public function UserInsertF1()
	{
		$this->load->helper('url');

		$this->load->view('header');
		$this->load->view('user_insert');
		$this->load->view('footer');

		
	}

	
	public function UserInsertF2()
	{
	$checked=$this->input->post("IsAdmin");
			if(isset($checked))
			{
				$select1 = 1;
			}
			else
			{
				$select1 = 0;
			}
		

		$data=array(

			
			'Username'=>$this->input->post("txtUName"),
			'Password'=>$this->input->post("txtPass"),
			'FirstName'=>$this->input->post("txtName"),
			'Stid'=>$this->input->post("streamdb"),
			'IsAdmin' => $select1 



			);


		$this->user->insert($data);
		$this->load->database();
	
		$this->load->view('header');
		$this->load->view('user_insert');
		$this->load->view('footer');

	}


	public function UserInsertA1()
	{
		$this->load->helper('url');

		$this->load->view('header');
		$this->load->view('user_insertA');
		$this->load->view('footer');

		
	}

	
	public function UserInsertA2()
	{
	$checked=$this->input->post("IsAdmin");
			if(isset($checked))
			{
				$select1 = 1;
			}
			else
			{
				$select1 = 0;
			}
		

		$data=array(

			
			'Username'=>$this->input->post("txtUName"),
			'Password'=>$this->input->post("txtPass"),
			'FirstName'=>$this->input->post("txtName"),
			
			'IsAdmin' => $select1 



			);


		$this->user->insert($data);
		$this->load->database();
	
		$this->load->view('header');
		$this->load->view('user_insertA');
		$this->load->view('footer');

	}







	public function UserEditA1()
	{
		$data=array();
		$this->load->database();
		$this->load->model("user");
		$this->load->helper('url');

		$id = $_GET['id'];
		//echo $id;
	

		$data['result']=$this->user->fetchstream($id);
		
		$this->load->view('header');			
		$this->load->view('user_editA',$data);
		$this->load->view('footer');

		
	}

	public function UserEditA2()
	{
		$data=array();
		$this->load->database();
		$this->load->model("user");
		$this->load->helper('url');

		$id = $_GET['Did'];
		//echo $id;
	
	$checked=$this->input->post("IsAdmin");
			if(isset($checked))
			{
				$select1 = 1;
			}
			else
			{
				$select1 = 0;
			}
	

	$data=array(

			
			'Username'=>$this->input->post("txtUName"),
			'Password'=>$this->input->post("txtPass"),
			'FirstName'=>$this->input->post("txtName"),
			//'Stid'=>$this->input->post("streamdb"),
			'IsAdmin' => $select1 



			);




		$this->user->edit($data,$id);
		$this->load->database();
		redirect('index.php/user_control/DisplayUser2');
		

	}

public function UserEditF1()
	{
		$data=array();
		$this->load->database();
		$this->load->model("user");
		$this->load->helper('url');

		$id = $_GET['id'];
		//echo $id;
	

		$data['result']=$this->user->fetchstream2($id);
		
		$this->load->view('header');			
		$this->load->view('user_editF',$data);
		$this->load->view('footer');

		
	}

	public function UserEditF2()
	{
		$data=array();
		$this->load->database();
		$this->load->model("user");
		$this->load->helper('url');

		$id = $_GET['Did'];
		//echo $id;
	
	$checked=$this->input->post("IsAdmin");
			if(isset($checked))
			{
				$select1 = 1;
			}
			else
			{
				$select1 = 0;
			}
	

	$data=array(

			
			'Username'=>$this->input->post("txtUName"),
			'Password'=>$this->input->post("txtPass"),
			'FirstName'=>$this->input->post("txtName"),
			//'Stid'=>$this->input->post("streamdb"),
			'IsAdmin' => $select1 



			);




		$this->user->edit($data,$id);
		$this->load->database();
		redirect('index.php/user_control/DisplayUser');
		

	}
















public function UserDeleteA1()
	{
		$data=array();
		$this->load->database();
		$this->load->model("user");
		$this->load->helper('url');

		$id = $_GET['id'];
		//echo $id;
	

		$data['result']=$this->user->fetchstream($id);
		
		$this->load->view('header');			
		$this->load->view('user_deleteA',$data);
		$this->load->view('footer');

		
	}

	public function UserDeleteA2()
	{
		$data=array();
		$this->load->database();
		$this->load->model("user");
		$this->load->helper('url');

		$id = $_GET['Did'];
		//echo $id;
	
	$checked=$this->input->post("IsAdmin");
			if(isset($checked))
			{
				$select1 = 1;
			}
			else
			{
				$select1 = 0;
			}
	

	$data=array(

			
			'Username'=>$this->input->post("txtUName"),
			'Password'=>$this->input->post("txtPass"),
			'FirstName'=>$this->input->post("txtName"),
			//'Stid'=>$this->input->post("streamdb"),
			'IsAdmin' => $select1 



			);




		$this->user->edit($data,$id);
		$this->load->database();
		redirect('index.php/user_control/DisplayUser2');
		

	}



	public function UserDeleteF1()
	{
		$data=array();
		$this->load->database();
		$this->load->model("user");
		$this->load->helper('url');

		$id = $_GET['id'];
		//echo $id;
	

		$data['result']=$this->user->fetchstream2($id);
		
		$this->load->view('header');			
		$this->load->view('user_deleteF',$data);
		$this->load->view('footer');

	}

	public function UserDeleteF2()
	{
		$data=array();
		$this->load->database();
		$this->load->model("user");
		$this->load->helper('url');

		$id = $_GET['Did'];
		//echo $id;
	
	$checked=$this->input->post("IsAdmin");
			if(isset($checked))
			{
				$select1 = 1;
			}
			else
			{
				$select1 = 0;
			}
	

	$data=array(

			
			'Username'=>$this->input->post("txtUName"),
			'Password'=>$this->input->post("txtPass"),
			'FirstName'=>$this->input->post("txtName"),
			'Stid'=>$this->input->post("streamdb"),
			'IsAdmin' => $select1 



			);




		$this->user->edit($data,$id);
		$this->load->database();
		redirect('index.php/user_control/DisplayUser');
		

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