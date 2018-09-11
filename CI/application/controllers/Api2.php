<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';

/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            https://github.com/chriskacerguis/codeigniter-restserver
 */
class Api2 extends REST_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();

        // Configure limits on our controller methods
        // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
        $this->methods['user_get']['limit'] = 500; // 500 requests per hour per user/key
        $this->methods['user_post']['limit'] = 100; // 100 requests per hour per user/key
        $this->methods['user_delete']['limit'] = 50; // 50 requests per hour per user/key
		$this->load->model('Api_model');

        $this->load->database();
    }
/*
  public function getdata2_get($Stid){
        $Stid = $this->input->post('stid');
        
        $result = $this->Api_model->get_data($Stid);
        
        echo json_encode($result);


              if($result === FALSE)
        {
            $this->response(array('status' => 'failed'));
        }
         
        else
        {
            $this->response(array('status' => 'success'));
        }
    }

*/
    public function getdata23_get()
    {
        $Stid =  $this->get('id');
        $i=$Stid;
        $result = $this->Api_model->get_data($Stid);
        
        if(!empty($result)){
          $data['response']=1;
          $data['result'] = $result;
          $data['message']="test";
           $data['message']=$i;
        }else{
            $data['response']=0;
        }
        echo json_encode($data);
        

    }



      public function getdata_get()
    {
        $Stid =  $this->get('id');
        $i=$Stid;
        $result = $this->Api_model->get_data($Stid);
        
        
        echo json_encode($result);
        

    }

          public function getdata2_get()
    {
        $EnrollNo =  $this->get('id');
        
        $result = $this->Api_model->getdata_student($EnrollNo);
        
        
        echo json_encode($result);
        

    }

      public function getdata3_get()
    {
        $DivName =  $this->get('id1');
        $SemName = $this->get('id2');

        $result = $this->Api_model->getdata_message($DivName,$SemName);
        
        
        echo json_encode($result);
        

    }






/*if(!empty($result)){
          $data['response']=1;
          $data['result'] = $result;
          $data['message']="test";
           $data['message']=$i;
        }else{
            $data['response']=0;
        }
        */


}