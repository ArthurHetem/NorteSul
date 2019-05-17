<table class="table">
	<tr><th width="10%"><h4>Pilot ID</h4></th><th><h4>Name</h4></th><th><h4>Rank</h4></th><th><h4>Amount</h4></th></tr>
	<?php
	if(!$bestrevenuemonths)
		{
	?>
			<tr><td align="center" colspan="4" class="label label-danger text-center">Nenhum reporte este mês!</td></tr>
	<?php
		}
	else
		{
			foreach ($bestrevenuemonths as $bestrevenuemonth)
				{
					$rnk = "SELECT * FROM ".TABLE_PREFIX."ranks WHERE rank = '$bestrevenuemonth->rank'";
					$rn = DB::get_row($rnk);
					$rank = $rn->rankimage;
					$pilotcode = PilotData::getPilotCode($bestrevenuemonth->code, $bestrevenuemonth->pilotid);
	?>
			<tr>
				<td><?php echo $pilotcode ;?></td>
				<td><?php echo $bestrevenuemonth->firstname.' '.$bestrevenuemonth->lastname ;?></td>
				<td><img src="<?php echo $rank ;?>"></td>
				<td><?php echo FinanceData::formatMoney($bestrevenuemonth->revenue) ;?></td>
			</tr>
	<?php
				}
		}
			?>

		</table>
