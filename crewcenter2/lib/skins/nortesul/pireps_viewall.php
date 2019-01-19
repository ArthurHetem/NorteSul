<?php if(!defined('IN_PHPVMS') && IN_PHPVMS !== true) { die(); } ?>
<section class="content container-fluid">
			<div class="row">
			<div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Meus voos</h3>
            </div>
			<div class="box-body">
<?php
if(!$pirep_list) {
	echo '<div class="alert alert-danger">Nenhum voo encontrado!</div>';
	return;
}
?>
<table id="tabledlist" class="table table-bordered">
<thead>
<tr>
	<th>Voo #</th>
	<th><b>DEP <i class="fa fa-plane"></i> ARR</b></td>
	<th>Aeronave</th>
	<th>Tempo de Voo</th>
	<th>Enviado em</th>
	<th>Status</th>
	<?php
	// Only show this column if they're logged in, and the pilot viewing is the
	//	owner/submitter of the PIREPs
	if(Auth::LoggedIn() && Auth::$pilot->pilotid == $pilot->pilotid) {
		echo '<th>Opções</th>';
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
	<td align="center"><?php echo $pirep->depicao; ?> <i class="fa fa-plane"> <?php echo $pirep->arricao; ?></td>
	<td align="center"><?php echo $pirep->aircraft . " ($pirep->registration)"; ?></td>
	<td align="center"><?php echo $pirep->flighttime; ?></td>
	<td align="center"><?php echo date(DATE_FORMAT, $pirep->submitdate); ?></td>
	<td align="center">
		<?php
		
		if($pirep->accepted == PIREP_ACCEPTED) {
            echo '<span class="badge bg-green">Aceito</span>';
		} elseif($pirep->accepted == PIREP_REJECTED) {
            echo '<span class="badge bg-red">Rejeitado</span>';
		} elseif($pirep->accepted == PIREP_PENDING) {
            echo '<span class="badge bg-yellow">Aprovação pendente</span>';
		} elseif($pirep->accepted == PIREP_INPROGRESS) {
            echo '<span class="badge bg-info">Voo em andamento</span>';
		}
			
		
		?>
	</td>
	<?php
	// Only show this column if they're logged in, and the pilot viewing is the
	//	owner/submitter of the PIREPs
	if(Auth::LoggedIn() && Auth::$pilot->pilotid == $pirep->pilotid) {
		?>
	<td align="right">
		<a href="<?php echo url('/pireps/addcomment?id='.$pirep->pirepid);?>">Adicionar comentário</a><br />
		<a href="<?php echo url('/pireps/editpirep?id='.$pirep->pirepid);?>">Editar PIREP</a>
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
</div>
</div>
</div>
</div>
</section>