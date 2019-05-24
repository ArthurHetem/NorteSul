<section class="content-header bg-white espaca">
    <div class="pull-right"><i class="fa fa-plane fa-4x text-muted"></i></div>
    <h1><strong>Voos reservados</strong></h1>
    <h1><small>Operações de voos | NorteSul Virtual &copy;
            <?php echo date("Y");?></small>
        <br>
</section>
   <section class="content container-fluid">
     <div class="alert alert-warning">
       <strong>Aviso!</strong>
       <br>
       O bid será deletado automaticamente se o voo não for realizado em até 48h após sua reserva.
     </div>
		<div class="row">
		   <div class="col-xs-12">
          <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-clipboard"></i>
              <h3 class="box-title">Voos <strong>Reservados</strong></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table class="table table-bordered text-center">
                <tbody><tr>
                  <th><h4>Voo #</h4></th>
                  <th><h4>Rota</h4></th>
                  <th><h4>Aeronave</h4></th>
                  <th><h4>Horário de partida</h4></th>
				          <th><h4>Horário de chegada</h4></th>
				          <th><h4>Operação</h4></th>
                  <th><h4>Rota</h4></th>
                  <th><h4>Status do OFP</h4></th>
				          <th><h4>Opções</h4></th>
                </tr>
				<?php
                   foreach($bids as $bid)
                      {
                ?>
                <?php
                     $numeroVoo = strlen($bid->flightnum);
                     if ($numeroVoo < 4){
                       $resultaVoo = "<div class='text-blue'>Internacional</div>";
                     }else{
                       $resultaVoo = "<div class='text-yellow'>Nacional</div>";
                     }

                     $contaRota = strlen($bid->route);

                     if ($contaRota > 0){
                       $resultaRota = "<div class='text-green'>Disponível</div>";
                     }else{
                       $resultaRota = "<div class='text-red'>Indisponível</div>";
                     }
                     ?>
				<tr id="bidbid<?php echo $bid->bidid ?>">
				   <td><?php echo $bid->code . $bid->flightnum; ?></td>
	               <td align="center"><?php echo $bid->depicao; ?> <i class="fa fa-plane"></i> <?php echo $bid->arricao; ?></td>
	               <td align="center"><?php echo $bid->aircraft; ?> (<?php echo $bid->registration?>)</td>
	               <td><?php echo $bid->deptime;?></td>
	               <td><?php echo $bid->arrtime;?></td>
	               <td><?php echo $resultaVoo; ?></td>
                 <td><?php echo $resultaRota; ?></td>
                 <td><i class="fa fa-check text-green"></i></td>
	               <td>
		              <p><a href="<?php echo url('/schedules/brief/'.$bid->id);?>"><button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Ver"><i class="fa fa-eye"></i></button></a></p>
		           </td>
				<?php } ?>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        </div><!-- /.row -->
    </section>
    <!-- /.content -->
