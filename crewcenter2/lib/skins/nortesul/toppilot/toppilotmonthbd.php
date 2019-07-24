<table class="table">
	<tr><th width="10%"><h4>Matrícula</h4></th><th width="20%"><h4>Nome</h4></th><th><h4>Rank</h4></th><th><h4>Distância</h4></th></tr>
	<?php
	if(!$bestdistancemonths)
		{
	?>
			<tr><td align="center" colspan="4" class="label label-danger text-center">Nenhum reporte este mês!</td></tr>
	<?php
		}
	else
		{
			foreach ($bestdistancemonths as $bestdistancemonth)
				{
					$rnk = "SELECT * FROM ".TABLE_PREFIX."ranks WHERE rank = '$bestdistancemonth->rank'";
					$rn = DB::get_row($rnk);
					$rank = $rn->rankimage;
					$pilotcode = PilotData::getPilotCode($bestdistancemonth->code, $bestdistancemonth->pilotid);
	?>
					<tr>
						<td><?php echo $pilotcode ;?></td>
						<td><?php echo $bestdistancemonth->firstname.' '.$bestdistancemonth->lastname ;?></td>
						<td><img src="<?php echo $rank ;?>"></td>
						<td><?php echo $bestdistancemonth->distance ;?> NM</td>
					</tr>
	<?php
				}
		}
	?>
</table>
