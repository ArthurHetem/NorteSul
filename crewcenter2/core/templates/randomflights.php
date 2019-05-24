<?php
/*
* phpVMS Module: Random Itinerary Builder
* Coding by Jeffrey Kobus
* www.fs-products.net
* Verion 1.3
* Dated: 03/22/2011
* Edited By Arthur Hetem 28/07/2018 V1.0D
*/
?>
<section class="content-header bg-white espaca">
    <div class="pull-right"><i class="fa fa-plane fa-4x text-muted"></i></div>
    <h1><strong>Roster</strong> generator</h1>
    <h1><small>Operações de voo | NorteSul Virtual &copy;
            <?php echo date("Y");?></small>
        <br>
</section>
<section class="content container-fluid">
			<div class="row">
			<div class="col-xs-12">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Available itinerary</h3>
            </div>
			<div class="box-body table-responsive">
			<div class="alert alert-success">Attention!<br>If you aren't confortable with this roster, remember that you can always regenerate.</div>
			<div class="col-xs-12 col-sm-12 progress-container">
    <div class="progress progress-striped active">
        <div class="progress-bar progress-bar-success" style="width:0%"></div>
    </div>
</div>
<span class="label label-warning" id="status"></span>
                                            <table class="table table-hover table-light">
                                                <thead>
                                                    <tr>
                                                        <th> <center>Flight#</th>
														<th> <center>Departure</th>
                                                        <th> <center>Arrival</th>
                                                        <th> <center>Registration</th>
                                                        <th> <center>Duration</th>
                                                    </tr>
                                                </thead>
												<tbody>
												  <?php
$pilotid = Auth::PilotID();
$user = PilotData::getPilotData($pilotid);

if (!$schedules)
    { ?>
		<span class="badge badge-roundless badge-danger">Nenhuma Rota Encontrada!</span>
		<?php
	}else{
foreach($schedules as $result){
			$info = OperationsData::getAircraftByReg($result->registration);
		?>
	<tr>
        <td><?php echo $result->code.$result->flightnum;?></td>
		<td><?php echo $info->registration;?></td>
        <td><?php echo $result->depicao;?></td>
      	<td><?php echo $result->arricao;?></td>
      	<td><?php echo $result->flighttime;?></td>
  </tr>
<?php 	}
	} ?>
												</tbody>
            </table>
<form name="bidAll" id="bidAll" action="<?php echo SITE_URL?>/index.php/randomflights/bidAll" method="post">


	<input type="hidden" name="count" value = "<?php echo count($schedules);?>"/>
	<input type="hidden" name="pilotid" value="<?php echo $pilotid;?>"/>
  <?php
	for($i = 0; $i < count($schedules); $i++)
	{
		?>
		<input type="hidden" name="schedules[<?php echo $i;?>]" value="<?php echo $schedules[$i]->id;?>">
	<?php
	}
	?>
	<p>

                                                <div class="form-group">
                                                <div class="col-md-12">
                                                <input type="submit" name="submit" value="Bid this roster" type="button" class="btn btn-success btn-block">
                                              </div>
        </div>
                </form>
        </div>
        </div>
		        </div>
        </div>
    </section>
    <!-- /.content -->
<script type="text/javascript">
$(document).ready(function(){
$('table').hide();
$('input').hide();
$("#status").text("Generating itinerary");
  $(".progress-bar").animate({
    width: "100%"
}, 15000);
$('table').delay( 15000 ).show('slow');
$('input').delay( 15000 ).show('slow');
setTimeout(function(){
  $("#status").text("Completed").removeClass("label-warning").addClass("label-success");
}, 15000);
});
</script>
