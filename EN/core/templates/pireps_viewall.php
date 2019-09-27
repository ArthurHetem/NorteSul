<?php if(!defined('IN_PHPVMS') && IN_PHPVMS !== true) { die(); } ?>
<p><?php if(isset($descrip)) { echo $descrip; }?></p>
<?php
if(!$pirep_list) {
	echo '<p>No reports have been found</p>';
	return;
}
?>
<table id="tabledlist" class="table table-stripped table-bordered">
<thead>
<tr>
	<th>Voo #</th>
	<th>Origem</th>
	<th>Destino</th>
	<th>Aeronave</th>
	<th>Duração</th>
	<th>Data</th>
	<th>Situação</th>
	<?php
	// Only show this column if they're logged in, and the pilot viewing is the
	//	owner/submitter of the PIREPs
	if(Auth::LoggedIn() && Auth::$pilot->pilotid == $pilot->pilotid) {
		echo '<th>Options</th>';
	}
	?>
</tr>
</thead>
<tbody>
<?php
foreach($pirep_list as $pirep) {
?>
<tr>
	<td align="center">
		<a href="<?php echo url('/pireps/view/'.$pirep->pirepid);?>"><?php echo $pirep->code . $pirep->flightnum; ?></a>
	</td>
	<td align="center"><?php echo $pirep->depicao; ?></td>
	<td align="center"><?php echo $pirep->arricao; ?></td>
	<td align="center"><?php echo $pirep->aircraft . " ($pirep->registration)"; ?></td>
	<td align="center"><?php echo $pirep->flighttime; ?></td>
	<td align="center"><?php echo date(DATE_FORMAT, $pirep->submitdate); ?></td>
	<td align="center">
		<?php
		
		if($pirep->accepted == PIREP_ACCEPTED) {
            echo '<div id="success">Aprovado</div>';
		} elseif($pirep->accepted == PIREP_REJECTED) {
            echo '<div id="error">Rejeitado</div>';
		} elseif($pirep->accepted == PIREP_PENDING) {
            echo '<div id="error">Pendente</div>';
		} elseif($pirep->accepted == PIREP_INPROGRESS) {
            echo '<div id="error">Em progresso</div>';
		}
			
		
		?>
	</td>
	<?php
	// Only show this column if they're logged in, and the pilot viewing is the
	//	owner/submitter of the PIREPs
	if(Auth::LoggedIn() && Auth::$pilot->pilotid == $pirep->pilotid) {
		?>
	<td align="right">
		<a href="<?php echo url('/pireps/addcomment?id='.$pirep->pirepid);?>">Add Comment</a><br />
		<a href="<?php echo url('/pireps/editpirep?id='.$pirep->pirepid);?>">Edit PIREP</a>
	</td>
	<?php
	}
	?>
</tr>
<?php
}
?>
</tbody>
</table>