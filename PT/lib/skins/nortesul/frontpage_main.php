<section class="hero-wrap d-flex">
	<div class="forth d-flex">

		<div class="text">
			<div class="desc pt-5">
				<span class="subheading">Welcome</span>
				<h1 class="mb-3">We Help to Build You the Product</h1>
				<h2 class="mb-4">Business Solution</h2>
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
?>, bem-vindo a NorteSul Cargo</h1>
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
				<div class="row no-gutters">
					<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center order-md-last"
						style="background-image: url(images/about.jpg);">
					</div>
					<div class="col-md-7 wrap-about pt-md-5 ftco-animate">
						<div class="heading-section mb-5 pt-5 pl-md-5">
							<div class="pr-md-5 mr-md-5 text-md-right">
								<span class="subheading">Providing</span>
								<h2 class="mb-4">What We Can Do for You</h2>
							</div>
						</div>
						<div class="pr-md-3 pr-lg-5 pl-md-5 mr-md-5 mb-5">
							<div class="services-wrap d-flex">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="flaticon-innovation"></span>
								</div>
								<div class="media-body pl-md-0 pl-4 pr-4 order-md-first text-md-right">
									<h3 class="heading">Market Research</h3>
									<p>Even the all-powerful Pointing has no control about the blind texts it is an
										almost
										unorthographic.</p>
								</div>
							</div>
							<div class="services-wrap d-flex">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="flaticon-innovation"></span>
								</div>
								<div class="media-body pl-md-0 pl-4 pr-4 order-md-first text-md-right">
									<h3 class="heading">Financial Services</h3>
									<p>Even the all-powerful Pointing has no control about the blind texts it is an
										almost
										unorthographic.</p>
								</div>
							</div>
							<div class="services-wrap d-flex">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="flaticon-innovation"></span>
								</div>
								<div class="media-body pl-md-0 pl-4 pr-4 order-md-first text-md-right">
									<h3 class="heading">Online Marketing</h3>
									<p>Even the all-powerful Pointing has no control about the blind texts it is an
										almost
										unorthographic.</p>
								</div>
							</div>
							<div class="services-wrap d-flex">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="flaticon-innovation"></span>
								</div>
								<div class="media-body pl-md-0 pl-4 pr-4 order-md-first text-md-right">
									<h3 class="heading">24/7 Support</h3>
									<p>Even the all-powerful Pointing has no control about the blind texts it is an
										almost
										unorthographic.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
</section>

<section class="ftco-section ftco-services">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services text-center">
					<div class="icon d-flex justify-content-center align-items-center mb-4">
						<span class="flaticon-ideas"></span>
					</div>
					<div class="media-body">
						<h3 class="heading">Business Strategy</h3>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost
							unorthographic.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services text-center">
					<div class="icon d-flex justify-content-center align-items-center mb-4">
						<span class="flaticon-analysis"></span>
					</div>
					<div class="media-body">
						<h3 class="heading">Data Analysis</h3>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost
							unorthographic.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services text-center">
					<div class="icon d-flex justify-content-center align-items-center mb-4">
						<span class="flaticon-web-design"></span>
					</div>
					<div class="media-body">
						<h3 class="heading">Graphic Design</h3>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost
							unorthographic.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services text-center">
					<div class="icon d-flex justify-content-center align-items-center mb-4">
						<span class="flaticon-idea"></span>
					</div>
					<div class="media-body">
						<h3 class="heading">Creative</h3>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost
							unorthographic.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="ftco-section ftco-counter" id="section-counter" style="background-image: url(images/bg_3.jpg);"
	data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row d-md-flex align-items-center">
			<div class="col-lg-4">
				<div class="heading-section pl-md-5 heading-section-white">
					<div class="ftco-animate">
						<span class="subheading">Some</span>
						<h2 class="mb-4">Interesting Facts</h2>
					</div>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="row d-md-flex align-items-center">
					<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
							<div class="text">
								<strong class="number" data-number="2000">0</strong>
								<span>Done Works</span>
							</div>
						</div>
					</div>
					<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
							<div class="text">
								<strong class="number" data-number="300">0</strong>
								<span>Happy Customers</span>
							</div>
						</div>
					</div>
					<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
							<div class="text">
								<strong class="number" data-number="100">0</strong>
								<span>Coffee</span>
							</div>
						</div>
					</div>
					<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
							<div class="text">
								<strong class="number" data-number="1000">0</strong>
								<span>Work Hours</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="ftco-section ftco-project" id="projects-section">
	<div class="container-fluid px-4">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-lg-6 heading-section text-center ftco-animate">
				<span class="subheading">Projects</span>
				<h2 class="mb-4">Recents Projects</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
					the blind texts. Separated they live in</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="project img ftco-animate d-flex justify-content-center align-items-center"
					style="background-image: url(images/project-4.jpg);">
					<div class="overlay"></div>
					<a href="#" class="btn-site d-flex align-items-center justify-content-center"><span
							class="icon-subdirectory_arrow_right"></span></a>
					<div class="text text-center p-4">
						<h3><a href="#">Branding &amp; Illustration Design</a></h3>
						<span>Web Design</span>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="project img ftco-animate d-flex justify-content-center align-items-center"
					style="background-image: url(images/project-5.jpg);">
					<div class="overlay"></div>
					<a href="#" class="btn-site d-flex align-items-center justify-content-center"><span
							class="icon-subdirectory_arrow_right"></span></a>
					<div class="text text-center p-4">
						<h3><a href="#">Branding &amp; Illustration Design</a></h3>
						<span>Web Design</span>
					</div>
				</div>
			</div>

			<div class="col-md-8">
				<div class="project img ftco-animate d-flex justify-content-center align-items-center"
					style="background-image: url(images/project-1.jpg);">
					<div class="overlay"></div>
					<a href="#" class="btn-site d-flex align-items-center justify-content-center"><span
							class="icon-subdirectory_arrow_right"></span></a>
					<div class="text text-center p-4">
						<h3><a href="#">Branding &amp; Illustration Design</a></h3>
						<span>Web Design</span>
					</div>
				</div>

				<div class="project img ftco-animate d-flex justify-content-center align-items-center"
					style="background-image: url(images/project-6.jpg);">
					<div class="overlay"></div>
					<a href="#" class="btn-site d-flex align-items-center justify-content-center"><span
							class="icon-subdirectory_arrow_right"></span></a>
					<div class="text text-center p-4">
						<h3><a href="#">Branding &amp; Illustration Design</a></h3>
						<span>Web Design</span>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-12">
						<div class="project img ftco-animate d-flex justify-content-center align-items-center"
							style="background-image: url(images/project-2.jpg);">
							<div class="overlay"></div>
							<a href="#" class="btn-site d-flex align-items-center justify-content-center"><span
									class="icon-subdirectory_arrow_right"></span></a>
							<div class="text text-center p-4">
								<h3><a href="#">Branding &amp; Illustration Design</a></h3>
								<span>Web Design</span>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="project img ftco-animate d-flex justify-content-center align-items-center"
							style="background-image: url(images/project-3.jpg);">
							<div class="overlay"></div>
							<a href="#" class="btn-site d-flex align-items-center justify-content-center"><span
									class="icon-subdirectory_arrow_right"></span></a>
							<div class="text text-center p-4">
								<h3><a href="#">Branding &amp; Illustration Design</a></h3>
								<span>Web Design</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section testimony-section ftco-no-pt">
	<div class="container-fluid px-4">
		<div class="row ftco-animate">
			<div class="col-md-12 testimony-top">
				<div class="carousel-testimony owl-carousel">
					<div class="item">
						<div class="testimony-wrap p-4 pb-5 text-center">
							<div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
								<span class="quote d-flex align-items-center justify-content-center">
									<i class="icon-quote-left"></i>
								</span>
							</div>
							<div class="text">
								<p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia
									and Consonantia, there live the blind texts.</p>
								<p class="name">Garreth Smith</p>
								<span class="position">Marketing Manager</span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap p-4 pb-5 text-center">
							<div class="user-img mb-5" style="background-image: url(images/person_2.jpg)">
								<span class="quote d-flex align-items-center justify-content-center">
									<i class="icon-quote-left"></i>
								</span>
							</div>
							<div class="text">
								<p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia
									and Consonantia, there live the blind texts.</p>
								<p class="name">Garreth Smith</p>
								<span class="position">Interface Designer</span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap p-4 pb-5 text-center">
							<div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
								<span class="quote d-flex align-items-center justify-content-center">
									<i class="icon-quote-left"></i>
								</span>
							</div>
							<div class="text">
								<p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia
									and Consonantia, there live the blind texts.</p>
								<p class="name">Garreth Smith</p>
								<span class="position">UI Designer</span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap p-4 pb-5 text-center">
							<div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
								<span class="quote d-flex align-items-center justify-content-center">
									<i class="icon-quote-left"></i>
								</span>
							</div>
							<div class="text">
								<p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia
									and Consonantia, there live the blind texts.</p>
								<p class="name">Garreth Smith</p>
								<span class="position">Web Developer</span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap p-4 pb-5 text-center">
							<div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
								<span class="quote d-flex align-items-center justify-content-center">
									<i class="icon-quote-left"></i>
								</span>
							</div>
							<div class="text">
								<p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia
									and Consonantia, there live the blind texts.</p>
								<p class="name">Garreth Smith</p>
								<span class="position">System Analyst</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-12 heading-section ftco-animate text-center">
				<span class="subheading">Testimony</span>
				<h2 class="mb-4">My satisfied customer says</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
					the blind texts. Separated they live in</p>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section ftco-animate text-center">
				<span class="subheading">Our latest update</span>
				<h2 class="mb-4">Case Study</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
					the blind texts. Separated they live in</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 ftco-animate">
				<div class="blog-entry">
					<a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
					</a>
					<div class="text py-4">
						<div class="meta mb-3">
							<div><a href="#">Oct. 12, 2018</a></div>
							<div><a href="#">Admin</a></div>
							<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
						</div>
						<div class="desc">
							<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
									blind texts</a></h3>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 ftco-animate">
				<div class="blog-entry" data-aos-delay="100">
					<a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
					</a>
					<div class="text py-4">
						<div class="meta mb-3">
							<div><a href="#">Oct. 12, 2018</a></div>
							<div><a href="#">Admin</a></div>
							<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
						</div>
						<div class="desc">
							<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
									blind texts</a></h3>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 ftco-animate">
				<div class="blog-entry" data-aos-delay="200">
					<a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
					</a>
					<div class="text py-4">
						<div class="meta mb-3">
							<div><a href="#">Oct. 12, 2018</a></div>
							<div><a href="#">Admin</a></div>
							<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
						</div>
						<div class="desc">
							<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
									blind texts</a></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section bg-light">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-5">
			<div class="col-md-7 text-center heading-section ftco-animate">
				<span class="subheading">Pricing Plans</span>
				<h2 class="mb-3">Our Best Pricing</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="block-7">
					<div class="text-center">
						<h2 class="heading">Free</h2>
						<span class="price"><sup>$</sup> <span class="number">0</span></span>
						<span class="excerpt d-block">100% free. Forever</span>
						<a href="#" class="btn btn-primary d-block px-2 py-3 mb-4">Get Started</a>

						<h3 class="heading-2 mb-4">Enjoy All The Features</h3>

						<ul class="pricing-text">
							<li><strong>150 GB</strong> Bandwidth</li>
							<li><strong>100 GB</strong> Storage</li>
							<li><strong>$1.00 / GB</strong> Overages</li>
							<li>All features</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="block-7">
					<div class="text-center">
						<h2 class="heading">Startup</h2>
						<span class="price"><sup>$</sup> <span class="number">19</span></span>
						<span class="excerpt d-block">All features are included</span>
						<a href="#" class="btn btn-primary btn-outline-primary d-block px-3 py-3 mb-4">Get Started</a>

						<h3 class="heading-2 mb-4">Enjoy All The Features</h3>

						<ul class="pricing-text">
							<li><strong>450 GB</strong> Bandwidth</li>
							<li><strong>400 GB</strong> Storage</li>
							<li><strong>$2.00 / GB</strong> Overages</li>
							<li>All features</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="block-7">
					<div class="text-center">
						<h2 class="heading">Premium</h2>
						<span class="price"><sup>$</sup> <span class="number">49</span></span>
						<span class="excerpt d-block">All features are included</span>
						<a href="#" class="btn btn-primary btn-outline-primary d-block px-3 py-3 mb-4">Get Started</a>

						<h3 class="heading-2 mb-4">Enjoy All The Features</h3>

						<ul class="pricing-text">
							<li><strong>250 GB</strong> Bandwidth</li>
							<li><strong>200 GB</strong> Storage</li>
							<li><strong>$5.00 / GB</strong> Overages</li>
							<li>All features</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="block-7">
					<div class="text-center">
						<h2 class="heading">Pro</h2>
						<span class="price"><sup>$</sup> <span class="number">99</span></span>
						<span class="excerpt d-block">All features are included</span>
						<a href="#" class="btn btn-primary btn-outline-primary d-block px-3 py-3 mb-4">Get Started</a>

						<h3 class="heading-2 mb-4">Enjoy All The Features</h3>

						<ul class="pricing-text">
							<li><strong>450 GB</strong> Bandwidth</li>
							<li><strong>400 GB</strong> Storage</li>
							<li><strong>$20.00 / GB</strong> Overages</li>
							<li>All features</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row  mt-5 justify-conten-center">
			<div class="col-md-8 ftco-animate">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi vero accusantium sunt sit aliquam
					ipsum molestias autem perferendis, incidunt cumque necessitatibus cum amet cupiditate, ut accusamus.
					Animi, quo. Laboriosam, laborum.</p>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-partner">
	<div class="container">
		<div class="row">
			<div class="col-sm ftco-animate">
				<a href="#" class="partner"><img src="<?php echo SITE_URL;?>/lib/skins/nortesul/images/partner-1.png"
						class="img-fluid" alt="Colorlib Template"></a>
			</div>
			<div class="col-sm ftco-animate">
				<a href="#" class="partner"><img src="<?php echo SITE_URL;?>/lib/skins/nortesul/images/partner-2.png"
						class="img-fluid" alt="Colorlib Template"></a>
			</div>
			<div class="col-sm ftco-animate">
				<a href="#" class="partner"><img src="<?php echo SITE_URL;?>/lib/skins/nortesul/images/partner-3.png"
						class="img-fluid" alt="Colorlib Template"></a>
			</div>
			<div class="col-sm ftco-animate">
				<a href="#" class="partner"><img src="<?php echo SITE_URL;?>/lib/skins/nortesul/images/partner-4.png"
						class="img-fluid" alt="Colorlib Template"></a>
			</div>
			<div class="col-sm ftco-animate">
				<a href="#" class="partner"><img src="<?php echo SITE_URL;?>/lib/skins/nortesul/images/partner-5.png"
						class="img-fluid" alt="Colorlib Template"></a>
			</div>
		</div>
	</div>
</section>