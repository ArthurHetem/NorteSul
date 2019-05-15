<?php if(!defined('IN_PHPVMS') && IN_PHPVMS !== true) { die(); } ?>
<?php
$data = $postdate;
list($dia, $mes, $ano) = explode("/", $data);

switch ($mes) {
        case "01":    $mes = Jan;    	break;
        case "02":    $mes = Fev;   	break;
        case "03":    $mes = Mar;       break;
        case "04":    $mes = Abr;       break;
        case "05":    $mes = Mai;       break;
        case "06":    $mes = Jun;       break;
        case "07":    $mes = Jul;       break;
        case "08":    $mes = Ago;       break;
        case "09":    $mes = Set;       break;
        case "10":    $mes = Out;       break;
        case "11":    $mes = Nov;       break;
        case "12":    $mes = Dez;       break; 
 }
?>
<meta charset="utf-8"/>
<tr>
	<td><?php echo $dia ." ". $mes ." ". $ano;?></td>
	<td><a href="<?php echo SITE_URL;?>/index.php/notam/view/<?php echo $id;?>" class="text-muted"><?php echo $subject;?></a></td>
	<td><span class="label label-danger">Não lida</span></td>
</tr>