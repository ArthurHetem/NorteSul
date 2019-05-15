<table class="toppilot">
	<tr><th>Pilot ID</th><th>Name</th><th>Rank</th><th>Amount</th></tr>
	<?php 
	if(!$bestflighttimemonths)		
		{
	?>
			<tr><td align="center" colspan="4">No Records This Month!</td></tr>
	<?php
		}
	else
		{
			foreach ($bestflighttimemonths as $bestflighttimemonth)
				{
					$hrs = intval($bestflighttimemonth->flighttime);
					$min = ($bestflighttimemonth->flighttime - $hrs) * 100;
					$rnk = "SELECT * FROM ".TABLE_PREFIX."ranks WHERE rank = '$bestflighttimemonth->rank'";
					$pilotcode = PilotData::getPilotCode($bestflighttimemonth->code, $bestflighttimemonth->pilotid);
					$rn = DB::get_row($rnk);
					$rank = $rn->rankimage;
					if($min >= 60)
						{
							$hrss = $hrs + 1;
							$mins = $min - 60;
							if($mins < 10)
								{
	?>
									<tr>
										<td><?php echo $pilotcode ;?></td>
										<td><?php echo $bestflighttimemonth->firstname.' '.$bestflighttimemonth->lastname ;?></td>
										<td><img src="<?php echo $rank ;?>"></td><td><?php echo $hrss.':0'.$mins ;?> HRS</td>
									</tr>
	<?php
								}
							else
								{
	?>
									<tr>
										<td><?php echo $pilotcode ;?></td>
										<td><?php echo $bestflighttimemonth->firstname.' '.$bestflighttimemonth->lastname ;?></td>
										<td><img src="<?php echo $rank ;?>"></td><td><?php echo $hrss.':'.$mins ;?> HRS</td>
									</tr>
	<?php	
								}
										
									
						}
					elseif($min < 10)
						{
?>
							<tr>
								<td><?php echo $pilotcode ;?></td>
								<td><?php echo $bestflighttimemonth->firstname.' '.$bestflighttimemonth->lastname ;?></td>
								<td><img src="<?php echo $rank ;?>"></td><td><?php echo $hrs.':0'.$min ;?> HRS</td>
							</tr>
<?php 
						}
					else
						{
?>
							<tr>
								<td><?php echo $pilotcode ;?></td>
								<td><?php echo $bestflighttimemonth->firstname.' '.$bestflighttimemonth->lastname ;?></td>
								<td><img src="<?php echo $rank ;?>"></td><td><?php echo $hrs.':'.$min ;?> HRS</td>
							</tr>
<?php							
						}
										
				} 
		}
?>
</table>