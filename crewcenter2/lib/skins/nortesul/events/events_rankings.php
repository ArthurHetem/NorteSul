<?php
//simpilotgroup addon module for phpVMS virtual airline system
//
//simpilotgroup addon modules are licenced under the following license:
//Creative Commons Attribution Non-commercial Share Alike (by-nc-sa)
//To view full license text visit http://creativecommons.org/licenses/by-nc-sa/3.0/
//
//@author David Clark (simpilot)
//@copyright Copyright (c) 2009-2010, David Clark
//@license http://creativecommons.org/licenses/by-nc-sa/3.0/
?>
<section class="content-header bg-white espaca">
    <div class="pull-right"><i class="fa fa-plane fa-4x text-muted"></i></div>
    <h1><strong>Events</strong> Center</h1>
    <h1><small>Events Department | NorteSul Virtual &copy;
            <?php echo date("Y");?></small>
        <br>
</section>
<section class="content container-fluid">
			<div class="row">
			<div class="col-xs-12">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Events Statistics</h3>
            </div>
			<div class="box-body">
<center>
    <table width="100%" class="table table-bordered">
        <tr>
            <td>Pilots</td>
            <td># of Events</td>
        </tr>
    <?php
    if(!$rankings)
    {
        echo '<tr><td colspan="2">No stats</td></tr>';
    }
    else
    {
    foreach($rankings as $rank)
        {
        $pilot = PilotData::getPilotData($rank->pilot_id);

        echo '<tr><td>'.PilotData::getPilotCode($pilot->code, $pilot->pilotid).' - '.$pilot->firstname.' '.$pilot->lastname.'</td><td>'.$rank->ranking.'</td></tr>';
    }
    }
    ?>
    </table>
</center>
<hr />
<a href="<?php echo SITE_URL; ?>/index.php/events" class="btn btn-info"><b><i class="fa fa-arrow-left"></i> Return to Event List</b></a>
</div>
</div>
</div>
</div>
</section>
