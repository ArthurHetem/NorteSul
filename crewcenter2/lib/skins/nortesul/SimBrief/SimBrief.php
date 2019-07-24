<!-- Main content -->
	<section>
				<!-- Widget: user widget style 1 -->
				<div class="box box-widget widget-user">
					<!-- Add the bg color to the header using any of the bg-* classes -->
					<div class="widget-user-header bg-black" style="background: url('<?php echo SITE_URL;?>/lib/skins/nortesul/img/bg.png') center center;">
						<div class="bgfotos">
						<h2 class="text-center">NorteSul Virtual</h2>
						<h4 class="text-center">Folha de Briefing</h4>
					</div>
						<div class="widget-icon bg-black" style="margin-top: 45px; border: solid 2px white; margin-left: 46.5%;">
											<i class="fa fa-road img-circle" style="border: none;"></i>
									</div>
					</div>
					<div class="box-footer">
						<div class="row">
							<div class="col-sm-12">
								<h4 class="text-center">Gerado por SimBrief.com &copy; <?php echo date("Y");?></h4>
							</div>
							<!-- /.col -->
						</div>
						<!-- /.row -->
					</div>
				</div>
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
								<h2 class="text-center"><span class="label label-default"><?php echo (string) $info->general[0]->icao_airline.''.(string) $info->general[0]->flight_number; ?></span></h2>
								<h3 class="text-center"><?php setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo'); echo ucwords(strftime("%d %B %Y"));?></h3>
							</div>
							<div class="box-footer bg-black">
								<div class="row">
									<div class="col-sm-6">
										<div class="description-block">
											<h5 class="description-header">ETD</h5>
											<span class="description-text"><?php
						        $epoch = (string) $info->times[0]->sched_out;
						$dt = new DateTime("@$epoch");  // convert UNIX timestamp to PHP DateTime
						echo $dt->format('H:i'); // output = 2012-08-15 00:00:00
						       ?> UTC</span>
										</div>
										<!-- /.description-block -->
									</div>
									<!-- /.col -->
									<div class="col-sm-6">
										<div class="description-block">
											<h5 class="description-header">ETA</h5>
											<span class="description-text"><?php
						        $epoch = (string) $info->times[0]->est_on;
						$dt = new DateTime("@$epoch");  // convert UNIX timestamp to PHP DateTime
						echo $dt->format('H:i'); // output = 2012-08-15 00:00:00
						       ?> UTC</span>
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
					<div class="col-md-4">
							<div class="box box-success box-solid levanta">
								<div class="box-header">
									<h3 class="box-title"><strong>Aeroporto</strong> de Decolagem</h3>
								</div>
								<!-- /.box-header -->
								<div class="box-body">
									<h3><strong><?php echo ((string) $info->origin[0]->icao_code); ?></strong> RWY<?php echo ((string) $info->origin[0]->plan_rwy);?> <p><small><?php echo (string) $info->origin[0]->name; ?></small></p></h3>
								</div>
								<!-- /.box-body -->
							</div>
							<!-- /.box -->
						</div>
						<div class="col-md-4">
								<div class="box box-default box-solid levanta">
									<div class="box-header">
										<h3 class="box-title"><strong>Aeroporto</strong> Alternativo</h3>
									</div>
									<!-- /.box-header -->
									<div class="box-body">
										<h3><strong><?php echo ((string) $info->alternate[0]->icao_code);?></strong> RWY<?php echo ((string) $info->alternate[0]->plan_rwy);?> <p><small><?php echo (string) $info->alternate[0]->name; ?></small></p></h3>
									</div>
									<!-- /.box-body -->
								</div>
								<!-- /.box -->
							</div>
							<div class="col-md-4">
									<div class="box box-danger box-solid levanta">
										<div class="box-header">
											<h3 class="box-title"><strong>Aeroporto</strong> de Pouso</h3>
										</div>
										<!-- /.box-header -->
										<div class="box-body">
											<h3><strong><?php echo ((string) $info->destination[0]->icao_code);?></strong> RWY<?php echo ((string) $info->destination[0]->plan_rwy);?> <p><small><?php echo (string) $info->destination[0]->name; ?></small></p></h3>
										</div>
										<!-- /.box-body -->
									</div>
									<!-- /.box -->
								</div>
				</div>
				<div class="row">
					<div class="col-md-4">
							<div class="box box-solid">
								<div class="box-header with-border">
									<h3 class="box-title"><strong>Plano de voo</strong> ATC</h3>
								</div>
								<!-- /.box-header -->
								<div class="box-body">
									<div class="alert alert-info">Insira isso no seu plano de voo da IVAO/VATSIM, no campo Remarks (Item 18)</div>
									<div class="well"><?php echo ((string) $info->atc[0]->flightplan_text);?></div>
									<?php echo ((string) $info->vatsim_prefile[0]);?>
									<p style="margin-top: 20px;">
										<a href="<?php echo ((string) $info->files->directory);?><?php echo ((string) $info->files->pdf->link);?>" class="btn btn-default">Baixar PDF</a>
									</p>
								</div>
								<!-- /.box-body -->
							</div>
							<!-- /.box -->
						</div>
						<div class="col-md-8">
								<div class="box box-solid">
									<div class="box-header with-border">
										<h3 class="box-title"><strong>Informações</strong> da Tripulação</h3>
									</div>
									<!-- /.box-header -->
									<div class="box-body table-responsive">
										<table class="table table-hover">
											<tr>
												<td>Piloto no Comando</td>
												<td>Piloto Monitorando</td>
												<td>Tripulante (líder)</td>
												<td>Tripulantes (2+1)</td>
												<td>HUB</td>
												<td>ID da Tripulação</td>
											</tr>
											<tr>
												<td><?php echo ((string) $info->crew[0]->cpt);?></td>
												<td><?php echo ((string) $info->crew[0]->fo);?></td>
												<td><?php echo ((string) $info->crew[0]->pu);?></td>
												<td><?php echo ((string) $info->crew[0]->fa);?>,<?php echo ((string) $info->crew[0]->fa[1]);?>,<?php echo ((string) $info->crew[0]->fa[2]);?></td>
												<td><?php echo Auth::$userinfo->hub ?></td>
												<td><?php echo (string) $info->general[0]->icao_airline.''.(string) $info->general[0]->flight_number; ?></td>
											</tr>
										</table>
									</div>
									<!-- /.box-body -->
								</div>
								<!-- /.box -->
							</div>
							<div class="col-md-8">
									<div class="box box-solid">
										<div class="box-header with-border">
											<h3 class="box-title"><strong>Outras</strong> Informaçõe</h3>
										</div>
										<!-- /.box-header -->
										<div class="box-body table-responsive">
											<table class="table">
												<tr>
													<td>Distância: <?php echo ((string) $info->general[0]->air_distance);?>(nm)</td>
													<td>EET: <?php
								        $epoch = (string) $info->times[0]->est_block;
								$dt = new DateTime("@$epoch");  // convert UNIX timestamp to PHP DateTime
								echo $dt->format('H:i'); // output = 2012-08-15 00:00:00
								       ?><br> <small><?php if ($dt < 0200){ $resultado = "<div class='label label-success'>SHORT HAUL</div>";}else if ($dt < 0700){ $resultado = "<div class='label label-info'>MEDIUM HAUL</div>";}else if ($dt < 1000){ $resultado = "<div class='label label-warning'>LONG HAUL</div>";}else {$resultado = "<div class='label label-danger'>ULTRA LONG HAUL</div>";}
											 echo $resultado; ?></small></td>
													<td>Aeronave: <?php echo ((string) $info->aircraft[0]->icaocode); ?>(<?php echo ((string) $info->aircraft[0]->reg); ?>)</td>
													<td>Formato do Download: <br> <select name="download" onchange="download(this.value)" class="form-control">
													<option>Selecionar Formato</option>
													 <option value="<?php echo $info->files->pdf->link; ?>"><?php echo $info->files->pdf->name; ?></option>
													<?php
													  foreach($info->files->file as $file)
													                {
													?>

													<option value="<?php echo $file->link; ?>"><?php echo $file->name; ?></option>
													                        <?php
													                    }
													    ?>
													                        </select></td>
													<td><?php echo (string) $info->general[0]->icao_airline.''.(string) $info->general[0]->flight_number; ?></td>
												</tr>
											</table>
										</div>
										<!-- /.box-body -->
									</div>
									<!-- /.box -->
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
										<div class="box box-solid">
											<div class="box-header with-border">
												<h3 class="box-title"><strong>Detalhes</strong> do OFP</h3>
											</div>
											<!-- /.box-header -->
											<div class="box-body">
												Despachante: <?php echo (string) $info->crew[0]->dx; ?>
												<br>
												Horário do Despacho: <?php
											$epoch = (string) (string) $info->params[0]->time_generated;
							$dt = new DateTime("@$epoch");  // convert UNIX timestamp to PHP DateTime
							echo $dt->format('H:i:s d/m/Y'); // output = 2012-08-15 00:00:00
										 ?>
										 <br>
										 Remarks: NENHUMA NOTA DO DESPACHANTE
											</div>
											<!-- /.box-body -->
										</div>
										<!-- /.box -->
									</div>
									<div class="col-md-8">
											<div class="box box-solid">
												<div class="box-header with-border">
													<h3 class="box-title"><strong>Detalhes</strong> da Rota</h3>
													<div class="pull-right box-tools">
			                        Ciclo do AIRAC: <span class="label label-success"><?php echo ((string) $info->params[0]->airac);?></span>
			                    </div>
												</div>
												<!-- /.box-header -->
												<div class="box-body">
													<div class="well well-sm"><?php echo ((string) $info->general[0]->route);?></div>
													<table class="table">
														<tr>
															<td>Distância em Círculo: <?php echo ((string) $info->general[0]->gc_distance);?> nm</td>
															<td>Queima Total: <?php echo ((string) $info->general[0]->total_burn);?></td>
															<td>Cost Index: <?php echo ((string) $info->general[0]->costindex);?></td>
														</tr>
														<tr>
															<td>Distância no Ar: <?php echo ((string) $info->general[0]->air_distance);?> nm</td>
															<td>Nível de Cruzeiro Inicial: <?php echo ((string) $info->atc[0]->initial_alt);?>00 ft</td>
														</tr>
												</table>
												<div class="alert alert-warning"><b>Atenção!</b><br>
Se o seu pacote de briefing utilizar um AIRAC desatualizado, por favor pense em atualiza-lo em Simbrief.com. A NorteSul Virtual não será responsável pela utilização de um cíclo AIRAC antigo, porém não existe nenhum problema em seu uso.</div>
												</div>
												<!-- /.box-body -->
											</div>
											<!-- /.box -->
										</div>
				</div>
				<div class="row">
					<div class="col-md-4">
							<div class="box box-solid">
								<div class="box-header with-border">
									<h3 class="box-title"><strong>Peso e Balanceamento</strong> (calculado de acordo com a política da companhia)</h3>
								</div>
								<!-- /.box-header -->
								<div class="box-body">
									Passageiros: <?php echo ((string) $info->weights[0]->pax_count);?>
									<br>
									Carga: <?php echo ((string) $info->weights[0]->cargo);?>
									<br>
									Operating Empty Weight (OEW): <?php echo ((string) $info->weights[0]->oew);?>
									<br>
									Payload: <?php echo ((string) $info->weights[0]->payload);?>
									<br>
									Estimated Zero Fuel Weight: <?php echo ((string) $info->weights[0]->est_zfw);?>
									<br>
									Max Zero Fuel Weight: <?php echo ((string) $info->weights[0]->max_zfw);?>
									<br>
									Maximum Take Off Weight: <?php echo ((string) $info->weights[0]->max_tow);?>
									<br>
									Maximum Structural Take off Weight: <?php echo ((string) $info->weights[0]->max_tow_struct);?>
									<br>
									Take off weight Limit code: <?php echo ((string) $info->weights[0]->tow_limit_code);?>
									<br>
									Estimated Landing Weight: <?php echo ((string) $info->weights[0]->est_ldw);?>
									<br>
									Maximum Landing Weight: <?php echo ((string) $info->weights[0]->max_ldw);?>
									<br>
									Estimated Ramp Weight: <?php echo ((string) $info->weights[0]->est_ramp);?>
								</div>
								<!-- /.box-body -->
							</div>
							<!-- /.box -->
						</div>
				</div>
				<div class="row">
					<div class="col-md-6">
							<div class="box box-solid">
								<div class="box-header with-border">
									<h3 class="box-title"><strong>Rota</strong></h3>
								</div>
								<!-- /.box-header -->
								<div class="box-body">
									<center><a class="plane-seat-map hidden-sm js-fb" href="http://www.simbrief.com/ofp/uads/<?php echo ((string) $info->images->map[0]->link);?>">
									<img border="0" alt="" src="http://www.simbrief.com/ofp/uads/<?php echo ((string) $info->images->map[0]->link);?>" width="80%">
									</a></center>
								</div>
								<!-- /.box-body -->
							</div>
							<!-- /.box -->
						</div>
						<div class="col-md-6">
								<div class="box box-solid">
									<div class="box-header with-border">
										<h3 class="box-title"><strong>SigWX</strong> 1 de 2</h3>
									</div>
									<!-- /.box-header -->
									<div class="box-body">
										<center><a class="plane-seat-map hidden-sm js-fb" href="http://www.simbrief.com/ofp/uads/<?php echo ((string) $info->images->map[1]->link);?>">
										<img border="0" alt="" src="http://www.simbrief.com/ofp/uads/<?php echo ((string) $info->images->map[1]->link);?>" width="80%">
										</a></center>
									</div>
									<!-- /.box-body -->
								</div>
								<!-- /.box -->
							</div>
				</div>
				<div class="row">
					<div class="col-md-6">
							<div class="box box-solid">
								<div class="box-header with-border">
									<h3 class="box-title"><strong>SigWX</strong> 2 de 2</h3>
								</div>
								<!-- /.box-header -->
								<div class="box-body">
									<center><a class="plane-seat-map hidden-sm js-fb" href="http://www.simbrief.com/ofp/uads/<?php echo ((string) $info->images->map[2]->link);?>">
									<img border="0" alt="" src="http://www.simbrief.com/ofp/uads/<?php echo ((string) $info->images->map[2]->link);?>" width="80%">
									</a></center>
								</div>
								<!-- /.box-body -->
							</div>
							<!-- /.box -->
						</div>
						<div class="col-md-6">
								<div class="box box-solid">
									<div class="box-header with-border">
										<h3 class="box-title"><strong>UAD</strong> 1 de 3</h3>
									</div>
									<!-- /.box-header -->
									<div class="body">
										<center><a class="plane-seat-map hidden-sm js-fb" href="http://www.simbrief.com/ofp/uads/<?php echo ((string) $info->images->map[3]->link);?>">
										<img border="0" alt="" src="http://www.simbrief.com/ofp/uads/<?php echo ((string) $info->images->map[3]->link);?>" width="80%">
										</a></center>
									</div>
									<!-- /.box-body -->
								</div>
								<!-- /.box -->
							</div>
				</div>
				<div class="row">
					<div class="col-md-6">
							<div class="box box-solid">
								<div class="box-header with-border">
									<h3 class="box-title"><strong>UAD</strong> 2 de 3</h3>
								</div>
								<!-- /.box-header -->
								<div class="box-body">
									<center><a class="plane-seat-map hidden-sm js-fb" href="http://www.simbrief.com/ofp/uads/<?php echo ((string) $info->images->map[4]->link);?>">
									<img border="0" alt="" src="http://www.simbrief.com/ofp/uads/<?php echo ((string) $info->images->map[4]->link);?>" width="80%">
									</a></center>
								</div>
								<!-- /.box-body -->
							</div>
							<!-- /.box -->
						</div>
						<div class="col-md-6">
								<div class="box box-solid">
									<div class="box-header with-border">
										<h3 class="box-title"><strong>UAD</strong> 3 de 3</h3>
									</div>
									<!-- /.box-header -->
									<div class="body">
										<center><a class="plane-seat-map hidden-sm js-fb" href="http://www.simbrief.com/ofp/uads/<?php echo ((string) $info->images->map[5]->link);?>">
										<img border="0" alt="" src="http://www.simbrief.com/ofp/uads/<?php echo ((string) $info->images->map[5]->link);?>" width="80%">
										</a></center>
									</div>
									<!-- /.box-body -->
								</div>
								<!-- /.box -->
							</div>
				</div>
				<div class="row">
					<div class="col-md-6">
							<div class="box box-solid">
								<div class="box-header with-border">
									<h3 class="box-title"><strong>Perfil</strong> Vertical</h3>
								</div>
								<!-- /.box-header -->
								<div class="box-body">
									<center><a class="plane-seat-map hidden-sm js-fb" href="http://www.simbrief.com/ofp/uads/<?php echo ((string) $info->images->map[6]->link);?>">
									<img border="0" alt="" src="http://www.simbrief.com/ofp/uads/<?php echo ((string) $info->images->map[6]->link);?>" width="80%">
									</a></center>
									<center><a class="plane-seat-map hidden-sm js-fb" href="http://www.simbrief.com/ofp/uads/<?php echo ((string) $info->images->map[7]->link);?>">
									<img border="0" alt="" src="http://www.simbrief.com/ofp/uads/<?php echo ((string) $info->images->map[7]->link);?>" width="80%">
									</a></center>
								</div>
								<!-- /.box-body -->
							</div>
							<!-- /.box -->
						</div>
				</div>
    </section>
    <!-- /.content -->
