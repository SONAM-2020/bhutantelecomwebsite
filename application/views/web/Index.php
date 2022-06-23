<?php header('Access-Control-Allow-Origin: *'); ?>
<?php $this->load->view('web/includes/head.php'); ?> 
<body class="hold-transition login-page" style="background-image: url('<?php echo base_url();?>uploads/background.jpg');">
    <div id="mainpublicContent">
    	<?php $this->load->view('web/includes/home.php'); ?> 
    </div>
  <?php
      $this->load->view('web/includes/footer.php');
  ?>
 
