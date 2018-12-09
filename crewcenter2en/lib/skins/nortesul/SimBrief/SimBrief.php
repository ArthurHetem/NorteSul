<!-- Main content -->
	<section class="content-header">
      <h1>
        Briefing Eletrônico <?php echo (string) $info->general[0]->icao_airline.''.(string) $info->general[0]->flight_number; ?>
      </h1>
    </section>
	<section class="content container-fluid">
	<div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Info</a></li>
              <li><a href="#tab_2" data-toggle="tab">Alternate</a></li>
              <li><a href="#tab_3" data-toggle="tab">Weight & Fuel</a></li>
			  <li><a href="#tab_4" data-toggle="tab">Crew</a></li>
			  <li><a href="#tab_5" data-toggle="tab">Weather</a></li>
			  <li><a href="#tab_6" data-toggle="tab">Route</a></li>
			  <li><a href="#tab_7" data-toggle="tab">OFP</a></li>
			  <li><a href="#tab_8" data-toggle="tab">Download</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <h3>Flight Information</h3>

                <table class="table">
                <tbody>
				<tr>
                  <td><b>Flight NR</b></td>
                  <td><?php echo (string) $info->general[0]->icao_airline.''.(string) $info->general[0]->flight_number; ?></td>
                  <td><b>Callsign</b></td>
				  <td><?php echo (string) $info->atc[0]->callsign;?></td>
                </tr>
                <tr>
                  <td><b>DEP Airport</b></td>
                  <td><span class="badge bg-blue"><?php echo ((string) $info->origin[0]->icao_code); ?></span> <?php echo (string) $info->origin[0]->name; ?></td>
                  <td><b>ETD</b></td>
				  <td><?php
        $epoch = (string) $info->times[0]->sched_out; 
$dt = new DateTime("@$epoch");  // convert UNIX timestamp to PHP DateTime
echo $dt->format('H:i'); // output = 2012-08-15 00:00:00  
       ?></td>
                </tr>
                <tr>
                  <td><b>Ground Handling</b></td>
                  <td>Gate E01</td>
                  <td><b>EST RWY</b></td>
				  <td><?php echo ((string) $info->origin[0]->plan_rwy);?></td>
                </tr>
                <tr>
                  <td><b>ARR Airport</b></td>
                  <td><span class="badge bg-blue"><?php echo ((string) $info->destination[0]->icao_code); ?></span> <?php echo (string) $info->destination[0]->name; ?></td>
                  <td><b>ETA</b></td>
				  <td><?php
        $epoch = (string) $info->times[0]->est_on; 
$dt = new DateTime("@$epoch");  // convert UNIX timestamp to PHP DateTime
echo $dt->format('H:i'); // output = 2012-08-15 00:00:00  
       ?></td>
                </tr>
				<tr>
                  <td><b>Ground Handling</b></td>
                  <td>Gate E01</td>
                  <td><b>EST RWY</b></td>
				  <td><?php echo ((string) $info->destination[0]->plan_rwy);?></td>
                </tr>
				<tr>
                  <td><b>REG</b></td>
                  <td><?php echo ((string) $info->aircraft[0]->reg);?>﻿</td>
                  <td><b>AC</b></td>
				  <td><?php echo ((string) $info->aircraft[0]->icaocode);?>﻿</td>
                </tr>
				<tr>
                  <td><b>Cost Index</b></td>
                  <td>CI<?php echo ((string) $info->general[0]->costindex);?>﻿</td>
                  <td><b>Suggested Altitude</b></td>
				  <td><?php echo ((string) $info->general[0]->initial_altitude);?>﻿ ft</td>
                </tr>
                <tr>
                  <td><b>Distance</b></td>
                  <td><?php echo ((string) $info->general[0]->route_distance);?>﻿﻿ nm</td>
                  <td><b>Flight Duration</b></td>
				  <td><?php
        $epoch = (string) $info->times[0]->est_block; 
$dt = new DateTime("@$epoch");  // convert UNIX timestamp to PHP DateTime
echo $dt->format('H:i'); // output = 2012-08-15 00:00:00  
       ?>  hrs</td>
                </tr>
              </tbody></table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <table class="table table-hover">
<tbody>
			<tr><td colspan="4">
			<h4>Alternate</h4>
			</td>
		</tr>
		<tr>
			<td><strong>Alternate Airport</strong></td>
			<td><span class="badge bg-blue"><?php echo ((string) $info->alternate[0]->icao_code);?></span> <?php echo ((string) $info->alternate[0]->name);?></td>
			<td><strong>EST RWY</strong></td>
			<td><?php echo ((string) $info->alternate[0]->plan_rwy);?></td>
		</tr>
		<tr>
			<td><strong>Suggested Altitude</strong></td>
			<td><?php echo ((string) $info->alternate[0]->cruise_altitude);?> ft</td>
			<td><strong>Distance</strong></td>
			<td><?php echo ((string) $info->alternate[0]->distance);?> nm</td>
		</tr>
		<tr>
			<td><strong>Route</strong></td>
			<td><?php echo ((string) $info->alternate[0]->route);?></td>
			<td><strong>Fuel Burn</strong></td>
			<td><?php echo ((string) $info->alternate[0]->burn);?> kgs</td>
		</tr>
		<tr>
			<td><strong>Heading</strong></td>
			<td><?php echo ((string) $info->alternate[0]->heading_mag);?>°</td>
			<td></td>
			<td></td>
		</tr>
</tbody>
</table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                <table class="table table-hover">
<tbody>
		<tr>
			<td colspan="4">
			<h4>Fuel</h4>
			</td>
		</tr>
		<tr>
			<td><strong>Ramp Fuel Load</strong></td>
			<td><?php echo ((string) $info->fuel[0]->plan_ramp);?> kgs</td>
			<td><strong>Min TakeOff Fuel</strong></td>
			<td><?php echo ((string) $info->fuel[0]->min_takeoff);?> kgs</td>
		</tr>
		<tr>
			<td><strong>Alternate Fuel Burn</strong></td>
			<td><?php echo ((string) $info->alternate[0]->burn);?> kgs</td>
			<td><strong>Taxi Fuel Burn</strong></td>
			<td>150 kgs</td>
		</tr>
		<tr>
			<td><strong>Contingency Fuel Reserve</strong></td>
			<td><?php echo ((string) $info->fuel[0]->contingency);?> kgs</td>
			<td><strong>Fuel Burn</strong></td>
			<td><?php echo ((string) $info->fuel[0]->enroute_burn);?> kgs</td>
		</tr>
		<tr>
			<td><strong>Reserve Fuel</strong></td>
			<td><?php echo ((string) $info->alternate[0]->reserve);?> kgs</td>
			<td><strong>Planned Landing Fuel</strong></td>
			<td><?php echo ((string) $info->fuel[0]->plan_landing);?> kgs</td>
		</tr>
		<tr>
			<td><strong>Extra fuel</strong></td>
			<td colspan="3"><?php echo ((string) $info->fuel[0]->extra);?> kgs</td>
		</tr>
		
		<tr>
			<td colspan="4">
			<h4>Weight</h4>
			</td>
		</tr>
		<tr>
			<td><strong>PAX</strong></td>
			<td><?php echo ((string) $info->weights[0]->pax_count);?></td>
			<td><strong>OEW</strong></td>
			<td><?php echo ((string) $info->weights[0]->oew);?> kgs</td>
		</tr>
		<tr>
			<td><strong>Cargo</strong></td>
			<td><?php echo ((string) $info->weights[0]->cargo);?> kgs</td>
			<td><strong>ZFW</strong></td>
			<td><?php echo ((string) $info->weights[0]->est_zfw);?> kgs</td>
		</tr>
		<tr>
			<td><strong>Payload</strong></td>
			<td><?php echo ((string) $info->weights[0]->payload);?> kgs</td>
			<td><strong>TOW</strong></td>
			<td><?php echo ((string) $info->weights[0]->est_tow);?> kgs</td>
		</tr>
		<tr>
			<td><strong></strong></td>
			<td></td>
			<td><strong>LDW</strong></td>
			<td><?php echo ((string) $info->weights[0]->est_ldw);?> kgs</td>
		</tr>
</tbody>
</table>
              </div>
              <!-- /.tab-pane -->
			  <div class="tab-pane" id="tab_4">
			  <table class="table table-hover">
               <tbody>
		<tr>
			<td colspan="4">
			<h4>Crew Information</h4>
			</td>
		</tr>
		<tr>
			<td><strong>Dispatcher</strong></td>
			<td><strong>DX</strong></td>
			<td colspan="4"><?php echo ((string) $info->crew[0]->dx);?></td>
		</tr>
		<tr>
			<td><strong>Capitain</strong></td>
			<td><strong>CPT</strong></td>
			<td colspan="4"><?php echo ((string) $info->crew[0]->cpt);?></td>
		</tr>
		<tr>
			<td><strong>First Officer</strong></td>
			<td><strong>FO</strong></td>
			<td colspan="4"><?php echo ((string) $info->crew[0]->fo);?></td>
		</tr>
		<tr>
			<td><strong>Purser</strong></td>
			<td><strong>PU</strong></td>
			<td colspan="4"><?php echo ((string) $info->crew[0]->pu);?></td>
		</tr>
		<tr>
			<td><strong>Cabin Crewmember</strong></td>
			<td><strong>CB</strong></td>
			<td colspan="4"><?php echo ((string) $info->crew[0]->fa);?><br><?php echo ((string) $info->crew[0]->fa[1]);?><br><?php echo ((string) $info->crew[0]->fa[2]);?><br><br><br><br><br><br></td>
		</tr>
	</tbody>
	</table>
              </div>
              <!-- /.tab-pane -->
			  <div class="tab-pane" id="tab_5">
			  <h4>Weather Information</h4>
			    <table class="table table-hover">
<tbody>
   
        		<tr>
			
			
		</tr>           
    
            <!-- Metar and TAF --> 
    <tr>
        <th>DEP METAR</th>
         <th>ALTN METAR</th>
        <th colspan="2">ARR METAR</th>
    </tr>

    <tr>
        <td width="34%"><?php echo ((string) $info->weather[0]->orig_metar);?></td>
          <td width="34%"><?php echo ((string) $info->weather[0]->altn_metar);?>G<br></td>
	 <td width="34%"><?php echo ((string) $info->weather[0]->dest_metar);?><br></td>
	</tr>
    
     <tr>
        <th>DEP TAF</th>
         <th>ALTN TAF</th>
        <th colspan="2">ARR TAF</th>
    </tr>
    <tr>
        <td width="34%"><?php echo ((string) $info->weather[0]->orig_taf);?><br>
                    </td>
          <td width="34%"><?php echo ((string) $info->weather[0]->altn_taf);?><br>
          </td><td width="34%"><?php echo ((string) $info->weather[0]->dest_taf);?><br>
    </td></tr>
   </tbody></table>
<center><a class="plane-seat-map hidden-sm js-fb" href="http://www.simbrief.com/ofp/uads/<?php echo ((string) $info->images->map[1]->link);?>">
<img border="0" alt="" src="http://www.simbrief.com/ofp/uads/<?php echo ((string) $info->images->map[1]->link);?>" width="80%">
</a></center>
<center><a class="plane-seat-map hidden-sm js-fb" href="http://www.simbrief.com/ofp/uads/<?php echo ((string) $info->images->map[2]->link);?>">
<img border="0" alt="" src="http://www.simbrief.com/ofp/uads/<?php echo ((string) $info->images->map[2]->link);?>" width="80%">
</a></center>
<center><a class="plane-seat-map hidden-sm js-fb" href="http://www.simbrief.com/ofp/uads/<?php echo ((string) $info->images->map[3]->link);?>">
<img border="0" alt="" src="http://www.simbrief.com/ofp/uads/<?php echo ((string) $info->images->map[3]->link);?>" width="80%">
</a></center>
<center><a class="plane-seat-map hidden-sm js-fb" href="http://www.simbrief.com/ofp/uads/<?php echo ((string) $info->images->map[4]->link);?>">
<img border="0" alt="" src="http://www.simbrief.com/ofp/uads/<?php echo ((string) $info->images->map[4]->link);?>" width="80%">
</a></center>
<center><a class="plane-seat-map hidden-sm js-fb" href="http://www.simbrief.com/ofp/uads/<?php echo ((string) $info->images->map[5]->link);?>">
<img border="0" alt="" src="http://www.simbrief.com/ofp/uads/<?php echo ((string) $info->images->map[5]->link);?>" width="80%">
</a></center>
<center><a class="plane-seat-map hidden-sm js-fb" href="http://www.simbrief.com/ofp/uads/<?php echo ((string) $info->images->map[6]->link);?>">
<img border="0" alt="" src="http://www.simbrief.com/ofp/uads/<?php echo ((string) $info->images->map[6]->link);?>" width="80%">
</a></center>
<center><a class="plane-seat-map hidden-sm js-fb" href="http://www.simbrief.com/ofp/uads/<?php echo ((string) $info->images->map[7]->link);?>">
<img border="0" alt="" src="http://www.simbrief.com/ofp/uads/<?php echo ((string) $info->images->map[7]->link);?>" width="80%">
</a></center>
              </div>
              <!-- /.tab-pane -->
			  <div class="tab-pane" id="tab_6">
<h4>Route</h4>

<textarea id="html" name="html" class="form-control"><?php echo ((string) $info->atc[0]->route);?></textarea>
<input type="button" value="Copiar rota" class="btn btn-flat btn-primary" onclick="copy_to_clipboard('html');">
<br>
<br>
<form>
<input type="button" class="btn btn-flat btn-primary" value="Open Skyvector" onclick="window.location.href='<?php echo ((string) $info->links[0]->skyvector);?>'">
</form> 

<br>
<script>
function copy_to_clipboard(id)
{
    document.getElementById('html').select();
    document.execCommand('copy');
}
function download(d) {
        if (d == 'Select Format') return;
        window.location = 'http://www.simbrief.com/ofp/flightplans/' + d;
}
</script>

<center><a class="plane-seat-map hidden-sm js-fb" href="http://www.simbrief.com/ofp/uads/<?php echo ((string) $info->images->map[0]->link);?>">
<img border="0" alt="" src="http://www.simbrief.com/ofp/uads/<?php echo ((string) $info->images->map[0]->link);?>" width="80%">
</a></center>
</div>
<!-- /.tab-pane -->
              <div class="tab-pane" id="tab_7">
<h4>OPERATION FLIGHT PLAN</h4>

<?php echo (string) $info->text[0]->plan_html; ?>
</div>
<!-- /.tab-pane -->
              <div class="tab-pane" id="tab_8">
<h4>DOWNLOAD/PREFILE</h4>
<p>SELECT YOUR FILE TO LOAD THE FLIGHT PLAN DIRECTLY INTO THE COCKPIT</p>
<select name="download" onchange="download(this.value)" class="form-control">
<option>Select Format</option>
 <option value="<?php echo $info->files->pdf->link; ?>"><?php echo $info->files->pdf->name; ?></option>
<?php
  foreach($info->files->file as $file)
                {
?>
 
<option value="<?php echo $file->link; ?>"><?php echo $file->name; ?></option>
                        <?php
                    }
    ?>
                        </select>
</div>
<!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>	
    </section>
    <!-- /.content -->            