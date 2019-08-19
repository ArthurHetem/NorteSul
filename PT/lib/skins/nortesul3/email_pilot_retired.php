<?php if(!defined('IN_PHPVMS') && IN_PHPVMS !== true) { die(); } ?>
Caro <?php echo $pilot->firstname.' '.$pilot->lastname?>,

Você foi marcado como inativo por estar ausente por mais de <?php echo Config::Get('PILOT_INACTIVE_TIME')?> dias. Para retornar a ativa, envie um PIREP.


Atenciosamente,

Equipe de Staff da NorteSul Virtual
