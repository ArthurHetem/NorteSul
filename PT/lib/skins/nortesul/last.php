<div class="site-blocks-cover overlay"
    style="background-image: url(<?php echo SITE_URL;?>/lib/skins/nortesul/images/canvas/4.jpg);" data-aos="fade"
    data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-10">
                <span class="sub-text">Home > Operacional > <strong>Últimos Voos</strong></span>
                <h1><strong>Últimos Voos</strong></h1>
            </div>
        </div>
    </div>
</div>
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
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
                <table class="table table-striped table-hover">
                    <thead>
                        <tr valign="middle">
                            <th class="quadro roxo">Tripulante</th>
                            <th class="quadro roxo">Voo #</th>
                            <th class="quadro roxo">Origem</th>
                            <th class="quadro roxo">Destino</th>
                            <th class="quadro roxo">Duração</th>
                            <th class="quadro roxo">FPM</th>
                            <th class="quadro roxo">Data</th>
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
   echo "<td align=center>". date("d/m/Y", $pirep->submitdate)." </td>";
   echo "</tr>";
 }
}
else
{
   echo "<tr><td>Nada para mostrar!</td></tr>";
}
?>
                </table>
            </div>
        </div>
    </div>
</div>