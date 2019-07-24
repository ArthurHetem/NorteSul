<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(<?php echo SITE_URL; ?>/lib/skins/avianca/images/img_bg_1.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="row row-mt-15em">

						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>Últimos Voos</h1>
                            <small><ol class="breadcrumb">
  <li>Home</li>
  <li>Operacional</li>
  <li class="active"><b>Últimos Voos</b></li>
</ol></small>							
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</header>
	
    <div class="container" id="tourpackages-carousel">

      <div class="row">
	    <?php
    $flights = PIREPData::getRecentReportsByCount(30);																	 
    $string = "";
    foreach($flights as $flight)
    {	 
		    $string = $string.$flight->depicao.'+-+'.$flight->arricao.',+';
    }																	 
?>

<!--Start Table-->
<?php
$count = 30;
$pireps = PIREPData::getRecentReportsByCount($count);
?>
<table width="725 px" border="1" class="table table-striped">
  <thead>
 <tr align="center" valign="middle">
   <th class="quadro roxo">Tripulante</th>
   <th class="quadro roxo">Voo #</th>
   <th class="quadro roxo">Origem</th>
   <th class="quadro roxo">Destino</th>
   <th class="quadro roxo">Duração</th>
   <th class="quadro roxo">Touchdown</th>
   <th class="quadro roxo">Aeronave</th>
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
   echo "<tr>";
   echo "<td align=center> <b>$pilotid</b> - $pilotinfo->firstname <b>$pilotinfo->lastname</b> </td>";
   echo "<td align=center> $pirep->code $pirep->flightnum </td>";
   echo "<td align=center> $pirep->depicao </td>";
   echo "<td align=center> $pirep->arricao </td>";
   echo "<td align=center> $pirep->flighttime </td>";
   echo "<td align=center> $pirep->landingrate </td>";
   echo "<td align=center> $pirep->aircraft </td>";
   echo "</tr>";
 }
}
else
{
   echo "<tr><td>Nada para mostrar!</td></tr>";
}
?>
</table>
</td>
        <!-- End row -->

      </div>
      <!-- End container -->
    </div>