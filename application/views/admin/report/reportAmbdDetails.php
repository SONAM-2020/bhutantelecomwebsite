<section class="content-header">
  <h1>
       Generate Report With Driver & Escort Information.
  </h1>
</section>
<section class="content">
  <div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Latest Ambulance Arrival</h3>
        </div>
        <div class="box-body">
          <div class="table-responsive">
            <?php echo form_open('#' , array('class' => 'edit-profile m-b30', 'enctype' => 'multipart/form-data','id'=>'movementform'));?>
                <div class="table-responsive">
                  <table id="example5" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>No.</th>
                      <th>Ambulance No.</th>
                      <th>Driver Name</th>
                      <th>Driver Phone</th>
                      <th>Escort Name</th>
                      <th>Escort Phone</th>
                      <th>Destination Hosp</th>
                      <th>Travel Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($reportDetils as $i=> $event): ?>
                    <tr>
                      <td><?=$i+1?></td>
                      <td><?php echo $event['AmbulanceNumber'];?></td>
                      <td><?php echo $event['DriverName'];?></td>
                      <td><?php echo $event['DriverPhone'];?></td>
                      <td><?php echo $event['EscortName'];?></td>
                      <td><?php echo $event['EscortPhone'];?></td>
                      <td><?php echo $event['DestinationHospital'];?></td>
                      <td><?php echo $event['AssignTime'];?></td>
                      </tr>
                      <?php endforeach;?>
                    </tbody>
                  </table>
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>  
<script>
   $(document).ready(function() {
    $('#example5').DataTable( {
        dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
    } );
} );
</script>
 