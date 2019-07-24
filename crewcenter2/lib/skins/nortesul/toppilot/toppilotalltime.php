<table class="table">
	<tr><th width="10%"><h4>Matrícula</h4></th><th width="20%"><h4>Nome</h4></th><th><h4>Rank</h4></th><th><h4>Quantia</h4></th></tr>
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
