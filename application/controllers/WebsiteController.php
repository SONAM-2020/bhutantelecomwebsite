<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WebsiteController extends CI_Controller { 
	public function index(){
        $page_data['t_slider'] = $this->db->get_where('t_homeslider',array('Status'=>'Active'))->result_array();
        /*$page_data['t_featuredproduct'] = $this->db->get_where('t_featuredproduct',array('Status'=>'Active'))->result_array();*/
        $page_data['t_sidedisplay'] = $this->db->get_where('t_sidedisplay',array('Status'=>'Active'))->result_array();

        $query ="SELECT * FROM `t_featuredproduct` p WHERE p.`Status`='Active' AND p.`Type`='Featured'";
        $page_data['t_featuredproduct'] = $this->db->query($query)->result_array(); 
        $query ="SELECT * FROM `t_featuredproduct` p WHERE p.`Status`='Active' AND p.`Type`='New'";
        $page_data['t_newproduct'] = $this->db->query($query)->result_array(); 
        $page_data['t_news'] = $this->db->get('t_news')->result_array();
        $this->load->view('web/index',$page_data);
	}
    function loadpage($param1="",$param2=""){
        if($param1=="login"){
            $page_data['linktype']=$param1;
            $this->load->view('web/pages/login', $page_data);   
        }
       
    }
}

