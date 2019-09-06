<section class="hero-wrap d-flex">
	<div class="forth d-flex">

		<div class="text">
			<div class="desc pt-5">
				<span class="">#bem-vindo</span>
				<h1 class="mb-3">Aqui você voa de verdade</h1>
				<h2 class="mb-4">NorteSul Cargo</h2>
			</div>
		</div>
	</div>
	<div class="third about-img">
		<div id="home" class="video-hero"
			style="height: 500px; background-image: url(images/bg_1.jpg); background-size:cover; background-position: center center;">
			<a class="player"
				data-property="{videoURL:'https://www.youtube.com/watch?v=PwPrSU8UmSg',containment:'#home', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:'default'}"></a>
		</div>
	</div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center headingnsv">
				<h1>A sua <strong>melhor</strong> Virtual Airline</h1>
				<p>Operações de voos reais nos principais simuladores</p>
				<hr>
				<div class="row">
					<div class="col-lg-6 col-md-6 mb-7 mb-lg-0">
						<h1> <?php
			date_default_timezone_set('America/Sao_Paulo');
$hr = date(" H ");
if($hr >= 12 && $hr<18) {
$resp = "Boa tarde";}
else if ($hr >= 0 && $hr <12 ){
$resp = "Bom dia";}
else {
$resp = "Boa noite";}
echo "$resp";
?>, bem-vindo à NorteSul Cargo</h1>
						<p>A <b>NorteSul Cargo</b> é uma Companhia Aérea Virtual sem fins lucrativos que busca simular
							com a maior fidelidade possível operações de uma Companhia Aérea Cargueira Real. <p>
								Atualmente contamos com <b><?php echo StatsData::PilotCount(); ?></b> membros que
								simulam através das redes de voo online utilizando as plataformas Microsoft Flight
								Simulator, XPlane, Prepar3D e softwares próprios que deixam a simulação mais próxima da
								realidade.</p>
						</p>
						<div id="fb-root"></div>
						<script async defer crossorigin="anonymous"
							src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.3"></script>
						<div class="fb-like" data-href="https://www.facebook.com/nortesulvirtual/" data-width=""
							data-layout="standard" data-action="like" data-size="small" data-show-faces="true"
							data-share="true"></div>
					</div>
					<div class="col-lg-6 col-md-6 mb-7 mb-lg-0">
						<div class="media custom-media">
							<div class="media-body">
								<div class="accordion" id="accordionExample">

									<h2 class="mb-0 border-top btn-accordion mb-2">
										<a class="btn accordion-toggle" data-toggle="collapse"
											data-target="#collapseOne" aria-expanded="false"
											aria-controls="collapseOne">
											Novos Pilotos
										</a>
									</h2>

									<div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
										data-parent="#accordionExample">
										<div class="card-body">
											<?php MainController::Run('Pilots', 'RecentFrontPage', 10); ?>
										</div>
									</div>

									<h2 class="mb-0 border-top border-bottom btn-accordion mb-2">
										<a class="btn accordion-toggle" data-toggle="collapse"
											data-target="#collapseTwo" aria-expanded="false"
											aria-controls="collapseTwo">
											Últimos Voos
										</a>
									</h2>

									<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
										data-parent="#accordionExample">
										<div class="card-body">
											<?php MainController::Run('PIREPS', 'RecentFrontPage', 10); ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<div class="site-section  border-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="icon-wrap ico-bg round-fifty animate-box">
							<i class="fa fa-file-pdf-o"></i>
							</i>
						</div>
						<h3>
							SOP NorteSul
						</h3>
						<p>
							STANDARD OPERATING PROCEDURES integra o Manual Geral de Operações que é um conjunto de
							documentos e guias operacionais a ser seguido pelos tripulantes para que a NorteSul alcance
							o nível máximo de qualidade operacional possível.
							<br>
						</p>
					</div>
					<div class="col-md-4">
						<div class="icon-wrap ico-bg round-fifty animate-box">
							<i class="fa fa-mixcloud"></i>
							</i>
						</div>
						<h3>
							smartCARS
						</h3>
						<p>
							O sistema smartCARS é um software de rastreamento de vôo feito para o Microsoft Flight
							Simulator, Prepar3D, e X-Plane. Este software permite a gravação e arquivamento de seus
							voos, tendo muitas funcionalidades como Radio, Speech, chat e muito mais.
							<br>
						</p>
					</div>
					<div class="col-md-4">
						<div class="icon-wrap ico-bg round-fifty animate-box">
							<i class="fa fa-tablet"></i>
							</i>
						</div>
						<h3>
							Briefing
						</h3>
						<p>
							Briefing apresenta ao piloto as informações necessárias para o voo, como os NOTAMS e todas
							as cartas atualizadas no mesmo local e muito mais...
							<br>
						</p>
					</div>
					<div class="col-md-4">
						<div class="icon-wrap ico-bg round-fifty animate-box fadeInUp animated-fast">
							<i class="fas fa-paste"></i>
							</i>
						</div>
						<h3>
							LoadSheet
						</h3>
						<p>
							É a preparação utilizada para cada voo, como peso e distribuição de carga no compartimento e
							muito mais.
							<br>
						</p>
					</div>
					<div class="col-md-4">
						<div class="icon-wrap ico-bg round-fifty animate-box">
							<i class="fas fa-binoculars"></i>
							</i>
						</div>
						<h3>
							Weather Briefing
						</h3>
						<p>
							Destina-se como uma ferramenta para ajudar os pilotos a visualizarem melhor o tempo e riscos
							relacionados ao clima sobre os aeródromos para o voo.
							<br>
						</p>
					</div>
					<div class="col-md-4">
						<div class="icon-wrap ico-bg round-fifty animate-box">
							<i class="fa fa-plane"></i>
							</i>
						</div>
						<h3>
							VATSIM Flight Plan
						</h3>
						<p>
							O objetivo de um plano de voo apresentado (FPL) é trazer mais comodidade aos pilotos
							operantes na rede de voo VATSIM.
							<br>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="icon-wrap ico-bg round-fifty animate-box">
							<i class="fas fa-graduation-cap"></i>
							</i>
						</div>
						<h3>
							Academia
						</h3>
						<p>
							A academia é um ambiente direcionado ao aprendizado de nossos pilotos, os exames são
							utilizados para promoção de patentes, instrução para inativos entre outros.
							<br>
						</p>
					</div>
					<div class="col-md-4">
						<div class="icon-wrap ico-bg round-fifty animate-box">
							<i class="fas fa-paint-brush"></i>
							</i>
						</div>
						<h3>
							Pinturas Customizadas
						</h3>
						<p>
							Possuímos toda nossa frota diversificada em nossas cores disponível para diversos
							Simuladores.
							<br>
						</p>
					</div>
					<div class="col-md-4">
						<div class="icon-wrap ico-bg round-fifty animate-box">
							<i class="fas fa-plane"></i>
							</i>
						</div>
						<h3>
							Navegação SITA
						</h3>
						<p>
							A Navegação SITA é uma navegação que tem como finalidade ajudar o piloto em sua própria
							navegação assim como no controle de combustivel tal como ZFW TOW TFW TPW MTOW etc.
							<br>
						</p>
					</div>
				</div>
						</div>
					</div>
</section>

<section class="ftco-section ftco-counter" id="section-counter" style="background-color:#1F57AF;"
	data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row d-md-flex align-items-center">
			<div class="col-lg-4">
				<div class="heading-section pl-md-5 heading-section-white">
					<div class="ftco-animate">
						<span class="subheading">#informação</span>
						<h2 class="mb-4">Nossos Números</h2>
					</div>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="row d-md-flex align-items-center">
					<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
							<div class="text">
								<strong class="number" data-number="<?php echo StatsData::TotalSchedules(); ?>">0</strong>
								<span>Rotas</span>
							</div>
						</div>
					</div>
					<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
							<div class="text">
								<strong class="number" data-number="<?php echo StatsData::PilotCount(); ?>">0</strong>
								<span>Tripulantes</span>
							</div>
						</div>
					</div>
					<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
							<div class="text">
								<strong class="number" data-number="<?php echo StatsData::TotalAircraftInFleet(); ?>">0</strong>
								<span>Aeronaves</span>
							</div>
						</div>
					</div>
					<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
							<div class="text">
								<strong class="number" data-number="<?php echo StatsData::TotalFlights(); ?>">0</strong>
								<span>Voos</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-partner">
	<div class="container">
		<div class="row">
			<div class="col-sm ftco-animate">
				<a href="https://vatsim.net" class="partner"><img src="<?php echo SITE_URL;?>/lib/skins/nortesul/images/parceiros/vatsim.png"
				data-toggle="tooltip" title="Vatsim Network"	class="img-fluid"></a>
			</div>
			<div class="col-sm ftco-animate">
				<a href="https://vatsim.net.br" class="partner"><img src="<?php echo SITE_URL;?>/lib/skins/nortesul/images/parceiros/vatbrz.png"
				data-toggle="tooltip" title="Vatsim Network Brasil" class="img-fluid"></a>
			</div>
			<div class="col-sm ftco-animate">
				<a href="https://simbrief.com" class="partner"><img src="<?php echo SITE_URL;?>/lib/skins/nortesul/images/parceiros/simbrief.png"
				data-toggle="tooltip" title="Simbrief" class="img-fluid"></a>
			</div>
			<div class="col-sm ftco-animate">
				<a href="https://www.youtube.com/channel/UCQxVH1hysBzmLQlqAMoJdzg" class="partner"><img src="<?php echo SITE_URL;?>/lib/skins/nortesul/images/parceiros/fshost.png"
				data-toggle="tooltip" title="Flight Sim Host"	class="img-fluid"></a>
			</div>
			<div class="col-sm ftco-animate">
				<a href="https://tfdidesign.com" class="partner"><img src="<?php echo SITE_URL;?>/lib/skins/nortesul/images/parceiros/tfdi.png"
				data-toggle="tooltip" title="TFDi Design"	class="img-fluid"></a>
			</div>
		</div>
	</div>
</section>