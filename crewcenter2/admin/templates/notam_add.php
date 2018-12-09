<?php if(!defined('IN_PHPVMS') && IN_PHPVMS !== true) { die(); } ?>
<h3><?php echo $title?></h3>

<form action="<?php echo adminurl('/sitecms/viewnotam');?>" method="post">
<p><strong>Título: </strong><input type="text" class="form-control" name="subject" value="<?php if(isset($notam)) { echo $notam->subject; }?>" /></p>
<p>
<p><strong>Texto NOTAM: </strong></p>
<p>
<textarea id="editor" name="body" width="100%" 
style="width: 100%; height: 250px;"><?php if(isset($notamitem->body)) { echo $notamitem->body;}?></textarea>
</p>
<input type="hidden" name="action" value="<?php echo $action?>" />
<input type="hidden" name="id" value="<?php echo $notamitem->id; ?>" />
<input type="submit" name="submit" class="btn btn-success" value="<?php echo $title?>" />
</form>