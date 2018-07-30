<h3>View A Leave of Absence Request</h3>
<?php
if ($info) {
	foreach($info as $item) { ?>
	You are viewing the Leave of Absence Request for pilot 
	<a href="<?php echo SITE_URL?>/admin/index.php/pilotadmin/viewpilots?action=viewoptions&pilotid=<?php echo $item->pilotid?>">
		<b><?php echo $item->firstname . "  " . $item->lastname; ?></b>
	</a>
	The pilot's leave started on the following date: <b><?php echo date(DATE_FORMAT,$item->start); ?> </b><br />
	The pilot's leave will end on the following date:<b><?php echo date(DATE_FORMAT,$item->end); ?> </b><br />
	The pilot has specified the following reason for submitting the LoA request:<br />
	<p>
		<b>
			<?php echo $item->reason;?>
		</b>
	</p>
	
	<input type='submit' name='submit' value='Delete' onClick="parent.location='<?php echo SITE_URL; ?>/admin/index.php/loa/confirmdeleteloa?id=<?php echo $item->pilotid; ?>'"/>
	<?php }
} else {
	echo 'There are no LoA request for the specified pilot ID. Sorry. :(';
} ?>

