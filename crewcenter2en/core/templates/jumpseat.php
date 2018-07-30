	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
		<small><span class="badge badge-roundless badge-success">Versão Alpha do Despacho Operacional</span></small>
			</h3>
            <hr>
			<!-- END PAGE HEADER-->
			<!-- BEGIN DASHBOARD STATS -->
			<div class="row">
                   <h2>JumpSeat</h2>
		        <div class="box-body">
		            <span class="alert alert-success"><b>Local Atual: </b><?php echo $jumpseatdep; ?></span>
					<p> </p>
				     &nbsp;
                    <div class="form-group">
                    	<form method="post" id="jumpseat" action="<?php echo url('/jumpseat/fly'); ?>">
							<div class="row">
								<div class="col-xs-6">
									<label>Destino</label>
									<select id="destination" name="dest" class="form-control">
										<option selected disabled>Selecione o Aeroporto</option>
										<?php
											foreach($airports as $airport)
											{
												echo '<option price="'.round(OperationsData::getAirportDistance($jumpseatdep, $airport->icao)*$modifier).'"  value="'.$airport->icao.'">'.$airport->icao.' ('.$airport->name.')</option>';
											}
										?>
									</select>
								</div>
								<div class="col-xs-6">
										<label>Preço</label>
									<div class="input-group">
										<input type="text" id="price" name="price" class="form-control" readonly>
										<span class="input-group-addon"><i class="fa fa-dollar"></i></span>
									</div>
								</div>
				             </div>
							<input type="hidden" name="departfrom" value="<?php echo $jumpseatdep; ?>" >
							<input type="hidden" name="pilot" value="<?php echo Auth::$userinfo->pilotid; ?>" >
							<input type="hidden" name="balance" value="<?php echo Auth::$userinfo->totalpay; ?>" >
							<input type="hidden" name="action" value="fly" >
						</form>

                    </div> 
		        </div>
		        <div class="box-footer">
                	<button type="submit" class="btn btn-primary" form="jumpseat">Voar!</button>
              	</div>
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
			</div>
			<!-- END DASHBOARD STATS -->
			<div class="clearfix">
			</div>
			
<script type="text/javascript">
	$('select').on('change', function() {
	  $('#price').val($('option:selected', this).attr('price'));
	})
</script>