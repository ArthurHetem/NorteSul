<section class="content-header bg-white espaca">
    <div class="pull-right"><i class="fa fa-sun-o fa-4x text-muted fa-spin"></i></div>
    <h1><strong>Sala</strong> de Meteorologia</h1>
    <h1><small>Operações de voo | NorteSul Virtual &copy;
            <?php echo date("Y");?></small>
        <br>
</section>
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="box box-solid">
                <div class="box-header with-border">
                  <i class="fa fa-cloud"></i>
                    <h3 class="box-title"><strong>METAR</strong></h3>
                </div>
                <div class="box-body">
                  <form action="<?php echo url('/WTHR/metar');?>" method="post">
        			<table id="tabledlist" class="tablesorter table table-hover">
        				<tbody><tr>
        					<td style="vertical-align: middle;">Insira um ICAO</td>
        					<td style="vertical-align: middle;"><input type="text" name="icao" class="form-control" required="required" onchange="javascript:this.value=this.value.toUpperCase();"></td>
        					<td style="vertical-align: middle;"><input type="submit" name="myform" value="Buscar WX atual" class="btn btn-rounded btn-primary" style="text-transform: uppercase; vertical-align: middle;"></td>
        				</tr>
        			</tbody></table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="box box-solid">
                <div class="box-header with-border">
                  <i class="fa fa-eye"></i>
                    <h3 class="box-title">METAR <strong>codificado</strong></h3>
                </div>
                <div class="box-body">
                  <?php echo $metar; ?>
                  <br>
                  <br>
                  <?php if (!$taf){
                    echo "<h3>TAF não disponível</h3>";
                  }
                  else{
                     echo $taf;
                  }
                  ?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong>Operação</strong></h3>
                </div>
                <div class="box-body">
                  <?php
                  switch ($flightrules){
    case 'LIFR':
      echo '<h3><span class="label label-danger">FECHADO</span></h3> <br> Operações suspensas devido a condições climáticas extremas';
      break;
    case 'IFR':
      echo '<h3><span class="label label-success">ABERTO</span></h3> <br> Operações V F R suspensas devido visibilidade ruim, o aeroporto está operando somente I F R';
      break;
    case 'MVFR':
      echo '<h3><span class="label label-success">ABERTO</span></h3> <br> Operações Marginal V F R, solicite liberação Special V F R e I F R';
      break;
    case 'VFR':
      echo '<h3><span class="label label-success">ABERTO</span></h3> <br> V F R e I F R estão operacionais';
      break;
    default:
      echo '<h3>Insira um <span class="label label-default">ICAO</span></h3> <br> Nenhum ICAO inserido';
      break;
  } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="box box-solid">
                <div class="box-header with-border">
                  <i class="fa fa-code"></i>
                    <h3 class="box-title">METAR <strong>decodificado</strong></h3>
                </div>
                <div class="box-body">
                  <table id="tabledlist" class="tablesorter table table-hover">
              				<tbody><tr>
              					<td><span class="label label-default">Station ID:</span></td>
              					<td><?php echo $stationid;?> (<?php echo $stationname;?>/<?php echo $stationcountry ;?>)</td>
              				</tr>
                      <tr>
              					<td><span class="label label-default">Observação feita em:</span></td>
              					<td><?php echo $time;?></td>
              				</tr>
                      <tr>
              					<td><span class="label label-default">Direção do vento:</span></td>
              					<td><?php echo $winddir;?> &deg; / <?php echo $windspd;?> kts</td>
              				</tr>
                      <tr>
              					<td><span class="label label-default">Condições do céu:</span></td>
              					<td><?php
              							if(!$skycondition3 OR !$skycondition4)
              							{
              								echo $skycondition0.' Clouds At '.$skycondition1.' Feet';
              							}
              							else
              							{
              								echo $skycondition0.' Clouds At '.$skycondition1.' Feet / '.$skycondition3.' Clouds At '.$skycondition4.' Feet';
              							}
              						?></td>
              				</tr>
                      <tr>
              					<td><span class="label label-default">Visibilidade:</span></td>
              					<td><?php echo $visibility.$sky1;?> Miles</td>
              				</tr>
                      <tr>
              					<td><span class="label label-default">Temperatura:</span></td>
              					<td><?php echo $temperature.$sky1;?>° C</td>
              				</tr>
                      <tr>
              					<td><span class="label label-default">Altímetro:</span></td>
              					<td><?php echo $altimeter;?> inHg</td>
              				</tr>
              				</tbody></table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box box-solid">
                <div class="box-header with-border">
                  <i class="fa fa-file"></i>
                    <h3 class="box-title">Cartas <strong>Aéreas</strong></h3>
                </div>
                <div class="box-body">
                  <table id="tabledlist" class="tablesorter table table-hover">
              <tbody>			<tr>
        <td>

              <?php

                if(!$charts)
                  {
                    echo 'Nenhuma Carta Encontrada';
                  }
                else
                  {
                    $count = count($count);
                    for($i = 0; $i <= $count; $i++)
                      {
                        $chart = $charts->chart[$i];
                        $type = $charts->chart[$i][type];
                        $name = $charts->chart[$i][name];
                        if($i < $count)
                        {
                          echo ($i+1).'. <a href='.$chart.' target="blank" style="text-decoration: none;">'.$name.' - '.$type.'</a><br>';
                        }
                        else
                        {
                          break;
                        }
                      }

                  }
              ?>

        </td>
      </tr></tr>
      </tbody></table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12">
          <div class="box box-solid">
              <div class="box-header with-border">
                <i class="fa fa-globe"></i>
                  <h3 class="box-title">WX <strong>map</strong></h3>
                  <div class="pull-right box-tools infinite pulse animated">
                      <span class="label label-danger">Ao vivo</span>
              </div>
              <div class="box-body">
                <iframe width="100%" height="670px" src="https://embed.windy.com/embed2.html?lat=<?php echo $lat; ?>&lon=<?php echo $lng; ?>&zoom=6&level=surface&overlay=wind&menu=&message=true&marker=&calendar=&pressure=&type=map&location=coordinates&detail=&detailLat=-23.630&detailLon=-46.632&metricWind=kt&metricTemp=%C2%B0C&radarRange=-1" frameborder="0"></iframe>
              </div>
          </div>
      </div>
    </div>

    <!-- End container -->
</section>
