<table class="table">
	<tr><th width="10%"><h4>Pilot ID</h4></th><th width="20%"><h4>Name</h4></th><th><h4>Rank</h4></th><th><h4>Distance</h4></th></tr>
	<?php
	if(!$bestdistancedays)
		{
	?>
			<tr><td align="center" colspan="4" class="label label-danger text-center">Nenhum reporte de hoje!</td></tr>
	<?php
		}
	else
		{
			foreach ($bestdistancedays as $bestdistanceday)
				{
					$rnk = "SELECT * FROM phpvms_ranks WHERE rank = '$bestdistanceday->rank'";
					$rn = DB::get_row($rnk);
					$rank = $rn->rankimage;
					$pilotcode = PilotData::getPilotCode($bestdistanceday->code, $bestdistanceday->pilotid);
	?>
					<tr>
						<td><?php echo $pilotcode ;?></td>
						<td><?php echo $bestdistanceday->firstname.' '.$bestdistanceday->lastname ;?></td>
						<td><img src="<?php echo $rank ;?>"></td>
						<td><?php echo $bestdistanceday->distance ;?> NM</td>
					</tr>
	<?php
				}
		}
	?>
</table>
