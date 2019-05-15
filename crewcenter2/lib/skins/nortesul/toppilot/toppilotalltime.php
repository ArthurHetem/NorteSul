<table class="toppilot">
	<tr><th>Pilot ID</th><th>Name</th><th>Rank</th><th>Amount</th></tr>
	<?php 
	if(!$bestrevenuealltimes)		
		{
	?>
			<tr><td align="center" colspan="4">No Records All Time!</td></tr>
	<?php
		}
	else
		{
			foreach ($bestrevenuealltimes as $bestrevenuealltime)
				{
					$rnk = "SELECT * FROM ".TABLE_PREFIX."ranks WHERE rank = '$bestrevenuealltime->rank'";
					$rn = DB::get_row($rnk);
					$rank = $rn->rankimage;
					$pilotcode = PilotData::getPilotCode($bestrevenuealltime->code, $bestrevenuealltime->pilotid);
	?>
					<tr>
						<td><?php echo $pilotcode ;?></td>
						<td><?php echo $bestrevenuealltime->firstname.' '.$bestrevenuealltime->lastname ;?></td>
						<td><img src="<?php echo $rank ;?>"></td><td><?php echo FinanceData::formatMoney($bestrevenuealltime->revenue) ;?></td>
					</tr>
	<?php 
				}
		} 
	?>
</table>