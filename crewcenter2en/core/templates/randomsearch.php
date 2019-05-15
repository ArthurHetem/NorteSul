<?php
/*
* phpVMS Module: Random Itinerary Builder
* Coding by Jeffrey Kobus
* www.fs-products.net
* Verion 1.3
* Dated: 03/22/2011
* Edited By Arthur Hetem 28/07/2018 V1.0D
*/

$pilotid = Auth::$userinfo->pilotid;
$last_location = FltbookData::getLocation(Auth::$userinfo->pilotid)->arricao;
if(!$last_location) $last_location->arricao = Auth::$userinfo->hub;
$last_name = OperationsData::getAirportInfo($last_location);
$equipment = OperationsData::GetAllAircraftSearchList(true);
$airlines = OperationsData::getAllAirlines(true);
?>
<section class="content container-fluid">
			<div class="row">
			<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Schedules Generator</h3>
            </div>
			<div class="box-body table-responsive">
<table class="table table-bordered">
  <tbody><tr><form name="randomflights" id="randomflights" action="<?php echo SITE_URL?>/index.php/randomflights/getRandomFlights" method="post">
        <tr>
			<td><b>Actual Location:</b></td>
			<td><select id="depicao" name="depicao" class="form-control" disabled>
				<option value="<?php echo $last_location;?>"><?php echo $last_location;?> (<?php echo $last_name->name;?>)</option>
			</td>
		</tr>
		<tr>
			<td><b>Airline:</b></td>
            <td><select id="airline" name="airline" class="form-control">
	            <option value="">Select Airline</option>
            <?php
                if(!$airlines) $airlines = array();
                foreach($airlines as $airline)
                {
                        echo '<option value="'.$airline->code.'">'.$airline->name.'</option>';
                }
            ?>
            </td>
        </tr>
		<tr>
			<td><b>Aircraft:</b></td>
            <td><select id="equipment" name="equipment" class="form-control">
	            <option value="">Select Equipment</option>
            <?php
                if(!$equipment) $equipment = array();
                foreach($equipment as $equip)
                {
                        echo '<option value="'.$equip->icao.'">'.$equip->name.'</option>';
                }
            ?>
            </td>
        </tr>
		<tr>
			<td><b>Number of Flights:</b></td>
			<td><select id="count" name="count" class="form-control">
			  <option value="5">5</option>
			  <option value="10">10</option>
			  <option value="15">15</option>
			</select></td>
		</tr>
<input type="submit" name="submit" value="Generate Schedule" class="pull-right btn-block btn-flat btn btn-info">
    </form>
	</tbody>
  </tr>
</table>
        </div>
        </div>
        </div>
    </section>
    <!-- /.content -->
