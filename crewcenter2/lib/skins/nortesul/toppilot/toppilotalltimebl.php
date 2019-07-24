<table class="table">
	<tr><th width="10%"><h4>Matrícula</h4></th><th width="20%"><h4>Nome</h4></th><th><h4>Rank</h4></th><th><h4>Landing Rate</h4></th></tr>
	<?php
	if(!$bestlandingalltimes)
		{
	?>
			<tr><td align="center" colspan="4">No Records All Time!</td></tr>
	<?php
		}
	else
		{
			foreach ($bestlandingalltimes as $bestlandingalltime)
				{
					$rnk = "SELECT * FROM ".TABLE_PREFIX."ranks WHERE rank = '$bestlandingalltime->rank'";
					$rn = DB::get_row($rnk);
					$rank = $rn->rankimage;
					$pilotcode = PilotData::getPilotCode($bestlandingalltime->code, $bestlandingalltime->pilotid);
	?>
					<tr>
						<td><?php echo $pilotcode ;?></td>
						<td><?php echo $bestlandingalltime->firstname.' '.$bestlandingalltime->lastname ;?></td>
						<td><img src="<?php echo $rank ;?>"></td><td><?php echo $bestlandingalltime->landingrate ;?> /FPS</td>
					</tr>
	<?php
				}
		}
	?>
</table>
