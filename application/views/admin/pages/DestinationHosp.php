<section class="content-header">
  <h1>
      Destination Hospital Arrival Management
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
          <h3 class="box-title">Latest Ambulance Arrival</h3>
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
              <th>Reason</th>
              <th>Status</th>
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
              <td><?php echo $event['Reason'];?></td>
              <td>
                <?php if($event['DHospital_Status']=="NotArrived"){ ?><span class="label label-danger"><?php echo $event['DHospital_Status'];?></span>
                      <?php } else{?>   
                          <span class="label label-success"><?php echo $event['DHospital_Status'];?></span>
                      <?php }?>
              </td>
              <td>
                <button type="button" class="btn btn-block btn-primary" onclick="editinfo('<?php echo $event['Id']?>','<?php echo $event['AmbulanceNumber']?>','<?php echo $event['Reason']?>','<?php echo $event['BaseHospital']?>','<?php echo $event['BaseDzongkhag']?>','<?php echo $event['DestinationHospital']?>','<?php echo $event['DestinationDzongkhag']?>','<?php echo $event['DHospital_Status']?>')"><i class="fa fa-edit"></i>Edit</button> 
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

<div class="modal modal-default" id="EditDetails">
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
                      <label>Arrival Date & Time:</label>
                      <input type="text" name="atime" id="atime" class="form-control" value="<?php echo date("Y-m-d H:i:s");?>">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <label>Depature Date & Time:</label>
                      <input type="text" name="dtime" id="ename" class="form-control" value="<?php echo date("Y-m-d H:i:s");?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <label>Arrival Status:<span class="text-danger">*</span></label>
                      <select id="status" onclick="remove_err('status_err')" class="form-control" name="status">
                        <option value="">Select Arrival Status</option>
                        <option value="NotArrived">NotArrived</option>
                        <option value="Arrived">Arrived</option>
                      </select>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <label>Entry By:<span class="text-danger">*</span></label>
                      <input type="text" name="dentryby" id="dentryby" class="form-control" value="<?php echo $this->session->userdata('UserName');?>" readonly>
                    </div>
                    
                  </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                <input type="hidden" name="EditId" id="EditId">
                <button type="button" class="btn btn-primary" onclick="EditDetails()">Save changes</button>
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
   function editinfo(Editid,a,g,b,c,d,e,f){
      $('#EditId').val(Editid);
      $('#amnumber').val(a);
      $('#reason').val(g);
      $('#bhospital').val(b);
      $('#bdzongkhag').val(c);
      $('#dhospital').val(d);
      $('#ddzongkhag').val(e);
      $('#status').val(f);
      $('#actiontype').val('add');
      $('#modalheader1').html('Edit Ambulance Arrival Status');
      $('#EditDetails').modal('show');
    }
    function EditDetails(){
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
          var url='<?php echo base_url();?>index.php?adminController/EditAmbMovement';
          var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#editformId").serialize()}; 
          $("#editformId").ajaxSubmit(options);
          setTimeout($.unblockUI, 600); 
          $('#EditDetails').modal('hide');
    }
  }
    function validateeditform(){
      var retrtype=true;
      if($('#status').val()==""){
        $('#status_err').html('Please select status');
        retrtype=false;
      }
      return retrtype;
    }
  </script>
   