<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WebsiteController extends CI_Controller { 
	public function index(){
	$this->load->view('web/Index');
		$this->load->library('user_agent');
        $data['browser'] = $this->agent->browser();
        $data['browser_version'] = $this->agent->version();
        $data['os'] = $this->agent->platform();
        $data['ip_address'] = $this->input->ip_address();
        $this->CommonModel->do_insert('t_visiter_detls', $data);
	}
}

