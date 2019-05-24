<table class="table">
	<tr><th width="10%"><h4>Pilot ID</h4></th><th width="20%"><h4>Name</h4></th><th><h4>Rank</h4></th><th><h4>Amount</h4></th></tr>
	<?php
	if(!$bestrevenuedays)
		{
	?>
			<tr><td align="center" colspan="4" class="label label-danger text-center">Nenhum reporte de hoje!</td></tr>
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
