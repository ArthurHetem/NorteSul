        <?php
    $data = date('D');
    $mes = date('M');
    $dia = date('d');
    $ano = date('Y');

    $semana = array(
        'Sun' => 'Sunday',
        'Mon' => 'Monday',
        'Tue' => 'Tuesday',
        'Wed' => 'Wednsday',
        'Thu' => 'Thursday',
        'Fri' => 'Friday',
        'Sat' => 'Saturday'
    );

    $mes_extenso = array(
        'Jan' => 'January',
        'Feb' => 'February',
        'Mar' => 'March',
        'Apr' => 'April',
        'May' => 'May',
        'Jun' => 'June',
        'Jul' => 'July',
        'Aug' => 'August',
        'Nov' => 'November',
        'Sep' => 'September',
        'Oct' => 'October',
        'Dec' => 'December'
    );
  ?>
  <?php
   date_default_timezone_set("America/Sao_Paulo");
    $hr = date("H");
    if($hr >= 12 && $hr<18) {
    $resp = "Good afternoon";}
    else if ($hr >= 0 && $hr <12 ){
    $resp = "Good day";}
    else {
    $resp = "Good evening";}
  ?>
  <?php
  $hrssomadas = Auth::$userinfo->totalhours + $userinfo->transferhours;
  ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
		<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Hello <?php echo $userinfo->firstname ?>, welcome back to NorteSul.</h4>
                <?php echo $resp?>, today is <?php  echo $semana["$data"] . ", {$mes_extenso["$mes"]} " . $dia . " , {$ano}"; ?>
              </div>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
		  <!--<div class="callout callout-warning callout-dismissable" role="alert">
             <b><center>The NorteSul System may be unstable today because of routes Update<p>Thank you for your understanding.</p><p>Staff Team.</p></center></b>
          </div>-->
		<div class="row">
		  <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3><?php echo $pilotcode; ?></h3>

                <p><?php
				if (Auth::$userinfo->rank == "Primeiro Oficial"){
							echo "First Officer";
						}
						if (Auth::$userinfo->rank == "Comandante"){
							echo "Pilot";
						}
                        if (Auth::$userinfo->rank == "Comandante Sênior"){
							echo "Senior Pilot";
						}
						if (Auth::$userinfo->rank == "Piloto Chefe"){
							echo "Chief Pilot";
						}
						if (Auth::$userinfo->rank == "Piloto Executivo"){
							echo "Executive Pilot";
						}
				?></p>
              </div>
              <div class="icon">
                <i class="fa fa-user"></i>
              </div>
            </div>
          </div>
		  <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-blue">
              <div class="inner">
                <h3><?php echo $pilot->totalflights; ?></h3>

                <p>Flights</p>
              </div>
              <div class="icon">
                <i class="fa fa-bar-chart"></i>
              </div>
            </div>
          </div>
		  <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3><?php echo  $hrssomadas; ?></h3>

                <p>Flight Hours</p>
              </div>
              <div class="icon">
                <i class="fa fa-plane"></i>
              </div>
            </div>
          </div>
		  <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-maroon">
              <div class="inner">
                <h3><?php echo StatsData::TotalFlightsToday(); ?></h3>

                <p>Today's Flights</p>
              </div>
              <div class="icon">
                <i class="fa fa-globe"></i>
              </div>
            </div>
          </div>
        </div><!-- /.row -->
		<script>
                    function reload() {
                      location.reload();
                    }
                  </script>
        <!-- ACARS Map -->
            <div class="row">
                <div class="col-md-12 ">
                    <div class="box box-default">
                        <div class="box-header with-border">
                            <i class="fa fa-map"></i>

                            <h3 class="box-title">NorteSul Virtual ACARs Map</h3>
							<div class="pull-right"><a href="javascript::void(0);" onclick="reload();"><i class="fa fa-refresh"></i></a></div>
                        </div>

                        <div class="body">
                            <?php require "acarsmap.php" ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# ACARS Map -->
        <div class="row">
          <div class="col-md-8 col-sm-6">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom box box-default with-border">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">News</a></li>
              <li><a href="#tab_2" data-toggle="tab">NOTAMs</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                   <?php MainController::Run('News', 'ShowNewsFront', 5); ?>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                   <?php MainController::Run('Notam', 'MostraNotam', 5); ?>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
         </div>
		 <div class="col-md-4 col-sm-6">
            <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-certificate"></i>

              <h3 class="box-title">Awards</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			  <?php
                    if(!$allawards)
                    {
                      echo '              <div class="alert alert-danger">
                <h4><i class="icon fa fa-warning"></i>No Awards found!</h4>
                You dont have any award, fly in a event to receive.
              </div>';
                    }
                    else
                    {

                  ?>
                   <ul>
                    <?php foreach($allawards as $award){ ?>
                    <img src="<?php echo $award->image?>" alt="<?php echo $award->descrip?>" width="200px" height="200px" />
                  </ul>
                  <?php } ?>
                  <?php } ?>
            </div>
            <!-- /.box-body -->
          </div>
         </div>
        </div>
		<div class="row">
           		 <div class="col-md-6 col-sm-12">
            <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-paper-plane"></i>

              <h3 class="box-title">Focus Airport</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<?php Template::Show('focusairport/index.php'); ?>
							</div>
							</div>
							</div>
			<div class="col-md-6 col-sm-12">
            <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-camera"></i>

              <h3 class="box-title">Screenshot from our Gallery</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                  <?php MainController::Run('Screenshots','show_random_screenshot'); ?>
            </div>
            <!-- /.box-body -->
          </div>
         </div>
        </div>
		<div class="row">
           		 <div class="col-md-4 col-sm-8">
            <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-info"></i>

              <h3 class="box-title">Quick Info</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<?php MainController::Run('Activity', 'frontpage', 5); ?>
							</div>
							</div>
							</div>
			<div class="col-md-8 col-sm-12">
            <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-comments"></i>

              <h3 class="box-title">Pilot Chat</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                  <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" allowtransparency="true" src="https://chatroll.com/embed/chat/nortesul-virtual-airlines?id=STYmt_qf_6E&platform=html"></iframe>
            </div>
            <!-- /.box-body -->
          </div>
         </div>
        </div>
        <div class="row">
           		 <div class="col-md-8 col-sm-6">
            <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-certificate"></i>

              <h3 class="box-title">Communication Channels</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               <div class="table-scrollable">
								<table class="table table-bordered table-condensed table-hover">
								<thead>
								<tr>
									<th>
										 Platform
									</th>
									<th>
										 Link to enter
									</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										 <i class="fa fa-whatsapp"></i> Whatsapp
									</td>
									<td>
									  <a href="#" class="label label-success">Enter &raquo;</a>
									</td>
								</tr>
								<tr>
									<td>
										 <i class="fa fa-discord"></i> Discord
									</td>
									<td>
<a class="label label-info" href="https://discord.gg/njCgNkE">Enter on the Server</a>
									</td>
								</tr>
								<tr>
									<td>
										 <i class="fa fa-comments"></i> Forum
									</td>
									<td>
									  <span class="label label-info">Soon</span>
									</td>
								</tr>
								</tbody>
								</table>
							</div>
							</div>
							</div>
							</div>
			<div class="col-md-4 col-sm-6">
            <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-users"></i>

              <h3 class="box-title">New Pilots</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                  <?php MainController::Run('Pilots', 'RecentFrontPage', 5); ?>
            </div>
            <!-- /.box-body -->
          </div>
         </div>
        </div>
    </section>
    <!-- /.content -->
