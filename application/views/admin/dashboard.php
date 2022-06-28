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
				              <h3></h3>
				              <h5><b>Started (Base Hospital)</b></h5>
				            </div>
				            <a href="#" class="small-box-footer"><i>From High Risk - Low Risk Area</i></a>
				          </div>
				        </div>
				        <div class="col-lg-3 col-xs-6">
				          <div class="small-box bg-green">
				            <div class="inner">
				              <h3></h3>
				              <h5><b>Reached (Destination Hospital)</b></h5>
				            </div>
				            <a href="#" class="small-box-footer"><i>From High Risk - Low Risk Area</i></a>
				          </div>
				        </div>
				        <div class="col-lg-3 col-xs-6">
				          <!-- small box -->
				          <div class="small-box bg-yellow">
				            <div class="inner">
				              <h3></h3>
				              <h5><b>Reached (Quarantine Center)</b></h5>
				            </div>
				            <a href="#" class="small-box-footer"><i>From High Risk - Low Risk Area</i></a>
				          </div>
				        </div>
				        <div class="col-lg-3 col-xs-6">
				          <div class="small-box bg-red">
				            <div class="inner">
				              <h3></h3>
				              <h5><b>Reached (Base Hospital)</b></h5>
				            </div>
				            <a href="#" class="small-box-footer"><i>From High Risk - Low Risk Area</i></a>
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
</html> 
