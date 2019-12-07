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
              <h3 class="box-title"><i class="fa fa-calendar" aria-hidden="true"></i> Events <strong>Timeline</strong></h3>
            </div>
			<div class="box-body">
                <ul class="timeline">
                <?php
                    if(!$events)
                    {
                ?>
<!-- timeline item -->
<li>
    <!-- timeline icon -->
    <i class="fa fa-times bg-red"></i>
    <div class="timeline-item alert alert-danger">
        <h3 class="timeline-header" style="color:#fff;">Oops!</h3>

        <div class="timeline-body">
        There are no upcoming events!
        </div>
    </div>
</li>
<!-- END timeline item -->
                <?php 
            } else {
                foreach($events as $event)
            {
                if($event->active == '2')
                {
                    continue;
                }
                echo '<li>';
                echo '<i class="fa fa-plane bg-orange"></i>';
                echo '<div class="timeline-item">';
                echo '<h3 class="timeline-header">'.$event->title.'</h3>';
                echo '<div class="timeline-body>"';
                echo '<a href="'.SITE_URL.'/index.php/events/get_event?id='.$event->id.'" class="btn btn-info btn-rounded">Details</a>';
                echo '</div>';
                echo '</div>';
                echo '</li>';
                echo '<li class="time-label">';
                echo '<span class="bg-orange">';
                echo date('d/m/Y', strtotime($event->date));
                echo '</span>';
                echo '</li>';
            }
            }?>
<!-- timeline time label -->
<li class="time-label">
    <span class="bg-blue">
        <?php echo date("d/m/Y");?>
    </span>
</li>
<!-- /.timeline-label -->

<?php
                    if(!$history)
                    {
                ?>
<!-- timeline item -->
<li>
    <!-- timeline icon -->
    <i class="fa fa-times bg-red"></i>
    <div class="timeline-item alert alert-danger">
        <h3 class="timeline-header" style="color:#fff;">Oops!</h3>

        <div class="timeline-body">
        There are no past events!
        </div>
    </div>
</li>
<!-- END timeline item -->
                <?php 
            } else {
                foreach($history as $event)
            {
                if($event->active == '2')
                {
                    continue;
                }
                echo '<li>';
                echo '<i class="fa fa-paper-plane bg-navy"></i>';
                echo '<div class="timeline-item">';
                echo '<h3 class="timeline-header">'.$event->title.'</h3>';
                echo '<div class="timeline-body">';
                echo '<a href="'.SITE_URL.'/index.php/events/get_past_event?id='.$event->id.'" class="btn btn-info btn-rounded">Details</a>';
                echo '</div>';
                echo '</div>';
                echo '</li>';
                echo '<li class="time-label">';
                echo '<span class="bg-navy">';
                echo date('d/m/Y', strtotime($event->date));
                echo '</span>';
                echo '</li>';
            }
            }?>

</ul>
</div>
</div>
<hr />
<p class="text-center"><a href="<?php echo url('/events/get_rankings'); ?>" class="btn btn-info btn-rounded">Pilot Stats for Events</a></p>
</section>
