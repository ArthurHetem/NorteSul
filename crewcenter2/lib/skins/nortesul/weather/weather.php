<section class="content-header">
      <h1>
        <b>WX</b> Briefing
      </h1>
    </section>
	<section class="content container-fluid">
	<div class="row">
           		 <div class="col-md-6 col-sm-12">
            <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-cloud"></i>

              <h3 class="box-title">WX</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<div class="alert alert-info">As informações contidas nesta página são para fins de simulação e não condizem com as condições reais desta localidade.</div>
					<form action="<?php echo url('/WTHR/metar');?>" method="post">
			<table id="tabledlist" class="tablesorter table table-hover">
				<tbody><tr>
					<td style="vertical-align: middle;">ICAO</td>
					<td style="vertical-align: middle;"><input type="text" name="icao" class="form-control" required="required" onchange="javascript:this.value=this.value.toUpperCase();"></td>
					<td style="vertical-align: middle;"><input type="submit" name="myform" value="Enviar" class="btn btn-flat btn-primary" style="text-transform: uppercase; vertical-align: middle;"></td>
				</tr>
			</tbody></table>
		</form>
		<table id="tabledlist" class="tablesorter table table-hover">
				<tbody><tr>
					<td>Aeroporto</td>
					<td><?php echo $stationname;?> (<?php echo $stationid;?>/<?php echo $stationcountry ;?>)</td>
				</tr>
				<tr>
					<td>Elevação</td>
					<td><?php echo $elevation;?> M</td>
				</tr>
				<tr>
					<td>Lat / Lng</td>
					<td><?php echo $lat;?> / <?php echo $lng;?></td>
				</tr>
				<tr>
					<td>Data / Hora</td>
					<td><?php echo $time;?></td>
				</tr>
				<tr>
					<td>Altimetro</td>
					<td><?php echo $altimeter;?> inHg</td>
				</tr>
				<tr>
					<td>Temperatura</td>
					<td><?php echo $temperature.$sky1;?>° C</td>
				</tr>
				<tr>
					<td>Ponto de Orvalho</td>
					<td><?php echo $dewpoint;?>° C</td>
				</tr>
				<tr>
					<td>Ventos</td>
					<td><?php echo $winddir;?> &deg; / <?php echo $windspd;?> kt</td>
				</tr>
				<tr>
					<td>Visibilidade</td>
					<td><?php echo $visibility.$sky1;?> Miles</td>
				</tr>
				<tr>
					<td>Nuvens</td>
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
					<td>Regras de Voo</td>
					<td><?php echo $flightrules;?></td>
				</tr>
				</tbody></table>
							</div>
							</div>
							</div>
			<div class="col-md-6 col-sm-12">
            <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-question"></i>

              <h3 class="box-title">Legenda</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                  <table id="tabledlist" class="tablesorter table table-hover">
  						<tbody><tr><td>SKC</td><td>No cloud/Sky clear</td></tr>
						<tr><td>CLR</td><td>No clouds below 12,000 ft (3,700 m) (U.S.) or 25,000 ft (7,600 m) (Canada)</td></tr>
						<tr><td>NSC</td><td>No (nil) significant cloud</td></tr>
						<tr><td>FEW</td><td>"Few" = 1 to 2 oktas</td></tr>
						<tr><td>SCT</td><td>"Scattered" = 3 to 4 oktas</td></tr>
						<tr><td>BKN</td><td>"Broken" = 5 to 7 oktas</td></tr>
						<tr><td>OVC</td><td>"Overcast" = 8 oktas, i.e., full cloud coverage</td></tr>
						<tr><td>VV</td><td>Clouds cannot be seen because of fog or heavy precipitation, so vertical visibility is given instead.</td></tr>
			</tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
         </div>
        </div>
	    <div class="row">
		  			<div class="col-md-6 col-sm-12">
            <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-book"></i>

              <h3 class="box-title">Cartas</h3>
            </div>
            <!-- /.box-header -->
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
            <!-- /.box-body -->
          </div>
         </div>
		 			<div class="col-md-6 col-sm-12">
            <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-map"></i>

              <h3 class="box-title">WX Map</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                  <iframe src="https://www.ventusky.com/?p=-14.8;-47.7;3&amp;l=rain-3h&amp;m=icon" name="" width="100%" height="400"> scrolling="no"></iframe>
            </div>
            <!-- /.box-body -->
          </div>
         </div>
        </div>
</section>