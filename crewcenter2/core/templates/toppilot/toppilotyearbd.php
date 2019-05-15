<table class="toppilot">
	<tr><th>Pilot ID</th><th>Name</th><th>Rank</th><th>Amount</th></tr>
	<?php 
	if($bestdistanceyears == '')		
		{
	?>
			<tr><td align="center" colspan="4">No Records This Year!</td></tr>
	<?php
		}
	else
		{
			foreach ($bestdistanceyears as $bestdistanceyear)
				{
					$rnk = "SELECT * FROM ".TABLE_PREFIX."ranks WHERE rank = '$bestdistanceyear->rank'";
					$rn = DB::get_row($rnk);
					$rank = $rn->rankimage;
					$pilotcode = PilotData::getPilotCode($bestdistanceyear->code, $bestdistanceyear->pilotid);
	?>
			<tr>
				<td><?php echo $pilotcode ;?></td>
				<td style="vertical-align: middle;"><?php echo $bestdistanceyear->firstname.' '.$bestdistanceyear->lastname ;?></td>
				<td style="vertical-align: middle;"><img src="<?php echo $rank ;?>"></td>
				<td><?php echo $bestdistanceyear->distance ;?> NM</td>
			</tr>
	<?php 
				}
		}	 
	?>
</table>
		
