<?php if(!defined('IN_PHPVMS') && IN_PHPVMS !== true) { die(); } ?>
<meta charset="utf-8"/>
<div class="box box-default box">
    <div class="box-header with-border avianca">
       <h3 class="box-title"><?php echo $subject;?></h3>
<div class="box-tools pull-right">
   <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
</div><!-- /.box-tools -->
</div><!-- /.box-header -->
<div class="box-body">
<p>Criado por <?php echo $postedby;?>, Emitido Em <b><?php echo $postdate;?></b></p>
<p><?php echo html_entity_decode($body);?></p>
</div><!-- /.box-body -->
</div><!-- /.box -->