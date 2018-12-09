<?php if(!defined('IN_PHPVMS') && IN_PHPVMS !== true) { die(); } ?>
<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(<?php echo SITE_URL; ?>/lib/skins/avianca/images/img_bg_2.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="row row-mt-15em">

						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>Voo <?php echo $pirep->code . $pirep->flightnum; ?></h1>
                            <small><ol class="breadcrumb">
  <li>Home</li>
  <li>Operações</li>
  <li class="active"><b>Voo <?php echo $pirep->code . $pirep->flightnum; ?></b></li>
</ol></small>							
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</header>
<div class="container ooo" id="tourpackages-carousel">

<table class="table table-bordered table-hover" width="100%">
<tr>

<td width="50%">
<ul>
	<li><strong>Enviado por: </strong><a href="<?php echo SITE_URL.'/index.php/profile/view/'.$pirep->pilotid?>">
			<?php echo $pirep->firstname.' '.$pirep->lastname?></a></li>
	<li><strong>Aeroporto de Decolagem: </strong><?php echo $pirep->depname?> (<?php echo $pirep->depicao; ?>)</li>
	<li><strong>Aeroporto de Pouso: </strong><?php echo $pirep->arrname?> (<?php echo $pirep->arricao; ?>)</li>
	<li><strong>Aeronave: </strong><?php echo $pirep->aircraft . " ($pirep->registration)"?></li>
	<li><strong>Tempo de Voo: </strong> <?php echo $pirep->flighttime; ?></li>
	<li><strong>Data do Envio: </strong> <?php echo date(DATE_FORMAT, $pirep->submitdate);?></li>
	<?php
	if($pirep->route != '')
	{
		echo "<li><strong>Rota: </strong>{$pirep->route}</li>";
	}
	?>
	<li><strong>Status: </strong>
		<?php

		if($pirep->accepted == PIREP_ACCEPTED)
			echo 'Aprovado';
		elseif($pirep->accepted == PIREP_REJECTED)
			echo 'Reprovado';
		elseif($pirep->accepted == PIREP_PENDING)
			echo 'Pendente';
		elseif($pirep->accepted == PIREP_INPROGRESS)
			echo 'Em progresso';
		?>
	</li>
</ul>
</td>
<td width="50%" valign="top" align="right">
<table class="balancesheet table table-bordered table-hover" cellpadding="0" cellspacing="0" width="100%">

	<tr class="balancesheet_header">
		<td align="" colspan="2">Detalhes</td>
	</tr>
	<tr>
		<td align="right">Lucro Bruto: <br /> 
			(<?php echo $pirep->load;?> load / <?php echo FinanceData::FormatMoney($pirep->price);?> por unidade  <br />
		<td align="right" valign="top"><?php echo FinanceData::FormatMoney($pirep->load * $pirep->price);?></td>
	</tr>
	<tr>
		<td align="right">Custo de Combustivel: <br />
			(<?php echo $pirep->fuelused;?> fuel used @ <?php echo $pirep->fuelunitcost?> / unit)<br />
		<td align="right" valign="top"><?php echo FinanceData::FormatMoney($pirep->fuelused * $pirep->fuelunitcost);?></td>
	</tr>
	</table>
</td>
</tr>
</table>

<?php
if($fields)
{
?>
<h3>Detalhes</h3>			
<ul>
	<?php
	foreach ($fields as $field)
	{
		if($field->value == '')
		{
			$field->value = '-';
		}
	?>		
		<li><strong><?php echo $field->title ?>: </strong><?php echo $field->value ?></li>
<?php
	}
	?>
</ul>	
<?php
}
?>

<?php
if($pirep->log != '')
{
?>
<h3>Informações Adicionais:</h3>
<p>
	<?php
	/* If it's FSFK, don't show the toggle. We want all the details and pretty
		images showing up by default */
	if($pirep->source != 'fsfk')
	{
		?>
	<p><a href="#" onclick="$('#log').toggle(); return false;">Ver Log</a></p>
	<p id="log" style="display: none;">
	<?php
	}
	else
	{
		echo '<p>';
	}
	?>
		<div>
		<?php
		# Simple, each line of the log ends with *
		# Just explode and loop.
		$log = explode('*', $pirep->log);
		foreach($log as $line)
		{
			echo $line .'<br />';
		}
		?>
		</div>
	</p>
</p>
<?php
}
?>

<?php
if($comments)
{
echo '<h3>Comments</h3>
	<table id="tabledlist" class="tablesorter">
<thead>
<tr>
<th>Commenter</th>
<th>Comment</th>
</tr>
</thead>
<tbody>';

foreach($comments as $comment)
{
?>
<tr>
	<td width="15%" nowrap><?php echo $comment->firstname . ' ' .$comment->lastname?></td>
	<td align="left"><?php echo $comment->comment?></td>
</tr>
<?php
}

echo '</tbody></table>';
}
?>