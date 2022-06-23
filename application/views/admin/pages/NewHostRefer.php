<section class="content-header">
  <h1>
   Hospital Ambulance Referral
  </h1>
</section>
<section class="content">
  <div class="row">
  <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
  	<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Quick Entry For Hospital Ambulance Referral</h3>
        </div>
          <?php echo form_open('#' , array('class' => 'edit-profile m-b30', 'enctype' => 'multipart/form-data','id'=>'ambulancemovementform'));?>
            <div class="box-body">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <label>Ambulance Movement Type:<span class="text-danger">*</span></label>
                      <select id="type"  onchange="showfield(this.value)" onclick="remove_err('type_err')" class="form-control" name="type">
                        <option value="">Select Type Of Movement</option>
                        <option value="1"> Hospital Referral</option>
                        <option value="2"> Covid Sample Drop</option>
                        <option value="3"> Others</option>
                      </select>
                        <span id="type_err"  class="text-danger"></span>
                    </div>
                  </div>
                  <!-- <div id="csection" style="display:none"> -->
                  <div class="form-group">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <label>RCDC:<span class="text-danger">*</span></label>
                      <select id="rcdc" onclick="remove_err('rcdc_err')" class="form-control" name="rcdc">
                        <option value="">Select RCDC</option>
                            <option value="RCDC Thimphu">RCDC Thimphu</option>
                            <option value="RCDC JDWNRH">RCDC JDWNRH</option>
                            <option value="RCDC Phuntsholing">RCDC Phuntsholing</option>
                            <option value="RCDC Gelephu">RCDC Gelephu</option>
                            <option value="RCDC Mongar">RCDC Mongar</option>
                      </select>
                      <span id="rcdc_err" class="text-danger"></span>
                    </div>
                  </div>
                <!-- </div> -->
                <div id="Othersection" style="display:none">
                  <div class="form-group">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <label>Specify:<span class="text-danger">*</span></label>
                      <input type="text" name="Others" id="Others" class="form-control" onclick="removeer('bhospital_err')">
                    </div>
                  </div>
                </div>
                  <div id="hsection" style="display:none">
                    <div class="form-group">
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <label>Name Of Based Health Facility:<span class="text-danger">*</span></label>
                        <input type="text" name="bhospital" id="bhospital" class="form-control" placeholder="Name Of Based Health Facility" onclick="removeer('bhospital_err')">
                          <span id="bhospital_err"  class="text-danger"></span>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <label>Base Dzongkhag:<span class="text-danger">*</span></label>
                        <select id="bdzongkhag" onclick="remove_err('bdzongkhag_err')" class="form-control" name="bdzongkhag">
                          <option value="">Select Base Dzongkhag</option>
                            <?php  
                              foreach($t_dzongkhag_master as $i=> $dzo):
                            ?>
                              <option value="<?=$dzo['dzongkhagname'];?>"> <?=$dzo['dzongkhagname'];?></option>
                            <?php 
                              endforeach; 
                            ?>
                        </select>
                        <span id="bdzongkhag_err" class="text-danger"></span>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <label>Name Of Destination Health Facility:<span class="text-danger">*</span></label>
                        <input type="text" name="dhospital" id="dhospital" class="form-control" placeholder="Name Of Destination Health Facility" onclick="removeer('dhospital_err')">
                          <span id="dhospital_err"  class="text-danger"></span>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <label>Destination Dzongkhag:<span class="text-danger">*</span></label>
                        <select id="ddzongkhag" onclick="remove_err('ddzongkhag_err')" class="form-control" name="ddzongkhag">
                          <option value="">Select Base Dzongkhag</option>
                            <?php  
                              foreach($t_dzongkhag_master as $i=> $dzo):
                            ?>
                              <option value="<?=$dzo['dzongkhagname'];?>"> <?=$dzo['dzongkhagname'];?></option>
                            <?php 
                              endforeach; 
                            ?>
                        </select>
                        <span id="ddzongkhag_err" class="text-danger"></span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <label>Quarantine Hotel:<span class="text-danger">*</span></label>
                      <select id="hotel" onclick="remove_err('hotel_err')" class="form-control" name="hotel">
                        <option value="">Select Hotel</option>
                          <?php  
                            foreach($t_hotel_master as $i=> $dzo):
                          ?>
                            <option value="<?=$dzo['Hotel_Name'];?>"> <?=$dzo['Hotel_Name'];?></option>
                          <?php 
                            endforeach; 
                          ?>
                      </select>
                      <span id="hotel_err" class="text-danger"></span>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <label>Ambulance Number:<span class="text-danger">*</span></label>
                      <input type="text" name="amnumber" id="amnumber" class="form-control" placeholder="BG-1-0001" onclick="removeer('amnumber_err')">
                        <span id="amnumber_err"  class="text-danger"></span>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <label>Driver Name:<span class="text-danger">*</span></label>
                      <input type="text" name="dname" id="dname" class="form-control" placeholder="Driver Name" onclick="removeer('dname_err')">
                        <span id="dname_err"  class="text-danger"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <label>Driver Phone Number:<span class="text-danger">*</span></label>
                      <input type="Number" name="dphone" id="dphone" class="form-control" onclick="removeer('dphone_err')">
                        <span id="dphone_err"  class="text-danger"></span>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <label>Escort Name:<span class="text-danger">*</span></label>
                      <input type="text" name="ename" id="ename" class="form-control" placeholder="Escort Name" onclick="removeer('ename_err')">
                        <span id="ename_err"  class="text-danger"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <label>Escort Phone Number:<span class="text-danger">*</span></label>
                      <input type="text" name="ephone" id="ephone" class="form-control" onclick="removeer('ephone_err')">
                        <span id="ephone_err"  class="text-danger"></span>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <label>Purpose / Reason:<span class="text-danger">*</span></label>
                      <input type="text" name="reason" id="reason" class="form-control" placeholder="Purpose / Reason" onclick="removeer('reason_err')">
                        <span id="reason_err"  class="text-danger"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <label>Ambulance Assign Time:<span class="text-danger">*</span></label>
                      <input type="text" name="atime" id="atime" class="form-control" onclick="removeer('atime_err')" value="<?php echo date("Y-m-d H:i:s");?>">
                        <span id="atime_err"  class="text-danger"></span>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <label>Trip Start Time:<span class="text-danger">*</span></label>
                      <input type="text" name="stime" id="stime" class="form-control" value="<?php echo date("Y-m-d H:i:s");?>" onclick="removeer('stime_err')">
                        <span id="stime_err"  class="text-danger"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <label>Entry By:</label>
                      <input type="text" name="entryby" id="entryby" class="form-control" value="<?php echo $this->session->userdata('UserName');?>" readonly>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <label>Entry Date & Time:</label>
                      <input type="text" name="entydate" id="entydate" class="form-control" value="<?php echo date("Y-m-d H:i:s");?>" readonly>
                    </div>
                  </div>
               </div>
          </div>
        </div>
        <div class="box-footer">
          <button type="button" onclick="submitForm()" class="btn btn-primary pull-right">Submit</button>
        </div>
    </form>
    </div>
  </div>
  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
    <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Ambulance On Movement</h3>
        </div>
        <div class="box-body">
          <div class="table-responsive">
            <table id="example1" class="table table-bordered">
              <thead>
              <tr>
                <th>No.</th>
                <th>Ambulance No.</th>
                <!-- <th>To Dzongkhag</th> -->
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              <?php foreach($t_ambulancemovement_master as $i=> $event): ?> 
                <tr>
                  <td><?=$i+1?></td>
                  <th><?php echo $event['AmbulanceNumber'];?></th>
                  <!-- <th><?php echo $event['DestinationDzongkhag'];?></th> -->
                  <td>
                    <button class="btn btn-success btn-block" onclick="viewMessage('<?php echo $event['Id'];?>')" type="button">View</button><br>
                    </td>
                  </tr>
              <?php endforeach;?>
              </tbody>
            </table>
          </div>
        </div>
    </div>
  </div>
  </div>
</section>
<script type="text/javascript">
  function showfield(val){
    if(val==1){
        $('#hsection').show();
      }
      if(val==2){
         $('#csection').show();
      }
      if(val==3){
        $('#Othersection').show();
      }
      else{
        $('#Hospitalsection').hide();
        $('#csection').hide();
        $('#Othersection').hide();
      }
    }
  	function submitForm(){
    if(validateform()){
      $.blockUI
      ({ 
        css: 
        { 
              border: 'none', 
              padding: '15px', 
              backgroundColor: '#000', 
              '-webkit-border-radius': '10px', 
              '-moz-border-radius': '10px', 
              opacity: .5, 
              color: '#fff' 
        } 
      });
      var url='<?php echo base_url();?>index.php?adminController/Addambulancemovementform/';
      var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#ambulancemovementform").serialize()}; 
      $("#ambulancemovementform").ajaxSubmit(options);
      setTimeout($.unblockUI, 600); 
    }
    }
    function validateform(){
  	var returntype=true;
    
  	// if($('#bhospital').val()==""){
  	// 	$('#bhospital_err').html('Base Health Facility is required');	
  	// 	returntype=false;
  	// 	}
   //    if($('#bdzongkhag').val()==""){
   //      $('#bdzongkhag_err').html('Base Dzongkhag is required'); 
   //      returntype=false;
   //    }
   //    if($('#dhospital').val()==""){
   //      $('#dhospital_err').html('Destination Health Facility is required'); 
   //      returntype=false;
   //    }
   //    if($('#ddzongkhag').val()==""){
   //    $('#ddzongkhag_err').html('Destination Dzongkhag is required'); 
   //    returntype=false;
   //    }
      if($('#amnumber').val()==""){
        $('#amnumber_err').html('Ambulance Number is required'); 
        returntype=false;
      }
      if($('#dname').val()==""){
        $('#dname_err').html('Driver Name is required'); 
        returntype=false;
      }
      
      if($('#hotel').val()==""){
        $('#hotel_err').html('Please Select Hotel'); 
        returntype=false;
      }      
      if($('#dphone').val()==""){
      $('#dphone_err').html('Driver Phone Number is required'); 
      returntype=false;
      }
      if($('#ename').val()==""){
        $('#ename_err').html('Escort Name is required'); 
        returntype=false;
      }
      if($('#ephone').val()==""){
        $('#ephone_err').html('Escort Phone Number is required'); 
        returntype=false;
      }
      if($('#reason').val()==""){
      $('#reason_err').html('Purpose/Reason is required'); 
      returntype=false;
      }
      if($('#atime').val()==""){
        $('#atime_err').html('Assign Time is required'); 
        returntype=false;
      }
      if($('#stime').val()==""){
        $('#stime_err').html('Start Time is required'); 
        returntype=false;
      }
  		return returntype;
  	}
    function removeer(errid){
  		$('#'+errid).html('');	
  	}
</script>