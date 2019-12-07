<section class="content-header bg-white espaca">
    <div class="pull-right"><i class="fa fa-sun-o fa-4x text-muted fa-spin"></i></div>
    <h1><strong>WX</strong> Briefing Room</h1>
    <h1><small>Flight Operations | NorteSul Virtual &copy;
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
        					<td style="vertical-align: middle;">Insert ICAO</td>
        					<td style="vertical-align: middle;"><input type="text" name="icao" class="form-control" required="required" onchange="javascript:this.value=this.value.toUpperCase();"></td>
        					<td style="vertical-align: middle;"><input type="submit" name="myform" value="Get Current WXS" class="btn btn-rounded btn-primary" style="text-transform: uppercase; vertical-align: middle;"></td>
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
                    <h3 class="box-title">RAW <strong>WX Data</strong></h3>
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
                    <h3 class="box-title">Airport <strong>WX Condition</strong></h3>
                </div>
                <div class="box-body">
                  <?php
                  switch ($flightrules){
    case 'LIFR':
      echo '<h3><span class="label label-danger">CLOSED</span></h3> <br> Operations suspended due to extreme weather conditions';
      break;
    case 'IFR':
      echo '<h3><span class="label bg-maroon">OPEN</span></h3> <br> V F R operations are suspended due to low visibility, the airport is operating only I F R';
      break;
    case 'MVFR':
      echo '<h3><span class="label label-warning">OPEN</span></h3> <br> Marginal V F R Operations, request Special V F R and I F R';
      break;
    case 'VFR':
      echo '<h3><span class="label label-success">OPEN</span></h3> <br> V F R and I F R are operationals';
      break;
    default:
      echo '<h3>Insert a <span class="label label-default">ICAO</span></h3> <br>No ICAO inserted';
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
                    <h3 class="box-title">Decoded <strong>WX</strong></h3>
                </div>
                <div class="box-body">
                  <table id="tabledlist" class="tablesorter table table-hover">
              				<tbody><tr>
              					<td><span class="label label-default">Station ID:</span></td>
              					<td><?php echo $stationid;?> (<?php echo $stationname;?>/<?php echo $stationcountry ;?>)</td>
              				</tr>
                      <tr>
              					<td><span class="label label-default">Observation Time:</span></td>
              					<td><?php echo $time;?></td>
              				</tr>
                      <tr>
              					<td><span class="label label-default">Wind Direction:</span></td>
              					<td><?php echo $winddir;?> &deg; / <?php echo $windspd;?> kts</td>
              				</tr>
                      <tr>
              					<td><span class="label label-default">Sky Condition:</span></td>
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
              					<td><span class="label label-default">Visibility:</span></td>
              					<td><?php echo $visibility.$sky1;?> Miles</td>
              				</tr>
                      <tr>
              					<td><span class="label label-default">Temperature:</span></td>
              					<td><?php echo $temperature.$sky1;?>° C</td>
              				</tr>
                      <tr>
              					<td><span class="label label-default">Altimeter:</span></td>
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
                    <h3 class="box-title">Available <strong>AirCharts</strong></h3>
                </div>
                <div class="box-body">
                  <table id="tabledlist" class="tablesorter table table-hover">
              <tbody>			<tr>
        <td>

              <?php

                if(!$charts)
                  {
                    echo 'No Charts Available';
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
                  <h3 class="box-title">WX <strong>Map</strong></h3>
                  <div class="pull-right box-tools infinite pulse animated">
                      <span class="label label-danger">Live</span>
              </div>
              <div class="box-body">
                <iframe width="100%" height="670px" src="https://embed.windy.com/embed2.html?lat=<?php echo $lat; ?>&lon=<?php echo $lng; ?>&zoom=6&level=surface&overlay=wind&menu=&message=true&marker=&calendar=&pressure=&type=map&location=coordinates&detail=&detailLat=-23.630&detailLon=-46.632&metricWind=kt&metricTemp=%C2%B0C&radarRange=-1" frameborder="0"></iframe>
              </div>
          </div>
      </div>
    </div>

    <!-- End container -->
</section>
