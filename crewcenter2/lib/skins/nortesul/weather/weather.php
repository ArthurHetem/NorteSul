<section class="content-header bg-white espaca">
    <div class="pull-right"><i class="fa fa-sun-o fa-4x text-muted fa-spin"></i></div>
    <h1><strong>WX</strong> briefing room</h1>
    <h1><small>Operações de voo | NorteSul Virtual &copy;
            <?php echo date("Y");?></small>
        <br>
</section>
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="box box-solid">
                <div class="box-header with-border">
                  <i class="fa fa-cloud"></i>
                    <h3 class="box-title">Live airport <strong>WX</strong></h3>
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
        <div class="col-md-4">
            <div class="box box-solid">
                <div class="box-header with-border">
                  <i class="fa fa-floppy-o"></i>
                    <h3 class="box-title">WX <strong>history</strong></h3>
                </div>
                <div class="box-body">
                  <h3 class="text-green">Seu local ACARS atual<p><small>
                  <?php
  $localAtual = FltbookData::getLocation(Auth::$userinfo->pilotid)->arricao;
$metar = $_POST['metar'];
$url = 'http://metar.vatsim.net/'.$localAtual.'';
$page = file_get_contents($url);
echo $page;
?></small></p></h3>
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
                <iframe width="100%" height="670px" src="https://embed.windy.com/embed2.html?lat=-16.552&lon=-51.855&zoom=4&level=surface&overlay=wind&menu=&message=true&marker=&calendar=&pressure=&type=map&location=coordinates&detail=&detailLat=-23.630&detailLon=-46.632&metricWind=kt&metricTemp=%C2%B0C&radarRange=-1" frameborder="0"></iframe>
              </div>
          </div>
      </div>
    </div>

    <!-- End container -->
</section>
