        <?php
    $data = date('D');
    $mes = date('M');
    $dia = date('d');
    $ano = date('Y');
    
    $semana = array(
        'Sun' => 'Domingo', 
        'Mon' => 'Segunda-Feira',
        'Tue' => 'Terca-Feira',
        'Wed' => 'Quarta-Feira',
        'Thu' => 'Quinta-Feira',
        'Fri' => 'Sexta-Feira',
        'Sat' => 'Sábado'
    );
    
    $mes_extenso = array(
        'Jan' => 'Janeiro',
        'Feb' => 'Fevereiro',
        'Mar' => 'Marco',
        'Apr' => 'Abril',
        'May' => 'Maio',
        'Jun' => 'Junho',
        'Jul' => 'Julho',
        'Aug' => 'Agosto',
        'Nov' => 'Novembro',
        'Sep' => 'Setembro',
        'Oct' => 'Outubro',
        'Dec' => 'Dezembro'
    );
  ?>
  <?php
   date_default_timezone_set("America/Sao_Paulo");
    $hr = date("H");
    if($hr >= 12 && $hr<18) {
    $resp = "Boa tarde";}
    else if ($hr >= 0 && $hr <12 ){
    $resp = "Bom dia";}
    else {
    $resp = "Boa noite";}
  ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
		<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Olá <?php echo $userinfo->firstname ?>, bem vindo de volta à NorteSul.</h4>
                <?php echo $resp?>, hoje é <?php  echo $semana["$data"] . ", {$dia} de " . $mes_extenso["$mes"] . " de {$ano}"; ?>
              </div>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">	 
		  <!--<div class="callout callout-warning callout-dismissable" role="alert">
             <b><center>O Sistema da NorteSul Poderá Passar por instabilidades no dia de hoje, pois as rotas serão atualizadas segundo o AIRAC<p>Agradecemos a compreensão</p><p>Staff Team.</p></center></b>
          </div>-->
		<div class="row">
		  <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3><?php echo $pilotcode; ?></h3>
			  
                <p><?php echo Auth::$userinfo->rank;?></p>
              </div>
              <div class="icon">
                <i class="fa fa-user"></i>
              </div>
            </div>
          </div>
		  <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-blue">
              <div class="inner">
                <h3><?php echo $pilot->totalflights; ?></h3>
			  
                <p>Voos</p>
              </div>
              <div class="icon">
                <i class="fa fa-bar-chart"></i>
              </div>
            </div>
          </div>
		  <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3><?php echo $pilot->totalhours; ?></h3>
			  
                <p>Horas Voadas</p>
              </div>
              <div class="icon">
                <i class="fa fa-plane"></i>
              </div>
            </div>
          </div>
		  <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-maroon">
              <div class="inner">
                <h3><?php echo StatsData::TotalFlightsToday(); ?></h3>
			  
                <p>Voos Hoje</p>
              </div>
              <div class="icon">
                <i class="fa fa-globe"></i>
              </div>
            </div>
          </div>
        </div><!-- /.row -->
		<script>
                    function reload() {
                      location.reload();
                    }
                  </script>
        <!-- ACARS Map -->
            <div class="row">
                <div class="col-md-12 ">
                    <div class="box box-default">
                        <div class="box-header with-border">
                            <i class="fa fa-map"></i>

                            <h3 class="box-title">Mapa ACARs NorteSul Virtual</h3>
							<div class="pull-right"><a href="javascript::void(0);" onclick="reload();"><i class="fa fa-refresh"></i></a></div>
                        </div>
                        
                        <div class="body">
                            <?php require "acarsmap.php" ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# ACARS Map -->		
        <div class="row">
          <div class="col-md-8 col-sm-6">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom box box-default with-border">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Notícias</a></li>
              <li><a href="#tab_2" data-toggle="tab">NOTAMs</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                   <?php MainController::Run('News', 'ShowNewsFront', 5); ?>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                   <?php MainController::Run('Notam', 'MostraNotam', 5); ?>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
         </div>
		 <div class="col-md-4 col-sm-6">
            <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-certificate"></i>

              <h3 class="box-title">Awards</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			  <?php
                    if(!$allawards)
                    {
                      echo '              <div class="alert alert-danger">
                <h4><i class="icon fa fa-warning"></i>Nenhuma Award Encontrada!</h4>
                Você ainda não possui nenhuma award, participe de algum evento para receber.
              </div>';
                    }
                    else
                    {                              
                                                        
                  ?>
                   <ul>
                    <?php foreach($allawards as $award){ ?>
                    <img src="<?php echo $award->image?>" alt="<?php echo $award->descrip?>" width="100px" height="50px" />
                  </ul>  
                  <?php } ?>
                  <?php } ?>
            </div>
            <!-- /.box-body -->
          </div>
         </div>
        </div>
		<div class="row">
           		 <div class="col-md-6 col-sm-12">
            <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-paper-plane"></i>

              <h3 class="box-title">Focus Airport</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<?php Template::Show('focusairport/index.php'); ?>
							</div>
							</div>
							</div>
			<div class="col-md-6 col-sm-12">
            <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-camera"></i>

              <h3 class="box-title">Screenshot da Nossa Galeria</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                  <?php MainController::Run('Screenshots','show_random_screenshot'); ?>
            </div>
            <!-- /.box-body -->
          </div>
         </div>
        </div>
        <div class="row">
           		 <div class="col-md-8 col-sm-6">
            <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-certificate"></i>

              <h3 class="box-title">Canais de Comunicação</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               <div class="table-scrollable">
								<table class="table table-bordered table-condensed table-hover">
								<thead>
								<tr>
									<th>
										 Plataforma
									</th>
									<th>
										 Link para entrar
									</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										 <i class="fa fa-whatsapp"></i> Whatsapp
									</td>
									<td>
									  <a href="https://chat.whatsapp.com/LNDX7wHGehGGoYRWP7CX2t" class="label label-success">Entrar &raquo;</a>
									</td>
								</tr>
								<tr>
									<td>
										 <i class="fa fa-discord"></i> Discord
									</td>
									<td>
<a class="label label-info" href="https://discord.gg/vZRSK75">Entrar no Servidor</a> 
									</td>
								</tr>
								<tr>
									<td>
										 <i class="fa fa-comments"></i> Fórum
									</td>
									<td>
									  <span class="label label-info">Em breve</span>
									</td>
								</tr>
								</tbody>
								</table>
							</div>
							</div>
							</div>
							</div>
			<div class="col-md-4 col-sm-6">
            <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-users"></i>

              <h3 class="box-title">Novos Pilotos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                  <?php MainController::Run('Pilots', 'RecentFrontPage', 5); ?>
            </div>
            <!-- /.box-body -->
          </div>
         </div>
        </div>		
    </section>
    <!-- /.content -->