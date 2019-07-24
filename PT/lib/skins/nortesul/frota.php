<div class="site-blocks-cover overlay" style="background-image: url(<?php echo SITE_URL;?>/lib/skins/nortesul/images/canvas/4.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-10">
            <span class="sub-text">Home > Operacional > <strong>Nossa Frota</strong></span>
            <h1><strong>Nossa Frota</strong></h1>
          </div>
        </div>
      </div>
    </div>
	<div class="site-section">
      <div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="laranjinha">Voando além do que se espera!</h2>
Atualmente, a NorteSul Virtual possui 113 aeronaves de diversos modelos. Os aviões operam de Norte a Sul e de Leste a Oeste.
				<div class="row mt50">
					<div class="col-xs-6 no-padding-left box-sky-interior mr10">
						<p class="fs22 blue"><strong>Entretenimento a Bordo</strong></p>
						<p class="mt30 mb20">A mais completa plataforma de conectividade e entretenimento a bordo.</p>
						<span class="text-green"><b>100%</b></span><span class="ml10">das aeronaves possuem o sistema <i class="fas fa-check text-green"></i></span>
					</div>
					<div class="col-xs-6 box-sky-interior ml10">
						<p class="fs22 blue"><strong>Interior Customizado</strong></p>
						<p class="mt30 mb20">Interior produzido inteiramente para a NorteSul. Estilizando suas cores vibrantes com sua elegância, para um maior conforto.</p>
						<span class="text-green"><b>5%</b></span><span class="ml10">das aeronaves implementadas <!--<i class="fas fa-check text-green"></i>!--></span>
					</div>
				</div>
				<div class="row mt20 mb20">
					<div class="col-xs-6 box-sky-interior mr10">
						<p class="fs22 blue"><strong>Pinturas Especiais</strong></p>
						<p class="mt30 mb20">Feitas com amor e carinho. Homenageando ícones de todo o mundo, por exemplo: The Beatles, Rei Pelé, Adoniran Barbosa, Carmen Miranda, entre outras.</p>
						<span class="text-green">12</span><span class="ml10">pinturas especiais <i class="fas fa-check text-green"></i></span>
					</div>
					<div class="col-xs-6 box-sky-interior ml10">
						<p class="fs22 blue"><strong>ILS CAT 3</strong></p>
						<p class="mt30 mb20">Diversas de nossas aeronaves possuem sistemas de aproximação de última geração para reduzir tempos de espera e, possibilitar pousos em condições adversas.</p>
						<span class="text-green">92%</span><span class="ml10">das aeronaves homologadas <i class="fas fa-check text-green"></i></span>

					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 box-sky-interior mr10">
						<p class="fs22 blue"><strong>Engenharia e Manutenção</strong></p>
						<p class="mt30 mb20">A NorteSul conta com excelentes profissionais na área de Engenharia e Manutenção, trazendo uma maior segurança e confiabiliade em nossas operações.</p>
						<span class="text-green">100%</span><span class="ml10">de excelência <i class="fas fa-check text-green"></i></span> 
					</div>
					<div class="col-xs-6 box-sky-interior ml10">
						<p class="fs22 blue"><strong>Frota Diversificada</strong></p>
						<p class="mt30 mb20">Possuímos aeronaves das principais fabricantes do mercado aeronáutico, possibilitando a operação por pilotos com conhecimentos diversos.</p>
						<span class="text-green">#Boravoar</span><span class="ml10"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="site-section  border-bottom">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-green text-center">Conceito e Credibilidade</h2>
				
				<div class="card mt-3 tab-card">
        <div class="card-header tab-card-header">
          <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">Airbus A319</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false">Airbus A320</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="Three" aria-selected="false">Airbus A330</a>
            </li>
			<li class="nav-item">
                <a class="nav-link" id="four-tab" data-toggle="tab" href="#four" role="tab" aria-controls="Four" aria-selected="false">Airbus A350</a>
            </li>
			<li class="nav-item">
                <a class="nav-link" id="five-tab" data-toggle="tab" href="#five" role="tab" aria-controls="Five" aria-selected="false">Boeing 737-800</a>
            </li>
			<li class="nav-item">
                <a class="nav-link" id="six-tab" data-toggle="tab" href="#six" role="tab" aria-controls="Six" aria-selected="false">Boeing 737 MAX 8</a>
            </li>
			<li class="nav-item">
                <a class="nav-link" id="seven-tab" data-toggle="tab" href="#seven" role="tab" aria-controls="Seven" aria-selected="false">Boeing 747-8i/F</a>
            </li>
			<li class="nav-item">
                <a class="nav-link" id="eight-tab" data-toggle="tab" href="#eight" role="tab" aria-controls="Eight" aria-selected="false">Boeing 777</a>
            </li>
          </ul>
        </div>

        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">
			<?php $allaircraftA319 = OperationsData::getAllAircraftByType(A319); $contouA319 = count($allaircraftA319);?>
			<div class="chapuleta">
				<img src="<?php echo SITE_URL;?>/lib/skins/nortesul/images/frota/A319.jpg" style="margin-left:10px;">
				<div class="bottom-left"><b><h2><?php echo $contouA319;?> <small>AERONAVES</small></h2></b></div>
			</div>
			<div class="col-md-6 border-right">
				<ul class="mt20 verdinho">
					<li><span>Teste</span></li>
				</ul> 
			</div>
            <h5 class="card-title">Tab Card One</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>              
          </div>
          <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
			<?php $allaircraftA320 = OperationsData::getAllAircraftByType(A320); $contouA320 = count($allaircraftA320);?>
			<div class="chapuleta">
				<img src="<?php echo SITE_URL;?>/lib/skins/nortesul/images/frota/A320.jpg" style="margin-left:10px;">
				<div class="bottom-left"><b><h2><?php echo $contouA320;?> <small>AERONAVES</small></h2></b></div>
			</div>
			<div class="col-md-6 border-right">
				<ul class="mt20 verdinho">
					<li><span>Teste</span></li>
				</ul> 
			</div>
            <h5 class="card-title">Tab Card Two</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>              
          </div>
          <div class="tab-pane fade p-3" id="three" role="tabpanel" aria-labelledby="three-tab">
            <h5 class="card-title">Tab Card Three</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>              
          </div>
		  <div class="tab-pane fade p-3" id="four" role="tabpanel" aria-labelledby="four-tab">
            <h5 class="card-title">Tab Card Four</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>              
          </div>
		  <div class="tab-pane fade p-3" id="five" role="tabpanel" aria-labelledby="five-tab">
            <?php $allaircraftB738 = OperationsData::getAllAircraftByType(B737); $contouB738 = count($allaircraftB738);?>
			<div class="chapuleta">
				<img src="<?php echo SITE_URL;?>/lib/skins/nortesul/images/frota/B737.jpg" class="img-fluid" style="margin-left:10px;">
				<div class="bottom-left"><b><h2><?php echo $contouB738;?> <small>AERONAVES</small></h2></b></div>
			</div>
			<div class="col-md-6 border-right">
				<ul class="mt20 verdinho">
					<li><span>Teste</span></li>
				</ul> 
			</div>
			<h5 class="card-title">Tab Card Five</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>              
          </div>
		  <div class="tab-pane fade p-3" id="six" role="tabpanel" aria-labelledby="six-tab">
            <?php $allaircraftB38M = OperationsData::getAllAircraftByType(B38M); $contouB38M = count($allaircraftB38M);?>
			<div class="chapuleta">
				<img src="<?php echo SITE_URL;?>/lib/skins/nortesul/images/frota/B738.jpg" class="img-fluid" style="margin-left:10px;">
				<div class="bottom-left"><b><h2><?php echo $contouB38M;?> <small>AERONAVES</small></h2></b></div>
			</div>
			<div class="col-md-6 border-right">
				<ul class="mt20 verdinho">
					<li><span>Teste</span></li>
				</ul> 
			</div>
			<h5 class="card-title">Tab Card Five</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>              
          </div>
		  <div class="tab-pane fade p-3" id="seven" role="tabpanel" aria-labelledby="seven-tab">
            <?php $allaircraftB748 = OperationsData::getAllAircraftByType(B748); $contouB748 = count($allaircraftB748);?>
			<div class="chapuleta">
				<img src="<?php echo SITE_URL;?>/lib/skins/nortesul/images/frota/B747.jpg" class="img-fluid" style="margin-left:10px;">
				<div class="bottom-left"><b><h2><?php echo $contouB748;?> <small>AERONAVES</small></h2></b></div>
			</div>
			<div class="col-md-6 border-right">
				<ul class="mt20 verdinho">
					<li><span>Teste</span></li>
				</ul> 
			</div>
			<h5 class="card-title">Tab Card Five</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>              
          </div>
		  <div class="tab-pane fade p-3" id="eight" role="tabpanel" aria-labelledby="eight-tab">
            <?php $allaircraftB777 = OperationsData::getAllAircraftByType(B777); $contouB777 = count($allaircraftB777);?>
			<div class="chapuleta">
				<img src="<?php echo SITE_URL;?>/lib/skins/nortesul/images/frota/B777.jpg" class="img-fluid" style="margin-left:10px;">
				<div class="bottom-left"><b><h2><?php echo $contouB777;?> <small>AERONAVES</small></h2></b></div>
			</div>
			<div class="col-md-6 border-right">
				<ul class="mt20 verdinho">
					<li><span>Teste</span></li>
				</ul> 
			</div>
			<h5 class="card-title">Tab Card Five</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>              
          </div>
        </div>
      </div>
	  
		<?php Template::Show('fleet/fleet_list.tpl'); ?>
			</div>
		</div>
	</div>
</div>	