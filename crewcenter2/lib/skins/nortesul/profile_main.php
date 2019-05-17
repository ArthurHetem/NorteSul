<?php
$voos = $pilot->totalflights;
if ($voos >0){
$somar = mysql_query("SELECT SUM(landingrate) as accepted FROM `phpvms_pireps` WHERE pilotid=$userinfo->pilotid");
						 $total = mysql_fetch_array($somar);
						 $v_total = $total['accepted'];
						 $linha = mysql_query("SELECT * FROM `phpvms_pireps` WHERE pilotid=$userinfo->pilotid");
						 $taxa = mysql_num_rows($linha);
						 $v_taxa = $v_total/$taxa ;
}
else
{
$v_taxa = "0";
}
?>
<?php
   date_default_timezone_set("America/Sao_Paulo");
    $hr = date("H");
    if($hr >= 12 && $hr<18) {
    $resp = "Boa tarde";}
    else if ($hr >= 0 && $hr <12 ){
    $resp = "Bom dia";}
    else {
    $resp = "Boa noite";}
  ?>
<?php
  $hrssomadas = Auth::$userinfo->totalhours + $userinfo->transferhours;
  ?>
<!-- Content Header (Page header) -->
<section class="content-header">

</section>

<!-- Main content -->
<section class="content container-fluid">
    <div class="col-md-12">
        <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black" style="background: url('http://getwallpapers.com/wallpaper/full/e/0/c/242085.jpg');">
							<br>
                <h3 class="widget-user-username text-center fonte">NorteSul Virtual</h3>
                <h5 class="widget-user-desc text-center">Bem-vindo ao futuro.</h5>
            </div>
            <div class="box-footer">
                <div class="row col-md-12">
                    <div class="alert alert-<?php if ($resp == "Bom dia"){ echo "warning" ;}else if ($resp=="Boa tarde" ){ echo "success" ;}else {echo "info" ;}?>">
                        <h4 class="text-center"><strong>
                                <?php echo $resp?>,
                                <?php echo $userinfo->firstname ?>!</strong></h4>
                        <p class="text-center">
                            <?php
	$search = array(
		'p.pilotid' => Auth::$userinfo->pilotid,
		'p.accepted' => PIREP_ACCEPTED
	);

	$reports = PIREPData::findPIREPS($search, 1); // return only one
                        if(!$reports){
						echo 'Você ainda não realizou nenhum voo, está esperando o que? Clique <a href="<?php echo SITE_URL;?>/index.php/fltbook">AQUI</a> para reservar um voo!';
                            }else{
															?>
                            Seu PIREP do voo <?php echo $reports[0]->code;?><?php echo $reports[0]->flightnum;?> (<?php echo $reports[0]->depicao;?> - <?php echo $reports[0]->arricao;?>) foi aprovado e $<?php echo $reports[0]->pilotpay;?> vMoney foram creditados para sua conta. Clique <a href="<?php echo SITE_URL;?>/index.php/pireps/view/<?php echo $reports[0]->pirepid;?>">aqui</a> para ver a avaliação pós voo.
														<?php
                            }?>
                        </p>
                    </div>
                    <!-- /.row -->
                </div>
            </div>
        </div>

        <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-white">
                <h4 class="widget-user-username text-center"><strong>
                        <?php echo $userinfo->firstname; ?>
                        <?php echo $userinfo->lastname; ?></strong></h4>
                <h5 class="widget-user-desc text-center">
                    <?php echo Auth::$userinfo->rank; ?>
                </h5>
            </div>
            <div class="box-footer">
                <div class="row">
                    <div class="col-sm-2 border-right">
                        <div class="description-block">
                            <h3 class="description-header">
                                <?php echo $pilotcode; ?>
                            </h3>
                            <h3><small><i class="fa fa-id-card-o"></i> Callsign na Companhia</small></h3>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-2 border-right">
                        <div class="description-block">
                            <h3 class="description-header">
                                <?php echo $hrssomadas; ?>
                            </h3>
                            <h3><small><i class="fa fa-clock-o"></i> Horas Voadas</small></h3>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-2">
                        <div class="description-block">
                            <h3 class="description-header">
                                <?php echo $pilot->totalflights; ?>
                            </h3>
                            <h3><small><i class="fa fa-plane"></i> Voos</small></h3>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-2 border-right">
                        <div class="description-block">
                            <h3 class="description-header">
                                <?php echo $userinfo->hub; ?>
                            </h3>
                            <h3><small><i class="fa fa-map-marker"></i> Meu HUB</small></h3>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-2 border-right">
                        <div class="description-block">
                            <h3 class="description-header">
                                <?php echo FinanceData::FormatMoney($userinfo->totalpay); ?>
                            </h3>
                            <h3><small><i class="fa fa-money"></i> vMoney</small></h3>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-2">
                        <div class="description-block">
                            <h3 class="description-header"><img src="<?php echo $userinfo->rankimage?>" alt="" data-toggle="tooltip" title="<?php echo Auth::$userinfo->rank; ?>" /></h3>
                            <h3><small><i class="fa fa-star"></i> Meu Ranking</small></h3>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                </div>
            </div>
        </div>
        <div class="box box-solid">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-line-chart"></i> Estatísticas do <strong>Piloto</strong></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="col-lg-4 col-xs-8">
                    <!-- small box -->
                    <div class="small-box levanta2">
                        <div class="inner">
                            <h4>
                                <?php echo $v_taxa; ?> fpm</h4>

                            <h4><small><strong>Média</strong> de Toque</small></h4>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-8">
                    <!-- small box -->
                    <div class="small-box levanta2">
                        <div class="inner">
                            <h4>
                                <?php echo StatsData::getTotalPassengersPilot($userinfo->pilotid);?>
                            </h4>

                            <h4><small>Passageiros <strong>Transportados</strong></small></h4>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-8">
                    <!-- small box -->
                    <div class="small-box levanta2">
                        <div class="inner">
                            <h4>
                                <?php echo StatsData::getTotalMilesPilot($userinfo->pilotid);?> <strong>NM</strong></h4>

                            <h4><small>Milhas <strong>Voadas</strong></small></h4>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black">
                <h3 class="widget-user-username text-left">Local Atual <strong><i class="fa fa-map-marker"></i>
                        <?php echo FltbookData::getLocation(Auth::$userinfo->pilotid)->arricao; ?></strong></h3>
                <h3 class="widget-user-desc text-left"><small>
                        <?php
			  $localAtual = FltbookData::getLocation(Auth::$userinfo->pilotid)->arricao;
$metar = $_POST['metar'];
$url = 'http://metar.vatsim.net/'.$localAtual.'';
$page = file_get_contents($url);
echo $page;
?></small></h3>
            </div>
            <div class="box-footer">
                <div class="row">
                    <div class="col-md-4 col-xs-8">
                        <?php
          $contabids = SchedulesData::GetBids(Auth::$pilot->pilotid);
		  $bidscontados = COUNT($contabids);

    if ($bidscontados > 0)
		{
			echo $bidsconstados;
		}
		else
		{
			$bidsconstados =  "0";
		}
	      if($bidscontados > 0){
		?>
                        <!-- small box -->
                        <a href="<?php echo SITE_URL;?>/index.php/Schedules">
                            <div class="small-box levanta">
                                <div class="inner">
                                    <h4 class="text-green text-center">Próximo <strong>voo</strong></h4>
                                    <h4 class="text-center"><small>
                                            <?php $piloto = Auth::$pilot->pilotid;  $proximoVoo = SchedulesData::getLatestBid($piloto);
																						 echo $proximoVoo->code . $proximoVoo->flightnum ." "."($proximoVoo->depicao <i class='fa fa-plane'></i> $proximoVoo->arricao)";?></small></h4>
                                </div>
                        </a>
                    </div>
                    <?php
		  }
		  else
		  {
		  ?>
                    <!-- small box -->
                    <a href="<?php echo SITE_URL;?>/index.php/Schedules">
                        <div class="small-box levanta">
                            <div class="inner">
                                <h4 class="text-red text-center">Nenhum <strong>voo</strong></h4>

                                <h4 class="text-center"><small>Nenhuma reserva encontrada, clique para reservar uma</small></h4>


                            </div>
                    </a>
                </div>
            <?php
		   }
		  ?>
			      </div>
            <div class="col-md-4 col-xs-8">
                <!-- small box -->
                <a href="<?php echo SITE_URL;?>/index.php/Pireps/mine">
                    <div class="small-box levanta">
                        <div class="inner">
                            <h4 class="text-black text-center">Último <strong>voo</strong></h4>
                            <h4 class="text-center"><small>
                                    <?php
			if($report)
			{ ?>
                                    <?php echo $report->code . $report->flightnum .', '. $report->depicao.' <i class="fa fa-plane"></i> '. $report->arricao; ?>
                                    <?php
			} else { echo 'Nenhum voo encontrado!'; }
			?></small></h4>


                        </div>
                </a>
            </div>
        </div>
        <div class="col-md-4 col-xs-8">
            <!-- small box -->
            <div class="small-box">
                <div class="inner">
                    <h4 class="text-black text-center">Voo em <strong>grupo</strong> <span class="label label-success">Em Breve</span></h4>
                    <h4 class="text-center"><small>Em breve mais um recurso para nossos pilotos, aguardem!</small></h4>


                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div class="row">
        <!-- ACARS Map -->
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-globe"></i>

                    <h3 class="box-title">Mapa <strong>Avançado</strong></h3>
                </div>

                <div class="body">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab_1" data-toggle="tab">Airline map</a></li>
                            <li><a href="#tab_2" data-toggle="tab">VATSIM map</a></li>
                            <li><a href="#tab_3" data-toggle="tab">IVAO map</a></li>
                            <li><a href="#tab_4" data-toggle="tab">Weather map</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1">
                                <?php require "acarsmap.php" ?>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_2">
                                <iframe src="https://vatmap.jsound.org/" width="100%" height="670px"></iframe>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_3">
                                <iframe src="https://webeye.ivao.aero/" width="100%" height="670px"></iframe>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_4">
                                <iframe width="100%" height="670px" src="https://embed.windy.com/embed2.html?lat=-16.552&lon=-51.855&zoom=4&level=surface&overlay=wind&menu=&message=true&marker=&calendar=&pressure=&type=map&location=coordinates&detail=&detailLat=-23.630&detailLon=-46.632&metricWind=kt&metricTemp=%C2%B0C&radarRange=-1" frameborder="0"></iframe>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# ACARS Map -->
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-plane"></i>

                    <h3 class="box-title">Voos <strong>no momento</strong></h3>
                    <div class="pull-right box-tools infinite pulse animated">
                        <span class="label label-danger">Ao vivo</span>
                    </div>
                </div>

                <div class="box-body table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <th align="center">Airline</th>
                            <th align="center">Voo</th>
                            <th align="center">Piloto</th>
                            <th align="center">Partida</th>
                            <th align="center">Chegada</th>
                            <th align="center">Aeronave</th>
                            <th align="center">Status</th>
                        </thead>
                        <?php
$results = ACARSData::GetACARSData();
if (count($results) > 0)
{
foreach($results as $flight)
 {

	 ?>
                        <tr>
                            <td align="center"><img src="<?php echo SITE_URL;?>/lib/skins/nortesul/img/airlines/NSV.png" alt="<?php echo $airline->name;?>" /></td>
                            <td align="center">
                                <?php echo $flight->flightnum;?>
                            </td>
                            <td align="center">
                                <?php echo $flight->pilotname;?>
                            </td>
                            <td align="center">
                                <?php echo $flight->depname;?>
                            </td>
                            <td align="center">
                                <?php echo $flight->arrname;?>
                            </td>
                            <td align="center">
                                <?php echo $flight->aircraftname;?>
                            </td>
                            <td align="center">
                                <?php if($flight->phasedetail
!= 'Paused') { echo $flight->phasedetail; }
else { echo "Cruise"; }?>
                            </td>
														<td>
															<?php var_dump($flight);?>
                        </tr>
                        <?php
		 }
	 } else { ?>
                            <span class="label label-danger text-center">Nenhum voo no momento!</span>
                        <?php
	 }
	 ?>
                    </table>
                </div>
            </div>
        </div>
        <!-- #END# ACARS Map -->
    </div>
    <div class="row">
        <div class="col-md-6">
					<div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black" style="background: url('../dist/img/photo1.png') center center;">
              <h3 class="widget-user-username">Pilot of the month</h3>
              <h5 class="widget-user-desc">Web Designer</h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="../dist/img/user3-128x128.jpg" alt="User Avatar">
            </div>
          </div>
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-exclamation"></i>

                    <h3 class="box-title">NOTAMs da <strong>Companhia</strong></h3>
                </div>

                <div class="box-body table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Data</th>
                                <th>Nome</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php MainController::Run('Notam', 'MostraNotam', 100); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-paper-plane"></i>

                    <h3 class="box-title">Focus Airport</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <?php Template::Show('focusairport/index.php'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <!--Upcoming Departures block-->
            <div class="box box-solid">
                <div class="box-header with-border">
                    <?php
						$lastbids = SchedulesData::GetAllBids();
						if (count($lastbids) > 0)
						{
							$departurestatus = 'Próximas';
							$label_clr = 'success';
						}
						else {
							$departurestatus = 'Nenhum voo';
							$label_clr = 'danger';
						}
				?>
                    <i class="fa fa-clock-o"></i>
                    <h3 class="box-title">Partidas <strong>próximas</strong></h3>
                    <div class="box-tools pull-right">
                        <span class="label label-<?php echo $label_clr ?> animated pulse infinite">
                            <?php echo $departurestatus?></span>
                    </div>
                </div>

                <div class=" box-body table-responsive">
                    <!--Remove this line if you dont want the departures box to be on a fixed scale-->
                    <div style="overflow: auto; height: 270px; border: 0px solid #666; margin-bottom: 20px; padding: 5px; padding-top: 0px; padding-bottom: 20px;">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        <div align="center">Voo #</div>
                                    </th>
                                    <th>
                                        <div align="center">Piloto</div>
                                    </th>
                                    <th>
                                        <div align="center">Reservado em</div>
                                    </th>
                                    <th>
                                        <div align="center">Vence em</div>
                                    </th>
                                    <th>
                                        <div align="center">Partida</div>
                                    </th>
                                    <th>
                                        <div align="center">Chegada</div>
                                    </th>
                                    <th>
                                        <div align="center">Registro</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
						$lastbids = SchedulesData::GetAllBids();
						if (count($lastbids) > 0)
						{ ?>

                                <?php
							foreach($lastbids as $lastbid)
							{
							?>
                                <?php
							$flightid = $lastbid->id
							?>
                                <td height="25" width="10%" align="center">
                                    <font face="Bauhaus"><span>
                                            <?php echo $lastbid->code; ?>
                                            <?php echo $lastbid->flightnum; ?></span></font>
                                </td>
                                <?php
							$params = $lastbid->pilotid;

							$pilot = PilotData::GetPilotData($params);
							$pname = $pilot->firstname;
							$psurname = $pilot->lastname;
							$now = strtotime(date('d-m-Y',strtotime($lastbid->dateadded)));
            				$date = date("d-m-Y", strtotime('+48 hours', $now));

							?>
                                <td height="25" width="10%" align="center"><span>
                                        <?php echo $pname; ?>
                                        <?php echo $psurname; ?></span></td>
                                <td height="25" width="10%" align="center"><span class="text-success">
                                        <?php echo date('d-m-Y',strtotime($lastbid->dateadded)); ?></span></td>
                                <td height="25" width="10%" align="center"><span class="text-danger">
                                        <?php echo $date; ?></span></td>
                                <td height="25" width="10%" align="center"><span>
                                        <font face="">
                                            <?php echo '<a class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" title="Click to view Airport Information!" href="  '.SITE_URL.'/index.php/airports/get_airport?icao='.$lastbid->depicao.'">'.$lastbid->depicao.'</a>';?>
                                        </font>
                                    </span></td>
                                <td height="25" width="10%" align="center"><span>
                                        <font face="">
                                            <?php echo '<a class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" title="Click to view Airport Information!" href= '.SITE_URL.'/index.php/airports/get_airport?icao='.$lastbid->arricao.'">'.$lastbid->arricao.'</a>';?>
                                        </font>
                                    </span></td>
                                <td height="25" width="10%" align="center"><span><a class="btn btn- btn-sm" data-toggle="tooltip" data-placement="top" title="Click to view Aircraft Information!" href="<?php echo SITE_URL?>/index.php/vFleetTracker/view/<?php echo '' . $lastbid->registration . ''; ?>">
                                            <?php echo $lastbid->registration; ?></a></td>
                                </tr>
                                <?php
							}
							} else { ?>

                                <div class="alert alert-danger">
                                    <strong>Oops</strong><br>
                                    Parece que não existe nenhuma partida próxima, você quer voar? Clique <a href="<?php echo SITE_URL?>/index.php/Schedules">aqui</a> para reservar um voo! #nortesulvirtual
                                </div>

                                <?php
							}
							?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--END Upcoming Departures Block-->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-plane"></i>

                    <h3 class="box-title">Últimos <strong>voos</strong></h3>
                    <div class="pull-right box-tools">
                        <a href="<?php echo SITE_URL;?>/index.php/Pireps/mine">
                            <div class="btn btn-default btn-rounded btn-sm" title="" data-original-title="Ver os meus">
                                <i class="fa fa-eye"></i></div>
                        </a>
                    </div>
                </div>

                <div class="box-body table-responsive">
                    <?php
								$count = 5;
								$pireps = PIREPData::getRecentReportsByCount($count);
							?>
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Voo #</th>
                                <th>Partida</th>
                                <th>Chegada</th>
                                <th>Duração</th>
                                <th>Piloto</th>
                                <th>T/D rate</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

if(count($pireps) > 0)
{
 foreach ($pireps as $pirep)
 {
   $pilotinfo = PilotData::getPilotData($pirep->pilotid);
   $pilotid = PilotData::getPilotCode($pilotinfo->code, $pilotinfo->pilotid);

   echo '<tr>';
   echo '<td>'.$pirep->code.$pirep->flightnum.'</td>';
   echo '<td>'.$pirep->depicao.'</td>';
   echo '<td>'.$pirep->arricao.'</td>';
   echo '<td>'.$pirep->flighttime.'</td>';
   echo '<td>'.$pilotid.' '.$pilotinfo->firstname.' '.$pilotinfo->lastname.'</td>';
   echo '<td>'.$pirep->landingrate.'</td>';
   echo '</tr>';
 }
}
else
{
   echo '<tr><td>There are no recent flights!</td></tr>';
}
?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="box box-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header">
                    <h3 class="widget-user-username text-center">Estátisticas <strong>Mensais</strong></h3>
                </div>
                <div class="widget-icon cinza">
                    <i class="fa fa-calendar img-circle"></i>
                </div>
                <div class="box-footer">
                    <div class="row">
                        <div id="myfirstchart" style="height: 250px;"></div>
                    </div>
                    <!-- /.row -->
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box box-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header">
                    <h3 class="widget-user-username text-center">Feed de <strong>Atividades</strong></h3>
                </div>
                <div class="widget-icon cinza">
                    <i class="fa fa-hourglass-start img-circle"></i>
                </div>
                <div class="box-footer text-center">
                    <h3><span class="label label-success">Em Breve</span></h3>
                    <!-- /.row -->
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="box box-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header">
                    <h3 class="widget-user-username text-center">Servidor do <strong>Discord</strong></h3>
                </div>
                <div class="box-footer">
                    <iframe src="https://discordapp.com/widget?id=522815385830031401&theme=dark" width="100%" height="500" allowtransparency="true" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>

    <?php MainController::Run('Activity', 'frontpage', 5); ?>
</section>
<!-- /.content -->
