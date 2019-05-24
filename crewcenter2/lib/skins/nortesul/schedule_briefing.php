<section class="content-header bg-white espaca">
    <div class="pull-right"><i class="fa fa-plane fa-4x text-muted"></i></div>
    <h1><strong>Simbrief</strong></h1>
    <h1><small>Briefing de voo | NorteSul Virtual - Powered by SimBrief.com &copy;
            <?php echo date("Y");?></small>
        <br>
</section>
	<section class="content container-fluid">
    <div class="row">
    <div class="col-md-12">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-white" style="height:220px;">
              </div>
              <div class="widget-user-image">
                <h2 class="text-center"><span class="label label-default"><?php echo $schedule->code; ?><?php echo $schedule->flightnum; ?></span></h2>
                <h3 class="text-center"><?php echo $schedule->depicao; ?> <i class="fa fa-plane animated pulse infinite"></i> <?php echo $schedule->arricao; ?></h3>
                <h3 class="text-center"><?php echo ucwords(strftime("%d %B %Y"));?></h3>
              </div>
              <div class="box-footer bg-black">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="description-block">
                      <h5 class="description-header">ETD</h5>
                      <span class="description-text"><?php echo $schedule->deptime; ?> UTC</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6">
                    <div class="description-block">
                      <h5 class="description-header">ETA</h5>
                      <span class="description-text"><?php echo $schedule->arrtime; ?> UTC</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-map-marker"></i> <strong>Route</strong> map</h3>
            </div>
            <div class="box-body">
            <p class="text-center"><?php echo $schedule->depname; ?> - <?php echo $schedule->arrname; ?></p>
              <img style="margin-left:30%;" src="http://www.gcmap.com/map?P=<?php echo $schedule->depicao; ?>+-+<?php echo $schedule->arricao; ?>%0d%0a&MS=wls&MR=120&MX=540x540&PM=*" />
            </div>
          </div>
        </div>
      </div>
		<div class="row">
		   <div class="col-xs-12">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title"><strong>Schedule</strong> details</h3>
            </div>
            <!-- /.box-header -->
			<div class="box-body table-responsive">
        <div class="alert alert-info">Please make sure you have double checked all the details given here!</div>
                <form id="sbapiform">
                <table class="table table-hover">
                   <tbody><tr>
                <th>Airline</th>
                <th>Flight no.</th>
                <th>Dep ICAO</th>
                <th>Arr ICAO</th>
                <th>Distance</th>
                <th>Date</th>
                <th>Dep time (UTC)</th>
                </tr>
                <tr>
                <td><?php echo $schedule->code;?></td>
                <td><?php echo $schedule->code;?><?php echo "{$schedule->flightnum}"; ?></td>
                <td><?php echo $schedule->depname; ?> (<?php echo $schedule->depicao; ?>)</td>
                <td><?php echo $schedule->arrname; ?> (<?php echo $schedule->arricao; ?>)</td>
                <td><?php echo "$schedule->distance"; ?></td>
                <td><div class="input-group">
                  <input type="text" class="form-control" value="<?php echo date('d/m/Y');?>">
                </div></td>
                <td><div class="input-group">
                  <input type="text" class="form-control" value="<?php date_default_timezone_set('UTC'); $ts = strtotime('-1 hour, +30 minutes'); echo date('H:i', $ts);?>">
                </div></td>
                </tr>
                </tbody>
              </table>
			</div>


</div>
</div>
</div>
<div class="row">
   <div class="col-xs-8">
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title"><strong>Dispatch</strong> configuration</h3>
        </div>
        <!-- /.box-header -->
  <div class="box-body table-responsive">
    <table class="table table-hover">
                    <tbody>

                                    <tr><td>PAX Estimados<br><sup>PAX: 74.4 Kgs / BAG: 25 Kgs</sup></td>
                    <td><input class="form-control" type="text" readonly="readonly" name="pax" value="<?php

                             $allaircraft = OperationsData::GetAllAircraft(true);
    foreach($allaircraft as $aircraft)

          if($aircraft->registration == $schedule->registration)
          {
            $pct = rand(1, 100);
            $pctpassa = $pct/100;
                    $pax = round($aircraft->maxpax * $pctpassa, 0);
            echo $pax;

                             }
                             ?>"></td>
                    </tr>
                    <tr>
                    </tr><tr>
                    <td>Carga Estimada<br><sup>em tons</sup></td>
                    <td><input class="form-control" type="text" name="cargo" readonly="readonly" value="<?php

                             $allaircraft = OperationsData::GetAllAircraft(true);
    foreach($allaircraft as $aircraft)

          if($aircraft->registration == $schedule->registration)
          {
            $pctcargo = rand(1, 100);
            $pctpassacargo = $pctcargo/100;
                             $carga =  round($aircraft->maxcargo * $pctpassacargo, 0) ;
                 echo $carga/1000;
                 }

                             ?>"></td>
                    </tr>
                    <tr>
                    <td>Cost Index (CI)</td>
                    <td><select class="form-control" name="civalue"><option value="25" selected="selected">A320</option>
            <option value="27">B738</option>
                    <option value="AUTO">AUTO (PIC)</option>
                    </select></td>
                    </tr>
            <tr>
                            <td>Comb. Cont<br></td>
                            <td><select class="form-control" name="contpct"><option value="auto" selected="">AUTO</option><option value="0">0 PCT</option><option value="0.02">2 PCT</option><option value="0.03">3 PCT</option><option value="0.05">5 PCT</option><option value="0.07">7 PCT</option><option value="0.1">10 PCT</option><option value="0.15">15 PCT</option><option value="0.2">20 PCT</option></select></td>
                    </tr>
            <tr>
                            <td>Comb. Reserva<br></td>
                            <td><select class="form-control" name="resvrule"><option value="auto" selected="">AUTO</option><option value="0">0 MIN</option><option value="15">15 MIN</option><option value="30">30 MIN</option><option value="45">45 MIN</option><option value="60">60 MIN</option><option value="75">75 MIN</option><option value="90">90 MIN</option></select></td>
                    </tr>
            <tr>
                            <td>Comb. Extra<br><sup>em tons</sup></td>

                            <td colspan="2"><select class="form-control" name="addedfuel" id="addedfuel"><option value="0" selected="">0.0</option><option value="0.1">0.1</option><option value="0.2">0.2</option><option value="0.3">0.3</option><option value="0.4">0.4</option><option value="0.5">0.5</option><option value="0.6">0.6</option><option value="0.7">0.7</option><option value="0.8">0.8</option><option value="0.9">0.9</option><option value="1">1.0</option><option value="1.1">1.1</option><option value="1.2">1.2</option><option value="1.3">1.3</option><option value="1.4">1.4</option><option value="1.5">1.5</option><option value="1.6">1.6</option><option value="1.7">1.7</option><option value="1.8">1.8</option><option value="1.9">1.9</option><option value="2">2.0</option><option value="2.1">2.1</option><option value="2.2">2.2</option><option value="2.3">2.3</option><option value="2.4">2.4</option><option value="2.5">2.5</option><option value="2.6">2.6</option><option value="2.7">2.7</option><option value="2.8">2.8</option><option value="2.9">2.9</option><option value="3">3.0</option><option value="3.1">3.1</option><option value="3.2">3.2</option><option value="3.3">3.3</option><option value="3.4">3.4</option><option value="3.5">3.5</option><option value="3.6">3.6</option><option value="3.7">3.7</option><option value="3.8">3.8</option><option value="3.9">3.9</option><option value="4">4.0</option><option value="4.1">4.1</option><option value="4.2">4.2</option><option value="4.3">4.3</option><option value="4.4">4.4</option><option value="4.5">4.5</option><option value="4.6">4.6</option><option value="4.7">4.7</option><option value="4.8">4.8</option><option value="4.9">4.9</option><option value="5">5.0</option><option value="5.1">5.1</option><option value="5.2">5.2</option><option value="5.3">5.3</option><option value="5.4">5.4</option><option value="5.5">5.5</option><option value="5.6">5.6</option><option value="5.7">5.7</option><option value="5.8">5.8</option><option value="5.9">5.9</option><option value="6">6.0</option><option value="6.1">6.1</option><option value="6.2">6.2</option><option value="6.3">6.3</option><option value="6.4">6.4</option><option value="6.5">6.5</option><option value="6.6">6.6</option><option value="6.7">6.7</option><option value="6.8">6.8</option><option value="6.9">6.9</option><option value="7">7.0</option><option value="7.1">7.1</option><option value="7.2">7.2</option><option value="7.3">7.3</option><option value="7.4">7.4</option><option value="7.5">7.5</option><option value="7.6">7.6</option><option value="7.7">7.7</option><option value="7.8">7.8</option><option value="7.9">7.9</option><option value="8">8.0</option><option value="8.1">8.1</option><option value="8.2">8.2</option><option value="8.3">8.3</option><option value="8.4">8.4</option><option value="8.5">8.5</option><option value="8.6">8.6</option><option value="8.7">8.7</option><option value="8.8">8.8</option><option value="8.9">8.9</option><option value="9">9.0</option><option value="9.1">9.1</option><option value="9.2">9.2</option><option value="9.3">9.3</option><option value="9.4">9.4</option><option value="9.5">9.5</option><option value="9.6">9.6</option><option value="9.7">9.7</option><option value="9.8">9.8</option><option value="9.9">9.9</option><option value="10">10.0</option><option value="10.1">10.1</option><option value="10.2">10.2</option><option value="10.3">10.3</option><option value="10.4">10.4</option><option value="10.5">10.5</option><option value="10.6">10.6</option><option value="10.7">10.7</option><option value="10.8">10.8</option><option value="10.9">10.9</option><option value="11">11.0</option><option value="11.1">11.1</option><option value="11.2">11.2</option><option value="11.3">11.3</option><option value="11.4">11.4</option><option value="11.5">11.5</option><option value="11.6">11.6</option><option value="11.7">11.7</option><option value="11.8">11.8</option><option value="11.9">11.9</option><option value="12">12.0</option><option value="12.1">12.1</option><option value="12.2">12.2</option><option value="12.3">12.3</option><option value="12.4">12.4</option><option value="12.5">12.5</option><option value="12.6">12.6</option><option value="12.7">12.7</option><option value="12.8">12.8</option><option value="12.9">12.9</option><option value="13">13.0</option><option value="13.1">13.1</option><option value="13.2">13.2</option><option value="13.3">13.3</option><option value="13.4">13.4</option><option value="13.5">13.5</option><option value="13.6">13.6</option><option value="13.7">13.7</option><option value="13.8">13.8</option><option value="13.9">13.9</option><option value="14">14.0</option><option value="14.1">14.1</option><option value="14.2">14.2</option><option value="14.3">14.3</option><option value="14.4">14.4</option><option value="14.5">14.5</option><option value="14.6">14.6</option><option value="14.7">14.7</option><option value="14.8">14.8</option><option value="14.9">14.9</option><option value="15">15.0</option><option value="15.1">15.1</option><option value="15.2">15.2</option><option value="15.3">15.3</option><option value="15.4">15.4</option><option value="15.5">15.5</option><option value="15.6">15.6</option><option value="15.7">15.7</option><option value="15.8">15.8</option><option value="15.9">15.9</option><option value="16">16.0</option><option value="16.1">16.1</option><option value="16.2">16.2</option><option value="16.3">16.3</option><option value="16.4">16.4</option><option value="16.5">16.5</option><option value="16.6">16.6</option><option value="16.7">16.7</option><option value="16.8">16.8</option><option value="16.9">16.9</option><option value="17">17.0</option><option value="17.1">17.1</option><option value="17.2">17.2</option><option value="17.3">17.3</option><option value="17.4">17.4</option><option value="17.5">17.5</option><option value="17.6">17.6</option><option value="17.7">17.7</option><option value="17.8">17.8</option><option value="17.9">17.9</option><option value="18">18.0</option><option value="18.1">18.1</option><option value="18.2">18.2</option><option value="18.3">18.3</option><option value="18.4">18.4</option><option value="18.5">18.5</option><option value="18.6">18.6</option><option value="18.7">18.7</option><option value="18.8">18.8</option><option value="18.9">18.9</option><option value="19">19.0</option><option value="19.1">19.1</option><option value="19.2">19.2</option><option value="19.3">19.3</option><option value="19.4">19.4</option><option value="19.5">19.5</option><option value="19.6">19.6</option><option value="19.7">19.7</option><option value="19.8">19.8</option><option value="19.9">19.9</option><option value="20">20.0</option><option value="20.1">20.1</option><option value="20.2">20.2</option><option value="20.3">20.3</option><option value="20.4">20.4</option><option value="20.5">20.5</option><option value="20.6">20.6</option><option value="20.7">20.7</option><option value="20.8">20.8</option><option value="20.9">20.9</option><option value="21">21.0</option><option value="21.1">21.1</option><option value="21.2">21.2</option><option value="21.3">21.3</option><option value="21.4">21.4</option><option value="21.5">21.5</option><option value="21.6">21.6</option><option value="21.7">21.7</option><option value="21.8">21.8</option><option value="21.9">21.9</option><option value="22">22.0</option><option value="22.1">22.1</option><option value="22.2">22.2</option><option value="22.3">22.3</option><option value="22.4">22.4</option><option value="22.5">22.5</option><option value="22.6">22.6</option><option value="22.7">22.7</option><option value="22.8">22.8</option><option value="22.9">22.9</option><option value="23">23.0</option><option value="23.1">23.1</option><option value="23.2">23.2</option><option value="23.3">23.3</option><option value="23.4">23.4</option><option value="23.5">23.5</option><option value="23.6">23.6</option><option value="23.7">23.7</option><option value="23.8">23.8</option><option value="23.9">23.9</option><option value="24">24.0</option><option value="24.1">24.1</option><option value="24.2">24.2</option><option value="24.3">24.3</option><option value="24.4">24.4</option><option value="24.5">24.5</option><option value="24.6">24.6</option><option value="24.7">24.7</option><option value="24.8">24.8</option><option value="24.9">24.9</option><option value="25">25.0</option><option value="25.1">25.1</option><option value="25.2">25.2</option><option value="25.3">25.3</option><option value="25.4">25.4</option><option value="25.5">25.5</option><option value="25.6">25.6</option><option value="25.7">25.7</option><option value="25.8">25.8</option><option value="25.9">25.9</option><option value="26">26.0</option><option value="26.1">26.1</option><option value="26.2">26.2</option><option value="26.3">26.3</option><option value="26.4">26.4</option><option value="26.5">26.5</option><option value="26.6">26.6</option><option value="26.7">26.7</option><option value="26.8">26.8</option><option value="26.9">26.9</option><option value="27">27.0</option><option value="27.1">27.1</option><option value="27.2">27.2</option><option value="27.3">27.3</option><option value="27.4">27.4</option><option value="27.5">27.5</option><option value="27.6">27.6</option><option value="27.7">27.7</option><option value="27.8">27.8</option><option value="27.9">27.9</option><option value="28">28.0</option><option value="28.1">28.1</option><option value="28.2">28.2</option><option value="28.3">28.3</option><option value="28.4">28.4</option><option value="28.5">28.5</option><option value="28.6">28.6</option><option value="28.7">28.7</option><option value="28.8">28.8</option><option value="28.9">28.9</option><option value="29">29.0</option><option value="29.1">29.1</option><option value="29.2">29.2</option><option value="29.3">29.3</option><option value="29.4">29.4</option><option value="29.5">29.5</option><option value="29.6">29.6</option><option value="29.7">29.7</option><option value="29.8">29.8</option><option value="29.9">29.9</option><option value="30">30.0</option><option value="30.1">30.1</option><option value="30.2">30.2</option><option value="30.3">30.3</option><option value="30.4">30.4</option><option value="30.5">30.5</option><option value="30.6">30.6</option><option value="30.7">30.7</option><option value="30.8">30.8</option><option value="30.9">30.9</option><option value="31">31.0</option><option value="31.1">31.1</option><option value="31.2">31.2</option><option value="31.3">31.3</option><option value="31.4">31.4</option><option value="31.5">31.5</option><option value="31.6">31.6</option><option value="31.7">31.7</option><option value="31.8">31.8</option><option value="31.9">31.9</option><option value="32">32.0</option><option value="32.1">32.1</option><option value="32.2">32.2</option><option value="32.3">32.3</option><option value="32.4">32.4</option><option value="32.5">32.5</option><option value="32.6">32.6</option><option value="32.7">32.7</option><option value="32.8">32.8</option><option value="32.9">32.9</option><option value="33">33.0</option><option value="33.1">33.1</option><option value="33.2">33.2</option><option value="33.3">33.3</option><option value="33.4">33.4</option><option value="33.5">33.5</option><option value="33.6">33.6</option><option value="33.7">33.7</option><option value="33.8">33.8</option><option value="33.9">33.9</option><option value="34">34.0</option><option value="34.1">34.1</option><option value="34.2">34.2</option><option value="34.3">34.3</option><option value="34.4">34.4</option><option value="34.5">34.5</option><option value="34.6">34.6</option><option value="34.7">34.7</option><option value="34.8">34.8</option><option value="34.9">34.9</option><option value="35">35.0</option><option value="35.1">35.1</option><option value="35.2">35.2</option><option value="35.3">35.3</option><option value="35.4">35.4</option><option value="35.5">35.5</option><option value="35.6">35.6</option><option value="35.7">35.7</option><option value="35.8">35.8</option><option value="35.9">35.9</option><option value="36">36.0</option><option value="36.1">36.1</option><option value="36.2">36.2</option><option value="36.3">36.3</option><option value="36.4">36.4</option><option value="36.5">36.5</option><option value="36.6">36.6</option><option value="36.7">36.7</option><option value="36.8">36.8</option><option value="36.9">36.9</option><option value="37">37.0</option><option value="37.1">37.1</option><option value="37.2">37.2</option><option value="37.3">37.3</option><option value="37.4">37.4</option><option value="37.5">37.5</option><option value="37.6">37.6</option><option value="37.7">37.7</option><option value="37.8">37.8</option><option value="37.9">37.9</option><option value="38">38.0</option><option value="38.1">38.1</option><option value="38.2">38.2</option><option value="38.3">38.3</option><option value="38.4">38.4</option><option value="38.5">38.5</option><option value="38.6">38.6</option><option value="38.7">38.7</option><option value="38.8">38.8</option><option value="38.9">38.9</option><option value="39">39.0</option><option value="39.1">39.1</option><option value="39.2">39.2</option><option value="39.3">39.3</option><option value="39.4">39.4</option><option value="39.5">39.5</option><option value="39.6">39.6</option><option value="39.7">39.7</option><option value="39.8">39.8</option><option value="39.9">39.9</option><option value="40">40.0</option><option value="40.1">40.1</option><option value="40.2">40.2</option><option value="40.3">40.3</option><option value="40.4">40.4</option><option value="40.5">40.5</option><option value="40.6">40.6</option><option value="40.7">40.7</option><option value="40.8">40.8</option><option value="40.9">40.9</option><option value="41">41.0</option><option value="41.1">41.1</option><option value="41.2">41.2</option><option value="41.3">41.3</option><option value="41.4">41.4</option><option value="41.5">41.5</option><option value="41.6">41.6</option><option value="41.7">41.7</option><option value="41.8">41.8</option><option value="41.9">41.9</option><option value="42">42.0</option><option value="42.1">42.1</option><option value="42.2">42.2</option><option value="42.3">42.3</option><option value="42.4">42.4</option><option value="42.5">42.5</option><option value="42.6">42.6</option><option value="42.7">42.7</option><option value="42.8">42.8</option><option value="42.9">42.9</option><option value="43">43.0</option><option value="43.1">43.1</option><option value="43.2">43.2</option><option value="43.3">43.3</option><option value="43.4">43.4</option><option value="43.5">43.5</option><option value="43.6">43.6</option><option value="43.7">43.7</option><option value="43.8">43.8</option><option value="43.9">43.9</option><option value="44">44.0</option><option value="44.1">44.1</option><option value="44.2">44.2</option><option value="44.3">44.3</option><option value="44.4">44.4</option><option value="44.5">44.5</option><option value="44.6">44.6</option><option value="44.7">44.7</option><option value="44.8">44.8</option><option value="44.9">44.9</option><option value="45">45.0</option></select></td>
                    </tr>
            </tbody>
    </table>
  </div>


</div>
</div>
<div class="col-xs-4">
   <div class="box box-solid">
     <div class="box-header with-border">
       <h3 class="box-title"><strong>OFP</strong> configuration</h3>
     </div>
     <!-- /.box-header -->
<div class="box-body table-responsive">
 <table class="table table-hover">
                 <tbody>
                 <tr>
                         <td>Detailed Navlog</td>
                         <td><input type="hidden" name="navlog" value="0"><div class="switch__container">
                     <input id="switch-flat" class="switch switch--flat2" type="checkbox" name="navlog" value="1" checked="">
                     <label for="switch-flat"></label>
                   </div></td>
                 </tr>
                 <tr>
                         <td>ETOPS Planning</td>
                         <td><input type="hidden" name="etops" value="0"><div class="switch__container">
                     <input id="switch-flat2" class="switch switch--flat2" type="checkbox" name="etops" value="1" checked="">
                     <label for="switch-flat2"></div></label></td>
                 </tr>
                 <tr>
                         <td>Plan stepclimbs</td>
                         <td><input type="hidden" name="stepclimbs" value="0"><div class="switch__container">
                     <input id="switch-flat3" class="switch switch--flat2" type="checkbox" name="stepclimbs" value="1" checked="">
                     <label for="switch-flat3"></div></td>
                 </tr>
                 <tr>
                         <td>Runway analysis</td>
                         <td><input type="hidden" name="tlr" value="0"><div class="switch__container">
                     <input id="switch-flat4" class="switch switch--flat2" type="checkbox" name="tlr" value="1" checked="">
                     <label for="switch-flat4"></div></td>
                 </tr>
                 <tr>
                         <td>Include NOTAMs</td>
                         <td><input type="hidden" name="notams" value="0"><div class="switch__container">
                     <input id="switch-flat5" class="switch switch--flat2" type="checkbox" name="notams" value="1" checked="">
                     <label for="switch-flat5"></div></td>
                 </tr>
                 <tr>
                         <td>FIR NOTAMs</td>
                         <td><input type="hidden" name="firnot" value="0"><div class="switch__container">
                     <input id="switch-flat6" class="switch switch--flat2" type="checkbox" name="firnot" value="1" checked="">
                     <label for="switch-flat6"></div></td>
                 </tr>
         </tbody>
 </table>
</div>


</div>
</div>
<div class="col-xs-12">
   <div class="box box-solid">
     <div class="box-header with-border">
       <h3 class="box-title"><strong>Route</strong> planner</h3>
     </div>
     <!-- /.box-header -->
<div class="box-body table-responsive">
 <table class="table table-hover">
                 <tbody>
                 <tr>
                         <td><a href="http://rfinder.asalink.net/free/" id="rflink" target="_blank"><img class="routeimg" style="width:70px;height:30px;padding:2px 0px;margin-right:0px;margin-left:0px" src="https://www.simbrief.com/images/routefinder.png" alt="RouteFinder" title="RouteFinder"></a></td>
                 </tr>
                 <tr>
                         <td><textarea rows="8" cols="50" class="form-control" type="text" name="route" placeholder="<?php echo $schedule->route; ?>" value=""></textarea></td>
                 </tr>
                 <tr>
                         <td><div class="alert alert-warning">Remove any references to "SID" & "STAR" or you will get errors in your route.</div></td>
                 </tr>
         </tbody>
 </table>
</div>


</div>
</div>
</div>


                                <input type="hidden" name="altn_count" size="5" placeholder="ZZZZ" value="2">
                                <input type="hidden" name="type" size="5" placeholder="ZZZZ" value="<?php

                         $allaircraft = OperationsData::GetAllAircraft(true);
foreach($allaircraft as $aircraft)

			if($aircraft->registration == $schedule->registration)
			{
			echo $aircraft->icao;
                         }
                         ?>">
                                <input type="hidden" name="orig" size="5" placeholder="ZZZZ" maxlength="4" value="<?php echo $schedule->depicao; ?>">
                                <input type="hidden" name="dest" size="5" placeholder="ZZZZ" maxlength="4" value="<?php echo $schedule->arricao; ?>">
                                <input type="hidden" name="callsign" placeholder="ZZZZ" maxlength="4" value="NSV<?php echo $schedule->flightnum; ?>">
                                <input type="hidden" name="cpt" placeholder="ZZZZ" maxlength="4" value="<?php echo Auth::$userinfo->firstname; ?> <?php echo Auth::$userinfo->lastname; ?>">

                                <select style="display:none;" class="form-control" onchange="" name="planformat" id="planformat"><option value="LIDO" selected="">LIDO</option><option value="aal">AAL</option><option value="aca">ACA</option><option value="afr">AFR</option><option value="awe">AWE</option><option value="baw">BAW</option><option value="ber">BER</option><option value="dal">DAL</option><option value="dlh">DLH</option><option value="ezy">EZY</option><option value="gwi">GWI</option><option value="jbu">JBU</option><option value="jza">JZA</option><option value="klm">KLM</option><option value="ryr">RYR</option><option value="swa">SWA</option><option value="uae">UAE</option><option value="ual">UAL</option><option value="ual f:wz">UAL F:WZ</option></select>
                                <select style="display:none;" class="form-control" name="maps"><option value="detail">Detalhado</option><option value="simple">Simples</option><option value="none">None</option></select>


                        <input type="hidden" class="form-control" name="manualrmk" placeholder="Remarks" value="Limites da NorteSul Virutal">

                               <input type="hidden" name="airline" value="NS">
                                <input type="hidden" name="fltnum" value="<?php echo $schedule->flightnum; ?> ">


                                <input type="hidden" name="date" value="<?php echo date('dMy');?>">


                                <?php $deptimes = explode(":", $schedule->deptime); ?>

<input type="hidden" name="deph" value="<?php echo $deptimes[0]?>">
<input type="hidden" name="depm" value="<?php echo $deptimes[1]?>">



                                <input type="hidden" name="reg" value="<?php echo $schedule->registration; ?>">


                                <input type="hidden" name="navlog" value="1">
                                <input type="hidden" name="selcal" value="EL-SA">
                                <input type="hidden" name="pid" value="<?php echo $pilotcode; ?>">
                                <input type="hidden" name="cruise" value="CI">
                                <input type="hidden" name="altn_1_route" value="">


                                <div class="text-center"><input type="button" class="btn btn-success" onclick="simbriefsubmit('http://nortesulvirtual.com/crewcenter2pt/index.php/SimBrief');" value="Generate OFP">

                    </div>
                </div></section>
          </div>
          <!-- /.modal-dialog -->
    </section>
    <!-- /.content -->
