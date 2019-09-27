<?php if(!defined('IN_PHPVMS') && IN_PHPVMS !== true) { die(); } ?>
<h3>NOTAMS Atuais</h3>
<?php
if(!$allnotams) {
	echo '<p>Nenhuma NOTAM em uso</p>';
	return;
}
?>
<table id="tabledlist" class="table">
<thead>
<tr>
	<th>LETRA</th>
	<th>Emissor</th>
	<th>Data Postagem</th>
	<th>Opções</th>
</tr>
</thead>
<tbody>
<?php
foreach($allnotams as $notam) {
?>
<tr id="row<?php echo $notam->id;?>">
	<td align="center"><?php echo $notam->subject;?></td>
	<td align="center"><?php echo $notam->postedby;?></td>
	<td align="center"><?php echo date(DATE_FORMAT, $notam->postdate);?></td>
	<td align="center" width="1%" nowrap>
        <button class="btn btn-info {button:{icons:{primary:'ui-icon-wrench'}}}" onclick="window.location='<?php echo adminurl('/sitecms/editnotam?id='.$notam->id);?>';">
			Editar
		</button>
		<button class="deleteitem btn btn-danger {button:{icons:{primary:'ui-icon-trash'}}}" 
			href="<?php echo adminaction('/sitecms/viewnotam');?>" action="deleteitem" id="<?php echo $notam->id;?>">Deletar</button>
	</td>
</tr>
<?php
}
?>
</tbody>
</table>