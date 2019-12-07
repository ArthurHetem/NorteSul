<section class="content-header bg-white espaca">
    <div class="pull-right"><i class="fa fa-plane fa-4x text-muted"></i></div>
    <h1><strong>Flight</strong> Briefing Room</h1>
    <h1><small>Flight Operations | NorteSul Virtual &copy;
            <?php echo date("Y");?></small>
        <br>
</section>
   <section class="content container-fluid">
     <div class="alert alert-info">
       <strong>Do you know?</strong>
       <br>
       Bids are deleted 48 hours after the book!
     </div>
		<div class="row">
		   <div class="col-xs-12">
          <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-clipboard"></i>
              <h3 class="box-title">Flights on <strong>Bids</strong></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <?php if(!$bids){
                echo '<div class="alert alert-warning"><h3>Oops,</h3><p>it looks like you have not bidded on any flights yet.</p></div>';
              }else{?>
              <table class="table table-bordered text-center">
                <tbody><tr>
                  <th><h4>Flight #</h4></th>
                  <th><h4>Route</h4></th>
                  <th><h4>Aircraft</h4></th>
                  <th><h4>Departure time</h4></th>
				          <th><h4>Arrival time</h4></th>
				          <th><h4>Operation</h4></th>
                  <th><h4>OFP status</h4></th>
				          <th><h4>Options</h4></th>
                </tr>
				<?php
                   foreach($bids as $bid)
                      {
                ?>
                <?php
                     $contaRota = strlen($bid->route);

                     if ($contaRota > 0){
                       $resultaRota = "<div class='text-green'>Disponível</div>";
                     }else{
                       $resultaRota = "<div class='text-red'>Indisponível</div>";
                     }
                     ?>
				<tr id="bidbid<?php echo $bid->bidid ?>">
				   <td><?php echo $bid->code . $bid->flightnum; ?></td>
	               <td align="center"><?php echo $bid->depicao; ?> <i class="fa fa-plane"></i> <?php echo $bid->arricao; ?></td>
	               <td align="center"><?php echo $bid->aircraft; ?> (<?php echo $bid->registration?>)</td>
	               <td><?php echo $bid->deptime;?></td>
	               <td><?php echo $bid->arrtime;?></td>
                 <td><?php echo $resultaRota; ?></td>
                 <td><i class="fa fa-check text-green"></i></td>
	               <td>
		              <p><a href="<?php echo url('/schedules/brief/'.$bid->id);?>"><button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></button></a></p>
		           </td>
				<?php } ?>
              </tbody></table>
            <?php } ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        </div><!-- /.row -->
    </section>
    <!-- /.content -->
