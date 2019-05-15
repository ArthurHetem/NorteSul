<table class="toppilot">
	<tr><th>Pilot ID</th><th>Name</th><th>Rank</th><th>Amount</th></tr>
	<?php 
	if(!$bestlandingdays)		
		{
	?>
			<tr><td align="center" colspan="4">No Records Today!</td></tr>
	<?php
		}
	else
		{
			foreach ($bestlandingdays as $bestlandingday)
				{
					$rnk = "SELECT * FROM ".TABLE_PREFIX."ranks WHERE rank = '$bestlandingday->rank'";
					$rn = DB::get_row($rnk);
					$rank = $rn->rankimage;
					$pilotcode = PilotData::getPilotCode($bestlandingday->code, $bestlandingday->pilotid);
	?>
			<tr>
				<td><?php echo $pilotcode ;?></td>
				<td><?php echo $bestlandingday->firstname.' '.$bestlandingday->lastname ;?></td>
				<td><img src="<?php echo $rank ;?>"></td>
				<td><?php echo $bestlandingday->landingrate ;?> /FPS</td>
			</tr>
	<?php 
				}
		} 
	?>
</table>