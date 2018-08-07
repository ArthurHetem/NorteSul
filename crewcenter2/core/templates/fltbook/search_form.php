<?php
$pilotid        = Auth::$userinfo->pilotid;
$last_location  = FltbookData::getLocation($pilotid);
$last_name      = OperationsData::getAirportInfo($last_location->arricao);
if(!$last_location) {
  FltbookData::updatePilotLocation($pilotid, Auth::$userinfo->hub);
}
?>
<section class="content container-fluid">
			<div class="row">
			<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Buscar Charter</h3>
            </div>
			<div class="box-body">
<form action="<?php echo url('/Fltbook');?>" method="post">
    <table class="table table-bordered">
      <tr>
          <td>Aeroporto Atual:</td>
          <td>
              <?php if($settings['search_from_current_location'] == 1) { ?>
                <div><span class="pull-left"><input class="form-control" id="depicao" name="depicao" type="hidden" value="<?php echo $last_location->arricao; ?>"><font color="red"><?php echo $last_location->arricao; ?> - <?php echo $last_name->name; ?></font></span></div>
              <?php } else { ?>
                <font color="red"><?php echo $last_location->arricao; ?> - <?php echo $last_name->name; ?></font>
              <?php } ?>
          </td>
      </tr>
      <?php if($settings['search_from_current_location'] == 0) { ?>
        <tr>
            <td>Selecionar Aeroporto de Decolagem:</td>
            <td>
                <select class="search form-control" name="depicao">
                    <option value="" selected disabled>Selecionar Aeroporto de Decolagem</option>
                    <?php
                      foreach ($airports as $airport) {
                        echo '<option value="'.$airport->icao.'">'.$airport->icao.' - '.$airport->name.'</option>';
                      }
                    ?>
                </select>
            </td>
        </tr>
      <?php } ?>
      <tr>
          <td>Selecionar Companhia Aérea:</td>
          <td>
              <select class="search form-control" name="airline">
                  <option value="">Qualquer</option>
                  <?php
                    foreach ($airlines as $airline) {
                      echo '<option value="'.$airline->code.'">'.$airline->name.'</option>';
                    }
                  ?>
              </select>
          </td>
      </tr>
      <tr>
          <td>Selecionar Aeronave:</td>
          <td>
            <select class="search form-control" name="aircraft">
              <option value="" selected>Qualquer</option>
              <?php
              if($settings['search_from_current_location'] == 1) {
		$airc = FltbookData::routeaircraft($last_location->arricao);
		if(!$airc) {
		      echo '<option>No Aircraft Available!</option>';
	        } else {
		      foreach ($airc as $air) {
			$ai = FltbookData::getaircraftbyID($air->aircraft);
			echo '<option value="'.$ai->icao.'">'.$ai->name.'</option>';
		      }
	        }
              } else {
                $airc = FltbookData::routeaircraft_depnothing();
                if(!$airc) {
		  echo '<option>No Aircraft Available!</option>';
	        } else {
                  foreach($airc as $ai) {
                    echo '<option value="'.$ai->icao.'">'.$ai->name.'</option>';
                  }
                }
              }
	      ?>
            </select>
          </td>
      </tr>
      <tr>
          <td>Selecionar Destino:</td>
          <td>
              <select class="search form-control" name="arricao">
                  <option value="">Qualquer</option>
                  <?php
                  if($settings['search_from_current_location'] == 1) {
                    $airs = FltbookData::arrivalairport($last_location->arricao);
                    if(!$airs) {
                      echo '<option>No Airports Available!</option>';
                    } else {
                      foreach ($airs as $air) {
                        $nam = OperationsData::getAirportInfo($air->arricao);
                        echo '<option value="'.$air->arricao.'">'.$air->arricao.' - '.$nam->name.'</option>';
                      }
                    }
                  } else {
                    foreach($airports as $airport) {
                      echo '<option value="'.$airport->icao.'">'.$airport->icao.' - '.$airport->name.'</option>';
                    }
                  }
                  ?>
              </select>
          </td>
      </tr>
      <tr>
    	<td align="center" colspan="2">
          <input type="hidden" name="action" value="search" />
          <input border="0" type="submit" name="submit" value="Buscar" class="btn-block btn-flat btn btn-info">
    	</td>
      </tr>
      <br />
  </table>
</form>
</div>
</div>
</div>
</div>	
<div class="row">
			<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Jumpseat</h3>
            </div>
			<div class="box-body">
<?php if($settings['search_from_current_location'] == 1) { ?>
<form action="<?php echo url('/Fltbook/jumpseat');?>" method="post">
  <table class="balancesheet tanle table-bordered">
    <thead>
    	<tr class="balancesheet_header">
    	   <td colspan="5">Selecionar Aerporto</td>
    	</tr>
    	<tr>
	    <td align="center">Transferir Para:</td>
            <td align="left">
              <div id="errors"></div>
                <select class="search form-control" name="depicao" onchange="calculate_transfer(this.value)">
                    <option value="" selected disabled>Selecionar Aeroporto</option>
                    <?php
                    foreach($airports as $airport) {
                      if($airport->icao == $last_location->arricao) {
                        continue;
                      }

                      echo '<option value="'.$airport->icao.'">'.$airport->icao.' - '.$airport->name.'</option>';
                    }
                    ?>
                </select>
                <input type="submit" id="purchase_button" value="Comprar Jumpseat!" disabled="disabled" class="btn-block btn-flat btn btn-info" />
          </td>
       </tr>
       <tr>
         <td align="center">Distancia da Viagem:</td>
         <td align="left"><div id="distance_travelling"></div></td>
       </tr>
       <tr>
         <td align="center">Custo:</td>
         <td align="left"><div id="jump_purchase_cost"></div></td>
       </tr>
    </table>
   <input type="hidden" name="cost">
   <input type="hidden" name="airport">
  </form>

<script type="text/javascript">
function calculate_transfer(arricao) {
  var distancediv = $('#distance_travelling')[0];
  var costdiv     = $('#jump_purchase_cost')[0];
  var errorsdiv     = $('#errors')[0];

  errorsdiv.innerHTML = '';

  $.ajax({
    url: baseurl + "/action.php/Fltbook/get_jumpseat_cost",
    type: 'POST',
    data: { depicao: "<?php echo $last_location->arricao; ?>", arricao: arricao, pilotid: "<?php echo Auth::$userinfo->pilotid; ?>" },
    success: function(data) {
      data = $.parseJSON(data);
      console.log(data);

      if(data.error) {
        $("#purchase_button").prop('disabled', true);
        errorsdiv.innerHTML = "<font color='red'>Not enough funds for this transfer!</font>";
      } else {
        $("#purchase_button").prop('disabled', false);
        distancediv.innerHTML = data.distance + "nm";
        costdiv.innerHTML = "$" + data.total_cost;
      }

    },
    error: function(e) {
      console.log(e);
    }
  });
}
</script>
<?php } ?>
</div>
</div>
        </div>
        </div>		
    </section>
    <!-- /.content -->		