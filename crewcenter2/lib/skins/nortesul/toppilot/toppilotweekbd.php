<table class="table">
	<tr><th width="10%"><h4>Pilot ID</h4></th><th width="20%"><h4>Name</h4></th><th><h4>Rank</h4></th><th><h4>Distance</h4></th></tr>
	<?php
	if(!$bestdistanceweeks)
		{
	?>
			<tr><td align="center" colspan="4" class="label label-danger text-center">Nenhum reporte essa semana!</td></tr>
	<?php
		}
	else
		{
			foreach ($bestdistanceweeks as $bestdistanceweek)
				{
					$rnk = "SELECT * FROM ".TABLE_PREFIX."ranks WHERE rank = '$bestdistanceweek->rank'";
					$rn = DB::get_row($rnk);
					$rank = $rn->rankimage;
					$pilotcode = PilotData::getPilotCode($bestdistanceweek->code, $bestdistanceweek->pilotid);
	?>
			<tr>
				<td><?php echo $pilotcode ;?></td>
				<td><?php echo $bestdistanceweek->firstname.' '.$bestdistanceweek->lastname ;?></td>
				<td><img src="<?php echo $rank ;?>"></td>
				<td><?php echo $bestdistanceweek->distance ;?> NM</td>
			</tr>
	<?php
				}
		}
	?>
</table>
