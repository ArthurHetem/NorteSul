<table class="table">
	<tr><th width="10%"><h4>Pilot ID</h4></th><th width="20%"><h4>Name</h4></th><th><h4>Rank</h4></th><th><h4>Landing Rate</h4></th></tr>
	<?php
	if(!$bestlandingmonths)
		{
	?>
			<tr><td align="center" colspan="4" class="label label-danger text-center">Nenhum reporte este mês!</td></tr>
	<?php
		}
	else
		{
			foreach ($bestlandingmonths as $bestlandingmonth)
				{
					$rnk = "SELECT * FROM ".TABLE_PREFIX."ranks WHERE rank = '$bestlandingmonth->rank'";
					$rn = DB::get_row($rnk);
					$rank = $rn->rankimage;
					$pilotcode = PilotData::getPilotCode($bestlandingmonth->code, $bestlandingmonth->pilotid);
	?>
			<tr>
				<td><?php echo $pilotcode ;?></td>
				<td><?php echo $bestlandingmonth->firstname.' '.$bestlandingmonth->lastname ;?></td>
				<td><img src="<?php echo $rank ;?>"></td>
				<td><?php echo $bestlandingmonth->landingrate ;?> /FPS</td>
			</tr>
	<?php
				}
		}
	?>
</table>
