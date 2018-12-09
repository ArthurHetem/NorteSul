<?php
//simpilotgroup addon module for phpVMS virtual airline system
//
//simpilotgroup addon modules are licenced under the following license:
//Creative Commons Attribution Non-commercial Share Alike (by-nc-sa)
//To view full icense text visit http://creativecommons.org/licenses/by-nc-sa/3.0/
//
//@author David Clark (simpilot)
//@copyright Copyright (c) 2009-2010, David Clark
//@license http://creativecommons.org/licenses/by-nc-sa/3.0/
?>
<section class="content-header">
      <h1>
        Centro de Exames
      </h1>
    </section>
	<section class="content container-fluid">
	<div class="row">
		   <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Exames disponíveis</h3>
            </div>
            <!-- /.box-header -->
			<div class="box-body table-responsive">
<center>
    <br />
    <table class="table table-hover">
        <?php
		if (!$exams) {
            echo '<tr><td colspan="3"><div id="error">There are currently no active exams.</div></td></tr>';
        }
        else {
            $assign = ExamsData::get_setting_info('5');
            if ($assign->value == '1') {echo '<tr>
                        <td colspan="3" class="alert alert-info">Atualmente, os exames devem ser requisitados pelos pilotos.
                        Use o botão ao lado de cada exame para requisita-lo.</td></tr>';
            } ?>
        <tr>
            <td><b>Nome do Exame</b></td>
            <td><b>Custo do Exame</b></td>
            <td>&nbsp;</td>
        </tr>
            <?php
            foreach ($exams as $data) {
                echo 	'<tr>
                    <td>'.$data->exam_description.'</td>
                    <td>$'.$data->cost.'</td>
                    <td>';
                if ($assign->value == '0') {echo '<a href="'.SITE_URL.'/index.php/Exams/buy_exam?id='.$data->id.'">Comprar Exame</a>';}
                else {
                    $assigned = ExamsData::check_exam_assigned(Auth::$userinfo->pilotid, $data->id);
                    $total=ExamsData::check_for_request(Auth::$userinfo->pilotid, $data->id);
                    if ($assigned->total == '0') {
                        if ($total->total >= '1') { echo '<span class="badge bg-yellow">Pedido de Exame em analíse</span>'; }
                        else { echo '<a href="'.SITE_URL.'/index.php/Exams/request_exam?id='.$data->id.'"><span class="badge bg-green">Requisitar Exame</span></a>';}
                    }
                    else {echo '<a href="'.SITE_URL.'/index.php/Exams/buy_exam?id='.$data->id.'"><span class="badge bg-aqua">Exame disponível</span></a>';}
                }
                echo '</td>
		</tr>';
            }
            ?>
    </table>
    <br />
    Você possui <b>v$<?php echo Auth::$userinfo->totalpay; ?></b> em sua conta da companhia.<br />
    <?php
    }
    ?>
    <form method="link" action="<?php echo SITE_URL ?>/index.php/Exams/view_profile">
        <input type="submit" class="btn btn-flat btn-info" value="Ver histórico de Exames"></form>
</center>
</div>
</div>
</div>
</section>