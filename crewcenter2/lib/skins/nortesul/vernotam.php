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
<!-- Content Header (Page header) -->
    <section class="content-header bg-white espaca">
	<div class="pull-right"><i class="fa fa-exclamation-triangle fa-4x text-muted"></i></div>
	<h1><strong>NOTAMs</strong></h1>
	<h1><small><?php echo $postedby;?> | NorteSul Virtual &copy; <?php echo date("Y");?></small>
	<br>
    </section>
	
<section class="content container-fluid">
<div class="row">
			<div class="col-md-12">
                    <div class="box box-solid">
                        <div class="box-header with-border">
						
                            <h3 class="box-title"><?php echo $subject;?></h3>
                        </div>
						
                        <div class="box-body">
							<?php echo $body;?>
                        </div>
                    </div>
									<a href="<?php echo SITE_URL;?>/index.php/notam"><div class="btn btn-success btn-rounded">Voltar</div></a>
                </div>
		</div>	
</section>		