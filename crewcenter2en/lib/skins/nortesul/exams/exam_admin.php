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
        Exam Center
      </h1>
    </section>
	<section class="content container-fluid">
	<div class="row">
		   <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Exams Administration</h3>
            </div>
            <!-- /.box-header -->
			<div class="box-body table-responsive">
<center>
    <table class="table table-bordered table-hover">
        <?php
        if (isset($message)) {echo '<tr><td colspan="6">'.$message.'</td></tr>';}
        ?>
        <tr>
            <td colspan="6" bgcolor="#cccccc"><b>Exams Awaiting Approvation:</b></td>
        </tr>

        <?php
        if (!$unapproved) {echo '<tr><td colspan="6" class="badge bg-red">No Exams.</td></tr>';}
        else {
            echo '<tr>
                    <td colspan="4" align="right">Approved on the Exam</td>
                    <td colspan="1"><div id="success">Score</div></td>
                    <td rowspan="2">Manage Exam<br />Submissions</td>
                </tr>
                <tr>
                    <td colspan="4" align="right">Reprovado no Exame</td>
                    <td colspan="1"><div id="error">Score</div></td>

                </tr>
                <tr>
                    <td>Piloto</td>
                    <td>Data</td>
                    <td>Titulo do Exame</td>
                    <td>Versão</td>
                    <td>Porcentagem de Acertos</td>
                    <td>Aprovar / Reprovar</td>
                </tr>';

            foreach ($unapproved as $awaiting) {
                echo '<tr>
		<td>';
                $pilot = PilotData::GetPilotData($awaiting->pilot_id);
                echo $pilot->firstname.' '.$pilot->lastname.' - ';
                echo PilotData::GetPilotCode($pilot->code, $awaiting->pilot_id);
                echo '</td>
		<td>'.date(DATE_FORMAT, strtotime($awaiting->date)).'</td>
		<td>'.$awaiting->exam_title.'</td>
		<td>'.$awaiting->exam_version.'</td>
		<td>';
                if ($awaiting->passfail == 0) {$div = 'error';}
                else {$div = 'success';}
                echo '<div id="'.$div.'">'.$awaiting->result.'%</div></td>
		<td><a href="'.SITE_URL.'/index.php/Exams_admin/save_approve_result?id='.$awaiting->id.'&approve=1" class="badge bg-green">Approve</a> / <a href="'.SITE_URL.'/index.php/Exams_admin/save_approve_result?id='.$awaiting->id.'&approve=2" class="badge bg-red">Repprove</a></td>
		</tr>';
            }
        }
        ?>
        <tr>
            <td colspan="6" bgcolor="#cccccc"><b>Pedidos de Exames:</b></td>
        </tr>

        <?php
        if (!$requests) {echo '<tr><td colspan="6" class="badge bg-red">Não existem pedidos de Exame no momento!</td></tr>'; }
        else {
            echo '<tr>';
            echo '<td colspan="2">Piloto</td>';
            echo '<td colspan="2">Exame</td>';
            echo '<td colspan="2">Aprovar pedido</td>';
            echo '</tr>';

            foreach ($requests as $request) {
                $pilot = PilotData::GetPilotData($request->pilot_id);
                $exam = ExamsData::get_exam_title($request->exam_id);
                echo '<tr>';
                echo '<td colspan="2">'.$pilot->firstname.' '.$pilot->lastname.' '.PilotData::GetPilotCode($pilot->code, $request->pilot_id).'</td>';
                echo '<td colspan="2">'.$exam->exam_description.'</td>';
                echo '<td colspan="2"><a href="'.SITE_URL.'/index.php/Exams_admin/assign_exam_admin?id='.$exam->id.'&pilot_id='.$request->pilot_id.'" class="badge bg-green">Aprovar pedido</a></td>';
                echo '</tr>';
            }
        }
        ?>
        <tr>
            <td colspan="6" bgcolor="#cccccc"><b>Exames Assignados Atualmente:</b></td>
        </tr>
<?php
$assigned = ExamsData::assigned_exams();
if (!$assigned) {echo '<tr><td colspan="6" class="badge bg-red">Nenhum Exame Designado no Momento</td></tr>'; }
        else {      echo '<tr>';
            echo '<td colspan="3">Piloto</td>';
            echo '<td colspan="3">Exame Designado</td>';
            echo '</tr>';

            foreach ($assigned as $assign) {
                $pilot = PilotData::GetPilotData($assign->pilot_id);
                $exam = ExamsData::get_exam_title($assign->exam_id);
                echo '<tr>';
                echo '<td colspan="3">'.$pilot->firstname.' '.$pilot->lastname.' '.PilotData::GetPilotCode($pilot->code, $assign->pilot_id).'</td>';
                echo '<td colspan="3">'.$exam->exam_description.'</td>';
                echo '</tr>';
            }
        }
        ?>
    </table>
    <hr /><br />
    <table class="table table-bordered table-hover">
        <tr>
            <td bgcolor="#cccccc"><b>Configuração de Exames e de Questões:</b></td>
            <td bgcolor="#cccccc"><b>Ver/Editar</b></td>
        </tr>
        <tr>
            <td>Exames na basde de dados: <?php $count=ExamsData::get_exam_count(); echo $count->total; ?></td>
            <td><a href="<?php echo SITE_URL ?>/index.php/Exams_admin/view_current_exams" class="btn btn-flat btn-info">Editar/Ver Exames</a></td>
        </tr>
        <tr>
            <td>Questões na base de dados: <?php $count=ExamsData::get_question_count(); echo $count->total; ?></td>
            <td><a href="<?php echo SITE_URL ?>/index.php/Exams_admin/view_current_questions" class="btn btn-flat btn-info">Editar/Ver Questões</a></td>
        </tr>
        <tr>
            <td>Total de Exames Feitos por pilotos:</td>
            <td><?php $totals = ExamsData::get_exams_taken();
if ($totals[1] > 0) {echo $totals[1];}
else {echo '<span class="badge bg-red">Nenhum</span>';}?>
            </td>
        </tr>
        <tr>
            <td>Total de Exames Aprovados:</td>
            <td><?php
                if ($totals[1] > 0) {echo $totals[0];}
                else {echo '<span class="badge bg-red">Nenhum</span>';}?>
            </td>
        </tr>
        <tr>
            <td>Porcentagem de Aprovação nos Exames:</td>
            <td><?php if ($totals[1] > 0) {$percent = (100 * ($totals[0] / $totals[1])); echo round($percent, 1).'%';}
else {echo '<span class="badge bg-red">Nenhum</span>';}?>
            </td>
        </tr>
        <tr>
            <td colspan="2"><a href="<?php echo SITE_URL ?>/index.php/Exams_admin/view_individual_pilot"><b>Gerenciar Estátisticas individuais dos Pilotos</b></a></td>
        </tr>
    </table>
    <hr /><br />
<?php
$admin = ExamsData::check_admin(Auth::$userinfo->pilotid);
                if ($admin->admin_level == '1') {
                    ?>
    <table class="table table-bordered table-hover">
        <tr>
            <td bgcolor="#cccccc"><b>Configuração do Centro de Exames:</b></td>
            <td bgcolor="#cccccc"><b>Ver/Editar</b></td>
        </tr>
        <tr>
            <td>Status do Centro de Exame: <?php
    $setting = ExamsData::get_setting_info('2');
        if ($setting->value == 0) { echo '<span class="badge bg-red">Fechado</span>'; }
        else { echo '<span class="badge bg-green">Aberto</span>'; }
        ?>
            </td>
            <td><a href="<?php echo SITE_URL ?>/index.php/Exams_admin/get_setting_info?id=2" class="btn btn-flat btn-info">Alterar Status do Centro de Exame</a></td>
        </tr>
        <tr>
            <td>Administradores do Centro de Exames:<br />
    <?php
    $admins = ExamsData::get_admin('1');
    foreach($admins as $admin) {
        $data = PilotData::GetPilotData($admin->pilot_id);
                        echo '<b>'.$data->firstname.' '.$data->lastname.' - ';
                        echo PilotData::GetPilotCode($data->code, $data->pilotid);
                        echo'</b><br />';
                    }
    ?>
            </td>
            <td rowspan="2"><a href="<?php echo SITE_URL ?>/index.php/Exams_admin/edit_admin_list" class="btn btn-flat btn-info">Adicionar/Remover<br />Administradores<br />& Membros do Staff</a></td>
        </tr>
        <tr>
            <td>Membros do Staff do Centro de Exames:<br /><b><?php
                    $authors = ExamsData::get_admin('2');
                    if (!$authors) {echo 'The Are No Staff Members Currently';}
                    else {
                        foreach ($authors as $author) {   $admin = PilotData::GetPilotData($author->pilot_id);
                            echo $admin->firstname.' '.$admin->lastname.' - ';
                            echo PilotData::GetPilotCode($admin->code, $admin->pilotid);
                            echo '<br />';
                        }
                    }
    ?></b>
            </td>
        </tr>
        <tr>
            <td>Mensagem Quando o Centro de Exames está aberto: <?php
                        $setting = ExamsData::get_setting_info('4');
                        echo '<br /><b>'.$setting->value.'</b>';
                        ?>
            </td>
            <td><a href="<?php echo SITE_URL ?>/index.php/Exams_admin/get_setting_info?id=4" class="btn btn-flat btn-info">Editar Mensagem</a></td>
        </tr>
        <tr>
            <td>Mensagem Quando o Centro de Exames está aberto: <?php
                        $setting = ExamsData::get_setting_info('3');
                        echo '<br /><b>'.$setting->value.'</b>';
                        ?>
            </td>
            <td><a href="<?php echo SITE_URL ?>/index.php/Exams_admin/get_setting_info?id=3" class="btn btn-flat btn-info">Editar Mensagem</a></td>
        </tr>
        <tr>
            <td>Admin Designar Exames Ativado: <?php
    $setting = ExamsData::get_setting_info('5');
                    if ($setting->value == 0) { echo '<span class="badge bg-red">Não</span>'; }
                    else { echo '<span class="badge bg-green">Sim</span>'; }
                    ?>
            </td>
            <td><a href="<?php echo SITE_URL ?>/index.php/Exams_admin/get_setting_info?id=5" class="btn btn-flat btn-info">Editar Designação dos Admins</a></td>
        </tr>
    </table>
    <hr />
    <br />
                <?php
}
?>
    <table>
        <tr>
            <td>
                <form method="link" action="<?php echo SITE_URL ?>/index.php/Exams_admin/new_test_form">
                    <input type="submit" class="btn btn-flat btn-info" value="Criar Novo Exame"></form>
            </td>
            <td>
                <form method="link" action="<?php echo SITE_URL ?>/index.php/Exams_admin/new_question_form">
                    <input type="submit" class="btn btn-flat btn-info" value="Criar Nova Questão"></form>
            </td>
            <td>
                <form method="link" action="<?php echo SITE_URL ?>/index.php/Exams_admin/new_revision_form">
                    <input type="submit" class="btn btn-flat btn-info" value="Criar Rasão para Revisão"></form>
            </td>
        </tr>
    </table>
</center>
</div>
</div>
</div>
</section>