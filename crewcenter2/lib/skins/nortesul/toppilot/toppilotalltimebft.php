<table class="toppilot">
	<tr><th>Pilot ID</th><th>Name</th><th>Rank</th><th>Amount</th></tr>
	<?php
	if(!$bestflighttimealltimes)		
		{
	?>
			<tr><td align="center" colspan="4">No Records All Time!</td></tr>
	<?php
		}
	else
		{
			foreach ($bestflighttimealltimes as $bestflighttimealltime)
				{
					$hrs = intval($bestflighttimealltime->flighttime);
					$min = ($bestflighttimealltime->flighttime - $hrs) * 100;
					$rnk = "SELECT * FROM ".TABLE_PREFIX."ranks WHERE rank = '$bestflighttimealltime->rank'";
					$pilotcode = PilotData::getPilotCode($bestflighttimealltime->code, $bestflighttimealltime->pilotid);
					$rn = DB::get_row($rnk);
					$rank = $rn->rankimage;
				if($min >= 60)
					{
						$hrss = $hrs + 1;
						$mins = $min - 60;
											
		?>
						<tr>
							<td><?php echo $pilotcode ;?></td>
							<td><?php echo $bestflighttimealltime->firstname.' '.$bestflighttimealltime->lastname ;?></td>
							<td><img src="<?php echo $rank ;?>"></td><td><?php echo $hrss.':'.$mins ;?> HRS</td>
						</tr>
		<?php						
					}
				elseif($min < 10)
					{
		?>
						<tr>
							<td><?php echo $pilotcode ;?></td>
							<td><?php echo $bestflighttimealltime->firstname.' '.$bestflighttimealltime->lastname ;?></td>
							<td><img src="<?php echo $rank ;?>"></td><td><?php echo $hrs.':0'.$min ;?> HRS</td>
						</tr>
		<?php 
					}
				else
					{
		?>
						<tr>
							<td><?php echo $pilotcode ;?></td>
							<td><?php echo $bestflighttimealltime->firstname.' '.$bestflighttimealltime->lastname ;?></td>
							<td><img src="<?php echo $rank ;?>"></td><td><?php echo $hrs.':'.$min ;?> HRS</td>
						</tr>
		<?php							
					}
				} 
		}
			?>
</table>