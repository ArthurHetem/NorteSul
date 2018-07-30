<h3>Delete A Leave of Absence Request</h3>
<?php if($info) {
	foreach($info as $item) { ?>
			Are you sure you want to delete a LoA Request for pilot 	
			<a href="<?php echo SITE_URL?>/admin/index.php/pilotadmin/viewpilots?action=viewoptions&pilotid=<?php echo $item->pilotid?>">
				<b><?php echo $item->firstname . "  " . $item->lastname; ?></b>
			</a><br>
			<input type='submit' name='submit' value='Yes' onClick="parent.location='<?php echo SITE_URL; ?>/admin/index.php/loa/deleteloa?id=<?php echo $item->pilotid; ?>'"/>
			<input type='submit' name='submit' value='No' onClick="parent.location='<?php echo SITE_URL; ?>/admin/index.php/loa/'"/>
	<?php } 
} else {
	echo 'There are no LoA requests with specified ID.';
}
?>
