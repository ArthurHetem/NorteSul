<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(<?php echo SITE_URL; ?>/lib/skins/nortesul/images/img_bg_1.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="row row-mt-15em">

						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
<<<<<<< HEAD
							<h1>Last Flights</h1>
                            <small><ol class="breadcrumb">
  <li>Home</li>
  <li>Operations</li>
  <li class="active"><b>Last Flights</b></li>
=======
							<h1>Latest Flights</h1>
                            <small><ol class="breadcrumb">
  <li>Home</li>
  <li>Operations</li>
  <li class="active"><b>Latest Flights</b></li>
>>>>>>> 7bc52fd6ddc0a718ad64228335df3c2bd730f22f
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
<table width="725 px" border="1" class="table table-hover">
  <thead>
 <tr align="center" valign="middle">
<<<<<<< HEAD
   <th>Pilot</th>
   <th>Flight #</th>
   <th>Departure</th>
   <th>Arrival</th>
   <th>Time</th>
=======
   <th>Pilot ID</th>
   <th>Flight Number #</th>
   <th>Departure</th>
   <th>Arrival</th>
   <th>Time</th>
>>>>>>> 7bc52fd6ddc0a718ad64228335df3c2bd730f22f
   <th>Touchdown</th>
   <th>Aircraft</th>
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
   echo "<tr><td>There are no recent flights!</td></tr>";
}
?>
</table>
</td>
        <!-- End row -->

      </div>
      <!-- End container -->
    </div>
