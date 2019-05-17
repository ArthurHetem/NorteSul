<table class="table">
	<tr><th width="10%"><h4>Pilot ID</h4></th><th><h4>Name</h4></th><th><h4>Rank</h4></th><th><h4>Landing Rate</h4></th></tr>
	<?php
	if(!$bestlandingdays)
		{
	?>
			<tr><td align="center" colspan="4" class="label label-danger text-center">Nenhum reporte de hoje!</td></tr>
	<?php
		}
	else
		{
			foreach ($bestlandingdays as $bestlandingday)
				{
					$rnk = "SELECT * FROM ".TABLE_PREFIX."ranks WHERE rank = '$bestlandingday->rank'";
					$rn = DB::get_row($rnk);
					$rank = $rn->rankimage;
					$pilotcode = PilotData::getPilotCode($bestlandingday->code, $bestlandingday->pilotid);
	?>
			<tr>
				<td><?php echo $pilotcode ;?></td>
				<td><?php echo $bestlandingday->firstname.' '.$bestlandingday->lastname ;?></td>
				<td><img src="<?php echo $rank ;?>"></td>
				<td><?php echo $bestlandingday->landingrate ;?> /FPS</td>
			</tr>
	<?php
				}
		}
	?>
</table>
