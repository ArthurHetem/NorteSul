<?php if(!defined('IN_PHPVMS') && IN_PHPVMS !== true) { die(); } ?>
<section class="content-header bg-black" style="background-image: url('<?php echo SITE_URL;?>/lib/skins/nortesul/img/fundopiloto.jpg'); height: 200px;">
    <div class="pull-right"><div class="widget-icon cinza2" style=" margin-right: 50px; border: solid 2px white;">
      <?php
      if(!file_exists(SITE_ROOT.AVATAR_PATH.'/'.$pilotcode.'.png')) {
        echo '<img src="https://nortesulvirtual.com/beta/lib/images/noavatar.png'.'" alt="No Avatar" class="img-circle" width="50px"/>';
      } else {
        echo '<img src="'.SITE_URL.AVATAR_PATH.'/'.$pilotcode.'.png'.'" alt="No Avatar" class="img-circle" width="50px" /> ';
      }
      ?>
          </div></div>
    <h1><strong><?php echo $pilot->firstname . ' ' . $pilot->lastname?></strong></h1>
    <h4><?php echo $pilotcode ?> | <?php echo $pilot->rank;?></h4>
        <br>
</section>
<section class="content container-fluid">
  <div class="row">
    <div class="col-md-4">
      <div class="box box-widget widget-user">
      <!-- Add the bg color to the header using any of the bg-* classes -->
      <div class="widget-user-header bg-black">
        <h3 class="widget-user-username">Contact <strong>Box</strong></h3>
        <h4 class="widget-user-desc"><span class="label label-success">Verified Pilot <i class="fa fa-check"></i></span></h4>
        <div class="widget-icon cinza2" style="margin-top: 30px; border: solid 2px white;">
                  <i class="fa fa-comments img-circle" style="border: none;"></i>
              </div>
      </div>
      <div class="box-footer">
          <?php if(Auth::$userinfo->pilotcode == $pilotcode){

          }else{?>
          <a href="http://localhost/nortesul/crewcenter2/index.php/Mail/newmail" class="levanta btn-block btn-lg">
            <div class="widget-icon cinza2" style="border: solid 2px white; color:white; margin-left:0px;">
                      <i class="fa fa-envelope img-circle" style="border: none;"></i>
                  </div><span class="btn btn-lg text-center" style="text-decoration: none; color:#888888;">Send iMail</span></a>
        <?php }?>
        <div class="text-center text-muted">
        ~ Member since ~<br>
        <?php echo date(DATE_FORMAT, strtotime($pilot->joidate));?>
      </div>
      </div>
    </div>
    </div>
    <div class="col-md-8">
      <div class="box box-solid">
          <div class="box-header with-border">
              <h3 class="box-title">Pilot <strong> Details</strong></h3>
          </div>
          <div class="box-body">
            <table class="table table-striped">
              <tr>
                <td align="center"><p><b>Airline Rank:</b> <?php echo $pilot->rank;?></p></td>
              </tr>
              <tr>
                <td align="center"><p><b>Base Airport:</b> <?php echo $pilot->hub;?></p></td>
              </tr>
              <tr>
                <td align="center"><p><b>IVAO ID:</b> <?php
                $ivaoId = PilotData::GetFieldValue($pilot->pilotid, 'IVAO VID');
                    if($ivaoId < 1){
                        echo "<span class='text-muted'>Not Linked</span>";
                    } else {
                        echo "<span class='text-gren'>".$ivaoId."</span>";
                    }?></p></td>
              </tr>
              <tr>
                <td align="center"><p><b>VATSIM ID:</b> <?php
                $vatsimId = PilotData::GetFieldValue($pilot->pilotid, 'VATSIM ID');
                    if($vatsimId < 1){
                        echo "<span class='text-muted'>Not Linked</span>";
                    } else {
                        echo "<span class='text-gren'>".$vatsimId."</span>";
                    }?></p></td>
              </tr>
              <tr>
                <td align="center"><p><b>Pilot Origin:</b> <span class="flag-icon flag-icon-<?php echo strtolower($pilot->location);?>"></span><span style="margin-left:5px;"><?php echo Countries::getCountryName($pilot->location);?></span></p></td>
              </tr>
              <tr>
                <td align="center"><p><b>Total Pay:</b> <?php echo $pilot->totalpay;?></p></td>
              </tr>
              <tr>
                <td align="center"><p><b>Status:</b> <?php if ($pilot->retired = 3){
									echo '<span class="label label-success"><i class="fa fa-check"></i> Active</span>';
								} else{
									echo '<span class="label label-warning"><i class="fa fa-exclamation-triangle"></i> Inactive</span>';
								}
								?></p></td>
              </tr>
            </table>
          </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Additional <strong>Info</strong></h3>
        </div>
        <div class="box-body">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab"><?php $contaMedalha = count($allawards); echo '<span class="label label-primary">' .$contaMedalha.'</span> Awards';?> </a></li>
              <li><a href="#tab_2" data-toggle="tab">Staff Coments</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
              <?php
			if(is_array($allawards)) {
			?>
			<ul>
				<?php
                foreach($allawards as $award) {?>
<img src="<?php echo $award->image?>" class="img-responsive" alt="<?php echo $award->descrip?>" />
					
				<?php } ?>
			</ul>
			<?php
			}
			?>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <?php echo $pilot->comment;?>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
        </div>
    </div>
  </div>
</div>
<div class="row">
      <div class="col-md-12">
      <div class="box box-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-white">
                  <h4 class="widget-user-username text-center"><strong>NorteSul Virtual</strong></h4>
                  <h5 class="widget-user-desc text-center">
                      ICAO Style Logbook
                  </h5>
              </div>
              <div class="box-footer">
                  <hr>
                  <h4 class="text-center"><small>Belongs to</small></h4>
                  <h4 class="text-center"><strong><?php echo Auth::$userinfo->firstname;?> <?php echo Auth::$userinfo->lastname;?></strong></h4>
                  <hr>
                  <h4 class="text-center"><small>Base Airport</small></h4>
                  <h4 class="text-center"><strong><?php echo Auth::$userinfo->hub;?></strong></h4>
                  <hr>
                  <h4 class="text-center"><small>Total Log hours</small></h4>
                  <h4 class="text-center text-green"><strong><?php echo Auth::$userinfo->totalhours;?></strong></h4>
                  <hr>
                  <button type="button" class="btn btn-default rounded btn-block" data-toggle="modal" data-target="#modal-default">
                Open
              </button>
                </div>
            </div>
    </div>
    </div>
</section>

<div class="modal modal-xl fade" id="modal-default" style="display: none;">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title text-center">NorteSul Virtual</h4>
                <h5 class="modal-title text-center">PIREP Logbook</h4>
                <h5 class="modal-title text-center">Belongs to <?php echo $pilot->firstname . ' ' . $pilot->lastname?></h4>
              </div>
              <div class="modal-body table-responsive">
              <?php
                    if(!$pirep_list) {
                      echo '<div class="alert alert-info"><h3>Error</h3><p>You have not filed any reports. File one through the ACARS software or manual report submission to see its details and status on this page.</p></div>';
                      return;
                    }
                    ?>
                    <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th><h4 class="text-center"><strong>FLIGHT DATE</strong></h4></th>
                      <th><h4 class="text-center"><strong>CALLSIGN</strong></h4></th>
                      <th><h4 class="text-center"><strong>DEPARTURE</strong></h4></th>
                      <th><h4 class="text-center"><strong>ARRIVAL</strong></h4></td>
                      <th><h4 class="text-center"><strong>FLIGHT TIME</strong></h4></th>
                      <th></th>
                      <?php
                      // Only show this column if they're logged in, and the pilot viewing is the
                      //	owner/submitter of the PIREPs
                      if(Auth::LoggedIn() && Auth::$pilot->pilotid == $pilot->pilotid) {
                        echo '<th></th>';
                      }
                      ?>
                    </tr>
                    </thead>
                    <thead>
                    <tr>
                      <td align="center">(dd/mm/yyyy)</td>
                      <td align="center">XXX123</td>
                      <td align="center">(ICAO)</td>
                      <td align="center">(ICAO)</td>
                      <td align="center">(HH:MM)</td>
                      <th><h4 class="text-center"><strong>PILOT IN COMMAND</strong></h4></th>
                      <?php
                      // Only show this column if they're logged in, and the pilot viewing is the
                      //	owner/submitter of the PIREPs
                      if(Auth::LoggedIn() && Auth::$pilot->pilotid == $pilot->pilotid) {
                        echo '<th><h4 class="text-center"><strong>OPTIONS</strong></h4></th>';
                      }
                      ?>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach($pirep_list as $pirep) {
                    ?>
                    <tr>
                      <td align="center"><?php echo date(DATE_FORMAT, $pirep->submitdate); ?></td>
                      <td align="center"><?php echo $pirep->code . $pirep->flightnum; ?></td>
                      <td align="center"><?php echo $pirep->depicao; ?></td>
                      <td align="center"><?php echo $pirep->arricao; ?></td>
                        <td align="center"><?php echo $pirep->flighttime; ?></td>
                      <td align="center"><?php echo $pilot->firstname;?> <?php echo $pilot->lastname;?></td>
                      <?php
                      // Only show this column if they're logged in, and the pilot viewing is the
                      //	owner/submitter of the PIREPs
                      if(Auth::LoggedIn() && Auth::$pilot->pilotid == $pirep->pilotid) {
                        ?>
                      <td align="center">
                        <a href="<?php echo url('/pireps/view/'.$pirep->pirepid);?>" data-toggle="tooltip" title="POST FLIGHT REVIEW" class="btn btn-default btn-xs"><i class="fa fa-eye"></i> PFR</a><br />
                      </td>
                      <?php
                      }
                      ?>
                    </tr>
                    <?php
                    }
                    ?>
                    </tbody>
                    </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>