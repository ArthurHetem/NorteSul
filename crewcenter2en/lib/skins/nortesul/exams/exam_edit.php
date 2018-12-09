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
              <h3 class="box-title">Editar: <?php echo $exam->exam_description; ?></h3>
            </div>
            <!-- /.box-header -->
			<div class="box-body table-responsive">
<center>
    <?php
    if (isset($message)) {echo $message;}
    ?>
    <table class="table table-bordered table-hover">
        <tr>
            <td>Data Criação:</td>
            <td><?php echo date(DATE_FORMAT, strtotime($exam->created_date)) ?></td>
        </tr>
        <tr>
            <td>Exame Criado por:</td>
            <td>
<?php $pilot = PilotData::GetPilotData($exam->created_by); ?>
                <?php echo ''.$pilot->firstname.' '.$pilot->lastname.' - '; ?>
                <?php echo PilotData::GetPilotCode($pilot->code, $exam->created_by); ?>
            </td>
        </tr>
        <tr>
            <td>Versão Atual:</td>
            <td>ver-<?php echo $exam->version; ?></td>
        </tr>
        <tr>
            <td>Data da úlrima Revisão:</td>
            <td><?php echo date(DATE_FORMAT, strtotime($exam->last_changed)) ?></td>
        </tr>
        <tr>
            <td>Última revisão por:</td>
            <td>
<?php 

                $rev = ExamsData::get_last_exam_revision($exam->id);
                $pilot2 = PilotData::GetPilotData($rev->revised_by);
                echo ''.$pilot2->firstname.' '.$pilot2->lastname.' - ';
                echo PilotData::GetPilotCode($pilot2->code, $rev->revised_by);
                ?>
            </td>
        </tr>
        <tr>
            <td>Ver lista de Revisões</td>
            <td><a href="<?php echo SITE_URL ?>/index.php/Exams_admin/see_exam_revisions?id=<?php echo $exam->id; ?>" class="btn btn-flat btn-info">Lista de Revisões</a></td>
        </tr>
        <tr>
            <td>Total de Questões designadas ao Exame:</td>
            <td><?php $questions = ExamsData::get_howmany_questions($exam->id); echo $questions->total; ?></td>
        </tr>
        <tr>
            <td>Total de Questões Ativas no Exame:</td>
            <td><?php $active = ExamsData::get_howmany_questions_active($exam->id); echo $active->total; ?></td>
        </tr>
        <tr>
            <td>Editar Questões</td>
            <td><a href="<?php echo SITE_URL ?>/index.php/Exams_admin/edit_questions?id=<?php echo $exam->id; ?>" class="btn btn-flat btn-info">Editar Questões</a></td>
        </tr>
    </table>

    <form action="<?php echo url('/Exams_admin');?>" method="post" enctype="multipart/form-data">
        <table class="table table-bordered table-hover">
            <tr>
                <td>Campo</td>
                <td>Valor Atual</td>
                <td>Novo Valor</td>
            </tr>
            <tr>
                <td>Exame Ativo</td>
                <td><?php
if ($exam->active == 0) {
                        $cur_active = '0';
                        $active = 'Não';
                        echo '<div id="error">'.$active.'</div>';
                    }
                    else {
                        $cur_active = '1';
                        $active = 'Sim';
                        echo '<div id="success">Sim</div>';
                    }
                    ?>
                </td>
                <td>
                    <select type="text" name="active">
<?php
echo '<option value="'.$cur_active.'">'.$active.'</option>';
if ($cur_active == '0') {	echo '<option value="1">Sim</option>';	}
                        else {	echo '<option value="0">Não</option>';	}
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Título do Exame</td>
                <td><?php echo $exam->exam_description ?></td>
                <td><textarea type="text" name="description" rows="2" cols="40" value=""><?php echo $exam->exam_description ?></textarea></td>
            </tr>
            <tr>
                <td>Custo</td>
                <td>$<?php echo $exam->cost; ?></td>
                <td>$<input type="text" name="cost" value="<?php echo $exam->cost; ?>" /></td>
            </tr>
            <tr>
                <td>Porcentagem para Aprovação</td>
                <td><?php echo $exam->passing; ?></td>
                <td><input type="text" name="passing" value="<?php echo $exam->passing; ?>" /></td>
            </tr>
            <tr>
                <td colspan="2">Razão da Revisão:</td>
                <td><select type="text" name="reason">
<?php
$reasons = (ExamsData::get_revision_reasons());

foreach ($reasons as $reason) {	echo '<option value="'.$reason->id.'">'.$reason->revision.'</option>'; }
?>	
                    </select></td>
            </tr>
        </table><br />
        <input type="hidden" name="exam_id" value="<?php echo $exam->id; ?>" />
        <input type="hidden" name="current" value="<?php echo $num_questions->total; ?>" />
        <input type="hidden" name="action" value="save_changes" />
        <input type="submit" class="btn btn-flat btn-info" value="Salvar Mudanças" />
    </form>
</center>
</div>
</div>
</div>
</section>