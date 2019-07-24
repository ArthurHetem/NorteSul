<?php
$pilotid = Auth::$userinfo->pilotid;
$last_location 	= FltbookData::getLocation($pilotid);
$last_name = OperationsData::getAirportInfo($last_location->arricao);
?>
<section class="content-header bg-white espaca">
    <div class="pull-right"><i class="fa fa-plane fa-4x text-muted"></i></div>
    <h1><strong>Reserva</strong> de voos</h1>
    <h1><small>Operações de voo | NorteSul Virtual &copy;
            <?php echo date("Y");?></small>
        <br>
</section>
<section class="content container-fluid">
			<div class="row">
			<div class="col-xs-12">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-search"></i> Resultados da <strong>Busca</strong></h3>
            </div>
			<div class="box-body">
				<div class="row">
<?php
if(!$allroutes) {
	echo '<tr><td align="center" class="alert alert-danger">Nenhum voo encontrado!</td></tr>';
} else {
?>
<?php
foreach($allroutes as $route) {
	if($settings['disabled_ac_sched_show'] == 0) {
		# Disable 'fake' aircraft to get hide a lot of schedules at once
		$aircraft = FltbookData::getAircraftByID($route->aircraftid);
		if($aircraft->enabled != 1) {
			continue;
		}
	}

	if(Config::Get('RESTRICT_AIRCRAFT_RANKS') == 1 && Auth::LoggedIn()) {
		if($route->aircraftlevel > Auth::$userinfo->ranklevel) {
			continue;
		}
	}
?>
<div class="col-md-4">
			<div class="block full">
				<center>
					<h3>
						<strong><?php echo $route->code . $route->flightnum?><sup></sup></strong><br>
                        <img src="<?php echo SITE_URL; ?>/lib/images/airlinelogos/<?php echo $route->code;?>.png" style="height: 70px; width: auto;">
            </h3><h5>Operado por <?php if($route->code == "NSV"){ $operador = "NorteSul Virtual Airlines";}else if ($route->code == "NCS"){$operador = "CargoSul Virtual Airlines";} echo $operador;?></h5>
						<h6><?php echo $route->aircraft ;?> (<?php echo $route->registration ;?>)</h6>
						<span class="badge"><?php
				$dist = $route->distance;
				$speed = 500;
				$app = $speed / 60;
				$flttime = round($dist / $app,0) + 20;
				$hours = intval($flttime / 60);
				$minutes = (($flttime / 60) - $hours) * 60;

				if(strlen($hours) > 1) {
					echo $hours.' Horas ';
				} else {
					echo '0'.$hours.' Horas ';
				}
				if(strlen($minutes) > 1) {
					echo $minutes.' Minutos';
				} else {
					echo '0'.$minutes.' Minutos';
				}
				?></span> <?php if ($route->flighttime < 2){$resultado = "<span class='label label-success'>Curta distância</span>";}else if($route->flighttime < 7){$resultado = "<span class='label label-info'>Média distância</span>";}else if($route->flighttime < 10){$resultado = "<span class='label label-warning'>Longa distância</span>";}else {$resultado = "<span class='label label-danger'>ULTRA LONG HAUL</span>";}?><small><?php echo $resultado;?></small>
				</center>
				<ul class="pager">
					<li class="previous"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Decolagem @ <?php echo $route->deptime ;?> UTC"><?php echo $route->depicao ;?></a></li>
					<ul class="pagination text-center">
						<li>
							<?php
						 $aircraft = OperationsData::getAircraftInfo($route->aircraftid);
						 $acbidded = FltbookData::getBidByAircraft($aircraft->id);
						 $check    = SchedulesData::getBidWithRoute(Auth::$userinfo->pilotid, $route->code, $route->flightnum);

						if(Config::Get('DISABLE_SCHED_ON_BID') == true && $route->bidid != 0) {
							 echo '<div class="btn disabled"><i class="fa fa-times"></i></div>';
						 } elseif($check) {
							 echo '<div class="btn disabled" data-toggle="tooltip" data-placement="top" data-original-title="Booked!"><i class="fa fa-times"></i></div>';
						 } else {
							 echo '<a data-toggle="modal" href="'.SITE_URL.'/action.php/Fltbook/confirm?id='.$route->id.'&airline='.$route->code.'&aicao='.$route->aircrafticao.'" data-target="#confirm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add bid!"><i class="fa fa-plus"></i></a>';
						 }
						 ?>
															</li>

						<li><a href="<?php echo SITE_URL;?>/index.php/schedules/details/<?php echo $route->id;?>" target="_blank" data-toggle="tooltip" data-placement="top" title="" data-original-title="Informações do voo"><i class="fa fa-info"></i></a></li>
					</ul>
					<li class="next"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pouso @ <?php echo $route->arrtime ;?> UTC"><?php echo $route->arricao ;?></a></li>
				</ul>

			</div>
		</div>
<div class="modal fade" id="confirm">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
      </div>
    </div>
  </div>
</div>
<?php
/* END OF ONE TABLE ROW */
}
}
?>
</tbody>
</div>
<hr>
<center><a href="<?php echo url('/Fltbook') ;?>"><input type="submit" class="btn btn-info btn-block btn-flat" name="submit" value="Voltar à Busca" ></a></center></div>
<br />
</div>
</div>
</div>
</div>
</section>
<!-- Pagination => Enable it via the module settings -->
<?php if($settings['pagination_enabled'] == 1) { ?>
<style>
div.dataTables_paginate {
  float: right;
	margin-top: -25px;
}
div.dataTables_length {
    float: left;
    margin: 0;
}
div.dataTables_filter {
    float: right;
    margin: 0;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script type="text/javascript" src="<?php echo fileurl('lib/js/jquery.dataTables.js');?>"></script>
<script type="text/javascript" src="<?php echo fileurl('lib/js/datatables.js');?>"></script>
<script type="text/javascript" src="<?php echo fileurl('lib/js/dataTables.bootstrap.min.js');?>"></script>
<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
  $('#schedules_table').dataTable( {
  "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ]
} )});
</script>
<?php } ?>
<!-- Latest compiled and minified JavaScript - Modified to clear modal on data-dismiss -->
<script type="text/javascript" src="<?php echo SITE_URL; ?>/lib/js/bootstrap.js"></script>

<br />
