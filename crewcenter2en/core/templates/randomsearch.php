<?php
/*
* phpVMS Module: Random Itinerary Builder
* Coding by Jeffrey Kobus
* www.fs-products.net
* Verion 1.3
* Dated: 03/22/2011
*/

$pilotid = Auth::$userinfo->pilotid;
$last_location = PIREPData::getLastReports($pilotid, 1);
if(!$last_location) $last_location->arricao = Auth::$userinfo->hub;
$last_name = OperationsData::getAirportInfo($last_location->arricao);
$equipment = OperationsData::GetAllAircraftSearchList(true);
$airlines = OperationsData::getAllAirlines(true);
?>
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
		<small><span class="badge badge-roundless badge-success">Versão Alpha do Despacho Operacional</span></small>
			</h3>
            <hr>
			<h1 class="page-title">Gerar Escalas <small>Reserve e bom voo!</small></h1>
			<!-- END PAGE HEADER-->
			<!-- BEGIN DASHBOARD STATS -->
			<div class="row">
				<div class="col-md-12">
                        <div class="portlet light bg-inverse">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-map font-green-haze"></i>
                                            <span class="caption-subject bold font-green-haze uppercase"> Gerador de Escalas </span>
                                            <span class="caption-helper">Avianca Virtual</span>
                                        </div>
                                    </div>




   <!-- BEGIN PAGE-->

<form name="randomflights" id="randomflights" action="<?php echo SITE_URL?>/index.php/randomflights/getRandomFlights" method="post">

      <table>
        <tr>
            <div class="form-group">
            <div class="col-md-9">
             <td width ="25%"><b>Localiza&ccedil&atildeo atual:</b></td>
              <td width ="75%"><select id="depicao" name="depicao" class="bs-select form-control input-large" data-style="purple">
               <option value="<?php echo $last_location->arricao?>"><?php echo $last_location->arricao?> (<?php echo $last_name->name?>)</option>
               </td>
              </select>
            </td>
		</tr>
          </div>
		
		<tr>
			<div class="form-group">
            <div class="col-md-9">
             <td width ="25%"><b>Airline:</b></td>
            <td width ="75%"><select id="airline" name="airline" class="bs-select form-control input-small" data-style="purple">
	            <option value="">Airline</option>
            <option value="ONE">Avianca</option>            </td>
        </tr>
		<tr>
			<div class="form-group">
            <div class="col-md-9">
             <td width ="25%"><b>Aeronave:</b></td>
             <td width ="75%"><select id="equipment" name="equipment" class="bs-select form-control input-small" data-style="purple">
	            <option value="">Aeronave</option>
                        <?php
                if(!$equipment) $equipment = array();
                foreach($equipment as $equip)
                {
                        echo '<option value="'.$equip->icao.'">'.$equip->name.'</option>';
                }
            ?></td>
        </tr>
		<tr>
			<div class="form-group">
            <div class="col-md-9">
             <td width ="25%"><b>N&uacutemero de Voos:</b></td>
             <td width ="75%"><select id="count" name="count" class="bs-select form-control input-small" data-style="purple">
                <option value="1">1</option>
                <option value="2">2</option>
			  <option value="3">3</option>
			  <option value="5">5</option>			  		
			</select></td>
			<td>
			<div class="form-group">
            <div class="col-md-9">
			<button input type="submit" name="submit" value="Gerar Escala" type="button" class="btn blue mt-ladda-btn ladda-button btn-outline" data-style="slide-left" data-spinner-color="#333">
                  <span class="ladda-label">Gerar Escala</span>
            </button>
            </td>
        </tr>
	  </table>	  	
    </form>
  </tr>
</table>
                        </div>
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
                <!-- BEGIN QUICK SIDEBAR -->
 </div>
                        
                        <!-- END CONTEUDO -->
                        
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
			</div>
			<!-- END DASHBOARD STATS -->
			<div class="clearfix">
			</div>
			</div>
			</div>