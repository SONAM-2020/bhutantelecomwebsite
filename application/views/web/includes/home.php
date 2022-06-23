<?php
  error_reporting(0);
?>
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b style="color: blue;">HRAM SYSTEM</b></a>
  </div>
  <div class="login-box-body">
    <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
          <img src="<?php echo base_url();?>uploads/new.png">
      </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h2 class="login-box-msg" style="color: blue;">Sign in to start your session</h2>
  </div>
  </div>
    <?php echo form_open('?adminController/login' , array('class' =>'form-horizontal','id' => 'loginform'));?>
        <?php if($message!=''){?>
          <div class="form-group has-feedback" id="mismatcherr" >
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <span class="text-danger"> <?php echo $message;?></span>
              </div>
          </div>
        <?php }?>
        <span id="messagetodisplay"></span>
        <div class="form-group has-feedback">
          <input type="email" name="email" onclick="remove_err('email_err')" id="email" class="form-control" placeholder="Email">
          <span id="email_err" class="text-danger"></span>
        </div>        
        <div class="form-group has-feedback">
          <input type="password" id="password" onclick="remove_err('password_err')" name="password" class="form-control" placeholder="Password">
          <span id="password_err" class="text-danger"></span>
        </div>
        <div class="row">
          <div class="col-xs-4">
          </div>
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <button type="button" onclick="login()" class="btn btn-primary btn-block btn-flat">Log In</button>
          </div>
        </div>
    </form>
  </div>
</div>
<footer>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  style="background-color: white;">
    <h5 style="text-align: center;"><strong>COPYRIGHT &copy; 2021 <a href="https://www.bhutansyncits.com">DEVELOPED BY : BHUTANSYNC INFOTECH SOLUTION</a>.</strong> ALL RIGHTS RESERVED.</h5>
    </div>
  </footer>

<script type="text/javascript">
  function login(){
  if(validate()){
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
     $('#loginform').submit();
      setTimeout($.unblockUI, 600);
  }
}
function validate(){
  var retval=true;
  if($('#email').val()==""){
    $('#email_err').html('Please provide your email');
    retval=false;
  }
  if($('#password').val()==""){
     $('#password_err').html('Your password is required'); 
     retval=false;
  }
  return retval;
}
function remove_err(err_Id){
  $('#'+err_Id).html('');
}
function loadforgotpassword(){
  $('#loginsection').hide();
  $('#forgotpass').show()
}
</script>