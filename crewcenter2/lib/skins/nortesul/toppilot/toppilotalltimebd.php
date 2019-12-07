<table class="table">
	<tr><th width="10%"><h4>Pilot ID</h4></th><th width="20%"><h4>Name</h4></th><th><h4>Rank</h4></th><th><h4>Distance</h4></th></tr>
	<?php
	if(!$bestdistancealltimes)
		{
	?>
			<tr><td align="center" colspan="4">No Records All Time!</td></tr>
	<?php
		}
	else
		{
			foreach ($bestdistancealltimes as $bestdistancealltime)
				{
					$rnk = "SELECT * FROM ".TABLE_PREFIX."ranks WHERE rank = '$bestdistancealltime->rank'";
					$rn = DB::get_row($rnk);
					$rank = $rn->rankimage;
					$pilotcode = PilotData::getPilotCode($bestdistancealltime->code, $bestdistancealltime->pilotid);
	?>
					<tr>
						<td><?php echo $pilotcode ;?></td>
						<td><?php echo $bestdistancealltime->firstname.' '.$bestdistancealltime->lastname ;?></td>
						<td><img src="<?php echo $rank ;?>"></td><td><?php echo $bestdistancealltime->distance ;?> NM</td>
					</tr>
	<?php
				}
		}
	?>
</table>
