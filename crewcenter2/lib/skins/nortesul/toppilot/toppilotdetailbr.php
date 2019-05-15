<div class="contain3">
	<div class="toppilotdetailbl3">
		<ul class="toppilotleft3">
			<li><a id="defaultOpen4" href="javascript:void(0)" class="toppilotdet4" onclick="toppilottabs4(event, 'pilotday')">Today</a></li>
			<li><a href="javascript:void(0)" class="toppilotdet4" onclick="toppilottabs4(event, 'pilotweek')">This Week</a></li>
			<li><a href="javascript:void(0)" class="toppilotdet4" onclick="toppilottabs4(event, 'pilotmonth')">This Month</a></li>
			<li><a href="javascript:void(0)" class="toppilotdet4" onclick="toppilottabs4(event, 'pilotyear')">This Year</a></li>
			<li><a href="javascript:void(0)" class="toppilotdet4" onclick="toppilottabs4(event, 'pilotalltime')">All Time</a></li>
		</ul>
	</div>
	<div class="toppilotcont1">
		<div id="pilotday" class="toppilotcon4"><?php Template::show('toppilot/toppilotday.php');?></div>
		<div id="pilotweek" class="toppilotcon4"><?php Template::show('toppilot/toppilotweek.php');?></div>
		<div id="pilotmonth" class="toppilotcon4"><?php Template::show('toppilot/toppilotmonth.php');?></div>
		<div id="pilotyear" class="toppilotcon4"><?php Template::show('toppilot/toppilotyear.php');?></div>
		<div id="pilotalltime" class="toppilotcon4"><?php Template::show('toppilot/toppilotalltime.php');?></div>
	</div>
</div>
<script>
document.getElementById("defaultOpen4").click();
</script>