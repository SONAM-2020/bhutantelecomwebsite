
<section class="content-header">
  <h1>
   Generate Report Based On Dzongkhag (High Risk to Low Risk).
  </h1>
</section>
<section class="content">
  <!-- <div class="callout callout-warning">
        <h4>Reminder!</h4>
        <h5>HHCC | AMT SYSTEM will automatically create a profile picture for all the User.So now you can upload your picture here, by clicking on <b>Upload Photo Button.</b></h5>
      </div> -->
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
      </div>
      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
      <div class="box box-primary">
        <?php echo form_open('#' , array('class' => 'edit-profile m-b30', 'enctype' => 'multipart/form-data','id'=>'movementform'));?>
            <div class="box-body">
                <div class="card-body">
                    <div class="row">
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <label>From Date:</label>
                        <input type="date" id="fromdate" onclick="remove_err('fromdate_err')" name="fromdate" class="form-control">
                        <span id="fromdate_err" class="text-danger"></span>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <label>To Date:<span class="text-danger">*</span></label>
                        <input type="date" id="todate" onclick="remove_err('todate_err')" name="todate" class="form-control">
                        <span id="todate_err" class="text-danger"></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="box-footer">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                       <button type="button"  onclick="submitForm()" class="btn btn-success"> Generate</button>
                     </div>
                  </div>
                </div>
              </form>
              </div>
            </div>
            </div>
          </div>
</section>
<!-- <script src="<?php echo base_url();?>/assest/admin/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url();?>/assest/admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script> -->
<script>
  // $('#wqqw').daterangepicker({ timePicker: true, timePickerIncrement: 30, locale: { format: 'MM/DD/YYYY hh:mm A' }})
  function submitForm(){
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
      var url='<?php echo base_url();?>index.php?adminController/loadpage/generatereport/';
      var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#movementform").serialize()}; 
      $("#movementform").ajaxSubmit(options);
      setTimeout($.unblockUI, 600); 
    }
</script>