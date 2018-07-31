<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(<?php echo SITE_URL; ?>/lib/skins/avianca/images/img_bg_1.png)">
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
       <table id="tabledlist" class="table table-striped">
	       <thead>
		    <tr>
		     <th class="quadro roxo">Prefixo da Aeronave</th>
	         <th class="quadro roxo">Tipo da Aeronave</th>
		     <th class="quadro roxo">Alcance</th>
			 <th class="quadro roxo">Max Pax</th>
		     <th class="quadro roxo">Max Carga</th>
		     <th class="quadro roxo">Detalhes</th>
		    </tr>
	       </thead>
	       <tbody>
	        <?php if($aircrafts != null){ foreach($aircrafts as $aircrafts){ ?>
		    <tr>
		     <td><?php echo $aircrafts->registration; ?></td>
		     <td><?php echo $aircrafts->fullname; ?></td>
		     <td><?php echo $aircrafts->range; ?></td>
			 <td><?php echo $aircrafts->maxpax; ?></td>
	         <td><?php echo $aircrafts->maxcargo; ?></td>
		     <td><a href="<?php echo url('fleet/view/' . $aircrafts->id); ?>"><button class="btn btn-default">Ver&raquo;</button></a></td> 
		    </tr>
	        <?php } }?>
	       </tbody>
          </table>
      <!-- End container -->
    </div>    