<!DOCTYPE html>
<html lang="en">
	<?php $this->load->view('admin/css.php'); ?> 
    <body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
        	<?php $this->load->view('admin/header.php'); ?> 
        	<?php $this->load->view('admin/navigation.php'); ?> 
		 	<div class="content-wrapper">
		 		<div id="mainContentdiv">
			 		<section class="content-header">
			    	 	<h1>
						    Home
						    <small>Dashboard</small>
					  	</h1>
				    </section>
				    <section class="content">
				      <div class="row">
				        <div class="col-lg-3 col-xs-6">
				          <div class="small-box bg-aqua">
				            <div class="inner">
				              <h3><?php
			              		$size=sizeof($this->db->get_where('t_ambulancemovement_master', array(
						            'Status' => 'Active'
			    			        ))->result_array());
			    			        if($size>0){
			    			        	echo $size;
			    			        }
			    			        else{
			    			        	echo 0;
			    			        }
			            		?></h3>
				              <h5><b>Started (Base Hospital)</b></h5>
				            </div>
				            <a href="#" class="small-box-footer"><i>From High Risk - Low Risk Area</i></a>
				          </div>
				        </div>
				        <div class="col-lg-3 col-xs-6">
				          <div class="small-box bg-green">
				            <div class="inner">
				              <h3><?php
			              		$size=sizeof($this->db->get_where('t_ambulancemovement_master', array(
						            'DHospital_Status' => 'Arrived'
			    			        ))->result_array());
			    			        if($size>0){
			    			        	echo $size;
			    			        }
			    			        else{
			    			        	echo 0;
			    			        }
			            		?></h3>
				              <h5><b>Reached (Destination Hospital)</b></h5>
				            </div>
				            <a href="#" class="small-box-footer"><i>From High Risk - Low Risk Area</i></a>
				          </div>
				        </div>
				        <div class="col-lg-3 col-xs-6">
				          <!-- small box -->
				          <div class="small-box bg-yellow">
				            <div class="inner">
				              <h3><?php
			              		$size=sizeof($this->db->get_where('t_ambulancemovement_master', array(
						            'Hotel_Status' => 'Arrived'
			    			        ))->result_array());
			    			        if($size>0){
			    			        	echo $size;
			    			        }
			    			        else{
			    			        	echo 0;
			    			        }
			            		?></h3>
				              <h5><b>Reached (Quarantine Center)</b></h5>
				            </div>
				            <a href="#" class="small-box-footer"><i>From High Risk - Low Risk Area</i></a>
				          </div>
				        </div>
				        <div class="col-lg-3 col-xs-6">
				          <div class="small-box bg-red">
				            <div class="inner">
				              <h3><?php
			              		$size=sizeof($this->db->get_where('t_ambulancemovement_master', array(
						            'BHospital_Status' => 'Arrived'
			    			        ))->result_array());
			    			        if($size>0){
			    			        	echo $size;
			    			        }
			    			        else{
			    			        	echo 0;
			    			        }
			            		?></h3>
				              <h5><b>Reached (Base Hospital)</b></h5>
				            </div>
				            <a href="#" class="small-box-footer"><i>From High Risk - Low Risk Area</i></a>
				          </div>
				        </div>
				      </div>
				      <div class="row">
				  		<div class="col-lg-8 col-xs-8">
						  	<div class="box box-info">
						        <div class="box-header with-border">
						          <h3 class="box-title">Recently Ambulance Travelled (High Risk - Low Risk Area)</h3>
						        </div>
						        <div class="box-body">
						          <div class="table-responsive">
						            <table id="example1" class="table table-bordered table-striped">
						            <thead>
						            <tr>
						              <th>No.</th>
						              <th>Ambulance No.</th>
						              <th>Base Hospital</th>
						              <th>From Dzongkhag</th>
						              <th>Source Hospital</th>
						              <th>To Dzongkhag</th>
						              <th style="display: none;">Hotel</th>
						              <th style="display: none;">Assign Time</th>
						              <th style="display: none;">Start Time</th>
						              <th style="display: none;">Reason</th>
						              <th style="display: none;">Driver Name</th>
						              <th style="display: none;">Driver Phone</th>
						              <th style="display: none;">Escort Name</th>
						              <th style="display: none;">Escort Phone</th>
						              <th style="display: none;">Status</th>
						              <th>Action</th>
						            </tr>
						            </thead>
						            <tbody>
						            <?php foreach($t_ambulancemovement_master as $i=> $event): ?>
						            <tr>
						              <td><?=$i+1?></td>
						              <td><?php echo $event['AmbulanceNumber'];?></td>
						              <td><?php echo $event['BaseHospital'];?></td>
						              <td><?php echo $event['BaseDzongkhag'];?></td>
						              <td><?php echo $event['DestinationHospital'];?></td>
						              <td><?php echo $event['DestinationDzongkhag'];?></td>
						              <td style="display: none;"><?php echo $event['Hotel'];?></td>
						              <td style="display: none;"><?php echo $event['AssignTime'];?></td>
						              <td style="display: none;"><?php echo $event['StartTime'];?></td>
						              <td style="display: none;"><?php echo $event['Reason'];?></td>
						              <td style="display: none;"><?php echo $event['DriverName'];?></td>
						              <td style="display: none;"><?php echo $event['DriverPhone'];?></td>
						              <td style="display: none;"><?php echo $event['EscortName'];?></td>
						              <td style="display: none;"><?php echo $event['EscortPhone'];?></td>
						              <td style="display: none;">
						                <?php if($event['Status']=="Active"){ ?><span class="label label-danger"><?php echo $event['Status'];?></span>
						                      <?php } else{?>   
						                          <span class="label label-success"><?php echo $event['Status'];?></span>
						                      <?php }?>
						              </td>
						              <td>
						                <button type="button" class="btn btn-block btn-success" onclick="editinfo('<?php echo $event['Id']?>','<?php echo $event['AmbulanceNumber']?>','<?php echo $event['Reason']?>','<?php echo $event['BaseHospital']?>','<?php echo $event['BaseDzongkhag']?>','<?php echo $event['DestinationHospital']?>','<?php echo $event['DestinationDzongkhag']?>','<?php echo $event['Hotel']?>','<?php echo $event['AssignTime']?>','<?php echo $event['StartTime']?>','<?php echo $event['DriverName']?>','<?php echo $event['DriverPhone']?>','<?php echo $event['EscortName']?>','<?php echo $event['EscortPhone']?>')">View</button> 
						              </td>
						              </tr>
						              <?php endforeach;?>
						            </tbody>
						          </table>
						          </div>
						        </div>
						      </div>
						      <div class="modal modal-default" id="EditDetails">
							    <div class="modal-dialog">
							      <div class="modal-content">
							          <div class="modal-header" style="background: yellow;">
							            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							              <span aria-hidden="true">&times;</span></button>
							            <h4 class="modal-title"><span id="modalheader1"></span></h4>
							          </div>
							          <form>
							          <div class="modal-body">
							              <div class="row">
							                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							                    <div class="form-group">
							                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							                      <label>Based Health Facility:</label>
							                      <input type="text" name="bhospital" id="bhospital" class="form-control" readonly>
							                    </div>
							                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							                      <label>Base Dzongkhag:</label>
							                      <input type="text" name="bdzongkhag" id="bdzongkhag" class="form-control" readonly>
							                    </div>
							                  </div>
							                  <div class="form-group">
							                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							                      <label>Destination Health Facility:</label>
							                      <input type="text" name="dhospital" id="dhospital" class="form-control" readonly>
							                    </div>
							                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							                      <label>Destination Dzongkhag:<span class="text-danger">*</span></label>
							                      <input type="text" name="ddzongkhag" id="ddzongkhag" class="form-control" readonly>
							                    </div>
							                  </div>
							                  <div class="form-group">
							                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							                      <label>Ambulance Number:<span class="text-danger">*</span></label>
							                      <input type="text" name="amnumber" id="amnumber" class="form-control" readonly>
							                    </div>
							                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							                      <label>Purpose:<span class="text-danger">*</span></label>
							                      <input type="text" name="reason" id="reason" class="form-control" readonly>
							                    </div>
							                  </div>
							                  <div class="form-group">
							                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							                      <label>Assign Time:</label>
							                      <input type="text" name="atime" id="atime" class="form-control" readonly>
							                    </div>
							                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							                      <label>Start Time:</label>
							                      <input type="text" name="stime" id="stime" class="form-control" readonly>
							                    </div>
							                  </div>
							                  <div class="form-group">
							                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							                      <label>Driver Name:</label>
							                      <input type="text" name="dname" id="dname" class="form-control" readonly>
							                    </div>
							                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							                      <label>Driver Phone:</label>
							                      <input type="text" name="dphone" id="dphone" class="form-control" readonly>
							                    </div>
							                  </div>
							                  <div class="form-group">
							                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							                      <label>Escort Name:</label>
							                      <input type="text" name="ename" id="ename" class="form-control" readonly>
							                    </div>
							                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							                      <label>Escort Phone:</label>
							                      <input type="text" name="ephone" id="ephone" class="form-control" readonly>
							                    </div>
							                  </div>
							                  <div class="form-group">
							                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							                      <label>Name of Quarantine Center:</label>
							                      <input type="text" name="hotel" id="hotel" class="form-control" readonly>
							                    </div>
							                  </div>
							                  </div>
							              </div>
							              <div class="modal-footer">
							                <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close</button>
							              </div>
							            </div>
							            </form>
							        </div>
							    </div>
							</div>
						  </div>
						  <div class="col-lg-4 col-xs-4">
						  	<div class="box box-primary">
					            <div class="box-header with-border">
					              <h3 class="box-title">System General Information</h3>
					            </div>
					            <div class="box-body">
					              <div class="table-responsive">
						            <table class="table table-bordered">
						                <tr>
						                  <td>1.</td>
						                  <td>Total No. of Ambulance efewfTravelled</td>
						                  <td><span class="badge bg-red"><?php
			              		$size=sizeof($this->db->get_where('t_ambulancemovement_master', array(
						            'BHospital_Status' => 'Arrived'
			    			        ))->result_array());
			    			        if($size>0){
			    			        	echo $size;
			    			        }
			    			        else{
			    			        	echo 0;
			    			        }
			            		?></span></td>
						                </tr>
						                <tr>
						                  <td>2.</td>
						                  <td>Total No. of Quarantine Center</td>
						                  <td><span class="badge bg-yellow"><?php
			              		$size=sizeof($this->db->get_where('t_hotel_master', array(
						            'Status' => 'Active'
			    			        ))->result_array());
			    			        if($size>0){
			    			        	echo $size;
			    			        }
			    			        else{
			    			        	echo 0;
			    			        }
			            		?></span></td>
						                </tr>
						                <tr>
						                  <td>3.</td>
						                  <td>Total No. of Room Used</td>
						                  <td><span class="badge bg-light-blue"><?php
			              		$size=sizeof($this->db->get_where('t_ambulancemovement_master', array(
						            'Hotel_Status' => 'Arrived'
			    			        ))->result_array());
			    			        if($size>0){
			    			        	echo $size;
			    			        }
			    			        else{
			    			        	echo 0;
			    			        }
			            		?></span></td>
						                </tr>
						                <tr>
						                  <td>4.</td>
						                  <td>Total No. of System Users</td>
						                  <td><span class="badge bg-green"><?php
			              		$size=sizeof($this->db->get_where('t_user', array(
						            'Status' => 'Active'
			    			        ))->result_array());
			    			        if($size>0){
			    			        	echo $size;
			    			        }
			    			        else{
			    			        	echo 0;
			    			        }
			            		?></span></td>
						                </tr>
						                <tr>
						                  <td>4.</td>
						                  <td>Effective User Hit</td>
						                  <td><span class="badge bg-orange"><?php
			              		$size=sizeof($this->db->get_where('t_visiter_detls', array(
						            'Status' => 'Active'
			    			        ))->result_array());
			    			        if($size>0){
			    			        	echo $size;
			    			        }
			    			        else{
			    			        	echo 0;
			    			        }
			            		?></span></td>
						                </tr>
						              </table>
						              <div class="alert alert-danger alert-dismissible">
						                <h4><i class="icon fa fa-ban"></i> Note!</h4>
						                <p style="text-align: justify;">The information displayed here is based on the real data the all the system users have entered.Please make sure that all the system user has to enter the correct information.<b>LETS FIGHT COVID-19</b></p>
						              </div>
						          </div>
					            </div>
					          </div>
						  </div>
				    	</div>
				  </section>
		     	</div>
			</div>
	        <?php
			    $this->load->view('admin/footer.php');
			?> 
        </div> 
	</body>
  <script>
  $(function () {
    $('#example1').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script type="text/javascript">
   function editinfo(Editid,a,b,c,d,e,f,g,h,i,j,k,l,m){
   		$('#EditId').val(Editid);
      $('#amnumber').val(a);
      $('#reason').val(b);
      $('#bhospital').val(c);
      $('#bdzongkhag').val(d);
      $('#dhospital').val(e);
      $('#ddzongkhag').val(f);
      $('#atime').val(h);
      $('#stime').val(i);
      $('#dname').val(j);
      $('#dphone').val(k);
      $('#ename').val(l);
      $('#ephone').val(m);
      $('#hotel').val(g);
      $('#actiontype').val('add');
      $('#modalheader1').html('Recently Moving Ambulance Details');
      $('#EditDetails').modal('show');
    }
  </script>
</html> 
