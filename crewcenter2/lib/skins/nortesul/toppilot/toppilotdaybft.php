<table class="table">
	<tr><th width="10%"><h4>Pilot ID</h4></th><th width="20%"><h4>Name</h4></th><th><h4>Rank</h4></th><th><h4>Time</h4></th></tr>
	<?php
	if(!$bestflighttimedays)
		{
	?>
			<tr><td align="center" colspan="4" class="label label-danger text-center">Nenhum reporte de hoje!</td></tr>
	<?php
		}
	else
		{
			foreach ($bestflighttimedays as $bestflighttimeday)
				{
					$hrs = intval($bestflighttimeday->flighttime);
					$min = ($bestflighttimeday->flighttime - $hrs) * 100;
					$rnk = "SELECT * FROM ".TABLE_PREFIX."ranks WHERE rank = '$bestflighttimeday->rank'";
					$pilotcode = PilotData::getPilotCode($bestflighttimeday->code, $bestflighttimeday->pilotid);
					$rn = DB::get_row($rnk);
					$rank = $rn->rankimage;
					if($min >= 60)
						{
							$hrss = $hrs + 1;
							$mins = $min - 60;
	?>
							<tr>
								<td><?php echo $pilotcode ;?></td>
								<td><?php echo $bestflighttimeday->firstname.' '.$bestflighttimeday->lastname ;?></td>
								<td><img src="<?php echo $rank ;?>"></td><td><?php echo $hrss.':'.$mins ;?> HRS</td>
							</tr>
	<?php
						}
					elseif($min < 10)
						{
	?>
							<tr>
								<td><?php echo $pilotcode ;?></td>
								<td><?php echo $bestflighttimeday->firstname.' '.$bestflighttimeday->lastname ;?></td>
								<td><img src="<?php echo $rank ;?>"></td><td><?php echo $hrs.':0'.$min ;?> HRS</td>
							</tr>
	<?php
						}
					else
						{
	?>
							<tr>
								<td><?php echo $pilotcode ;?></td>
								<td><?php echo $bestflighttimeday->firstname.' '.$bestflighttimeday->lastname ;?></td>
								<td><img src="<?php echo $rank ;?>"></td><td><?php echo $hrs.':'.$min ;?> HRS</td>
							</tr>
	<?php
						}

				}
		}
	?>
</table>
