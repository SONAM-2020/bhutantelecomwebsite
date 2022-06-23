<section class="content-header">
  <h1>
      Hospital Ambulance Referral Entry
  </h1>
</section>
<section class="content">
  <!--  <div class="callout callout-info">
        <h4>Reminder!</h4>
        HHCC | AMT SYSTEM will automatically create password for all the User that you create.The system created password (hhcbt@2021)
      </div> -->
  <div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">My Entry</h3>
        </div>
        <?php echo form_open('#' , array('class' => 'edit-profile m-b30', 'enctype' => 'multipart/form-data','id'=>'movementform'));?>
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No.</th>
              <th>Ambulance No.</th>
              <th>Base Hospital</th>
              <th>From Dzongkhag</th>
              <th>Source Hospital</th>
              <th>To Dzongkhag</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($entryDetils as $i=> $event): ?>
            <tr>
              <td><?=$i+1?></td>
              <td><?php echo $event['AmbulanceNumber'];?></td>
              <td><?php echo $event['BaseHospital'];?></td>
              <td><?php echo $event['BaseDzongkhag'];?></td>
              <td><?php echo $event['DestinationHospital'];?></td>
              <td><?php echo $event['DestinationDzongkhag'];?></td>
              <td>
                <button type="button" class="btn btn-block btn-primary" onclick="showdetils('<?php echo $event['Id']?>')"><i class="fa fa-eye"></i>View Details</button> 
              </td>
              </tr>
              <?php endforeach;?>
            </tbody>
          </table>
        </div>
      </form>
      </div>
    </div>
  </div>
</section>

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
   function showdetils(id){
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
        var url='<?php echo base_url();?>index.php?adminController/loadpage/entrydetails/'+id;
        var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#movementform").serialize()}; 
        $("#movementform").ajaxSubmit(options);
        setTimeout($.unblockUI, 600); 
  }
  </script>
   