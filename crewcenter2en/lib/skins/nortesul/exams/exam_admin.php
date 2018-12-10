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
              <h3 class="box-title">Exam Administration</h3>
            </div>
            <!-- /.box-header -->
			<div class="box-body table-responsive">
<center>
    <table class="table table-bordered table-hover">
        <?php
        if (isset($message)) {echo '<tr><td colspan="6">'.$message.'</td></tr>';}
        ?>
        <tr>
            <td colspan="6" bgcolor="#cccccc"><b>Exams Waiting for Approval:</b></td>
        </tr>

        <?php
        if (!$unapproved) {echo '<tr><td colspan="6" class="badge bg-red">No Exams.</td></tr>';}
        else {
            echo '<tr>
                    <td colspan="4" align="right">Exam Approved</td>
                    <td colspan="1"><div id="success">Score</div></td>
                    <td rowspan="2">Manage Exam<br />Submissions</td>
                </tr>
                <tr>
                    <td colspan="4" align="right">Failed Exam</td>
                    <td colspan="1"><div id="error">Score</div></td>

                </tr>
                <tr>
                    <td>Pilot</td>
                    <td>Date</td>
                    <td>Exam Title</td>
                    <td>Version</td>
                    <td>Percentage of Right Answers</td>
                    <td>Approved / Failed</td>
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
            <td colspan="6" bgcolor="#cccccc"><b>Exams Inquired:</b></td>
        </tr>

        <?php
        if (!$requests) {echo '<tr><td colspan="6" class="badge bg-red">There are no Exams inquire at the moment!</td></tr>'; }
        else {
            echo '<tr>';
            echo '<td colspan="2">Pilot</td>';
            echo '<td colspan="2">Exam</td>';
            echo '<td colspan="2">Inquire Approval</td>';
            echo '</tr>';

            foreach ($requests as $request) {
                $pilot = PilotData::GetPilotData($request->pilot_id);
                $exam = ExamsData::get_exam_title($request->exam_id);
                echo '<tr>';
                echo '<td colspan="2">'.$pilot->firstname.' '.$pilot->lastname.' '.PilotData::GetPilotCode($pilot->code, $request->pilot_id).'</td>';
                echo '<td colspan="2">'.$exam->exam_description.'</td>';
                echo '<td colspan="2"><a href="'.SITE_URL.'/index.php/Exams_admin/assign_exam_admin?id='.$exam->id.'&pilot_id='.$request->pilot_id.'" class="badge bg-green">Inquire Approval</a></td>';
                echo '</tr>';
            }
        }
        ?>
        <tr>
            <td colspan="6" bgcolor="#cccccc"><b>Exams Taken:</b></td>
        </tr>
<?php
$assigned = ExamsData::assigned_exams();
if (!$assigned) {echo '<tr><td colspan="6" class="badge bg-red">No Exam Assigned at the moment!</td></tr>'; }
        else {      echo '<tr>';
            echo '<td colspan="3">Pilot</td>';
            echo '<td colspan="3">Taken Exam</td>';
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
            <td bgcolor="#cccccc"><b>Exams and Questions Setup:</b></td>
            <td bgcolor="#cccccc"><b>View/Edit</b></td>
        </tr>
        <tr>
            <td>Exams in database: <?php $count=ExamsData::get_exam_count(); echo $count->total; ?></td>
            <td><a href="<?php echo SITE_URL ?>/index.php/Exams_admin/view_current_exams" class="btn btn-flat btn-info">Edit/View Exams</a></td>
        </tr>
        <tr>
            <td>Questions in database: <?php $count=ExamsData::get_question_count(); echo $count->total; ?></td>
            <td><a href="<?php echo SITE_URL ?>/index.php/Exams_admin/view_current_questions" class="btn btn-flat btn-info">Edit/View Questions</a></td>
        </tr>
        <tr>
            <td>Total Exams taken by pilots:</td>
            <td><?php $totals = ExamsData::get_exams_taken();
if ($totals[1] > 0) {echo $totals[1];}
else {echo '<span class="badge bg-red">None</span>';}?>
            </td>
        </tr>
        <tr>
            <td>Total Approved Exams :</td>
            <td><?php
                if ($totals[1] > 0) {echo $totals[0];}
                else {echo '<span class="badge bg-red">None</span>';}?>
            </td>
        </tr>
        <tr>
            <td>Percentage of Exames Approval:</td>
            <td><?php if ($totals[1] > 0) {$percent = (100 * ($totals[0] / $totals[1])); echo round($percent, 1).'%';}
else {echo '<span class="badge bg-red">None</span>';}?>
            </td>
        </tr>
        <tr>
            <td colspan="2"><a href="<?php echo SITE_URL ?>/index.php/Exams_admin/view_individual_pilot"><b>Manage Individual  Statistics by Pilots</b></a></td>
        </tr>
    </table>
    <hr /><br />
<?php
$admin = ExamsData::check_admin(Auth::$userinfo->pilotid);
                if ($admin->admin_level == '1') {
                    ?>
    <table class="table table-bordered table-hover">
        <tr>
            <td bgcolor="#cccccc"><b>Exam Center Settings:</b></td>
            <td bgcolor="#cccccc"><b>View/Edit</b></td>
        </tr>
        <tr>
            <td>Exam Center Status: <?php
    $setting = ExamsData::get_setting_info('2');
        if ($setting->value == 0) { echo '<span class="badge bg-red">Closed</span>'; }
        else { echo '<span class="badge bg-green">Open</span>'; }
        ?>
            </td>
            <td><a href="<?php echo SITE_URL ?>/index.php/Exams_admin/get_setting_info?id=2" class="btn btn-flat btn-info">Exam Center Status Change</a></td>
        </tr>
        <tr>
            <td>Exam Center Administrators:<br />
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
            <td rowspan="2"><a href="<?php echo SITE_URL ?>/index.php/Exams_admin/edit_admin_list" class="btn btn-flat btn-info">Add/Remove<br />Administrators<br />& Staff Members</a></td>
        </tr>
        <tr>
            <td>Exam Center Staff Members:<br /><b><?php
                    $authors = ExamsData::get_admin('2');
                    if (!$authors) {echo 'The Are No Staff Members Currently on';}
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
            <td>When is the Exam Center Open: <?php
                        $setting = ExamsData::get_setting_info('4');
                        echo '<br /><b>'.$setting->value.'</b>';
                        ?>
            </td>
            <td><a href="<?php echo SITE_URL ?>/index.php/Exams_admin/get_setting_info?id=4" class="btn btn-flat btn-info">Edit Menssage</a></td>
        </tr>
        <tr>
            <td>Message When is the Exam Center open: <?php
                        $setting = ExamsData::get_setting_info('3');
                        echo '<br /><b>'.$setting->value.'</b>';
                        ?>
            </td>
            <td><a href="<?php echo SITE_URL ?>/index.php/Exams_admin/get_setting_info?id=3" class="btn btn-flat btn-info">Edit Message</a></td>
        </tr>
        <tr>
            <td>Admin Assigned Active Exames : <?php
    $setting = ExamsData::get_setting_info('5');
                    if ($setting->value == 0) { echo '<span class="badge bg-red">No</span>'; }
                    else { echo '<span class="badge bg-green">Yes</span>'; }
                    ?>
            </td>
            <td><a href="<?php echo SITE_URL ?>/index.php/Exams_admin/get_setting_info?id=5" class="btn btn-flat btn-info">Edit Admins Assigned Exams</a></td>
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
                    <input type="submit" class="btn btn-flat btn-info" value="Generate New Exam"></form>
            </td>
            <td>
                <form method="link" action="<?php echo SITE_URL ?>/index.php/Exams_admin/new_question_form">
                    <input type="submit" class="btn btn-flat btn-info" value="Generate New Questions"></form>
            </td>
            <td>
                <form method="link" action="<?php echo SITE_URL ?>/index.php/Exams_admin/new_revision_form">
                    <input type="submit" class="btn btn-flat btn-info" value="Generate Reason for Review"></form>
            </td>
        </tr>
    </table>
</center>
</div>
</div>
</div>
</section>
