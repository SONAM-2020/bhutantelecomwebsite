<section class="content-header">
  <h1>
      Quarantine Facility Management
  </h1>
</section>
<section class="content">
  <!--  <div class="callout callout-info">
        <h4>Reminder!</h4>
        HHCC | AMT SYSTEM will automatically create password for all the User that you create.The system created password (hhcbt@2021)
      </div> -->
      <?php  
        if($message!='Undefined' && $message!=''){
      ?>
      <div class="row" id="messageId">
              <div class="col-xs-12 col-sm-12 col-md-12 col-la-12">
                  <h5 style="text-align: center;"><?=$message?></h5>
              </div>
          </div>
      <?php
      } if($messagefail!='Undefined' && $messagefail!=''){
      ?>
      <div class="row" id="messageId">
              <div class="col-xs-12 col-sm-12 col-md-12 col-la-12">
                  <h5 style="text-align: center;"><?=$messagefail?></h5>
              </div>
          </div>
      <?php
      }
      ?>
  <div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Create New Quarantine Facility</h3>
          <span><button class="btn btn-success fa-pull-right" onclick="addinfo()" type="button"><i class="fa fa-plus"></i> Add New Quarantine Hotel</button></span>
        </div>
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No.</th>
              <th>Name of Hotel</th>
              <th>Hotel Contact Name</th>
              <th>Hotel Contact Number</th>
              <th>Dzongkhag</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($hotel_list as $i=> $event): ?>
            <tr>
              <td><?=$i+1?></td>
              <td><?php echo $event['Hotel_Name'];?></td>
              <td><?php echo $event['Contact_Name'];?></td>
              <td><?php echo $event['Contact_Number'];?></td>
              <td><?php echo $event['Dzongkhag'];?></td>
              <td>
                <?php if($event['Status']=="Active"){ ?><span class="label label-success"><?php echo $event['Status'];?></span>
                      <?php } else{?>   
                          <span class="label label-danger"><?php echo $event['Status'];?></span>
                      <?php }?>

              </td>
              <td>
                <button type="button" class="btn btn-block btn-primary" onclick="editinfo('<?php echo $event['Id']?>','<?php echo $event['Hotel_Name']?>','<?php echo $event['Contact_Name']?>','<?php echo $event['Contact_Number']?>','<?php echo $event['Dzongkhag']?>','<?php echo $event['Status']?>')"><i class="fa fa-edit"></i>Edit</button> 
              </td>
              </tr>
              <?php endforeach;?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="modal modal-default" id="addhotelDetails">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header" style="background: green;">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><span id="medelheaderspan"></span></h4>
          </div>
          <?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'addformId', 'enctype' => 'multipart/form-data'));?>
          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Name Of Quarantine Facility:<span class="text-danger">*</span></label>
                            <input type="text" id="Name" onclick="remove_err('Name_err')" name="Name" class="form-control">
                            <span id="Name_err" class="text-danger"></span>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Contact Person Name:<span class="text-danger">*</span></label>
                            <input type="text" id="cperson" onclick="remove_err('cperson_err')" name="cperson" class="form-control">
                            <span id="cperson_err" class="text-danger"></span>
                        </div>
                      </div>
                    <div class="form-group">
                       <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Contact Number:<span class="text-danger">*</span></label>
                            <input type="text" id="Phone" onclick="remove_err('Phone_err')" name="Phone" class="form-control">
                            <span id="Phone_err" class="text-danger"></span>
                        </div>
                         <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Dzongkhag: <span class="text-danger">*</span></label>
                          <select id="dzongkhag" onclick="remove_err('dzongkhag_err')" class="form-control" name="dzongkhag">
                            <option value="">Select Dzongkhag</option>
                              <?php  
                                foreach($t_dzongkhag_master as $i=> $dzo):
                              ?>
                                <option value="<?=$dzo['dzongkhagname'];?>"> <?=$dzo['dzongkhagname'];?></option>
                              <?php 
                                endforeach; 
                              ?>
                          </select>
                          <span id="dzongkhag_err" class="text-danger"></span>
                        </div>
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="addhotelinfo()">Save changes</button>
              </div>
            </div>
            </form>
        </div>
    </div>
</div>
<div class="modal modal-default" id="EdithotelDetails">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header" style="background: green;">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><span id="modalheader1"></span></h4>
          </div>
          <?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'editformId', 'enctype' => 'multipart/form-data'));?>
          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Name Of Quarantine Facility:</label>
                            <input type="text" id="Name1" name="Name1" class="form-control" readonly>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Contact Person Name:</label>
                            <input type="text" id="Email1" name="Email1" class="form-control" readonly>
                        </div>
                      </div>
                    <div class="form-group">
                       <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Contact Number:<span class="text-danger">*</span></label>
                            <input type="text" id="Phone1" name="Phone1" onclick="remove_err('Phone1_err')" class="form-control">
                            <span id="Phone1_err" class="text-danger"></span>
                        </div>
                         <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Dzongkhag:</label>
                          <input type="text" id="role1" name="role1" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                         <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Status:<span class="text-danger">*</span></label>
                          <select id="status" onclick="remove_err('status_err')" class="form-control" name="status">
                            <option value="">User Status</option>
                            <option value="Active">Active</option>
                            <option value="InActive">InActive</option>
                          </select>
                          <span id="status_err" class="text-danger"></span>
                        </div>
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                <input type="hidden" name="EditId" id="EditId">
                <button type="button" class="btn btn-primary" onclick="Editusersinfo()">Save changes</button>
              </div>
            </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
  setTimeout(function(){
      $('#messageId').hide();
  }, 5000);
 $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
 function addinfo(){
    $('#actiontype').val('add');
    $('#medelheaderspan').html('Add Quarantine Facility');
    $('#btnspan').html('<i class="fa fa-save"></i> Add New Quarantine Facility');
    $('#addhotelDetails').modal('show');
  }
function addhotelinfo(){
  if(validateaddform()){
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
      var url='<?php echo base_url();?>index.php?adminController/AddHotelInfo';
      var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#addformId").serialize()}; 
      $("#addformId").ajaxSubmit(options);
      setTimeout($.unblockUI, 600); 
      $('#addhotelDetails').modal('hide');
}
}
  function validateaddform(){
    var retrtype=true;
    if($('#cperson').val()==""){
      $('#cperson_err').html('Please Enter Contact Person Name.');
      retrtype=false;
    }
    if($('#role').val()==""){
      $('#role_err').html('Please Select a Role Id.');
      retrtype=false;
    }
    if($('#Name').val()==""){
      $('#Name_err').html('Please Enter Full Name.');
      retrtype=false;
    }
    if($('#Phone').val()==""){
      $('#Phone_err').html('Please Enter a Mobile_Number.');
      retrtype=false;
    }
    return retrtype;
  }
   function editinfo(Editid,email,name,phone,rol,tatus){
      $('#EditId').val(Editid);
      $('#Name1').val(name);
      $('#Email1').val(email);
      $('#Phone1').val(phone);
      $('#role1').val(rol);
      $('#status').val(tatus);
      $('#actiontype').val('add');
      $('#modalheader1').html('Edit Quarantine Facility');
      $('#EdithotelDetails').modal('show');
    }
    function Editusersinfo(){
    if(validateeditform()){
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
          var url='<?php echo base_url();?>index.php?adminController/EditHotel';
          var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#editformId").serialize()}; 
          $("#editformId").ajaxSubmit(options);
          setTimeout($.unblockUI, 600); 
          $('#EdithotelDetails').modal('hide');
    }
  }
    function validateeditform(){
      var retrtype=true;
      if($('#status').val()==""){
        $('#status_err').html('Please select status');
        retrtype=false;
      }
      if($('#Phone1').val()==""){
        $('#Phone1_err').html('Please Update the phone Number');
        retrtype=false;
      }
      return retrtype;
    }
  </script>
   