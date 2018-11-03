<?php if(!defined('IN_PHPVMS') && IN_PHPVMS !== true) { die(); } ?>
<?php
$acft= $schedule->aircraft ;
$note= $schedule->notes ;
if($acft= "B737-800") {
	$pax= rand(0, 120);
	$cargo= rand(0, 18000);
}
?>
<!-- Main content -->
    <section class="content container-fluid">
		<div class="row">
		   <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Briefing of the Flight <b><?php echo $schedule->code.$schedule->flightnum; ?></b> </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-bordered">

			<div class="callout callout-warning">
			<h4>Warning!!</h4>
			<p>The information contained in this page may never be used in <b>Real Navigation</b>, only in simulators</p>
			</div>
<script src="http://skyvector.com/linkchart.js"></script>
<table width="98%" align="center" cellpadding="4" class="table table-bordered">
	<!-- Flight ID -->
	<tr style="background-color: #333; color: #FFF;">
		<td colspan="2">Flight</td>
	</tr>
	<tr>
		<td colspan="2">
		<?php echo $schedule->code.$schedule->flightnum; ?>
		</td>
	</tr>

	<tr  style="background-color: #333; color: #FFF;">
		<td>Departure</td>
		<td>Arrival</td>
	</tr>

	<tr>
		<td width="50%" ><?php echo "{$schedule->depname} ($schedule->depicao)"; ?><br />
			<a href="https://pilotweb.nas.faa.gov/geo/icaoRadius.html?icao_id=<?php echo $schedule->depicao?>&radius=2"
				target="_blank">Click to view NOTAMS</a>
		</td>
		<td width="50%" ><?php echo "{$schedule->arrname} ($schedule->arricao)"; ?><br />
			<a href="https://pilotweb.nas.faa.gov/geo/icaoRadius.html?icao_id=<?php echo $schedule->arricao?>&radius=2"
				target="_blank">Click to view NOTAMS</a></td>
	</tr>

	<!-- Times Row -->
	<tr style="background-color: #333; color: #FFF;">
		<td>Departure Time</td>
		<td>Arrival Time</td>
	</tr>
	<tr>
		<td width="50%" ><?php echo "{$schedule->deptime}"; ?></td>
		<td width="50%" ><?php echo "{$schedule->arrtime}"; ?></td>
	</tr>

	<!-- Aircraft and Distance Row -->
	<tr style="background-color: #333; color: #FFF;">
		<td>Aircraft</td>
		<td>Distance</td>
	</tr>
	<tr>
		<td width="50%" ><?php echo "{$schedule->aircraft}"; ?></td>
		<td width="50%" ><?php echo "{$schedule->distance}"; ?></td>
	</tr>

	<tr style="background-color: #333; color: #FFF;">
		<td>Departure METAR</td>
		<td>Arrival METAR</td>
	</tr>
	<tr>
		<td width="50%" ><?php
$metar = $_POST['metar'];
$url = 'http://metar.vatsim.net/'.$schedule->depicao.'';
$page = file_get_contents($url);
echo $page;
?>
		</td>
		<td width="50%"> <?php
$metar = $_POST['metar'];
$url = 'http://metar.vatsim.net/'.$schedule->arricao.'';
$page = file_get_contents($url);
echo $page;
?></td>
	</tr>

	<!-- Route -->
	<tr style="background-color: #333; color: #FFF;">
		<td colspan="2">Route</td>
	</tr>
	<tr>
		<td colspan="2">
		<?php
		# If it's empty, insert some blank lines
		if($schedule->route == '')
		{
			echo '<br /> <br /> <br />';
		}
		else
		{
			echo strtoupper($schedule->route);
		}
		?>
		</td>
	</tr>

	<!-- Notes -->
	<tr style="background-color: #333; color: #FFF;">
		<td colspan="2">Notes</td>
	</tr>
	<tr>
		<td colspan="2" style="padding: 6px;">
		<?php
			# If it's empty, insert some blank lines
			if($schedule->notes == '')
			{
				echo '<br /> <br /> <br />';
			}
			else
			{
				echo "{$schedule->notes}";
			}
		?>
		</td>
	</tr>


</table>

<?php
    $link1 = "http://www.aisweb.aer.mil.br/api/?apiKey=1913557990&apiPass=3199fa54-755b-1033-a49b-72567f175e3a&area=met&icaoCode=".$schedule->depicao; //link do arquivo xml
    $xml1 = simplexml_load_file($link1) -> met; //carrega o arquivo XML e retornando um Array

        $depmetar= utf8_decode($xml1 -> metar);
        $deptaf= utf8_decode($xml1 -> taf);

	$link2 = "http://www.aisweb.aer.mil.br/api/?apiKey=1913557990&apiPass=3199fa54-755b-1033-a49b-72567f175e3a&area=met&icaoCode=".$schedule->arricao; //link do arquivo xml
    $xml2 = simplexml_load_file($link2) -> met; //carrega o arquivo XML e retornando um Array

        $arrmetar= utf8_decode($xml2 -> metar);
        $arrtaf= utf8_decode($xml2 -> taf);
?>
<h3>Weather Briefing <span class="label label-danger">Indisponível in flights outside Brazil</span></h3>
<table width="98%" align="center" class="table table-bordered">

	<tr style="background-color: #333; color: #FFF;">
		<td><?php echo $schedule->depicao;?></td>
		<td><?php echo $schedule->arricao;?></td>
	</tr>
	<tr align="center">
		<td width="50%" valign="top">
			<?php echo $depmetar;?>
		</td>
		<td width="50%" valign="top">
			<?php echo $arrmetar;?>
		</td>

	</tr>
		<tr align="center">
		<td width="50%" valign="top">
			<?php echo $deptaf;?>
		</td>
		<td width="50%" valign="top">
			<?php echo $arrtaf;?>
		</td>

	</tr>
</table>
	<a href="https://www.redemet.aer.mil.br/"> See more Meteorologic Informations</a>
	<P><a href="https://aviationweather.gov/"> See Weather Maps of the World</a></P>

<h3>Loadsheet</h3>
<table width="98%" align="center" class="table table-bordered">

	<tr style="background-color: #333; color: #FFF;">
		<td>Passengers</td>
		<td>Cargo</td>
	</tr>
	<tr align="center">
		<td width="50%" valign="top">
			<?php echo $pax;?>
		</td>
		<td width="50%" valign="top">
			<?php echo $cargo;?>
		</td>

	</tr>
</table>

<h3>Procedures and Informations</h3>
<iframe src="https://goo.gl/2xIoAm" width="1200" height="800" scrolling="yes" frameborder="1px" align="center"></iframe>

</div>
</div>
          </div>
          <!-- /.modal-dialog -->
        </div>
    </section>
    <!-- /.content -->
<br />
