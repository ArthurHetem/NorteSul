	<!-- Sequence Modern Slider -->
    <header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(<?php echo SITE_URL; ?>/lib/skins/avianca/images/img_bg_3.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box dividir" data-animate-effect="fadeInUp">
							<h1>Viajar e conhecer novos lugares?</h1>	
						</div>
						<div class="col-md-4 col-md-push-1 mt-text animate-box" data-animate-effect="fadeInRight">
									
									
											<h1>Venha voar</h1>
											<img src="<?php echo SITE_URL; ?>/lib/skins/avianca/images/logo.png" height="55px" width="255px">

										
									</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>A sua <b>melhor</b> Virtual Airline</h2>
					<p>Operating real operations in flight simulation</p>
				</div>
			</div>
			
            <div class="row">
			    <div class="col-md-6">
				    <h2> <?php
$hr = date(" H ");
if($hr >= 12 && $hr<18) {
$resp = "Boa tarde";}
else if ($hr >= 0 && $hr <12 ){
$resp = "Bom dia";}
else {
$resp = "Boa noite";}
echo "$resp";
?>, bem vindo a NorteSul Linhas Aéreas Virtuais</h2>
					<h4>A <b>NorteSul</b> é uma Companhia Aérea Virtual sem fins lucrativos que busca simular com a maior fidelidade possível operações de uma Companhia Aérea Real. <p>Atualmente contamos com <b><?php echo StatsData::PilotCount(); ?></b> membros que simulam através da rede de voo online IVAO, utilizando as plataformas Microsoft Flight Simulator, XPlane, Prepar3D e softwares próprios que deixam a simulação mais próxima da realidade.</p></h4>
				</div>
				<div class="col-md-6">
				     <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Últimos Voos</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Novos Pilotos</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home"><?php MainController::Run('PIREPS', 'RecentFrontPage', 5); ?></div>
    <div role="tabpanel" class="tab-pane" id="messages"><?php MainController::Run('Pilots', 'RecentFrontPage', 10); ?></div>
  </div>
				</div>
			</div>
			
		</div>
	</div>
	
	<div id="gtco-features">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2>Processo de Admissão</h2>
					<p>Possuímos um processo de admissão que visa a praticidade e eficiencia na escolha de nossos membros.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>1</i>
						</span>
						<h3>Realização do Cadastro</h3>
						<p>O futuro membro preenche um cadastro informando alguns dados</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>2</i>
						</span>
						<h3>Avaliação do Cadastro</h3>
						<p>Nosso departamento de RH avalia os cadastros</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>3</i>
						</span>
						<h3>Acesso ao CrewCenter</h3>
						<p>Caso aprovado, o membro já possuirá acesso ao CrewCenter</p>
					</div>
				</div>
				

			</div>
		</div>
	</div>


	<div class="gtco-cover gtco-cover-sm amarelo" style="background-image: url(images/img_bg_1.jpg)"  data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container text-center">
			<div class="display-t">
				<div class="display-tc">
					<h1>Possuímos sistemas e aplicativos que temos certeza que você irá adorar!</h1>
				</div>	
			</div>
		</div>
	</div>

	<div id="gtco-counter" class="gtco-section">
		<div class="gtco-container">

			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2>Detentora oficial do callsign <b>NOR</b> nos céus virtuais</h2>
					<p>Utilizamos a rede de simulação aérea virtual, a <b>IVAO</b></p>
				</div>
			</div>
 
			<div class="row">
				
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="<?php echo StatsData::TotalSchedules(); ?>" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Rotas</span>

					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="<?php echo StatsData::PilotCount(); ?>" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Tripulantes</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="<?php echo StatsData::TotalAircraftInFleet(); ?>" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Aeronaves</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="<?php echo StatsData::TotalFlights(); ?>" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Voos</span>

					</div>
				</div>
					
			</div>
		</div>
	</div>
	
	<div class="row gtco-container">
<div class="row">
				<div class="col-md-4">
              <div class="icon-wrap ico-bg round-fifty animate-box">
                <i class="fas fa-plane">
                </i>
              </div>
                <h3>
                  Navegação SITA
                </h3>
                <p>
                  A Navegação SITA é uma navegação que tem como finalidade ajudar o piloto em sua própria navegação assim como no controle de combustivel tal como ZFW TOW TFW TPW MTOW etc.
                  <br>
                </p>
            </div>
			<div class="col-md-4">
              <div class="icon-wrap ico-bg round-fifty animate-box">
                <i class="far fa-folder-open">
                </i>
              </div>
                <h3>
                  LoadSheet
                </h3>
                <p>
                  É a preparação utilizada para cada voo, como peso e distribuição de carga no compartimento e muito mais.
                  <br>
                </p>
            </div>
			<div class="col-md-4">
              <div class="icon-wrap ico-bg round-fifty animate-box">
                <i class="fas fa-tablet-alt">
                </i>
              </div>
                <h3>
                  Briefing
                </h3>
                <p>
                  Briefing apresenta ao piloto as informações necessárias para o voo, como os NOTAMS e todas as cartas atualizadas no mesmo local e muito mais...
                  <br>
                </p>
            </div>
			</div>
			<div class="row">
				<div class="col-md-4">
              <div class="icon-wrap ico-bg round-fifty animate-box">
                <i class="fas fa-binoculars">
                </i>
              </div>
                <h3>
                  Weather Briefing
                </h3>
                <p>
                  Destina-se como uma ferramenta para ajudar os pilotos a visualizarem melhor o tempo e riscos relacionados ao clima sobre os aeródromos para o voo.
                  <br>
                </p>
            </div>
				<div class="col-md-4">
              <div class="icon-wrap ico-bg round-fifty animate-box">
                <i class="fa fa-plane">
                </i>
              </div>
                <h3>
                  IVAO Flight Plan
                </h3>
                <p>
                  O objetivo de um plano de voo apresentado (FPL) é trazer mais comodidade aos pilotos operantes na rede de voo IVAO.
                  <br>
                </p>
            </div>


				<div class="col-md-4">
              <div class="icon-wrap ico-bg round-fifty animate-box">
                <i class="fas fa-graduation-cap">
                </i>
              </div>
                <h3>
                  Academia
                </h3>
                <p>
                  A academia é um ambiente direcionado ao aprendizado de nossos pilotos, os exames são utilizados para promoção de patentes, instrução para inativos entre outros.
                  <br>
                </p>
            </div>
</div>
				<div class="col-md-4">
              <div class="icon-wrap ico-bg round-fifty animate-box">
                <i class="far fa-file-pdf">
                </i>
              </div>
                <h3>
                  SOP AviancaV
                </h3>
                <p>
                  STANDARD OPERATING PROCEDURES integra o Manual Geral de Operações que é um conjunto de documentos e guias operacionais a ser seguido pelos tripulantes para que a NorteSul alcance o nível máximo de qualidade operacional possível.
                  <br>
                </p>
            </div>
				<div class="col-md-4">
              <div class="icon-wrap ico-bg round-fifty animate-box">
                <i class="fas fa-location-arrow">
                </i>
              </div>
                <h3>
                  CGNA
                </h3>
                <p>
                  Gerencia todo o fluxo de tráfego aéreo, e com a RPL (Planos de Voo Repetitivo) utilizamos para mantermos todas as nossas rotas atualizadas.
                  <br>
                </p>
            </div>
            </div>
			
	
	<div id="gtco-subscribe">
		<div class="gtco-container">
			<div class="row animate-box azul">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Nossos <b>Parceiros</b></h2>
					<div class="owl-carousel owl-theme">
    <div class="item"><a href="http://vatsim.net"><img src="<?php echo SITE_URL; ?>/lib/skins/avianca/images/parceiros/vatsim.png"></a></div>
    <div class="item"><h4></h4></div>
    <div class="item"><h4></h4></div>
</div>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					
				</div>
			</div>
		</div>
	</div>