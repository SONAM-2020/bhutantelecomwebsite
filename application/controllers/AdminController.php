<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {
	public function index(){
	}

    function loadpage($param1="",$param2="",$param3=""){
        $page_data['formSubmit']="";
        if($param1=="AddUsers"){
            $page_data['t_role'] = $this->db->get_where('t_role',array('Status'=>'Active'))->result_array();
            $page_data['t_user'] = $this->db->get('t_user_master')->result_array();
            $this->load->view('admin/pages/systemusers', $page_data);
        }
         if($param1=="Addslider"){
            $page_data['t_slider'] = $this->db->get('t_homeslider')->result_array();
            $this->load->view('admin/pages/homeslider', $page_data);
        }
        if($param1=="featuredproduct"){
            $page_data['t_featuredproduct'] = $this->db->get('t_featuredproduct')->result_array();
            $this->load->view('admin/pages/featuredproduct', $page_data);
        }
        if($param1=="Addsidedisplay"){
            $page_data['t_sidedisplay'] = $this->db->get('t_sidedisplay')->result_array();
            $this->load->view('admin/pages/sidedisplay', $page_data);
        }
        if($param1=="News"){
            $page_data['t_news'] = $this->db->get('t_news')->result_array();
            $this->load->view('admin/pages/News', $page_data);
        }
    }
    function AddSystemUsers($page=""){
        $page_data['message']="";
        $page_data['messagefail']="";
        $data['Email']=$this->input->post('Email');
        $data['Password']=password_hash("bt@2022", PASSWORD_BCRYPT);
        $data['Contact_No']=$this->input->post('Phone');
        $data['Name']=$this->input->post('Name');
        $data['Role_Id']=$this->input->post('role');
        $data['Entry_by']=$this->session->userdata('User_Id');
        $data['Created_date']=date('Y-m-d h:i:s');
        $this->CommonModel->do_insert('t_user_master', $data); 


        $page_data['t_role'] = $this->db->get_where('t_role',array('Status'=>'Active'))->result_array();
        $page_data['t_user'] = $this->db->get('t_user_master')->result_array();
        if($this->db->affected_rows()>0){
            $page_data['message']="<div class='alert alert-success alert-dismissible'>User has been successfully Created</div>";
        }
        else{
            $page_data['messagefail']="<div class='alert alert-danger alert-dismissible'>Unable to create User. Please Try Again!";
        }
        $this->load->view('admin/pages/systemusers', $page_data); 
    }
    function EditSystemUsers(){
        $data['Status']=$this->input->post('status');
        $data['Mobile_Number']=$this->input->post('Phone1');
        // $data['Password']=password_hash($this->input->post('Password'), PASSWORD_BCRYPT);
        $this->db->where('Id', $this->input->post('EditId'));
        $this->db->update('t_user', $data);
        $page_data['t_user'] = $this->db->get('t_user')->result_array();
        $page_data['message']="<div class='alert alert-success alert-dismissible'>User has been Editted successfully</div>";
        $this->load->view('admin/pages/systemusers', $page_data); 
    }
    function Addslider(){
        $data['Name']=$this->input->post('Name');
        $data['Desicription']=$this->input->post('Description');
        $data['URL']=$this->input->post('pageurl');
        $data['Status']='Active';
        $new_file_name = $_FILES["Image"]["name"];
        $file_directory = "uploads/slider/";
        if(!is_dir($file_directory)){
            mkdir($file_directory,0777,TRUE);
        }
        if($new_file_name!=""){
          move_uploaded_file($_FILES["Image"]["tmp_name"], $file_directory . $new_file_name);
          $data['image']=$file_directory . $new_file_name;
        }
         $this->CommonModel->do_insert('t_homeslider', $data);
         $page_data['t_slider'] = $this->db->get('t_homeslider')->result_array();
         if($this->db->affected_rows()>0){
            $page_data['message']="<div class='alert alert-success alert-dismissible'>Slider has been successfully Created</div>";
        }
        else{
            $page_data['messagefail']="<div class='alert alert-danger alert-dismissible'>Unable to create Slider. Please Try Again!";
        }
        $this->load->view('admin/pages/homeslider', $page_data); 

    }
    function Addfeatureproduct(){
        $data['Name']=$this->input->post('Name');
        $data['Description']=$this->input->post('Description');
        $data['Price']=$this->input->post('price');
        $data['Status']='Active';
        $new_file_name = $_FILES["Image"]["name"];
        $file_directory = "uploads/FeatureProduct/";
        if(!is_dir($file_directory)){
            mkdir($file_directory,0777,TRUE);
        }
        if($new_file_name!=""){
          move_uploaded_file($_FILES["Image"]["tmp_name"], $file_directory . $new_file_name);
          $data['image']=$file_directory . $new_file_name;
        }
         $this->CommonModel->do_insert('t_featuredproduct', $data);
         $page_data['t_featuredproduct'] = $this->db->get('t_featuredproduct')->result_array();
         if($this->db->affected_rows()>0){
            $page_data['message']="<div class='alert alert-success alert-dismissible'>Featured Product has been successfully Created</div>";
        }
        else{
            $page_data['messagefail']="<div class='alert alert-danger alert-dismissible'>Unable to create Featured Product. Please Try Again!";
        }
        $this->load->view('admin/pages/featuredproduct', $page_data); 

    }

    function Addsidedisplay(){
        $data['Status']='Active';
        $new_file_name = $_FILES["Image"]["name"];
        $file_directory = "uploads/sidedisplay/";
        if(!is_dir($file_directory)){
            mkdir($file_directory,0777,TRUE);
        }
        if($new_file_name!=""){
          move_uploaded_file($_FILES["Image"]["tmp_name"], $file_directory . $new_file_name);
          $data['image']=$file_directory . $new_file_name;
        }
         $this->CommonModel->do_insert('t_sidedisplay', $data);
         $page_data['t_sidedisplay'] = $this->db->get('t_sidedisplay')->result_array();
         if($this->db->affected_rows()>0){
            $page_data['message']="<div class='alert alert-success alert-dismissible'>Side Display has been successfully Created</div>";
        }
        else{
            $page_data['messagefail']="<div class='alert alert-danger alert-dismissible'>Unable to Side Display. Please Try Again!";
        }
        $this->load->view('admin/pages/sidedisplay', $page_data); 

    }
    function Addnews(){
        $data['Name']=$this->input->post('Name');
        $data['Description']=$this->input->post('Description');
        $data['Type']=$this->input->post('type');
        $data['Status']='Active';
        $data['Date']=date('Y-m-d');
        $new_file_name = $_FILES["Image"]["name"];
        $file_directory = "uploads/News/";
        if(!is_dir($file_directory)){
            mkdir($file_directory,0777,TRUE);
        }
        if($new_file_name!=""){
          move_uploaded_file($_FILES["Image"]["tmp_name"], $file_directory . $new_file_name);
          $data['image']=$file_directory . $new_file_name;
        }
         $this->CommonModel->do_insert('t_news', $data);
         $page_data['t_news'] = $this->db->get('t_news')->result_array();
         if($this->db->affected_rows()>0){
            $page_data['message']="<div class='alert alert-success alert-dismissible'>News & Announcement has been successfully Created</div>";
        }
        else{
            $page_data['messagefail']="<div class='alert alert-danger alert-dismissible'>Unable to create News & Announcement. Please Try Again!";
        }
        $this->load->view('admin/pages/News', $page_data); 

    }


    function UpdateUserDetails(){
        $data['Mobile_Number']=$this->input->post('Phone');
        if(!empty($_FILES["Image"]["name"])){
            $fle="./uploads/".$this->input->post('currentlogoinivalue');
            if (file_exists($fle)){
                unlink($fle);
            }
            move_uploaded_file($_FILES['Image']['tmp_name'],'./uploads/'.$_FILES["Image"]["name"]);
            $data['Image']=$_FILES["Image"]["name"];
        }
        // die($this->input->post('uId'));
        $this->db->where('Id', $this->input->post('uId'));
        $this->db->update('t_user', $data);
        $page_data['userDetils'] =$this->CommonModel->getuserDetails($this->input->post('uId'));
        $page_data['message']="<div class='alert alert-success alert-dismissible'>Update Information successfully</div>";
        $this->load->view('admin/pages/UserAccount', $page_data);

    }
    function updatepassword($param1=""){
        $page_data['message']="";
        $page_data['messagefail']="";
        $data['Password']=password_hash($this->input->post('cpassword'), PASSWORD_BCRYPT);
            $this->db->where('Id', $this->input->post('uId'));
            $this->db->update('t_user`', $data);
            if($this->db->affected_rows()>0){
                 $page_data['message']="<div class='alert alert-success alert-dismissible'>Your Password is updated successfully. Please logout and login back</div>";
            }
            else{
                $page_data['message']="<div class='alert alert-danger alert-dismissible'>Not able to update your Password. Please try Again</div>";
            } 
            $page_data['userDetils'] =$this->CommonModel->getuserDetails($this->input->post('uId'));
             $this->load->view('admin/pages/UserAccount', $page_data);
    }
    function logout($param=''){  
        $this->session->unset_userdata(0);
        $this->session->sess_destroy();
        $this->session->set_flashdata('logout_notification', 'logged_out');
        redirect(base_url().'index.php?adminController/login', 'refresh');
    }

}
