<?php
/*
* phpVMS Module: Random Itinerary Builder
* Coding by Jeffrey Kobus
* www.fs-products.net
* Verion 1.3
* Dated: 03/22/2011
* Edited By Arthur Hetem 28/07/2018 V1.0D
*/
?> 			
<section class="content container-fluid">
			<div class="row">
			<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Gerador de Escalas</h3>
            </div>
			<div class="box-body table-responsive">
                       <table class="table" border="0" cellspacing="0">
                                            <table class="table table-hover table-light">
                                                <thead>
                                                    <tr>
                                                        <th><center> <strong>Airline</strong> </th>
                                                        <th> <center><strong>N&uacutemero do Voo</strong> </th>
                                                        <th> <center><strong>Aeronave</strong> </th>
                                                        <th> <center><strong>Decolagem</strong> </th>
                                                        <th> <center><strong>Pouso</strong> </th>
                                                        <th> <center><strong>Dura&ccedil&atildeo</strong> </th>
                                                    </tr>
                                                </thead>
												<tbody>
												  <?php
$pilotid = Auth::PilotID();
$user = PilotData::getPilotData($pilotid);

if (!$schedules)
    { ?> 
		<span class="badge badge-roundless badge-danger">Nenhuma Rota Encontrada!</span>
		<?php 
	}
else
    { ?>
		<?php foreach($schedules as $result) 
		{ 			
			$info = OperationsData::getAircraftByReg($result->registration);			
		?>
	<tr>
		<td><?php echo $result->code;?></td>        
        <td><?php echo $result->code.$result->flightnum;?></td>		
		<td><?php echo $info->registration;?></td>		      
        <td><?php echo $result->depicao;?></td>        
      	<td><?php echo $result->arricao;?></td>      	
      	<td><?php echo $result->flighttime;?></td>      	
  </tr>
<?php 	}
	} ?>
												</tbody>		
<form name="bidAll" id="bidAll" action="<?php echo SITE_URL?>/index.php/randomflights/bidAll" method="post">

		
	<input type="hidden" name="count" value = "<?php echo count($schedules);?>"/>
	<input type="hidden" name="pilotid" value="<?php echo $pilotid;?>"/>
	<p>
                                            <td>
                                                <div class="form-group">
                                                <div class="col-md-9">
                                                <a href="<?php echo SITE_URL?>/index.php/randomflights" class="btn btn-sm red"> Nova Escala
                                                                            <i class="fa fa-edit"></i>
                                                                        </a>
                                                </td>
                                                <td>
                                                <div class="form-group">
                                                <div class="col-md-9">
                                                <button input type="submit" name="submit" value="Gerar Escala" type="button" class="btn purple mt-ladda-btn ladda-button btn-outline" data-style="slide-right" data-spinner-color="#333">
                                                <span class="ladda-label">Reservar</span>
                                                </button>
                                                </td>
            </table>                        
        </div>
        </div>
        </div>
        </div>
		        </div>
        </div>
        </div>
</div>		
</div>				
    </section>
    <!-- /.content -->			