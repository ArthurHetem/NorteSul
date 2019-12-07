    <div class="row">
    <div class="col-md-12">
            <!-- Widget: user widget style 1 --
            <div class="box box-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-white" style="height:220px;">

              <div class="widget-user-image">
                <h2 class="text-center"><span class="label label-success"><?php echo $contract->code.''.$contract->flightnum; ?></span></h2>
                <h3 class="text-center"><?php echo $contract->depicao; ?> <i class="fa fa-plane animated pulse infinite"></i> <?php echo $contract->arricao; ?></h3>
                <h3 class="text-center"><?php setlocale(LC_TIME, 'en_US', 'en_US.utf-8', 'en_US.utf-8', 'english');
date_default_timezone_set('America/Sao_Paulo'); echo ucwords(strftime("%d %B %Y"));?></h3>
              </div>
              <div class="box-footer bg-black">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="description-block">
                      <h5 class="description-header">ETD</h5>
                      <span class="description-text"><?php echo $contract->deptime; ?></span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6">
                    <div class="description-block">
                      <h5 class="description-header">ETA</h5>
                      <span class="description-text"><?php echo $contract->arrtime; ?></span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          </div>
		<div class="row">
      <br>
		   <div class="col-md-12 col-xs-12">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Contract <strong>Details</strong></h3>
            </div>
            <!-- /.box-header -->
			<div class="box-body table-responsive">
                <form name="cargoops" action="<?php echo SITE_URL; ?>/index.php/CargoOps/addbid/<?php echo $contract->cid; ?>" method="post">
                <table class="table table-hover">
                   <tbody>
                       <tr>
                       <td>Flight #:</td>
                       <td><?php echo $contract->code.''.$contract->flightnum; ?></td>
                       </tr>
                       <tr>
                       <td>Aircraft:</td>
                       <td><?php echo $contract->aircraftname.' ('.$contract->aircraftreg.')'; ?></td>
                       </tr>
                       <tr>
                       <td>Departure:</td>
                       <td><?php echo $contract->depicao.' ('.$contract->depcountry.')'; ?></td>
                       </tr>
                       <tr>
                       <td>Estimated Departure:</td>
                       <td><?php echo $contract->deptime; ?></td>
                       </tr>
                       <tr>
                       <td>Arrival:</td>
                       <td><?php echo $contract->arricao.' ('.$contract->arrcountry.')'; ?></td>
                       </tr>
                       <tr>
                       <td>Estimated Arrival:</td>
                       <td><?php echo $contract->arrtime; ?></td>
                       </tr>
                       <tr>
                       <td>Estimated Distance (Perfect Circle):</td>
                       <td><?php echo $contract->distance; ?>NM</td>
                       </tr>
                       <tr>
                       <td>Cargo (Estimated):</td>
                       <td><?php echo $contract->cargoname; ?> (<?php echo $contract->cload; ?>lbs)</td>
                       </tr>
                       <tr>
                       <td>Contract Expires:</td>
                       <td><?php echo $contract->expiredate; ?></td>
                       </tr>
                       <tr>
                       <td>Altitude:</td>
                       <td><input type="number" class="form-group" style="text-transform:uppercase;" name="altitude" value="<?php echo $contract->altitude;?>" /></td>
                       </tr>
                       <tr>
                       <td>Route:</td>
                       <td><textarea name="flightroute" cols="50" rows="3"></textarea></td>
                       </tr>
                       <tr>
                       <td></td>
                       <td><input type="submit" class="btn btn-success" value="Flight!"></td>
                       </tr>
                </tbody>
              </table>
			</div>


</div>
</div>
</div>
              </section>
