<table class="toppilot">
	<tr><th>Pilot ID</th><th>Name</th><th>Rank</th><th>Amount</th></tr>
	<?php 
	if(!$bestrevenuedays)		
		{
	?>
			<tr><td align="center" colspan="4">No Records Today!</td></tr>
	<?php
		}
	else
		{
			foreach ($bestrevenuedays as $bestrevenueday)
				{
					$rnk = "SELECT * FROM ".TABLE_PREFIX."ranks WHERE rank = '$bestrevenueday->rank'";
					$rn = DB::get_row($rnk);
					$rank = $rn->rankimage;
					$pilotcode = PilotData::getPilotCode($bestrevenueday->code, $bestrevenueday->pilotid);
	?>
					<tr>
						<td><?php echo $pilotcode ;?></td>
						<td><?php echo $bestrevenueday->firstname.' '.$bestrevenueday->lastname ;?></td>
						<td><img src="<?php echo $rank ;?>"></td><td><?php echo FinanceData::formatMoney($bestrevenueday->revenue) ;?></td>
					</tr>
	<?php 
				}
		} 
	?>
</table>
