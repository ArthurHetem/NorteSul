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
              <h3 class="box-title">Revisões</h3>
            </div>
            <!-- /.box-header -->
			<div class="box-body table-responsive">
<center>
    <?php
    if (isset($message)) {echo $message;}
    ?>

<?php
    $title = ExamsData::get_exam_title($exam_id);
    if (!$revisions) {
        echo '<br /><div id="error">There are no revisions to the <b>'.$title->exam_description.'</b> exam.</div>';
        Template::Set('num_questions', ExamsData::get_howmany_questions($exam_id));
        Template::Set('exam', ExamsData::get_exam_edit($exam_id));
        Template::Show('exam_edit.tpl');
        return;
    }
    else {?>
    <table class="table table-bordered table-hover">
        <tr>
            <td><b>Razão da Revisão</b></td>
            <td><b>Data da Revisão</b></td>
            <td><b>Revisado Por</b></td>
        </tr>
    <?php
    foreach ($revisions as $revision) {

                echo 	'<tr>
							<td>';
                $rev = ExamsData::get_revision_type($revision->revision);
                echo $rev->revision;
                echo '</td>
							<td>'.date(DATE_FORMAT, strtotime($revision->date_revised)).'</td>
							<td>';
                $pilot = PilotData::GetPilotData($revision->revised_by);
                echo ''.$pilot->firstname.' '.$pilot->lastname.' - ';
                echo PilotData::GetPilotCode($pilot->code, $revision->revised_by);
                echo '</td>
						</tr>';
            }
        }
        ?>
        <tr>
            <td colspan="3"><a href="<?php echo SITE_URL ?>/index.php/Exams_admin/edit_exam?id=<?php echo $exam_id; ?>" class="btn btn-flat btn-info">Retornar</a></td>
        </tr>
    </table>
	</center>
	</div>
</div>
</div>
</section>