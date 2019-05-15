<div class="contain1">
	<div class="toppilotdetailbft1">
		<ul class="toppilotleft1">
			<li><a id="defaultOpen2" href="javascript:void(0)" class="toppilotdet2" onclick="toppilottabs2(event, 'pilotdaybft')">Today</a></li>
			<li><a href="javascript:void(0)" class="toppilotdet2" onclick="toppilottabs2(event, 'pilotweekbft')">This Week</a></li>
			<li><a href="javascript:void(0)" class="toppilotdet2" onclick="toppilottabs2(event, 'pilotmonthbft')">This Month</a></li>
			<li><a href="javascript:void(0)" class="toppilotdet2" onclick="toppilottabs2(event, 'pilotyearbft')">This Year</a></li>
			<li><a href="javascript:void(0)" class="toppilotdet2" onclick="toppilottabs2(event, 'pilotalltimebft')">All Time</a></li>
		</ul>
	</div>
	<div class="toppilotcont1">
		<div id="pilotdaybft" class="toppilotcon2"><?php Template::show('toppilot/toppilotdaybft.php');?></div>
		<div id="pilotweekbft" class="toppilotcon2"><?php Template::show('toppilot/toppilotweekbft.php');?></div>
		<div id="pilotmonthbft" class="toppilotcon2"><?php Template::show('toppilot/toppilotmonthbft.php');?></div>
		<div id="pilotyearbft" class="toppilotcon2"><?php Template::show('toppilot/toppilotyearbft.php');?></div>
		<div id="pilotalltimebft" class="toppilotcon2"><?php Template::show('toppilot/toppilotalltimebft.php');?></div>
	</div>
</div>
<script>
document.getElementById("defaultOpen2").click();
</script>
