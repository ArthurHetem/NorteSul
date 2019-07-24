    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo fileurl('lib/js/jquery.form.js');?>"></script>
    <script type="text/javascript" src="<?php echo fileurl('lib/js/phpvms.js');?>"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=weather&sensor=false&key=AIzaSyDNXF-5w4vpCLtqL0hNmxlp9ieGvoVJNCg"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKSPxD0Ty8TRo10gl9OP1_k05O4FTT4Bo"
  type="text/javascript?sensor=true"></script>

  <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(<?php echo SITE_URL; ?>/lib/skins/avianca/images/img_bg_2.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="row row-mt-15em">

						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>Tracking</h1>
                            <small><ol class="breadcrumb">
  <li>Home</li>
  <li class="active"><b>Tracking</b></li>
</ol></small>							
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</header>
    <div class="container ooo" id="tourpackages-carousel">
	<h2 class="text-center">Existem <b><?php echo ACARSData::getLiveFlightCount();?> voos</b> em andamento</h2>
	  <h2 class="text-center"><small>Aqui você pode acompanhar todos os voos online no momento</small></h2>
       <?php
/**
 * These are some options for the ACARS map, you can change here
 * 
 * By default, the zoom level and center are ignored, and the map 
 * will try to fit the all the flights in. If you want to manually set
 * the zoom level and center, set "autozoom" to false.
 * 
 * You can use these MapTypeId's:
 * http://code.google.com/apis/maps/documentation/v3/reference.html#MapTypeId
 * 
 * Change the "TERRAIN" to the "Constant" listed there - they are case-sensitive
 * 
 * Also, how to style the acars pilot list table. You can use these style selectors:
 * 
 * table.acarsmap { }
 * table.acarsmap thead { }
 * table.acarsmap tbody { }
 * table.acarsmap tbody tr.even { }
 * table.acarsmap tbody tr.odd { } 
 */
?>
<script type="text/javascript">
<?php 
/* These are the settings for the Google map. You can see the
	Google API reference if you want to add more options.
	
	There's two options I've added:
	
	autozoom: This will automatically center in on/zoom 
	  so all your current flights are visible. If false,
	  then the zoom and center you specify will be used instead
	  
	refreshTime: Time, in seconds * 1000 to refresh the map.
	  The default is 10000 (10 seconds)
*/
?>
var acars_map_defaults = {
	autozoom: true,
	zoom: 4,
    center: new google.maps.LatLng("<?php echo Config::Get('MAP_CENTER_LAT'); ?>", "<?php echo Config::Get('MAP_CENTER_LNG'); ?>"),
    mapTypeId: google.maps.MapTypeId.HYBRID,
    refreshTime: 10000,
	disableDefaultUI: true,
	zoomControl: true
};
</script>
<div class="mapcenter" align="center">
	<div id="acarsmap" style="width:1140px; height:940px;"></div>
</div>
<table id="tabledlist" class="table table-striped">
<thead>
	<tr>
		<td class="quadro roxo"><b>Tripulante</b></td>
		<td class="quadro roxo"><b>Voo</b></td>
		<td class="quadro roxo"><b>DEP <i class="fa fa-plane"></i> ARR</b></td>
		<td class="quadro roxo"><b>Altitude</b></td>
		<td class="quadro roxo"><b>Velocidade</b></td>
		<td class="quadro roxo"><b>Progresso</b></td>
	</tr>
</thead>
<tbody id="pilotlist"></tbody>
</table>
<script type="text/javascript" src="<?php echo fileurl('/lib/js/acarsmap.js');?>"></script>
<?php
/* This is the template which is used in the table above, for each row. 
	Be careful modifying it. You can simply add/remove columns, combine 
	columns too. Keep each "section" (<%=...%>) intact
	
	Variables you can use (what they are is pretty obvious)
	
	Variable:							Notes:
	<%=flight.pilotid%>
	<%=flight.firstname%>
	<%=flight.lastname%>
	<%=flight.pilotname%>				First and last combined
	<%=flight.flightnum%>
	<%=flight.depapt%>					Gives the airport name
	<%=flight.depicao%>
	<%=flight.arrapt%>					Gives the airport name
	<%=flight.arricao%>
	<%=flight.phasedetail%>
	<%=flight.heading%>
	<%=flight.alt%>
	<%=flight.gs%>
	<%=flight.disremaining%>
	<%=flight.timeremaning%>
	<%=flight.aircraft%>				Gives the registration
	<%=flight.aircraftname%>			Gives the full name
	<%=flight.client%>					FSACARS/Xacars/FSFK, etc
	<%=flight.trclass%>					"even" or "odd"
	
	You can also use logic in the templating, if you so choose:
	http://ejohn.org/blog/javascript-micro-templating/
*/
?>
<script type="text/html" id="acars_map_row">
<tr class="<%=flight.trclass%>">
<td><a href="<?php echo url('/profile/view');?>/<%=flight.pilotid%>"><%=flight.pilotid%> - <%=flight.pilotname%></a></td>
<td><%=flight.flightnum%></td>
<td><%=flight.depicao%> <i class="fa fa-plane"> <%=flight.arricao%></td>
<td><%=flight.alt%></td>
<td><%=flight.gs%></td>
<td>
  <div class="progress">
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <%=flight.percomplete%>%"><%=flight.percomplete%>%
    <span class="sr-only"><%=flight.percomplete%><%=flight.percomplete%>%</span>
  </div>
</div>
</td>
</tr>
</script>

<?php
/*	This is the template for the little map bubble which pops up when you click on a flight
	Same principle as above, keep the <%=...%> tags intact. The same variables are available
	to use here as are available above.
*/
?>
<script type="text/html" id="acars_map_bubble">
<span style="font-size: 10px; text-align:left; width: 100%" align="left">
<a href="<?php echo url('/profile/view');?>/<%=flight.pilotid%>"><%=flight.pilotid%> - <%=flight.pilotname%></a><br />
<strong>Flight <%=flight.flightnum%></strong> (<%=flight.depicao%> to <%=flight.arricao%>)<br />
<strong>Status: </strong><%=flight.phasedetail%><br />
<strong>Dist/Time Remain: </strong><%=flight.distremaining%> <?php echo Config::Get('UNITS');?> / <%=flight.timeremaining%><br />
</span>
</script>

<?php
/*	This is a small template for information about a navpoint popup 
	
	Variables available:
	
	<%=nav.title%>
	<%=nav.name%>
	<%=nav.freq%>
	<%=nav.lat%>
	<%=nav.lng%>
	<%=nav.type%>	2=NDB 3=VOR 4=DME 5=FIX 6=TRACK
 */
?>
<script type="text/html" id="navpoint_bubble">
<span style="font-size: 10px; text-align:left; width: 100%" align="left">
<strong>Name: </strong><%=nav.title%> (<%=nav.name%>)<br />
<strong>Type: </strong>
<?php	/* Show the type of point */ ?>
<% if(nav.type == 2) { %> NDB <% } %>
<% if(nav.type == 3) { %> VOR <% } %>
<% if(nav.type == 4) { %> DME <% } %>
<% if(nav.type == 5) { %> FIX <% } %>
<% if(nav.type == 6) { %> TRACK <% } %>
<br />
<?php	/* Only show frequency if it's not a 0*/ ?>
<% if(nav.freq != 0) { %>
<strong>Frequency: </strong><%=nav.freq%>
<% } %>
</span>
</script> 
      <!-- End container -->
    </div>