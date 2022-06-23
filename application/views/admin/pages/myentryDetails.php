<section class="content-header">
  <h1>
   Hospital Ambulance Referral Details
  </h1>
</section>
<section class="content">
  <div class="row">
  <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
  	<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">My Entry Details</h3>
        </div>
            <div class="box-body">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <h4>Name Of Based Health Facility:<span class="text-danger"> <?=$entryDetils->BaseHospital;?></span></h4>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <h4>Base Dzongkhag:<span class="text-danger"> <?=$entryDetils->BaseDzongkhag;?></span></h4>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <h4>Name Of Destination Health Facility:<span class="text-danger"> <?=$entryDetils->DestinationHospital;?></span></h4>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <h4>Destination Dzongkhag:<span class="text-danger"> <?=$entryDetils->DestinationDzongkhag;?></span></h4>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <h4>Ambulance Number:<span class="text-danger"> <?=$entryDetils->AmbulanceNumber;?></span></h4>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <h4>Driver Name:<span class="text-danger"> <?=$entryDetils->DriverName;?></span></h4>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <h4>Driver Phone Number:<span class="text-danger"> <?=$entryDetils->DriverPhone;?></span></h4>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <h4>Escort Name:<span class="text-danger"> <?=$entryDetils->EscortName;?></span></h4>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <h4>Escort Phone Number:<span class="text-danger"> <?=$entryDetils->EscortPhone;?></span></h4>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <h4>Purpose / Reason:<span class="text-danger"> <?=$entryDetils->Reason;?></span></h4>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <h4>Ambulance Assign Time:<span class="text-danger"> <?=$entryDetils->AssignTime;?></span></h4>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <h4>Trip Start Time:<span class="text-danger"> <?=$entryDetils->StartTime;?></span></h4>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <h4>Entry Date & Time:<span class="text-danger"> <?=$entryDetils->Entrydate;?></span></h4>
                    </div>
                  </div>
                  
               </div>
          </div>
        </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
    <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Ambulance On Movement</h3>
        </div>
        <div class="box-body">
          <div class="table-responsive">
            <table id="example1" class="table table-bordered">
              <thead>
              <tr>
                <th>SI No.</th>
                <th>Ambulance No.</th>
                <!-- <th>To Dzongkhag</th> -->
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              <?php foreach($t_ambulancemovement_master as $i=> $event): ?> 
                <tr>
                  <td><?=$i+1?></td>
                  <th><?php echo $event['AmbulanceNumber'];?></th>
                  <!-- <th><?php echo $event['DestinationDzongkhag'];?></th> -->
                  <td>
                    <button class="btn btn-success btn-block" onclick="viewMessage('<?php echo $event['Id'];?>')" type="button">View</button><br>
                    </td>
                  </tr>
              <?php endforeach;?>
              </tbody>
            </table>
          </div>
        </div>
    </div>
  </div>
  </div>
</section>
