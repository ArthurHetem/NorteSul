<?php if(!defined('IN_PHPVMS') && IN_PHPVMS !== true) { die(); } ?>
<h3>Current Profits</h3>
<?php
if(!$allprofits)
{
	echo '<p>No profits have been added</p>';
	return;
}

$expense_list = Config::Get('EXPENSE_TYPES');
?>
<table id="tabledlist" class="tablesorter">
<thead>
<tr>
	<th>Name</th>
	<th>Price</th>
	<th>Type</th>
	<th>Options</th>
</tr>
</thead>
<tbody>
<?php
foreach($allprofits as $profits)
{
?>
<tr id="row<?php echo $profit->id;?>">
	<td align="center"><?php echo $profit->name; ?></td>
	<td align="center"><?php 
	
	if($profit->type == 'P' || $profit->type == 'G')
		echo $profit->cost.'%'; 
	else
		echo Config::Get('MONEY_UNIT').$profit->cost; 
	
	?></td>
	<td align="center"><?php echo $expense_list[$profit->type]; ?></td>
	<td align="center" width="1%" nowrap>
		<button id="dialog" class="jqModal button" 
			href="<?php echo adminaction('/finance/editprofit/'.$profit->id);?>">
		Edit</button>
		
		<button href="<?php echo adminaction('/finance/viewprofits');?>" action="deleteexpense"
			id="<?php echo $profit->id;?>" class="deleteitem button">Deletar</button>
	</td>
</tr>
	<?php
}
?>
</tbody>
</table>