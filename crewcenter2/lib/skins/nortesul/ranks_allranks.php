<section class="content-header bg-white espaca">
    <div class="pull-right"><i class="fa fa-graduation-cap fa-4x text-muted"></i></div>
    <h1>Ranking da <strong>Tripulação</strong></h1>
    <h1><small>Recursos Humanos | NorteSul Virtual &copy;
            <?php echo date("Y");?></small>
        <br>
</section>

		<section class="content container-fluid">
		    <div class="row">
		        <div class="col-md-12">
		            <div class="box box-solid">
		                <div class="box-header with-border">
		                    <h3 class="box-title">Ranking dos <strong>pilotos</strong></h3>
		                </div>
		                <div class="box-body table-responsive">
											<div class="callout callout-info">
                <p>Na NorteSul Virtual, as promoções podem ou não serem realizadas automaticamente, dependendo se existe uma prova para a mesma. Horas transferidas não contam para promoções!</p>
              </div>
		                   <table class="table table-hover">
												 <thead>
													 <th><h4>Título do ranking</h4></th>
													 <th><h4>Mínimo de horas</h4></th>
													 <th><h4>Imagem do ranking</h4></th>
													 <th><h4>Salário</h4></th>
													 <th><h4>Total de pilotos</h4></th>
												 </thead>
												 <tr>

													 <?php
				 			foreach($ranks as $rank) {
				         ?>
													 <td align="center"><?php echo $rank->rank;?></td>
													 <td align="center"><?php echo $rank->minhours;?></td>
													 <td align="center"><img src="<?php echo $rank->rankimage; ?>" alt=""></td>
													 <td align="center">v$<?php echo $rank->payrate;?>/hr</td>
													 <td align="center"><?php echo $rank->totalpilots;?></td>
												 </tr>
												 <?php
														 }
												 ?>
											 </table>
		                </div>
		            </div>
		        </div>
		    </div>
		    <!-- End container -->
		</section>
