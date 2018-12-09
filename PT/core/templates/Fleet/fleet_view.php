<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(<?php echo SITE_URL; ?>/lib/skins/nortesul/images/img_bg_1.png)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="row row-mt-15em">

						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>Nossa Frota</h1>
                            <small><ol class="breadcrumb">
  <li>Home</li>
  <li>Operacional</li>
  <li class="active"><b>Nossa Frota</b></li>
</ol></small>							
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</header>

    <div class="container" id="tourpackages-carousel">
       <h1>Informações da Aeronave <strong><?php echo $basicinfo->registration; ?></strong></h2>
          <hr >
          <h4>Informações Basicas</h4>
          <table width="100%" id="tabledlist" class="table table-striped">
	       <tbody>
		     <tr>
			   <td rowspan="4"><img src="<?php echo $basicinfo->imagelink; ?>" alt="Sem Imagens" width="200px"/></td>
			   <td><strong>Tipo: </strong> <?php echo $basicinfo->fullname . "(" . $basicinfo->icao . ")"; ?></td>
			   <td><strong>Alcance: </strong> <?php echo $basicinfo->range; ?></td>
		     </tr>
		     <tr>
			   <td><strong>Max Carga: </strong> <?php echo $basicinfo->maxcargo; ?><i>lbs</i></td>
			   <td><strong>Max Pax: </strong> <?php echo $basicinfo->maxpax; ?> <i>assentos</i></td>
		     </tr>
		     <tr>
			   <td><strong>Peso: </strong> <?php echo $basicinfo->weight; ?><i>lbs</i></td>
			   <td><strong>Teto Op.: </strong> <?php echo $basicinfo->cruise; ?><i>ft</i></td>
		     </tr>
             <tr>
			   <td><?php if($basicinfo->downloadlink != null){ ?><a href="<?php echo $basicinfo->downloadlink; ?>" class="button">Download Aircraft</a><?php } else{ echo "No current download links"; } ?></td>
			<td></td>
		     </tr>
	      </tbody>
         </table>
         <h3>Informações Detalhadas</h3>
         <table width="100%" id="tabledlist" class="table table-striped">
	      <tbody>
		     <tr>
			   <td><strong>Media de comb. por Voo: </strong><?php echo round($detailedinfo['AvgFuel'], 2); ?><i>lbs</i></td>
			   <td><strong>Total de comb. usado: </strong> <?php echo round($detailedinfo['totalFuel'], 2); ?><i>lbs</i></td>
			   <td><strong>Media de consumo de comb.: </strong> <?php echo round($detailedinfo['fuelConsumption'], 2); ?><i>lbs/mile</i></td>
		     </tr>
		     <tr>
			   <td><strong>Distancia média por voo: </strong> <?php echo round($detailedinfo['fuelConsumption'], 2); ?><i>miles</i></td>
			   <td><strong>Distancia Voada: </strong> <?php echo round($detailedinfo['TotalFlightDistance'], 2); ?><i>miles</i></td>
			   <td><strong>Lucro Estimado: </strong> $<?php echo round($detailedinfo['AvgRevenue'], 2); ?><i></i></td>
		     </tr>
		     <tr>
			   <td><strong>Lucro Total: </strong> $<?php echo round($detailedinfo['totalRevenue'], 2); ?><i></i></td>
			   <td><strong>Total de Despesas: </strong>$<?php echo round($detailedinfo['totalExpenses'], 2); ?><i></i></td>
			   <td><strong>Data de Compra: </strong><?php echo date('l d F Y', strtotime($purchasedate->datestamp)); ?></td>
		     </tr>
	     </tbody>
        </table>
        <h3>Últimos Voos</h3>
        <table width="100%" id="tabledlist" class="table table-striped">
	     <thead>
		     <tr>
	           <th class="quadro roxo">Número</th>
		       <th class="quadro roxo">Decolagem</th>
		       <th class="quadro roxo">Pouso</th>
		       <th class="quadro roxo">Piloto no Comando</th>
		       <th class="quadro roxo">Distância</th>
		       <th class="quadro roxo">Lucro</th>
		       <th class="quadro roxo">Landing Rate</th>
		     </tr>
	     </thead>
	     <tbody style="text-align:center;"><?php if($recentflights != null){foreach($recentflights as $recentflight){ ?>
		     <tr>
			   <td><a href="<?php echo url('pireps/view/' . $recentflight->pirepid); ?>/" ><?php echo $recentflight->code . " " . $recentflight->flightnum; ?></a></td>
			   <td><?php echo $recentflight->depicao; ?></td>
			   <td><?php echo $recentflight->arricao; ?></td>
			   <td><?php echo PilotData::getPilotData($recentflight->pilotid)->firstname. " " .PilotData::getPilotData($recentflight->pilotid)->lastname; ?></td>
			   <td><?php echo $recentflight->distance; ?><i>miles</i></td>
			   <td style="color:<?php if($recentflight->revenue >0){ echo 'green'; }else{ echo 'red'; } ?> ;">$<?php echo $recentflight->revenue; ?></td>
		       <td>-<?php echo $recentflight->landingrate; ?>ft/min</td>
		     </tr>
		     <?php } } ?>
	     </tbody>
        </table>
        <h3>Local Atual:<?php echo $recentflight->arricao; ?></h3>
      <!-- End container -->
    </div>