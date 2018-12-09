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

if (isset($message)) {echo '<br />'; echo $message;}
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
              <h3 class="box-title">Exam history for <?php echo Auth::$userinfo->firstname.' '.Auth::$userinfo->lastname.''; ?></h3>
            </div>
            <!-- /.box-header -->
			<div class="box-body table-responsive">
<center><?php //print_r($data); ?>
    <table class="table table-hover">
        <tr bgcolor="#cccccc">
            <td>Exam Name</td>
            <td>Exam Version</td>
            <td>Date</td>
            <td>Score</td>
            <td>Status</td>
        </tr>
        <?php
        if (!$pilotdata) {echo '<tr><td colspan="5" class="badge bg-blue">No Exams Found</td></tr>';}
        else {
            foreach($pilotdata as $pilot) {
                echo'<tr>
                        <td>'.$pilot->exam_title.'</td>
                        <td>Ver-'.$pilot->exam_version.'</td>
                        <td>'.date(DATE_FORMAT, strtotime($pilot->date)).'</td>
                        <td>';
                $div='error';
                if ($pilot->passfail == '1') {
                    $div='success';
                }
                echo '<div id="'.$div.'">'.$pilot->result.'</div>';
                echo'</td>
						<td>';
                $div='pending';
                $msg='Pending';
                if ($pilot->approved == '1') {
                    $div='success';
                    $msg='Approved';
                }
                if ($pilot->approved == '2') {
                    $msg='Repproved';
                    $div='error';
                }
                echo '<div id="'.$div.'">'.$msg.'</div>';
                echo'</td>
					</tr>';
            }
        }
        ?>
    </table>
    <form method="link" action="<?php echo SITE_URL ?>/index.php/Exams">
        <input type="submit" class="btn btn-flat btn-info" value="Return to Exam List"></form>
</center>
</div>
</div>
</div>
</section>