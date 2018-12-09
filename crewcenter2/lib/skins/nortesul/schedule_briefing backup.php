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
    
	<section class="content-header">
      <h1>
        Briefing Eletrônico NS<?php echo $schedule->flightnum; ?>/<?php echo $schedule->code.$schedule->flightnum; ?>
      </h1>
    </section>
	<section class="content container-fluid">
	<div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Informações</a></li>
              <li><a href="#tab_2" data-toggle="tab">Alternativo</a></li>
              <li><a href="#tab_3" data-toggle="tab">Peso e Balanceamento</a></li>
			  <li><a href="#tab_4" data-toggle="tab">Tripulação</a></li>
			  <li><a href="#tab_5" data-toggle="tab">Meteorologia</a></li>
			  <li><a href="#tab_6" data-toggle="tab">Rota</a></li>
			  <li><a href="#tab_7" data-toggle="tab">OFP</a></li>
			  <li><a href="#tab_8" data-toggle="tab">Download</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <h3>Informações do Voo</h3>

                <table class="table">
                <tbody>
				<tr>
                  <td><b>Numero do Voo</b></td>
                  <td>NS<?php echo $schedule->flightnum; ?></td>
                  <td><b>Callsign</b></td>
				  <td><?php echo $schedule->code.$schedule->flightnum; ?></td>
                </tr>
                <tr>
                  <td><b>Aeroporto de Partida</b></td>
                  <td><span class="badge bg-blue"><?php echo "$schedule->depicao"; ?></span> <?php echo "{$schedule->depname}"; ?></td>
                  <td><b>Horário de Partida</b></td>
				  <td><?php echo "{$schedule->deptime}"; ?></td>
                </tr>
                <tr>
                  <td><b>Informações de Solo</b></td>
                  <td>Gate E01</td>
                  <td><b>Pista Planejada</b></td>
				  <td>10</td>
                </tr>
                <tr>
                  <td><b>Aeroporto de Chegada</b></td>
                  <td><span class="badge bg-blue"><?php echo "$schedule->arricao"; ?></span> <?php echo "{$schedule->arrname}"; ?></td>
                  <td><b>Horário de Chegada</b></td>
				  <td><?php echo "{$schedule->arrtime}"; ?></td>
                </tr>
				<tr>
                  <td><b>Informações de Solo</b></td>
                  <td>Gate E01</td>
                  <td><b>Pista Planejada</b></td>
				  <td>10</td>
                </tr>
				<tr>
                  <td><b>Registro da Aeronave</b></td>
                  <td><?php echo "{$schedule->registration}"; ?>﻿</td>
                  <td><b>Tipo da Aeronave</b></td>
				  <td><?php echo "{$schedule->aircraft}"; ?></td>
                </tr>
				<tr>
                  <td><b>Cost Index</b></td>
                  <td>CI 25</td>
                  <td><b>Altitude Sugerida</b></td>
				  <td><?php echo "{$schedule->flightlevel}"; ?> ft</td>
                </tr>
                <tr>
                  <td><b>Distancia do Voo</b></td>
                  <td><?php echo "{$schedule->distance}"; ?>﻿ nm</td>
                  <td><b>Duração do Voo</b></td>
				  <td><?php echo "{$schedule->flighttime}"; ?> hrs</td>
                </tr>
              </tbody></table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                The European languages are members of the same family. Their separate existence is a myth.
                For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                in their grammar, their pronunciation and their most common words. Everyone realizes why a
                new common language would be desirable: one could refuse to pay expensive translators. To
                achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                words. If several languages coalesce, the grammar of the resulting language is more simple
                and regular than that of the individual languages.
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum.
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
		<div class="row">
		   <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Briefing do Voo <b><?php echo $schedule->code.$schedule->flightnum; ?></b> </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-bordered">
			
			<div class="callout callout-warning">
			<h4>Atenção!!</h4>
			<p>Os dados contidos nessa página nunca deverão ser utilizados para <b>Navegação Real</b>, apenas no simulador</p>
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
<h3>Weather Briefing <span class="label label-danger">Indisponível em Voos Internacionais</span></h3>
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
	<a href="https://www.redemet.aer.mil.br/"> Ver Mais Informações Meteorológicas</a>
	<P><a href="https://aviationweather.gov/"> Ver MAPAS DE TEMPO DO MUNDO INTEIRO</a></P>

<h3>Loadsheet</h3>
<table width="98%" align="center" class="table table-bordered">

	<tr style="background-color: #333; color: #FFF;">
		<td>Passageiros</td>
		<td>Carga</td>
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

<h3>Procedimentos e Informações</h3>
<iframe src="https://goo.gl/2xIoAm" width="1200" height="800" scrolling="yes" frameborder="1px" align="center"></iframe>

</div>
</div>
          </div>
          <!-- /.modal-dialog -->
        </div>		
    </section>
    <!-- /.content -->
<br />