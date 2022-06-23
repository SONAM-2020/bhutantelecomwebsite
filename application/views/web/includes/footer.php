<script src="<?php echo base_url();?>/assest/admin/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url();?>/assest/admin/bower_components/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="<?php echo base_url();?>/assest/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>/assest/admin/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url();?>/assest/admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url();?>/assest/admin/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<script src="<?php echo base_url();?>/assest/admin/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url();?>/assest/admin/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url();?>/assest/admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url();?>/assest/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="<?php echo base_url();?>/assest/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url();?>/assest/admin/bower_components/fastclick/lib/fastclick.js"></script>
<script src="<?php echo base_url();?>/assest/admin/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url();?>/assest/admin/dist/js/demo.js"></script>
<script src="<?php echo base_url();?>assest/JqueryAjaxFormSubmit.js"></script>
<script src="<?php echo base_url();?>assest/jquery.form.js"></script>
<script src="<?php echo base_url();?>assest/jquery-blockUI.js"></script>
<script type="text/javascript">
function loadpage(url){
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
  $("#mainpublicContent").load(url);
  setTimeout($.unblockUI, 1000); 
}
</script>
</body>
</html>