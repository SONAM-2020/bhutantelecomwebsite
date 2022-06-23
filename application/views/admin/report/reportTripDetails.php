<section class="content-header">
  <h1>
       Generate Report With Trip Details.
  </h1>
</section>
<section class="content">
  <div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="box box-primary">
        <div class="box-header with-border">
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
                      <th>Source Hosp</th>
                      <th>Destination Hosp</th>
                      <th>Assign Time</th>
                      <th>Start Time</th>
                      <th>Destination Hosp Arrival Time</th>
                      <th>Hotel Arrival Time</th>
                      <th>Base Hosp Arrival Time</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($reportDetils as $i=> $event): ?>
                    <tr>
                      <td><?=$i+1?></td>
                      <td><?php echo $event['AmbulanceNumber'];?></td>
                      <td><?php echo $event['BaseHospital'];?></td>
                      <td><?php echo $event['DestinationHospital'];?></td>
                      <td><?php echo $event['AssignTime'];?></td>
                      <td><?php echo $event['StartTime'];?></td>
                      <td><?php echo $event['DHospital_Arrival_time'];?></td>
                      <td><?php echo $event['Hotel_Arrival_time'];?></td>
                      <td><?php echo $event['BHospital_Arrival_time'];?></td>
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
 