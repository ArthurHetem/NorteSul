<table class="toppilot">
	<tr><th>Pilot ID</th><th>Name</th><th>Rank</th><th>Amount</th></tr>
	<?php 
	if($bestrevenueyears == '')		
		{
	?>
			<tr><td align="center" colspan="4">No Records This Year!</td></tr>
	<?php
		}
	else
		{
			foreach ($bestrevenueyears as $bestrevenueyear)
				{
					$rnk = "SELECT * FROM ".TABLE_PREFIX."ranks WHERE rank = '$bestrevenueyear->rank'";
					$rn = DB::get_row($rnk);
					$rank = $rn->rankimage;
					$pilotcode = PilotData::getPilotCode($bestrevenueyear->code, $bestrevenueyear->pilotid);
	?>
			<tr>
				<td><?php echo $pilotcode ;?></td>
				<td style="vertical-align: middle;"><?php echo $bestrevenueyear->firstname.' '.$bestrevenueyear->lastname ;?></td>
				<td style="vertical-align: middle;"><img src="<?php echo $rank ;?>"></td>
				<td><?php echo FinanceData::formatMoney($bestrevenueyear->revenue) ;?></td>
			</tr>
	<?php 
				}
		}	 
	?>
</table>
		
