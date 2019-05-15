<table class="toppilot">
	<tr><th>Pilot ID</th><th>Name</th><th>Rank</th><th>Amount</th></tr>
	<?php 
	if(!$bestdistancemonths)		
		{
	?>
			<tr><td align="center" colspan="4">No Records This Month!</td></tr>
	<?php
		}
	else
		{
			foreach ($bestdistancemonths as $bestdistancemonth)
				{
					$rnk = "SELECT * FROM ".TABLE_PREFIX."ranks WHERE rank = '$bestdistancemonth->rank'";
					$rn = DB::get_row($rnk);
					$rank = $rn->rankimage;
					$pilotcode = PilotData::getPilotCode($bestdistancemonth->code, $bestdistancemonth->pilotid);
	?>
					<tr>
						<td><?php echo $pilotcode ;?></td>
						<td><?php echo $bestdistancemonth->firstname.' '.$bestdistancemonth->lastname ;?></td>
						<td><img src="<?php echo $rank ;?>"></td>
						<td><?php echo $bestdistancemonth->distance ;?> NM</td>
					</tr>
	<?php 
				}
		} 
	?>
</table>
		
