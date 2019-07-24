<?php if(!defined('IN_PHPVMS') && IN_PHPVMS !== true) { die(); } ?>
<section class="content-header bg-white espaca">
    <div class="pull-right"><i class="fa fa-plane fa-4x text-muted"></i></div>
    <h1><strong>Logbook</strong></h1>
    <h1><small>Recursos para os tripulantes | NorteSul Virtual &copy;
            <?php echo date("Y");?></small>
        <br>
</section>

<section class="content container-fluid">
  <div class="row">
        <div class="col-md-12">
          <div class="box box-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-white">
                  <h4 class="widget-user-username text-center"><strong>NorteSul Virtual</strong></h4>
                  <h5 class="widget-user-desc text-center">
                      Logbook estilo ICAO
                  </h5>
              </div>
              <div class="box-footer">
                  <hr>
                  <h4 class="text-center"><small>Pertence a</small></h4>
                  <h4 class="text-center"><strong><?php echo Auth::$userinfo->firstname;?> <?php echo Auth::$userinfo->lastname;?></strong></h4>
                  <hr>
                  <h4 class="text-center"><small>Aeroporto base</small></h4>
                  <h4 class="text-center"><strong><?php echo Auth::$userinfo->hub;?></strong></h4>
                  <hr>
                  <h4 class="text-center"><small>Total de horas registradas</small></h4>
                  <h4 class="text-center text-green"><strong><?php echo Auth::$userinfo->totalhours;?></strong></h4>
                  <hr>
                </div>
            </div>
        </div>
      </div>

      <div class="row">
            <div class="col-md-12">
              <div class="box box-solid">
                  <div class="box-header with-border">
                      <i class="fa fa-book"></i>
                      <h3 class="box-title">Voos <strong>realizados</strong></h3>
                  </div>
                  <div class="box-body table-responsive">
                    <?php
                    if(!$pirep_list) {
                      echo '<div class="alert alert-danger">Nenhum voo encontrado!</div>';
                      return;
                    }
                    ?>
                    <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th><h4 class="text-center"><strong>DATA DO VOO</strong></h4></th>
                      <th><h4 class="text-center"><strong>CALLSIGN</strong></h4></th>
                      <th><h4 class="text-center"><strong>DECOLAGEM</strong></h4></th>
                      <th><h4 class="text-center"><strong>POUSO</strong></h4></td>
                      <th><h4 class="text-center"><strong>TEMPO DE VOO</strong></h4></th>
                      <th></th>
                      <?php
                      // Only show this column if they're logged in, and the pilot viewing is the
                      //	owner/submitter of the PIREPs
                      if(Auth::LoggedIn() && Auth::$pilot->pilotid == $pilot->pilotid) {
                        echo '<th></th>';
                      }
                      ?>
                    </tr>
                    </thead>
                    <thead>
                    <tr>
                      <td align="center">(dd/mm/yyyy)</td>
                      <td align="center">XXX123</td>
                      <td align="center">(ICAO)</td>
                      <td align="center">(ICAO)</td>
                      <td align="center">(HH:MM)</td>
                      <th><h4 class="text-center"><strong>NOME DO PILOTO</strong></h4></th>
                      <?php
                      // Only show this column if they're logged in, and the pilot viewing is the
                      //	owner/submitter of the PIREPs
                      if(Auth::LoggedIn() && Auth::$pilot->pilotid == $pilot->pilotid) {
                        echo '<th><h4 class="text-center"><strong>OPÇÕES</strong></h4></th>';
                      }
                      ?>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach($pirep_list as $pirep) {
                    ?>
                    <tr>
                      <td align="center"><?php echo date(DATE_FORMAT, $pirep->submitdate); ?></td>
                      <td align="center"><?php echo $pirep->code . $pirep->flightnum; ?></td>
                      <td align="center"><?php echo $pirep->depicao; ?></td>
                      <td align="center"><?php echo $pirep->arricao; ?></td>
                        <td align="center"><?php echo $pirep->flighttime; ?></td>
                      <td align="center"><?php echo $pilot->firstname;?> <?php echo $pilot->lastname;?></td>
                      <?php
                      // Only show this column if they're logged in, and the pilot viewing is the
                      //	owner/submitter of the PIREPs
                      if(Auth::LoggedIn() && Auth::$pilot->pilotid == $pirep->pilotid) {
                        ?>
                      <td align="center">
                        <a href="<?php echo url('/pireps/view/'.$pirep->pirepid);?>" data-toggle="tooltip" title="REPORTE PÓS VOO" class="btn btn-default btn-xs"><i class="fa fa-eye"></i> RPV</a><br />
                      </td>
                      <?php
                      }
                      ?>
                    </tr>
                    <?php
                    }
                    ?>
                    </tbody>
                    </table>
                  </div>
              </div>
            </div>
          </div>
        </div>
    <!-- End container -->
    </section>
