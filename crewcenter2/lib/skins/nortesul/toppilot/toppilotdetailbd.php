<div class="contain">
	<div class="toppilotdetailbd">
		<ul class="toppilotleft">
			<li><a id="defaultOpen1" href="javascript:void(0)" class="toppilotdet1" onclick="toppilottabs1(event, 'pilotdaybd')">Today</a></li>
			<li><a href="javascript:void(0)" class="toppilotdet1" onclick="toppilottabs1(event, 'pilotweekbd')">This Week</a></li>
			<li><a href="javascript:void(0)" class="toppilotdet1" onclick="toppilottabs1(event, 'pilotmonthbd')">This Month</a></li>
			<li><a href="javascript:void(0)" class="toppilotdet1" onclick="toppilottabs1(event, 'pilotyearbd')">This Year</a></li>
			<li><a href="javascript:void(0)" class="toppilotdet1" onclick="toppilottabs1(event, 'pilotalltimebd')">All Time</a></li>
		</ul>
	</div>
	<div class="toppilotcont">
		<div id="pilotdaybd" class="toppilotcon1"><?php Template::show('toppilot/toppilotdaybd.php');?></div>
		<div id="pilotweekbd" class="toppilotcon1"><?php Template::show('toppilot/toppilotweekbd.php');?></div>
		<div id="pilotmonthbd" class="toppilotcon1"><?php Template::show('toppilot/toppilotmonthbd.php');?></div>
		<div id="pilotyearbd" class="toppilotcon1"><?php Template::show('toppilot/toppilotyearbd.php');?></div>
		<div id="pilotalltimebd" class="toppilotcon1"><?php Template::show('toppilot/toppilotalltimebd.php');?></div>
	</div>
</div>
<script>
document.getElementById("defaultOpen1").click();
</script>