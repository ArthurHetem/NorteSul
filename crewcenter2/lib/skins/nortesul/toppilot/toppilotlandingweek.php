<table class="table">
	<tr><th width="10%"><h4>Pilot ID</h4></th><th width="20%"><h4>Name</h4></th><th><h4>Rank</h4></th><th><h4>Landing Rate</h4></th></tr>
	<?php
	if(!$bestlandingweeks)
		{
	?>
			<tr><td align="center" colspan="4" class="label label-danger text-center">No reports this week!</td></tr>
	<?php
		}
	else
		{
			foreach ($bestlandingweeks as $bestlandingweek)
				{
					$rnk = "SELECT * FROM ".TABLE_PREFIX."ranks WHERE rank = '$bestlandingweek->rank'";
					$rn = DB::get_row($rnk);
					$rank = $rn->rankimage;
					$pilotcode = PilotData::getPilotCode($bestlandingweek->code, $bestlandingweek->pilotid);
	?>
			<tr>
				<td><?php echo $pilotcode ;?></td>
				<td><?php echo $bestlandingweek->firstname.' '.$bestlandingweek->lastname ;?></td>
				<td><img src="<?php echo $rank ;?>"></td>
				<td><?php echo $bestlandingweek->landingrate ;?> /FPS</td>
			</tr>
	<?php
				}
		}
	?>
</table>
