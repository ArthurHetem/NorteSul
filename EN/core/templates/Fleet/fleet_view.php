<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(<?php echo SITE_URL; ?>/lib/skins/avianca/images/img_bg_3.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="row row-mt-15em">

						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>Our Fleet</h1>
                            <small><ol class="breadcrumb">
  <li>Home</li>
  <li>Operations</li>
  <li class="active"><b>Our Fleet</b></li>
</ol></small>							
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</header>

    <div class="container" id="tourpackages-carousel">
       <h1>Aircraft Informations <strong><?php echo $basicinfo->registration; ?></strong></h2>
          <hr >
          <h4>Basic Informations</h4>
          <table width="100%" id="tabledlist" class="table table-striped">
	       <tbody>
		     <tr>
			   <td rowspan="4"><img src="<?php echo $basicinfo->imagelink; ?>" alt="Sem Imagens" width="200px"/></td>
			   <td><strong>Type: </strong> <?php echo $basicinfo->fullname . "(" . $basicinfo->icao . ")"; ?></td>
			   <td><strong>Range: </strong> <?php echo $basicinfo->range; ?></td>
		     </tr>
		     <tr>
			   <td><strong>Max Cargo: </strong> <?php echo $basicinfo->maxcargo; ?><i>lbs</i></td>
			   <td><strong>Max Pax: </strong> <?php echo $basicinfo->maxpax; ?> <i>assentos</i></td>
		     </tr>
		     <tr>
			   <td><strong>Weight: </strong> <?php echo $basicinfo->weight; ?><i>lbs</i></td>
			   <td><strong>Op. Ceiling: </strong> <?php echo $basicinfo->cruise; ?><i>ft</i></td>
		     </tr>
             <tr>
			   <td><?php if($basicinfo->downloadlink != null){ ?><a href="<?php echo $basicinfo->downloadlink; ?>" class="button">Download Aircraft</a><?php } else{ echo "No current download links"; } ?></td>
			<td></td>
		     </tr>
	      </tbody>
         </table>
         <h3>Detailed Informations</h3>
         <table width="100%" id="tabledlist" class="table table-striped">
	      <tbody>
		     <tr>
			   <td><strong>Average fuel by flight: </strong><?php echo round($detailedinfo['AvgFuel'], 2); ?><i>lbs</i></td>
			   <td><strong>Total used Fuel: </strong> <?php echo round($detailedinfo['totalFuel'], 2); ?><i>lbs</i></td>
			   <td><strong>Average fuel use by flight: </strong> <?php echo round($detailedinfo['fuelConsumption'], 2); ?><i>lbs/mile</i></td>
		     </tr>
		     <tr>
			   <td><strong>Average Distance by flight: </strong> <?php echo round($detailedinfo['fuelConsumption'], 2); ?><i>miles</i></td>
			   <td><strong>flight distance: </strong> <?php echo round($detailedinfo['TotalFlightDistance'], 2); ?><i>miles</i></td>
			   <td><strong>Estimated Profit: </strong> $<?php echo round($detailedinfo['AvgRevenue'], 2); ?><i></i></td>
		     </tr>
		     <tr>
			   <td><strong>Total Profit: </strong> $<?php echo round($detailedinfo['totalRevenue'], 2); ?><i></i></td>
			   <td><strong>Total Expenses: </strong>$<?php echo round($detailedinfo['totalExpenses'], 2); ?><i></i></td>
			   <td><strong>Purchase Date: </strong><?php echo date('l d F Y', strtotime($purchasedate->datestamp)); ?></td>
		     </tr>
	     </tbody>
        </table>
        <h3>Latest Flights</h3>
        <table width="100%" id="tabledlist" class="table table-striped">
	     <thead>
		     <tr>
	           <th class="quadro roxo">Flight Number #</th>
		       <th class="quadro roxo">DEP</th>
		       <th class="quadro roxo">ARR</th>
		       <th class="quadro roxo">Pilot in Command</th>
		       <th class="quadro roxo">Distance</th>
		       <th class="quadro roxo">Proft</th>
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
        <h3>Actual Location:<?php echo $recentflight->arricao; ?></h3>
      <!-- End container -->
    </div>