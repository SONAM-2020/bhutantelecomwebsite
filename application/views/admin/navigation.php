<aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>uploads/<?php echo $this->session->userdata('Image');?>" onerror="this.src='<?php echo base_url();?>uploads/user1-128x128.jpg'" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('UserName');?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
       <?php if($this->session->userdata('Role_Id')=="Adminstrator"){?>
        <li class="treeview">
          <a href="#"class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/AddUsers/')">
            <i class="fa fa-laptop"></i>
            <span>User Management</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#"class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/SMS/')">
            <i class="fa fa-laptop"></i>
            <span>System SMS</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#"class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/Addhotel/')">
            <i class="fa fa-laptop"></i>
            <span>Facility Management</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#"class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/AdduserUnit/')">
            <i class="fa fa-laptop"></i>
            <span>User Unit Management</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Ambulance Movement</span>
            <span class="pull-right-container"> 
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/AddHostReferal/')"><i class="fa fa-circle-o"></i> New Entry Form</a></li>
             <li><a href="#"class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/Entry/')"><i class="fa fa-circle-o"></i> My Entry</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/DestinationHospAriv/')">
            <i class="fa fa-laptop"></i>
            <span>Destination Hospital Entry</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#"class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/QuaratineReporting/')">
            <i class="fa fa-laptop"></i>
            <span>Quarantine Facility Entry</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#"class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/BaseHospReporting/')">
            <i class="fa fa-laptop"></i>
            <span>Base Hospital Entry</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#"class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/rcdcentry/')">
            <i class="fa fa-laptop"></i>
            <span>RCDC Entry</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Reports</span> 
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/reportIndex/')"><i class="fa fa-circle-o"></i>Amb & Dzongkhag Report</a></li>
            <li><a href="#" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/ambDreportIndex/')"><i class="fa fa-circle-o"></i>Amb Driver/Escort Report</a></li>
            <li><a href="#" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/reporTriptIndex/')"><i class="fa fa-circle-o"></i>Ambulance Timing Report</a></li>
          </ul>
        </li>
        <?php } if($this->session->userdata('Role_Id')=="hhc_user"){ ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Ambulance Movement</span>
            <span class="pull-right-container"> 
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/AddHostReferal/')"><i class="fa fa-circle-o"></i> New Entry Form</a></li>
             <li><a href="#"class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/Entry/')"><i class="fa fa-circle-o"></i> My Entry</a></li>
          </ul>
        </li>

        
      <?php } if($this->session->userdata('Role_Id')=="desthospital_user"){ ?>
        <li class="treeview">
          <a href="#"class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/DestinationHospAriv/')">
            <i class="fa fa-laptop"></i>
            <span>Destination Hospital Entry</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
        </li>

      <?php } if($this->session->userdata('Role_Id')=="basehospital_user"){ ?>
        <li class="treeview">
          <a href="#"class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/BaseHospReporting/')">
            <i class="fa fa-laptop"></i>
            <span>Base Hospital Entry</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
        </li>
      <?php } if($this->session->userdata('Role_Id')=="hotel_user"){ ?>
        <li class="treeview">
          <a href="#"class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/QuaratineReporting/')">
            <i class="fa fa-laptop"></i>
            <span>Quarantine Facility Entry</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
        </li>
      <?php } ?>
        <li class="treeview">
          <a href="#"class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/Guidelines/')">
            <i class="fa fa-laptop"></i>
            <span>Application Guidelines</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#"class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/userprofile/<?php echo $this->session->userdata('userId');?>')">
            <i class="fa fa-laptop"></i>
            <span>My Account</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
        </li>
      </ul>
    </section>
  </aside>



