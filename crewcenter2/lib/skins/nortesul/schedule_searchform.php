<?php if(!defined('IN_PHPVMS') && IN_PHPVMS !== true) { die(); } ?>
<?php
$pilotid        = Auth::$userinfo->pilotid;
$last_location  = FltbookData::getLocation($pilotid);
$last_name      = OperationsData::getAirportInfo($last_location->arricao);
if(!$last_location) {
  FltbookData::updatePilotLocation($pilotid, Auth::$userinfo->hub);
}
?>
<section class="content-header bg-white espaca">
    <div class="pull-right"><i class="fa fa-plane fa-4x text-muted"></i></div>
    <h1><strong>Centro de Operações</strong> de voos</h1>
    <h1><small>Operações de voo | NorteSul Virtual &copy;
            <?php echo date("Y");?></small>
        <br>
</section>
<section class="content container-fluid">
	<div class="row">
  <form action="<?php echo url('/Fltbook');?>" method="post">
	<div class="col-md-6">
	<div class="box box-solid">
		<div class="box-header with-border">
			<h3 class="box-title"><strong>Busca</strong> de voos</h3>
			<div class="pull-right box-tools">
				<span class="label label-success">Decolando de <?php echo $last_location->arricao;?></span>
			</div>
		</div>
		<div class="box-body">
			<div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Destino</a></li>
              <li><a href="#tab_2" data-toggle="tab">Aeronave</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <select class="search form-control" name="arricao">
                  <option value="">Escolha o Destino</option>
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
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <select class="search form-control" name="aircraft">
                  <option value="" selected>Escolha a Aeronave</option>
                  <?php
                  if($settings['search_from_current_location'] == 1) {
        $airc = FltbookData::routeaircraft($last_location->arricao);
        if(!$airc) {
              echo '<option>Nenhuma aeronave disponível!</option>';
              } else {
              foreach ($airc as $air) {
          $ai = FltbookData::getaircraftbyID($air->aircraft);
          echo '<option value="'.$ai->icao.'">'.$ai->name.'</option>';
              }
              }
                  } else {
                    $airc = FltbookData::routeaircraft_depnothing();
                    if(!$airc) {
          echo '<option>Nenhuma aeronave disponível!</option>';
              } else {
                      foreach($airc as $ai) {
                        echo '<option value="'.$ai->icao.'">'.$ai->name.'</option>';
                      }
                    }
                  }
            ?>
                </select>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <input type="hidden" name="action" value="search" />
          <div class="text-center"><input border="0" type="submit" name="submit" value="Buscar" class="btn btn-default"></div>
          </form>
    </div>
	</div>
</div>
</form>
<form name="randomflights" id="randomflights" action="<?php echo SITE_URL?>/index.php/randomflights/getRandomFlights" method="post" class="form-horizontal">
<div class="col-md-6">
<div class="box box-solid">
	<div class="box-header with-border">
		<h3 class="box-title"><strong>Gerar</strong> escala</h3>
		</div>
	<div class="box-body">
    <div class="form-group">
			<label class="col-sm-4 control-label" for="depicao">Local atual:</label>
				<div class="col-sm-6">
					<select id="depicao" name="depicao" class="form-control" size="1">
						<option value="<?php echo $last_location->arricao;?>">
							<?php echo $last_location->arricao;?> (<?php echo $last_name->name;?>)
						</option>
					</select>
				</div>
		</div>
    <div class="form-group">
			<label class="col-sm-4 control-label" for="airline">Linha aérea:</label>
				<div class="col-sm-6">
      <select id="airline" name="airline" class="form-control">
	            <option value="">Selecionar Linha aérea</option>
              <?php
                if(Auth::LoggedIn() && PilotGroups::group_has_perm(Auth::$usergroups, ACCESS_ADMIN))
                {
                  foreach ($airlines as $airline) {
                        echo '<option value="'.$airline->code.'">'.$airline->name.'</option>';
                      }
                }
  			  else{
              ?>
  			<option value="NSV">NorteSul Virtual Airlines</option>
  			  <?php }?>
                </select>
              </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label" for="equipment">Aeronave:</label>
              <div class="col-sm-6">
                <select id="equipment" name="equipment" class="form-control">
	            <option value="">Selecionar aeronave</option>
            <?php
                if(!$equipment) $equipment = array();
                foreach($equipment as $equip)
                {
                        echo '<option value="'.$equip->icao.'">'.$equip->name.'</option>';
                }
            ?>
          </select>
          </div>
  		</div>
      <div class="form-group">
        <label class="col-sm-4 control-label" for="count">Pernas:</label>
          <div class="col-sm-6">
      <select id="count" name="count" class="form-control">
			  <option value="2">2</option>
        <option value="4">4</option>
        <option value="6">6</option>
        <option value="8">8</option>
			  <option value="10">10</option>
			</select>
    </div>
</div>

<input type="submit" name="submit" value="Gerar" class="btn-block btn btn-default">
	</div>
</div>
</form>
</div>
</div>
<div class="row">
  <form action="<?php echo url('/Fltbook/JumpSeat');?>" method="post" class="form-horizontal">
	<div class="col-md-6">
	<div class="box box-solid">
		<div class="box-header with-border">
			<h3 class="box-title"><strong>JumpSeat</strong></h3>
			<div class="pull-right box-tools">
				<span class="label label-success">Ativo</span>
			</div>
		</div>
		<div class="box-body">
      <div class="col-sm-5 control-label">Saldo atual: v<?php echo FinanceData::FormatMoney(Auth::$userinfo->totalpay); ?></div>
      <div class="form-group">
        <div class="col-sm-12">
          <div id="errors"></div>
      <select class="form-control" name="depicao" onchange="calculate_transfer(this.value)">
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
              </div>
              </div>
              <div class="text-center"><div id="jump_purchase_cost"></div></div>
                <input type="submit" id="purchase_button" value="Confirmar" class="btn btn-info" />
          </form>
</div>
</div>
</div>
<div class="col-md-6">
<div class="box box-solid">
  <div class="box-header with-border">
    <h3 class="box-title"><i class="fa fa-chevron-up"></i> <strong>Informação</strong> da tripulação</h3>
  </div>
  <div class="box-body">
    <div class="well">
      <?php echo $last_name->name;?>
      <br>
      Pilot name: <?php echo Auth::$userinfo->firstname;?> <?php echo Auth::$userinfo->lastname;?>
      <br>
      ID: <?php echo Auth::$userinfo->code;?><?php echo Auth::$userinfo->pilotid;?>
      <br>
      HUB: <?php echo Auth::$userinfo->hub;?>
    </div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="box box-solid">
  <div class="box-header with-border">
    <h3 class="box-title"><i class="fa fa-chevron-up"></i> <strong>Informações</strong> do Aeroporto</h3>
  </div>
  <div class="box-body">
    <strong>METAR</strong> <?php
$localAtual = FltbookData::getLocation(Auth::$userinfo->pilotid)->arricao;
$metar = $_POST['metar'];
$url = 'http://metar.vatsim.net/'.$localAtual.'';
$page = file_get_contents($url);
echo $page;
?>
<hr>
<br>
<h4><strong>NOTAMs</strong></h4>
<br>
<table class="table table-bordered table-striped table-hover">
    <thead>
        <tr>
            <th>Data</th>
            <th>Nome</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php MainController::Run('Notam', 'MostraNotam', 100); ?>
    </tbody>
</table>
</div>
</div>
</div>
</div>
</section>
<script type="text/javascript">
function calculate_transfer(arricao) {
  var distancediv = $('#distance_travelling')[0];
  var costdiv     = $('#jump_purchase_cost')[0];
  var errorsdiv     = $('#errors')[0];
  var baseurl = "https://nortesulvirtual.com/beta"
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
