<section class="content-header bg-white espaca">
<div class="pull-right"><i class="fa fa-trophy fa-4x text-muted"></i></div>
<h1><strong>Melhores</strong> da Companhia</h1>
<h1><small>Sistema de Gratificação de Pilotos | NorteSul Virtual &copy; <?php echo date("Y");?></small>
<br>
</section>

<section class="content container-fluid">
	<div class="row">
        <div class="col-md-12">
					<div class="box box-solid">
						<div class="box-header with-border">
							<h3 class="box-title"><strong>Lista</strong> dos Melhores</h3>
						</div>
						<div class="box-body">
					<!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Hoje</a></li>
              <li><a href="#tab_2" data-toggle="tab">Essa Semana</a></li>
              <li><a href="#tab_3" data-toggle="tab">Esse Mês</a></li>
							<li><a href="#tab_4" data-toggle="tab">Todo o Tempo</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
								<h3>Hoje</h3>
                <h3><span class="label label-primary">Lucro</span></h3>
								<br>
								<?php Template::show('toppilot/toppilotday.php');?>
								<hr>
								<h3><span class="label label-warning">Distância</span></h3>
								<br>
								<?php Template::show('toppilot/toppilotdaybd.php');?>
								<hr>
								<h3><span class="label label-success">Tempo de voo</span></h3>
								<br>
								<?php Template::show('toppilot/toppilotdaybft.php');?>
								<hr>
								<h3><span class="label label-info">Landing Rate</span></h3>
								<br>
								<?php Template::show('toppilot/toppilotlandingday.php');?>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
								<h3>Essa Semana</h3>
                <h3><span class="label label-primary">Lucro</span></h3>
								<br>
								<?php Template::show('toppilot/toppilotweek.php');?>
								<hr>
								<h3><span class="label label-warning">Distância</span></h3>
								<br>
								<?php Template::show('toppilot/toppilotweekbd.php');?>
								<hr>
								<h3><span class="label label-success">Tempo de voo</span></h3>
								<br>
								<?php Template::show('toppilot/toppilotweekbft.php');?>
								<hr>
								<h3><span class="label label-info">Landing Rate</span></h3>
								<br>
								<?php Template::show('toppilot/toppilotlandingweek.php');?>
              </div>
              <!-- /.tab-pane -->
							<div class="tab-pane" id="tab_3">
								<h3>Esse Mês</h3>
                <h3><span class="label label-primary">Lucro</span></h3>
								<br>
								<?php Template::show('toppilot/toppilotmonth.php');?>
								<hr>
								<h3><span class="label label-warning">Distância</span></h3>
								<br>
								<?php Template::show('toppilot/toppilotmonthbd.php');?>
								<hr>
								<h3><span class="label label-success">Tempo de voo</span></h3>
								<br>
								<?php Template::show('toppilot/toppilotmonthbft.php');?>
								<hr>
								<h3><span class="label label-info">Landing Rate</span></h3>
								<br>
								<?php Template::show('toppilot/toppilotlandingmonth.php');?>
              </div>
              <!-- /.tab-pane -->
							<div class="tab-pane" id="tab_4">
								<h3>Todo o Tempo</h3>
                <h3><span class="label label-primary">Lucro</span></h3>
								<br>
								<?php Template::show('toppilot/toppilotalltime.php');?>
								<hr>
								<h3><span class="label label-warning">Distância</span></h3>
								<br>
								<?php Template::show('toppilot/toppilotalltimebd.php');?>
								<hr>
								<h3><span class="label label-success">Tempo de voo</span></h3>
								<br>
								<?php Template::show('toppilot/toppilotalltimebft.php');?>
								<hr>
								<h3><span class="label label-info">Landing Rate</span></h3>
								<br>
								<?php Template::show('toppilot/toppilotalltimebl.php');?>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
		</div>
	</div>
