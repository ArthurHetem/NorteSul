<table class="toppilot">
	<tr><th>Pilot ID</th><th>Name</th><th>Rank</th><th>Amount</th></tr>
	<?php 
	if(!$bestlandingmonths)		
		{
	?>
			<tr><td align="center" colspan="4">No Records This Month!</td></tr>
	<?php
		}
	else
		{
			foreach ($bestlandingmonths as $bestlandingmonth)
				{
					$rnk = "SELECT * FROM ".TABLE_PREFIX."ranks WHERE rank = '$bestlandingmonth->rank'";
					$rn = DB::get_row($rnk);
					$rank = $rn->rankimage;
					$pilotcode = PilotData::getPilotCode($bestlandingmonth->code, $bestlandingmonth->pilotid);
	?>
			<tr>
				<td><?php echo $pilotcode ;?></td>
				<td><?php echo $bestlandingmonth->firstname.' '.$bestlandingmonth->lastname ;?></td>
				<td><img src="<?php echo $rank ;?>"></td>
				<td><?php echo $bestlandingmonth->landingrate ;?> /FPS</td>
			</tr>
	<?php 
				}
		} 
	?>
</table>