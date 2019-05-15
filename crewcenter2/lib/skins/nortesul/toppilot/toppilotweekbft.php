<table class="table">
	<tr><th><h4>Pilot ID</h4></th><th><h4>Name</h4></th><th><h4>Rank</h4></th><th><h4>Time</h4></th></tr>
	<?php
	if(!$bestflighttimeweeks)
		{
	?>
			<tr><td align="center" colspan="4" class="label label-danger text-center">Nenhum reporte esta semana!</td></tr>
	<?php
		}
	else
		{
			foreach ($bestflighttimeweeks as $bestflighttimeweek)
				{
					$hrs = intval($bestflighttimeweek->flighttime);
					$min = ($bestflighttimeweek->flighttime - $hrs) * 100;
					$rnk = "SELECT * FROM ".TABLE_PREFIX."ranks WHERE rank = '$bestflighttimeweek->rank'";
					$pilotcode = PilotData::getPilotCode($bestflighttimeweek->code, $bestflighttimeweek->pilotid);
					$rn = DB::get_row($rnk);
					$rank = $rn->rankimage;
					if($min >= 60)
						{
							$hrss = $hrs + 1;
							$mins = $min - 60;
	?>
							<tr>
								<td><?php echo $pilotcode ;?></td>
								<td><?php echo $bestflighttimeweek->firstname.' '.$bestflighttimeweek->lastname ;?></td>
								<td><img src="<?php echo $rank ;?>"></td>
								<td><?php echo $hrss.':'.$mins ;?> HRS</td>
							</tr>
	<?php
						}
					elseif($min < 10)
						{
	?>
							<tr>
								<td><?php echo $pilotcode ;?></td>
								<td><?php echo $bestflighttimeweek->firstname.' '.$bestflighttimeweek->lastname ;?></td>
								<td><img src="<?php echo $rank ;?>"></td><td><?php echo $hrs.':0'.$min ;?> HRS</td>
							</tr>
	<?php
						}
					else
						{
	?>
							<tr>
								<td><?php echo $pilotcode ;?></td>
								<td><?php echo $bestflighttimeweek->firstname.' '.$bestflighttimeweek->lastname ;?></td>
								<td><img src="<?php echo $rank ;?>"></td><td><?php echo $hrs.':'.$min ;?> HRS</td>
							</tr>
	<?php
						}

				}
		}
	?>
</table>
