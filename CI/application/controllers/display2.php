<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class display2 extends CI_Controller
{


	function __construct()
	{
		parent:: __construct();
		$this->load->database();
		$this->load->model("stream");
		$this->load->model("stream2");
		$this->load->model("user");
	}


	public function index()
	{
		$data=array();
		$this->load->database();
		$this->load->model("user");
		$this->load->helper('url');

		$this->load->view('header');
		$this->load->view('mainpage');
		$this->load->view('login2');
		
		$this->load->view('footer');

	}

}
?>