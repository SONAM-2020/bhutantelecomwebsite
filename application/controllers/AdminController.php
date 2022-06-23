<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {
	public function index(){
	}
    function login(){ 
        if($this->input->post('email')!="" &&  $this->input->post('password')!=""){
            $query = $this->db->get_where('t_user', array(
            'Email_Id' => $this->input->post('email')));
            if ($query->num_rows() > 0){
                $row = $query->row_array(); 
                if(password_verify($this->input->post('password'), $row['Password'])){
                    $this->session->set_userdata('UserName', $row['Name']);
                    $this->session->set_userdata('ContactNo', $row['Mobile_Number']);
                    $this->session->set_userdata('email', $row['Email_Id']);
                    $this->session->set_userdata('Image', $row['Image']);
                    $this->session->set_userdata('designation', $row['Designation']);
                    $this->session->set_userdata('userId', $row['Id']);
                    $this->session->set_userdata('Role_Id', $row['Role_Id']);
                   redirect(base_url() . 'index.php?adminController/dashboard', 'refresh');
                    return TRUE;
                }
                else{
                    $page_data['message'] = '<div class="alert alert-danger">Wrong Password! </div>';
                    $this->load->view('web/index',$page_data );
                    return FALSE;
                }
            } 
            else{
                $page_data['message'] = '<div class="alert alert-danger">Your email and password mismatch. please try agin or use forgot password if you are not sure with current password</div>';
                $this->load->view('web/index',$page_data );
                return FALSE;
            }
        } 
        else{
            $page_data['message'] = '';
            $this->load->view('web/index',$page_data );
        }
    }
    function dashboard(){
        $this->load->library('user_agent');
        $data['browser'] = $this->agent->browser();
        $data['browser_version'] = $this->agent->version();
        $data['os'] = $this->agent->platform();
        $data['ip_address'] = $this->input->ip_address();
        $this->CommonModel->do_insert('t_visiter_detls', $data);
        $page_data['t_ambulancemovement_master'] = $this->db->get_where('t_ambulancemovement_master',array('Status'=>'Active'))->result_array();
        $page_data['formSubmit']="";
        $page_data['message']="";
        if ($this->session->userdata('UserName') == null ){
            redirect(base_url(), 'refresh');
        }
        else{
            $this->load->view('admin/dashboard', $page_data);
        }
    }
    function loadpage($param1="",$param2="",$param3=""){
        $page_data['formSubmit']="";
        if($param1=="AddHostReferal"){
            $page_data['t_ambulancemovement_master'] = $this->db->get_where('t_ambulancemovement_master',array('Status'=>'Active'))->result_array();
            $page_data['t_hotel_master'] = $this->db->get_where('t_hotel_master',array('Status'=>'Active'))->result_array();
            
            $page_data['t_dzongkhag_master'] = $this->db->get_where('t_dzongkhag_master',array('enable'=>'1'))->result_array();
            $this->load->view('admin/pages/NewHostRefer', $page_data);
        }
        if($param1=="AddUsers"){
            $page_data['t_user_role'] = $this->db->get_where('t_role',array('Status'=>'Active'))->result_array();
            $page_data['t_user'] = $this->db->get('t_user')->result_array();
            $this->load->view('admin/pages/systemusers', $page_data);
        }
        if($param1=="SMS"){
            $page_data['t_sms'] = $this->db->get('t_sms')->result_array();
            $this->load->view('admin/pages/sms', $page_data);
        }
        if($param1=="Addhotel"){
            $page_data['t_dzongkhag_master'] = $this->db->get_where('t_dzongkhag_master',array('enable'=>'1'))->result_array();
             $page_data['hotel_list'] = $this->db->get('t_hotel_master')->result_array();
            $this->load->view('admin/pages/hotelinformation', $page_data);
        }
        if($param1=="Guidelines"){
            $this->load->view('admin/pages/Guidelines', $page_data);
        }
        if($param1=="AdduserUnit"){
            $page_data['role_list'] = $this->db->get('t_role')->result_array();
            $this->load->view('admin/pages/UserUnit', $page_data);
        }
        if($param1=="Entry"){
            $page_data['entryDetils'] = $this->db->get_where('t_ambulancemovement_master',array('entryby'=>$this->session->userdata('User_table_id')))->result_array();
            $this->load->view('admin/pages/myentry', $page_data);
        }
        if($param1=="entrydetails"){
            $page_data['entryDetils'] = $this->db->get_where('t_ambulancemovement_master',array('Id'=>$param2))->row();
            $this->load->view('admin/pages/myentryDetails',$page_data);
        }
        if($param1=="DestinationHospAriv"){
            $page_data['t_ambulancemovement_master'] = $this->db->get_where('t_ambulancemovement_master',array('DHospital_Status'=>'NotArrived'))->result_array();
            $this->load->view('admin/pages/DestinationHosp',$page_data);
        }
        if($param1=="BaseHospReporting"){
            $page_data['t_ambulancemovement_master'] = $this->db->get_where('t_ambulancemovement_master',array('BHospital_Status'=>'NotArrived'))->result_array();
            $this->load->view('admin/pages/BaseHosp',$page_data);
        }
        if($param1=="QuaratineReporting"){
            $page_data['t_ambulancemovement_master'] = $this->db->get_where('t_ambulancemovement_master',array('Hotel_Status'=>'NotArrived'))->result_array();
            $this->load->view('admin/pages/QuarantineHotel',$page_data);
        }
        if($param1=="rcdcentry"){
            $page_data['t_ambulancemovement_master'] = $this->db->get_where('t_ambulancemovement_master',array('Type'=>'2'))->result_array();
            $this->load->view('admin/pages/rcdcentry',$page_data);
        }
        if($param1=="userprofile"){
             $page_data['userDetils'] = $this->db->get_where('t_user',array('Id'=>$param2))->row(); 
            $this->load->view('admin/pages/UserAccount', $page_data);
        }
        if($param1=="reportIndex"){
            $this->load->view('admin/report/reportIndex');
        }
        if($param1=="generatereport"){
            $fromdate=$this->input->post('fromdate');
            $todate=$this->input->post('todate');
            // die($this->input->post('todate'));
            $query="SELECT  * FROM t_ambulancemovement_master WHERE  BHospital_Arrival_time BETWEEN '".$fromdate."' AND '".$todate."'";
            $page_data['reportDetils'] = $this->db->query($query)->result_array(); 
            $this->load->view('admin/report/reportDetails',$page_data);
        }
        if($param1=="ambDreportIndex"){
            $this->load->view('admin/report/ambDreportIndex');
        }
        if($param1=="generateambdreport"){
            $fromdate=$this->input->post('fromdate');
            $todate=$this->input->post('todate');
            // die($this->input->post('todate'));
            $query="SELECT  * FROM t_ambulancemovement_master WHERE  AssignTime BETWEEN '".$fromdate."' AND '".$todate."'";
            $page_data['reportDetils'] = $this->db->query($query)->result_array(); 
            $this->load->view('admin/report/reportAmbdDetails',$page_data);
        }
        if($param1=="reporTriptIndex"){
            $this->load->view('admin/report/reporTriptIndex');
        }
        if($param1=="generatetripreport"){
            $fromdate=$this->input->post('fromdate');
            $todate=$this->input->post('todate');
            // die($this->input->post('todate'));
            $query="SELECT  * FROM t_ambulancemovement_master WHERE  BHospital_Arrival_time BETWEEN '".$fromdate."' AND '".$todate."'";
            $page_data['reportDetils'] = $this->db->query($query)->result_array(); 
            $this->load->view('admin/report/reportTripDetails',$page_data);
        }
    }
    function Addambulancemovementform($page=""){
        $page_data['message']="";
        $page_data['messagefail']="";
        $data['Type']=$this->input->post('type');
        $data['BaseHospital']=$this->input->post('bhospital');
        $data['BaseDzongkhag']=$this->input->post('bdzongkhag');
        $data['DestinationHospital']=$this->input->post('dhospital');
        $data['DestinationDzongkhag']=$this->input->post('ddzongkhag');
        $data['RCDC_Location']=$this->input->post('rcdc');
        $data['Other_Mov_Reason']=$this->input->post('Others');
        $data['AmbulanceNumber']=$this->input->post('amnumber');
        $data['DriverName']=$this->input->post('dname');
        $data['DriverPhone']=$this->input->post('dphone');
        $data['EscortName']=$this->input->post('ename');
        $data['EscortPhone']=$this->input->post('ephone');
        $data['Reason']=$this->input->post('reason');
        $data['AssignTime']=$this->input->post('atime');
        $data['StartTime']=$this->input->post('stime');
        $data['Hotel']=$this->input->post('hotel');
        $data['Entryby']=$this->session->userdata('User_table_id');
        $data['Entrydate']=date('Y-m-d h:i:s');
        $this->CommonModel->do_insert('t_ambulancemovement_master', $data); 
        if($this->db->affected_rows()>0){

            $this->load->library('email');
            $config = array(
                'protocol'  => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => 'noreplyhram2021@gmail.com',
                'smtp_pass' => 'hhcbt@2021',
                'mailtype'  => 'html',
                'charset'   => 'utf-8'
            );
            $this->email->initialize($config);
            $this->email->set_mailtype("html");
            $this->email->set_newline("\r\n");
            $this->load->helper('string');
            $sql = "SELECT Email_Id FROM t_user";
            $query = $this->db->query($sql);
            $array = $query->result_array();
            $arr = array_column($array,"Email_Id");

            $t_mail_template=$this->db->get_where('t_mail_template', array( 'Template_Module' => 'Order'))->row()->Template_Mail_Body;
            $t_mail_template=str_replace("##ANUMBER##", ''.$this->input->post('amnumber'),  $t_mail_template);
            $t_mail_template=str_replace("##BHOSPITAL##", ''.$this->input->post('bhospital'),  $t_mail_template);
            $t_mail_template=str_replace("##DHOSPITAL##", ''.$this->input->post('dhospital'),  $t_mail_template);
            $t_mail_template=str_replace("##DNAME##", ''.$this->input->post('dname'),  $t_mail_template);
            $t_mail_template=str_replace("##DPHONE##", ''.$this->input->post('dphone'),  $t_mail_template);
            $t_mail_template=str_replace("##HNAME##", ''.$this->input->post('hotel'),  $t_mail_template);
            
            $htmlContent =$t_mail_template;
            $this->email->to($arr);
            $this->email->from('noreplyhram2021@gmail.com','High Risk Ambulance Monitoring system');
            $this->email->subject('Ambulance Movement Notification');
            $this->email->message($htmlContent);
            $this->email->send();
            $page_data['message']="";
            $page_data['messagefail']="";
            $page_data['message']="<div class='alert alert-success alert-dismissible'>Information for Ambulance <b>".$this->input->post('amnumber')."</b> moving from <b>".$this->input->post('bhospital')."</b> to <b>".$this->input->post('dhospital')."</b> has been add successfully and Email Notification has be send successfully.Thank You.</div>";
        }
        else{
            $page_data['messagefail']="<div class='alert alert-danger alert-dismissible'>Information for Ambulance <b>".$this->input->post('amnumber')."</b> moving from <b>".$this->input->post('bhospital')."</b> to <b>".$this->input->post('dhospital')."</b> is not able to add. Please try again.Thank You.</div>";
        }
        $this->load->view('admin/pages/acknowledgement', $page_data); 
    }
    
    // function Sendmessage($page=""){
    //     $page_data['message']="";
    //     $page_data['messagefail']="";
    //     $data['Email_Id']=$this->input->post('Email');
    //     $data['Password']=password_hash("hhcbt@2021", PASSWORD_BCRYPT);
    //     $data['Mobile_Number']=$this->input->post('Phone');
    //     $data['Name']=$this->input->post('Name');
    //     $data['Role_Id']=$this->input->post('role');
    //     $data['Entryby']=$this->session->userdata('User_table_id');
    //     $data['Created_date']=date('Y-m-d h:i:s');
    //     $this->CommonModel->do_insert('t_user', $data); 
    //     $page_data['t_user'] = $this->db->get('t_user')->result_array();
    //     if($this->db->affected_rows()>0){
    //         $page_data['message']="<div class='alert alert-success alert-dismissible'>User has been successfully Created</div>";
    //     }
    //     else{
    //         $page_data['messagefail']="<div class='alert alert-danger alert-dismissible'>Unable to create User. Please Try Again!";
    //     }
    //     $this->load->view('admin/pages/systemusers', $page_data); 
    // }
    // function Sendmessage($number, $message_body, $return = '0') {
    //     $this->load->helper('sendsms_helper');
    //     $sender = 'SEDEMO'; // Need to change
    //     $smsGatewayUrl = '';
    //     $apikey = '62q3z3hs4941mve32s9kf10fa5074n7'; // Need to change
    //     $textmessage = urlencode($textmessage);
    //     $api_element = '/api/web/send/';
    //     $api_params = $api_element.'?
    //     apikey='.$apikey.'&sender='.$sender.'&to='.$mobileno.'&message='.$textmessage;
    //     $smsgatewaydata = $smsGatewayUrl.$api_params;
    //     $url = $smsgatewaydata;
    //     $ch = curl_init();
    //     curl_setopt($ch, CURLOPT_POST, false);
    //     curl_setopt($ch, CURLOPT_URL, $url);
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); $output = curl_exec($ch);
    //     curl_close($ch);
    //     if(!$output){ $output = file_get_contents($smsgatewaydata); }
    //     if($return == '1'){ return $output; }else{ echo "Sent"; }
    //     }

    function AddSystemUsers($page=""){
        $page_data['message']="";
        $page_data['messagefail']="";
        $data['Email_Id']=$this->input->post('Email');
        $data['Password']=password_hash("hhcbt@2021", PASSWORD_BCRYPT);
        $data['Mobile_Number']=$this->input->post('Phone');
        $data['Name']=$this->input->post('Name');
        $data['Role_Id']=$this->input->post('role');
        $data['Entryby']=$this->session->userdata('User_table_id');
        $data['Created_date']=date('Y-m-d h:i:s');
        $this->CommonModel->do_insert('t_user', $data); 
        $page_data['t_user'] = $this->db->get('t_user')->result_array();
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
    function AddHotelInfo($page=""){
        $page_data['message']="";
        $page_data['messagefail']="";
        $data['Hotel_Name']=$this->input->post('Name');
        $data['Contact_Name']=$this->input->post('cperson');
        $data['Contact_Number']=$this->input->post('Phone');
        $data['Dzongkhag']=$this->input->post('dzongkhag');
        $data['Entryby']=$this->session->userdata('User_table_id');
        $data['Created_date']=date('Y-m-d h:i:s');
        $this->CommonModel->do_insert('t_hotel_master', $data); 
        $page_data['t_dzongkhag_master'] = $this->db->get_where('t_dzongkhag_master',array('enable'=>'1'))->result_array();
        $page_data['hotel_list'] = $this->db->get('t_hotel_master')->result_array();
        if($this->db->affected_rows()>0){
            $page_data['message']="<div class='alert alert-success alert-dismissible'>Quaratine Facility has been successfully Created</div>";
        }
        else{
            $page_data['messagefail']="<div class='alert alert-danger alert-dismissible'>Unable to create Quaratine Facility. Please Try Again!";
        }
        $this->load->view('admin/pages/hotelinformation', $page_data); 
    }
    function EditHotel(){
        $data['Status']=$this->input->post('status');
        $data['Contact_Number']=$this->input->post('Phone1');
        $this->db->where('Id', $this->input->post('EditId'));
        $this->db->update('t_hotel_master', $data);
        $page_data['t_dzongkhag_master'] = $this->db->get_where('t_dzongkhag_master',array('enable'=>'1'))->result_array();
        $page_data['hotel_list'] = $this->db->get('t_hotel_master')->result_array();
        $page_data['message']="<div class='alert alert-success alert-dismissible'>Quaratine Facility has been Editted successfully</div>";
        $this->load->view('admin/pages/hotelinformation', $page_data); 
    }
    function AddUserUnit($page=""){
        $page_data['message']="";
        $page_data['messagefail']="";
        $data['Role_Name']=$this->input->post('Name');
        $data['created_date']=date('Y-m-d h:i:s');
        $data['Entryby']=$this->session->userdata('User_table_id');
        $this->CommonModel->do_insert('t_role', $data); 
        $page_data['role_list'] = $this->db->get('t_role')->result_array();
        if($this->db->affected_rows()>0){
            $page_data['message']="<div class='alert alert-success alert-dismissible'>New User Unit has been successfully Created</div>";
        }
        else{
            $page_data['messagefail']="<div class='alert alert-danger alert-dismissible'>Unable to create user Unit. Please Try Again!";
        }
        $this->load->view('admin/pages/UserUnit', $page_data); 
    }
    function EditUserUnit(){
        $data['Status']=$this->input->post('status');
        $data['Role_Name']=$this->input->post('Name1');
        $this->db->where('Id', $this->input->post('EditId'));
        $this->db->update('t_role', $data);
        $page_data['role_list'] = $this->db->get('t_role')->result_array();
        $page_data['message']="<div class='alert alert-success alert-dismissible'>User Unit has been Editted successfully</div>";
        $this->load->view('admin/pages/UserUnit', $page_data); 
    }
    function EditAmbMovement(){
        $data['DHospital_Status']=$this->input->post('status');
        $data['DHospital_Arrival_time']=$this->input->post('atime');
        $data['DHospital_Departure_time']=$this->input->post('dtime');
        $data['DestHostEntryby']=$this->session->userdata('User_table_id');
        $this->db->where('Id', $this->input->post('EditId'));
        $this->db->update('t_ambulancemovement_master', $data);
        $page_data['t_ambulancemovement_master'] = $this->db->get('t_ambulancemovement_master')->result_array();
        $page_data['message']="<div class='alert alert-success alert-dismissible'>Ambulance movement Status and Destination Hospital Arrival & Depature time has been Add successfully</div>";
        $this->load->view('admin/pages/DestinationHosp', $page_data); 
    }
    function EditAmbReporting(){
        $data['BHospital_Status']=$this->input->post('status');
        $data['BHospital_Arrival_time']=$this->input->post('atime');
        $data['BaseHostEntryby']=$this->session->userdata('User_table_id');
        $this->db->where('Id', $this->input->post('EditId'));
        $this->db->update('t_ambulancemovement_master', $data);
        $page_data['t_ambulancemovement_master'] = $this->db->get('t_ambulancemovement_master')->result_array();
        $page_data['message']="<div class='alert alert-success alert-dismissible'>Ambulance movement Status and Destination Hospital Arrival & Depature time has been Add successfully</div>";
        $this->load->view('admin/pages/DestinationHosp', $page_data); 
    }
    function EditAmbQuaraReporting(){
        $data['Hotel_Status']=$this->input->post('status');
        $data['Hotel_Arrival_time']=$this->input->post('atime');
        $data['Hotel_Depature_time']=$this->input->post('dtime');
        $data['DriverRoom']=$this->input->post('droom');
        $data['EscortRoom']=$this->input->post('eroom');
        $data['SameRoomNo']=$this->input->post('sroom');
        $data['Hotel_Remarks']=$this->input->post('remarks');
        $data['HotelHostEntryby']=$this->session->userdata('User_table_id');
        $this->db->where('Id', $this->input->post('EditId'));
        $this->db->update('t_ambulancemovement_master', $data);
        $page_data['t_ambulancemovement_master'] = $this->db->get('t_ambulancemovement_master')->result_array();
        $page_data['message']="<div class='alert alert-su ccess alert-dismissible'>Ambulance movement Status and Destination Hospital Arrival & Depature time has been Add successfully</div>";
        $this->load->view('admin/pages/QuarantineHotel', $page_data); 
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

 


