<section class="content-header">
  <h1>
      Report Based On Dzongkhag (High Risk to Low Risk)
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
                      <th>Base Hospital</th>
                      <th>From Dzongkhag</th>
                      <th>Source Hospital</th>
                      <th>To Dzongkhag</th>
                      <th>Reason</th>
                      <th>Travel Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($reportDetils as $i=> $event): ?>
                    <tr>
                      <td><?=$i+1?></td>
                      <td><?php echo $event['AmbulanceNumber'];?></td>
                      <td><?php echo $event['BaseHospital'];?></td>
                      <td><?php echo $event['BaseDzongkhag'];?></td>
                      <td><?php echo $event['DestinationHospital'];?></td>
                      <td><?php echo $event['DestinationDzongkhag'];?></td>
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

<!-- <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script> -->

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
 