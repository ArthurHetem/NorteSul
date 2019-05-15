<section class="content-header bg-white espaca">
<div class="pull-right"><i class="fa fa-trophy fa-4x text-muted"></i></div>
<h1><strong>Leaderboard</strong></h1>
<h1><small>Pilot Gratification System | NorteSul Virtual &copy; <?php echo date("Y");?></small>
<br>
</section>

<section class="content container-fluid">
	<div class="row">
        <div class="col-md-12">
					<div class="box box-solid">
						<div class="box-header with-border">
							<h3 class="box-title">Top<strong>Pilots</strong></h3>
						</div>
						<div class="box-body">
					<!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Today</a></li>
              <li><a href="#tab_2" data-toggle="tab">This Week</a></li>
              <li><a href="#tab_3" data-toggle="tab">Tab 3</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
								<h3>Today</h3>
                <h3><span class="label label-primary">Revenue</span></h3>
								<br>
								<?php Template::show('toppilot/toppilotday.php');?>
								<hr>
								<h3><span class="label label-warning">Distance</span></h3>
								<br>
								<?php Template::show('toppilot/toppilotdaybd.php');?>
								<hr>
								<h3><span class="label label-success">Flight Time</span></h3>
								<br>
								<?php Template::show('toppilot/toppilotdaybft.php');?>
								<hr>
								<h3><span class="label label-info">Landing Rate</span></h3>
								<br>
								<?php Template::show('toppilot/toppilotlandingday.php');?>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
								<h3>This Week</h3>
                <h3><span class="label label-primary">Revenue</span></h3>
								<br>
								<?php Template::show('toppilot/toppilotweek.php');?>
								<hr>
								<h3><span class="label label-warning">Distance</span></h3>
								<br>
								<?php Template::show('toppilot/toppilotweekbd.php');?>
								<hr>
								<h3><span class="label label-success">Flight Time</span></h3>
								<br>
								<?php Template::show('toppilot/toppilotweekbft.php');?>
								<hr>
								<h3><span class="label label-info">Landing Rate</span></h3>
								<br>
								<?php Template::show('toppilot/toppilotlandingday.php');?>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum.
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
		</div>
	</div>
	<ul class="toppilot">
		<li><a id="defaultOpen" href="javascript:void(0)" class="toppilotdet" onclick="toppilottabs(event, 'br')">Best Revenues</a></li>
		<li><a href="javascript:void(0)" class="toppilotdet"onclick="toppilottabs(event, 'bd')">Best Distance</a></li>
		<li><a href="javascript:void(0)" class="toppilotdet" onclick="toppilottabs(event, 'bft')">Best Flight Time</a></li>
		<li><a href="javascript:void(0)" class="toppilotdet" onclick="toppilottabs(event, 'bl')">Best Landing Rate</a></li>
	</ul>
	<div id="br" class="toppilotcon"><?php Template::show('toppilot/toppilotdetailbr.php');?></div>
	<div id="bd" class="toppilotcon"><?php Template::show('toppilot/toppilotdetailbd.php');?></div>
	<div id="bft" class="toppilotcon"><?php Template::show('toppilot/toppilotdetailbft.php');?></div>
	<div id="bl" class="toppilotcon"><?php Template::show('toppilot/toppilotdetailbl.php');?></div>
<script>
document.getElementById("defaultOpen").click();
</script>
