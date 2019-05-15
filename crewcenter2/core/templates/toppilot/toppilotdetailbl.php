<div class="contain2">
	<div class="toppilotdetailbl2">
		<ul class="toppilotleft2">
			<li><a id="defaultOpen3" href="javascript:void(0)" class="toppilotdet3" onclick="toppilottabs3(event, 'pilotdaybl')">Today</a></li>
			<li><a href="javascript:void(0)" class="toppilotdet3" onclick="toppilottabs3(event, 'pilotweekbl')">This Week</a></li>
			<li><a href="javascript:void(0)" class="toppilotdet3" onclick="toppilottabs3(event, 'pilotmonthbl')">This Month</a></li>
			<li><a href="javascript:void(0)" class="toppilotdet3" onclick="toppilottabs3(event, 'pilotyearbl')">This Year</a></li>
			<li><a href="javascript:void(0)" class="toppilotdet3" onclick="toppilottabs3(event, 'pilotalltimebl')">All Time</a></li>
		</ul>
	</div>
	<div class="toppilotcont1">
		<div id="pilotdaybl" class="toppilotcon3"><?php Template::show('toppilot/toppilotlandingday.php');?></div>
		<div id="pilotweekbl" class="toppilotcon3"><?php Template::show('toppilot/toppilotlandingweek.php');?></div>
		<div id="pilotmonthbl" class="toppilotcon3"><?php Template::show('toppilot/toppilotlandingmonth.php');?></div>
		<div id="pilotyearbl" class="toppilotcon3"><?php Template::show('toppilot/toppilotlandingyear.php');?></div>
		<div id="pilotalltimebl" class="toppilotcon3"><?php Template::show('toppilot/toppilotalltimebl.php');?></div>
	</div>
</div>
<script>
document.getElementById("defaultOpen3").click();
</script>