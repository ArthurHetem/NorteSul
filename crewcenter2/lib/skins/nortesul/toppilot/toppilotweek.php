<table class="table">
	<tr><th width="10%"><h4>Pilot ID</h4></th><th width="20%"><h4>Name</h4></th><th><h4>Rank</h4></th><th><h4>Amount</h4></th></tr>
	<?php
	if(!$bestrevenueweeks)
		{
	?>
			<tr><td align="center" colspan="4" class="label label-danger text-center">No reports this week!</td></tr>
	<?php
		}
	else
		{
			foreach ($bestrevenueweeks as $bestrevenueweek)
				{
					$rnk = "SELECT * FROM ".TABLE_PREFIX."ranks WHERE rank = '$bestrevenueweek->rank'";
					$rn = DB::get_row($rnk);
					$rank = $rn->rankimage;
					$pilotcode = PilotData::getPilotCode($bestrevenueweek->code, $bestrevenueweek->pilotid);
	?>
					<tr>
						<td><?php echo $pilotcode ;?></td><td><?php echo $bestrevenueweek->firstname.' '.$bestrevenueweek->lastname ;?></td>
						<td><img src="<?php echo $rank ;?>"></td><td><?php echo FinanceData::formatMoney($bestrevenueweek->revenue) ;?></td>
					</tr>
	<?php
				}
		}
	?>
</table>
