<section class="content-header">
  <h1>
      Side Display Management
  </h1>
</section>
<section class="content">
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
          <h3 class="box-title">Create New Side Display</h3>
          <span><button class="btn btn-success fa-pull-right" onclick="addinfo()" type="button"><i class="fa fa-plus"></i> Add </button></span>
        </div>
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No.</th>
              <th>Image</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($t_sidedisplay as $i=> $event): ?>
            <tr>
              <td><?=$i+1?></td>
              <td><img style="width: 100px; height: 100px;" src="<?php echo $event['Image'];?>"></td>
              <td>
                <?php if($event['Status']=="Active"){ ?><span class="label label-success"><?php echo $event['Status'];?></span>
                      <?php } else{?>   
                          <span class="label label-danger"><?php echo $event['Status'];?></span>
                      <?php }?>

              </td>
              <td>
                <button type="button" class="btn btn-block btn-primary" onclick="editinfo('<?php echo $event['Id']?>','<?php echo $event['Email_Id']?>','<?php echo $event['Name']?>','<?php echo $event['Mobile_Number']?>','<?php echo $event['Role_Id']?>','<?php echo $event['Status']?>')"><i class="fa fa-edit"></i>Edit</button>
                <button type="button" class="btn btn-block btn-danger" onclick="editinfo('<?php echo $event['Id']?>','<?php echo $event['Email_Id']?>','<?php echo $event['Name']?>','<?php echo $event['Mobile_Number']?>','<?php echo $event['Role_Id']?>','<?php echo $event['Status']?>')"><i class="fa fa-edit"></i>Delete</button> 
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
<div class="modal modal-default" id="addproduct">
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
                       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <label>Images</label>
                             <label>Upload Side Display Images:<span class="text-danger">*</span></label><span style="color: red;"><i>(Image Size:370*230)</i></span>
                            <input type="file" id="images" onchange="checkfilesize(this,'images','Image_err','addBtn')" onclick="remove_err('Image_err')" name="Image" class="form-control">
                            <span id="Image_err" class="text-danger"></span>
                        </div>
                    </div>
                    
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="addproductinfo()">Save changes</button>
              </div>
            </div>
            </form>
        </div>
    </div>
</div>
<div class="modal modal-default" id="EditusersDetails">
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
                          <label>Name:</label>
                            <input type="text" id="Name1" name="Name1" class="form-control" readonly>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Email Address:</label>
                            <input type="text" id="Email1" name="Email1" class="form-control" readonly>
                        </div>
                      </div>
                    <div class="form-group">
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Designation:</label>
                            <input type="text" id="Designation1" name="Designation1" class="form-control" readonly>
                        </div>
                       <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Phone:<span class="text-danger">*</span></label>
                            <input type="text" id="Phone1" name="Phone1" onclick="remove_err('Phone1_err')" class="form-control">
                            <span id="Phone1_err" class="text-danger"></span>
                        </div>
                         
                    </div>
                    <div class="form-group">
                       <!-- <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Password: <span class="text-danger">Update the password of User*</span></label>
                            <input type="text" id="Password" name="Password" class="form-control">
                        </div> -->
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>User Type:</label>
                          <input type="text" id="role1" name="role1" class="form-control" readonly>
                        </div>
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
    $('#medelheaderspan').html('Add Side Display Image');
    $('#btnspan').html('<i class="fa fa-save"></i> Add Side Display Image');
    $('#addproduct').modal('show');
  }
function addproductinfo(){
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
      var url='<?php echo base_url();?>index.php?adminController/Addsidedisplay';
      var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#addformId").serialize()}; 
      $("#addformId").ajaxSubmit(options);
      setTimeout($.unblockUI, 600); 
      $('#addproduct').modal('hide');
}
}
  function validateaddform(){
    var retrtype=true;
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
      $('#modalheader1').html('Edit Users');
      $('#EditusersDetails').modal('show');
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
          var url='<?php echo base_url();?>index.php?adminController/EditSystemUsers';
          var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#editformId").serialize()}; 
          $("#editformId").ajaxSubmit(options);
          setTimeout($.unblockUI, 600); 
          $('#EditusersDetails').modal('hide');
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
   