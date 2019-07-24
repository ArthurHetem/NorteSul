<div class="site-blocks-cover overlay" style="background-image: url(<?php echo SITE_URL;?>/lib/skins/nortesul/images/06.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center text-center justify-content-center">
          <div class="col-md-10">
            <h1 class="animated lightSpeedIn fonte">Bem-vindo ao futuro.</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="site-block-1">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <a href="#" class="site-block-feature d-flex p-4 rounded mb-4">
              <div class="mr-3">
                <span class="icon flaticon-window font-weight-light h2"></span>
              </div>
              <div class="text">
                <h3>Interior Architecture</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
              </div>
            </a>
          </div>
          <div class="col-lg-4">
            <a href="#" class="site-block-feature d-flex p-4 rounded mb-4">
              <div class="mr-3">
                <span class="icon flaticon-measuring font-weight-light h2"></span>
              </div>
              <div class="text">
                <h3>Interior Design</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
              </div>
            </a>
          </div>
          <div class="col-lg-4">
            <a href="#" class="site-block-feature d-flex p-4 rounded mb-4">
              <div class="mr-3">
                <span class="icon flaticon-interior-design font-weight-light h2"></span>
              </div>
              <div class="text">
                <h3>Furniture</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

	<div class="site-section  border-bottom">
      <div class="container">
		<div class="row">
		<div class="col-md-12 text-center headingnsv">
			<h1>A sua <strong>melhor</strong> Virtual Airline</h1>
			<p>Operações de voos reais nos principais simuladores</p>
			<hr>
		</div>
		</div>
        <div class="row">
          <div class="col-lg-8 col-md-8 mb-7 mb-lg-0">
            <h1> <?php
$hr = date(" H ");
if($hr >= 12 && $hr<18) {
$resp = "Boa tarde";}
else if ($hr >= 0 && $hr <12 ){
$resp = "Bom dia";}
else {
$resp = "Boa noite";}
echo "$resp";
?>, bem-vindo a NorteSul Linhas Aéreas Virtuais</h1>
					<p>A <b>NorteSul</b> é uma Companhia Aérea Virtual sem fins lucrativos que busca simular com a maior fidelidade possível operações de uma Companhia Aérea Real. <p>Atualmente contamos com <b><?php echo StatsData::PilotCount(); ?></b> membros que simulam através das redes de voo online utilizando as plataformas Microsoft Flight Simulator, XPlane, Prepar3D e softwares próprios que deixam a simulação mais próxima da realidade.</p></p>
          <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.3"></script>
<div class="fb-like" data-href="https://www.facebook.com/nortesulvirtual/" data-width="" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
		  </div>


          <div class="col-lg-4 col-md-8 mb-7 mb-lg-0">
            <div class="media custom-media">
              <div class="media-body">
                <div class="accordion" id="accordionExample">

              <h2 class="mb-0 border-top btn-accordion mb-2">
                <a class="btn accordion-toggle" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  Novos Pilotos
                </a>
              </h2>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  <?php MainController::Run('Pilots', 'RecentFrontPage', 10); ?>
                </div>
              </div>

              <h2 class="mb-0 border-top border-bottom btn-accordion mb-2">
                <a class="btn accordion-toggle" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Últimos Voos
                </a>
              </h2>

              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
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
	
    <div class="site-section  border-bottom">
      <div class="container">
        <div class="row">
			<div class="col-md-4">
              <div class="icon-wrap ico-bg round-fifty animate-box">
                <i class="far fa-file-pdf"></i>
                </i>
              </div>
                <h3>
                  SOP NorteSul
                </h3>
                <p>
                  STANDARD OPERATING PROCEDURES integra o Manual Geral de Operações que é um conjunto de documentos e guias operacionais a ser seguido pelos tripulantes para que a NorteSul alcance o nível máximo de qualidade operacional possível.
                  <br>
                </p>
            </div>
			<div class="col-md-4">
              <div class="icon-wrap ico-bg round-fifty animate-box">
                <i class="fab fa-mixcloud"></i>
                </i>
              </div>
                <h3>
                  smartCARS
                </h3>
                <p>
                  O sistema smartCARS é um software de rastreamento de vôo feito para o Microsoft Flight Simulator, Prepar3D, e X-Plane. Este software permite a gravação e arquivamento de seus voos, tendo muitas funcionalidades como Radio, Speech, chat e muito mais.
                  <br>
                </p>
            </div>
			<div class="col-md-4">
              <div class="icon-wrap ico-bg round-fifty animate-box">
                <i class="fas fa-tablet-alt"></i>
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
			<div class="col-md-4">
              <div class="icon-wrap ico-bg round-fifty animate-box fadeInUp animated-fast">
                <i class="fas fa-paste"></i>
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
                <i class="fas fa-binoculars"></i>
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
                <i class="fa fa-plane"></i>
                </i>
              </div>
                <h3>
                  VATSIM Flight Plan
                </h3>
                <p>
                  O objetivo de um plano de voo apresentado (FPL) é trazer mais comodidade aos pilotos operantes na rede de voo VATSIM.
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
                  A academia é um ambiente direcionado ao aprendizado de nossos pilotos, os exames são utilizados para promoção de patentes, instrução para inativos entre outros.
                  <br>
                </p>
            </div>
				<div class="col-md-4">
              <div class="icon-wrap ico-bg round-fifty animate-box">
                <i class="fas fa-palette"></i>
                </i>
              </div>
                <h3>
                  Pinturas Customizadas
                </h3>
                <p>
                  Possuímos toda nossa frota diversificada em nossas cores disponível para diversos Simuladores.
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
                  A Navegação SITA é uma navegação que tem como finalidade ajudar o piloto em sua própria navegação assim como no controle de combustivel tal como ZFW TOW TFW TPW MTOW etc.
                  <br>
                </p>
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
      </div>
    </div>
    <div class="site-section site-block-3 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="">
              <img src="<?php echo SITE_URL;?>/lib/skins/nortesul/images/bookface.jpg" alt="Image" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="row row-items">
              <div class="col-6">
                <a href="https://www.facebook.com/nortesulvirtual" class="d-flex text-center feature active p-4 mb-4 bg-white">
                  <span class="align-self-center w-100">
                    <span class="d-block mb-3">
                      <i class="fab fa-facebook-square fa-7x"></i>
                    </span>
                  </span>
                </a>
              </div>
              <div class="col-6">
                <a href="https://www.instagram.com/nsv_virtual/?hl=pt-br" class="d-flex text-center feature active p-4 mb-4 bg-white">
                  <span class="align-self-center w-100">
                    <span class="d-block mb-3">
                      <span class="fab fa-instagram fa-7x"></span>
                    </span>
                  </span>
                </a>
              </div>
            </div>
            <div class="row row-items last">
              <div class="col-6">
                <a href="https://www.youtube.com/channel/UCxeniklwjQp2FbNFwB5jlpw" class="d-flex text-center feature active p-4 mb-4 bg-white">
                  <span class="align-self-center w-100">
                    <span class="d-block mb-3">
                      <span class="fab fa-youtube fa-7x"></span>
                    </span>
                  </span>
                </a>
              </div>
              <div class="col-6">
                <a href="https://twitter.com/nortesulvirtual" class="d-flex text-center active feature active p-4 mb-4 bg-white">
                  <span class="align-self-center w-100">
                    <span class="d-block mb-3">
                      <span class="fab fa-twitter fa-7x"></span>
                    </span>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

	    <div class="container site-section block-13 testimonial-wrap">

      <div class="row">
        <div class="col-12 text-center">
          <span class="sub-title">Parceiros</span>
          <h2 class="font-weight-bold text-black mb-5">Nossos Parceiros</h2>
        </div>
      </div>

      <div class="nonloop-block-13 owl-carousel">
		
		<a href="https://vatsim.net" data-toggle="tooltip" title="Vatsim Network">
        <div class="testimony">
          <img src="<?php echo SITE_URL;?>/lib/skins/nortesul/images/parceiros/vatsim.png" alt="Image" class="img-fluid">
        </div>
		</a>
		<a href="https://vatsim.net.br" data-toggle="tooltip" title="Vatsim Network Brasil">
        <div class="testimony">
          <img src="<?php echo SITE_URL;?>/lib/skins/nortesul/images/parceiros/vatbrz.png" alt="Image" class="img-fluid">
        </div>
		</a>
        <a href="https://simbrief.com" data-toggle="tooltip" title="Siimbrief">
        <div class="testimony">
          <img src="<?php echo SITE_URL;?>/lib/skins/nortesul/images/parceiros/simbrief.png" alt="Image" class="img-fluid">
        </div>
		</a>
		<a href="https://tfdidesign.com" data-toggle="tooltip" title="TFDi Design">
        <div class="testimony">
          <img src="<?php echo SITE_URL;?>/lib/skins/nortesul/images/parceiros/tfdi.png" alt="Image" class="img-fluid">
        </div>
		</a>
		</a>
		<a href="https://tfdidesign.com" data-toggle="tooltip" title="TFDi Design">
        <div class="testimony">
          <img src="<?php echo SITE_URL;?>/lib/skins/nortesul/images/parceiros/fshost.png" alt="Image" class="img-fluid">
        </div>
		</a>
      </div>
    </div>