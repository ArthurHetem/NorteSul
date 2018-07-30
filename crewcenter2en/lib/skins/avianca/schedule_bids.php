<?php if(!defined('IN_PHPVMS') && IN_PHPVMS !== true) { die(); } ?>
   <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Voos Reservados
        <small>CrewCenter <span class="label label-info">Versão Alpha</span></small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
       
		<div class="row">
		   <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Voos Reservados</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-bordered">
                <tbody><tr>
                  <th>Airline</th>
                  <th>Número do Voo</th>
                  <th>DEP<i class="fa fa-plane"></i>ARR</th>
                  <th>Aeronave</th>
                  <th>Horario de Partida</th>
				  <th>Horario de Chegada</th>
				  <th>Distância</th>
				  <th>Links Uteis</th>
                </tr>
				<?php
                   foreach($bids as $bid)
                      {
                ?>
				<tr id="bidbid<?php echo $bid->bidid ?>">
				   <td><img src="<?php echo SITE_URL; ?>/lib/images/airlinelogos/<?php echo $bid->code;?>.png" alt="<?php echo $bid->code;?>"></td>
				   <td><?php echo $bid->code . $bid->flightnum; ?></td>
	               <td align="center"><?php echo $bid->depicao; ?> to <?php echo $bid->arricao; ?></td>
	               <td align="center"><?php echo $bid->aircraft; ?> (<?php echo $bid->registration?>)</td>
	               <td><?php echo $bid->deptime;?></td>
	               <td><?php echo $bid->arrtime;?></td>
	               <td><?php echo $bid->distance;?></td>
	               <td>
		              <p><a href="<?php echo url('/schedules/brief/'.$bid->id);?>"><button type="button" class="btn btn-success">
                Navegação SITA
              </button></a></p><br />
					  <p><a href="#"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-default">
                Cancelar Reserva
              </button></a></p>
		           </td>
				<?php } ?>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        </div><!-- /.row -->
          <div class="modal fade" id="modal-default" style="display: none;">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Para Cancelar a Reserva, Siga os Passos Abaixo</h4>
              </div>
              <div class="modal-body">
                <p>1- Acesse o HelpDesk No Menu</p>
				<p>2- Envie Um Ticket Para o Departamento Operacional, Informando a Reserva que Deseja Cancelar e Sua Matrícula.
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" class="close" data-dismiss="modal" aria-label="Close">Ok</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>		
    </section>
    <!-- /.content -->