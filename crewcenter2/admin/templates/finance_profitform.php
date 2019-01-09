<?php if(!defined('IN_PHPVMS') && IN_PHPVMS !== true) { die(); } ?>
<h3><?php echo $title;?></h3>
<form id="form" action="<?php echo adminaction('/finance/viewprofits');?>" method="post">
<dl>
<dt>* Profit Name:</dt>
<dd><input name="name" type="text" value="<?php echo $profit->name; ?>" /></dd>

<dt>* Cost</dt>
<dd><input name="cost" type="text" value="<?php echo $profit->cost; ?>" /></dd>

<dt>* Type</dt>
<dd>
<select name="type">
<?php
$alltypes = Config::Get('EXPENSE_TYPES');

foreach($alltypes as $typeval=>$typename)
{
	if($expense->type == $typeval)
		$sel = 'selected="selected"';
	else
		$sel = '';
		
		
	echo "<option value=\"$typeval\" $sel>$typename</option>";
}
?>
</dd>

<dt></dt>
<dd><input type="hidden" name="id" value="<?php echo $profit->id;?>" />
	<input type="hidden" name="action" value="<?php echo $action;?>" />
	<input type="submit" name="submit" value="<?php echo $title;?>" />
</dd>
</dl>
</form>