<?php if(!defined('IN_PHPVMS') && IN_PHPVMS !== true) { die(); } 
$data = $postdate;
/**
 * Altera uma data para outro formato
 * 
 * @param string $date String contendo a data a ser formatada
 * @param string $outputFormat Formato de saida
 * @throws Exception Quando não puder converter a data
 * @return string Data formatada
 * @author Hugo Ferreira da Silva
 */
function parseDate($data, $outputFormat = 'd/m/Y'){
    $formats = array(
        'd/m/Y',
        'd/m/Y H',
        'd/m/Y H:i',
        'd/m/Y H:i:s',
        'Y-m-d',
        'Y-m-d H',
        'Y-m-d H:i',
        'Y-m-d H:i:s',
    );

    foreach($formats as $format){
        $dateObj = DateTime::createFromFormat($format, $data);
        if($dateObj !== false){
            break;
        }
    }

    if($dateObj === false){
        throw new Exception('Invalid date:' . $data);
    }

    return $dateObj->format($outputFormat);
}
?>
<meta charset="utf-8"/>
<div align="justify">
<h4><?php echo $subject;?></strong></h4>
<p>Criado por <?php echo $postedby;?>, Emitido Em <b><?php echo parseDate($data, 'm/d/Y'), PHP_EOL;?></b></p>
<p><?php echo html_entity_decode($body);?></p>
</div>
<hr>