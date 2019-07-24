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
    <h1><strong>Gerador</strong> de escalas</h1>
    <h1><small>Operações de voo | NorteSul Virtual &copy;
            <?php echo date("Y");?></small>
        <br>
</section>
<section class="content container-fluid">
			<div class="row">
			<div class="col-xs-12">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Escala disponível</h3>
            </div>
			<div class="box-body table-responsive">
			<div class="alert alert-success">Atenção!<br>Se você não está confortavél com sua escala, lembre-se que você pode sempre gerar outra.</div>
			<div class="col-xs-12 col-sm-12 progress-container">
    <div class="progress progress-striped active">
        <div class="progress-bar progress-bar-success" style="width:0%"></div>
    </div>
</div>
<span class="label label-warning" id="status"></span>
                                            <table class="table table-hover table-light table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th> <center>Voo#</center></th>
														<th> <center>Decolagem</center></th>
                                                        <th> <center>Pouso</center></th>
                                                        <th> <center>Matrícula</center></th>
                                                        <th> <center>Duração</center></th>
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
        <td><center><?php echo $result->code.$result->flightnum;?></center></td>
        <td><center><?php echo $result->depicao;?></center></td>
      	<td><center><?php echo $result->arricao;?></center></td>
		<td><center><?php echo $info->registration;?></center></td>
      	<td><center><?php echo $result->flighttime;?></center></td>
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
                                                <input type="submit" name="submit" value="Reservar Escala" type="button" class="btn btn-success btn-block">
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
$("#status").text("Gerando Escala");
  $(".progress-bar").animate({
    width: "100%"
}, 15000);
$('table').delay( 15000 ).show('slow');
$('input').delay( 15000 ).show('slow');
setTimeout(function(){
  $("#status").text("Terminado").removeClass("label-warning").addClass("label-success");
}, 15000);
});
</script>
