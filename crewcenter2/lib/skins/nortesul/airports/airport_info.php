<!-- This addon was created by Stuart Boardman, with the help of Jeffrey Kobus, Adamm, Mark1Million & David Clark-->
<!-- Licensed under Creative Commons Attribution Non-commercial Share Alike, more info here:
http://creativecommons.org/licenses/by-nc-sa/3.0/-->

<section class="content container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black">
              <div class="widget-icon cinza2 pull-right">
                <i class="fa fa-map-marker img-circle"></i>
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">NorteSul Virtual</h3>
              <h5 class="widget-user-desc">Serviço de Informação de Aeroporto</h5>
            </div>
            <div class="box-footer">
							<h3><strong><?php echo $name->name;?></strong></h3>
							<hr>
							<table align="center" width="100%">
							    <tr>
							        <td>ICAO:</td>
							        <td><?php echo $name->icao; ?></td>
							        <td>País:</td>
							        <td><?php echo $name->country; ?></td>
							    </tr>
							    <tr>
							        <td>Latitude:</td>
							        <td><?php echo $name->lat; ?></td>
							         <td>Longitude:</td>
							        <td><?php echo $name->lng; ?></td>
							    </tr>
							    <?php $icao = $name->icao;
								$params = array(
							           'depicao'   => $icao,
							           'accepted'  => '1'
							          );
								$pireps = PIREPData::findPIREPS($params, 1);
								$deppirep = $pireps[0];
								$params = array(
							           'arricao'   => $icao,
							           'accepted'  => '1'
							          );
								$pireps = PIREPData::findPIREPS($params, 1);
								$arrpirep = $pireps[0];
								?>
							<?php $initialdep = substr($deppirep->firstname,0,1); ?>
							<?php $initialarr = substr($arrpirep->firstname,0,1); ?>
								<tr>
									<td>Último Pouso:</td>
									<td><a class="btn btn-success" href="<?php echo SITE_URL?>/index.php/pireps/viewreport/<?php echo $arrpirep->pirepid;?>" data-toggle="tooltip" title="<?php echo $arrpirep->firstname.' '.$arrpirep->lastname;?>"><?php echo $arrpirep->code.$arrpirep->flightnum.' ('.$arrpirep->depicao.'-'.$arrpirep->arricao.')';?></a></td>
									<td>Última Decolagem:</td>
									<td><a class="btn btn-success" href="<?php echo SITE_URL?>/index.php/pireps/viewreport/<?php echo $deppirep->pirepid;?>"data-toggle="tooltip" title="<?php echo $deppirep->firstname.' '.$deppirep->lastname;?>"><?php echo $deppirep->code.$deppirep->flightnum.' ('.$deppirep->depicao.'-'.$deppirep->arricao.')';?></a></td>
								</tr>
							</table>
							<hr>
							<h3>Observador Meteorológico</h3>
							<span class="text-muted">Data disponibilizada por metar.vatsim.net | Obtido as <?php echo date('H:i:s');?></span><br>
							<b>METAR:</b> <?php
$metar = $_POST['metar'];
$url = 'http://metar.vatsim.net/'.$name->icao.'';
$page = file_get_contents($url);
echo $page;
?>
<hr>
<h3><?php echo $name->name;?>, <?php echo $name->country;?></h3>
<script type="text/javascript" src="<?php echo fileurl('/lib/js/acarsmap.js');?>"></script>
<script type="text/javascript">

      function initialize() {
        var mapDiv = document.getElementById('map-canvas');
        var map = new google.maps.Map(mapDiv, {
          center: new google.maps.LatLng(<?php echo $name->lat; ?> , <?php echo $name->lng; ?> ),
          zoom: 14,
          mapTypeId: google.maps.MapTypeId.SATELLITE
        });
      }


      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <div id="map-canvas" style="width: 100%; height: 500px"></div>
            </div>
          </div>

</section>
