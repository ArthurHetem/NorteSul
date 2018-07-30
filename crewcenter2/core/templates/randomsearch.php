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
$last_location = PIREPData::getLastReports($pilotid, 1);
if(!$last_location) $last_location->arricao = Auth::$userinfo->hub;
$last_name = OperationsData::getAirportInfo($last_location->arricao);
$equipment = OperationsData::GetAllAircraftSearchList(true);
$airlines = OperationsData::getAllAirlines(true);
?>
<section class="content container-fluid">
			<div class="row">
			<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Gerador de Escalas</h3>
            </div>
			<div class="box-body table-responsive">
<table class="table table-bordered">
  <tbody><tr><form name="randomflights" id="randomflights" action="<?php echo SITE_URL?>/index.php/randomflights/getRandomFlights" method="post">
        <tr>
			<td><b>Local Atual:</b></td>
			<td><select id="depicao" name="depicao" class="form-control" disabled>
				<option value="<?php echo $last_location->arricao?>"><?php echo $last_location->arricao?> (<?php echo $last_name->name?>)</option>
			</td>		
		</tr>
		<tr>
			<td><b>Companhia Aérea:</b></td>
            <td><select id="airline" name="airline" class="form-control">               
	            <option value="">Selecionar Companhia</option>
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
			<td><b>Aeronave:</b></td>
            <td><select id="equipment" name="equipment" class="form-control">               
	            <option value="">Selecionar Equipamento</option>
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
			<td><b>Número de Voos:</b></td>
			<td><select id="count" name="count" class="form-control">			  
			  <option value="5">5</option>
			  <option value="10">10</option>
			  <option value="15">15</option>			  		
			</select></td>
		</tr>
<input type="submit" name="submit" value="Gerar Escala" class="pull-right btn-block btn-flat btn btn-info">		
    </form>
	</tbody>
  </tr>
</table>
        </div>
        </div>
        </div>		
    </section>
    <!-- /.content -->		