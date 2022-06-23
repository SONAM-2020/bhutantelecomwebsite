<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WebsiteController extends CI_Controller { 
	public function index(){
        $this->load->view('web/index',$page_data);
	}
    function loadpage($param1="",$param2=""){
        if($param1=="login"){
            $page_data['linktype']=$param1;
            $this->load->view('web/pages/login', $page_data);   
        }
       
    }
}

