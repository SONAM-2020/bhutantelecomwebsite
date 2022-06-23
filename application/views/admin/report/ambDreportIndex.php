
<section class="content-header">
  <h1>
   Generate Report With Driver & Escort Information.
  </h1>
</section>
<section class="content">
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
                       <button type="button"  onclick="submitForm()" class="btn btn-success">Generate</button>
                     </div>
                  </div>
                </div>
              </form>
              </div>
            </div>
            </div>
          </div>
</section>
<script>
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
      var url='<?php echo base_url();?>index.php?adminController/loadpage/generateambdreport/';
      var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#movementform").serialize()}; 
      $("#movementform").ajaxSubmit(options);
      setTimeout($.unblockUI, 600); 
    }
</script>