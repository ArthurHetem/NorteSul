<section class="hero-wrap d-flex">
	<div class="forth d-flex">

		<div class="text">
			<div class="desc pt-5">
				<span class="">#welcome</span>
				<h1 class="mb-3">Here you really flight</h1>
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
				<h1>The <strong>best and unique</strong> Virtual Airline out there</h1>
				<p>Simulating its own flight operations and also real life flights from major carriers</p>
				<hr>
				<div class="row">
					<div class="col-lg-6 col-md-6 mb-7 mb-lg-0">
						<h1> <?php
			date_default_timezone_set('America/Sao_Paulo');
$hr = date(" H ");
if($hr >= 12 && $hr<18) {
$resp = "Good Afternoon";}
else if ($hr >= 0 && $hr <12 ){
$resp = "Good Day";}
else {
$resp = "Good Evening";}
echo "$resp";
?>, welcome to NorteSul Cargo</h1>
						<p><b>NorteSul Cargo</b> is a non-profit Virtual Airline Company and its vision is to be as
							close as possible to real-life flight operations <p>
								As right now, we are <b><?php echo StatsData::PilotCount(); ?></b> members flying online
								on major virtual networks, using Microsoft Flight Simulator X, X-Plane, Prepar3D and
								other softwares that provide the best flight simulation experience that is out there.
							</p>
						</p>
						<div id="fb-root"></div>
						<script async defer crossorigin="anonymous"
							src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3"></script>
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
											New Pilots
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
											Recent Flights
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
						STANDARD OPERATING PROCEDURES The Employee's Handbook is a document with rules, regulations and guidance to abide by all our pilots, involving daily bases operations here at NorteSul Virtual, to provide a friendly environment to all members and also to help our pilots to achieve the next level experience in flight simulation.
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
						The SmartCars system is flight tracking software made for Microsoft Flight Simulator, Lockheed Martin's Prepar3D, and X-Plane. This software allows the recording and archiving of your flights, having many features.
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
						Briefing has all necessary flight info for pilots, like NOTAMS and up to date charts and much more...
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
						Detailed preparation sheet for each flight, including weight, load and much more.
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
						Tool designed to help pilots to know the risks related to weather on each airport flown by our pilots.
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
						The goal of this Flight Plan (FPL) is to bring confort to the pilots when flying on IVAO and VATSIM networks
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
							Academy
						</h3>
						<p>
						Flight academy is a place where all pilots can receive proper training, specially new ones, instructions for inactive pilots, and much more.
							<br>
						</p>
					</div>
					<div class="col-md-4">
						<div class="icon-wrap ico-bg round-fifty animate-box">
							<i class="fas fa-paint-brush"></i>
							</i>
						</div>
						<h3>
							Custom Paints
						</h3>
						<p>
							We have all of our custom fleet in various simulators.
							<br>
						</p>
					</div>
					<div class="col-md-4">
						<div class="icon-wrap ico-bg round-fifty animate-box">
							<i class="fas fa-plane"></i>
							</i>
						</div>
						<h3>
							SITA Navigation
						</h3>
						<p>
						SITA navigation helps pilots on their own navigation, fuel Control and ZFW TOW TFW TPW MTOW, etc.
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
						<span class="subheading">#information</span>
						<h2 class="mb-4">Our Statistics</h2>
					</div>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="row d-md-flex align-items-center">
					<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
							<div class="text">
								<strong class="number"
									data-number="<?php echo StatsData::TotalSchedules(); ?>">0</strong>
								<span>Routes</span>
							</div>
						</div>
					</div>
					<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
							<div class="text">
								<strong class="number" data-number="<?php echo StatsData::PilotCount(); ?>">0</strong>
								<span>Crew Members</span>
							</div>
						</div>
					</div>
					<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
							<div class="text">
								<strong class="number"
									data-number="<?php echo StatsData::TotalAircraftInFleet(); ?>">0</strong>
								<span>Aircrafts</span>
							</div>
						</div>
					</div>
					<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
							<div class="text">
								<strong class="number" data-number="<?php echo StatsData::TotalFlights(); ?>">0</strong>
								<span>Flights</span>
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
				<a href="https://vatsim.net" class="partner"><img
						src="<?php echo SITE_URL;?>/lib/skins/nortesul/images/parceiros/vatsim.png"
						data-toggle="tooltip" title="Vatsim Network" class="img-fluid"></a>
			</div>
			<div class="col-sm ftco-animate">
				<a href="https://vatsim.net.br" class="partner"><img
						src="<?php echo SITE_URL;?>/lib/skins/nortesul/images/parceiros/vatbrz.png"
						data-toggle="tooltip" title="Vatsim Network Brasil" class="img-fluid"></a>
			</div>
			<div class="col-sm ftco-animate">
				<a href="https://simbrief.com" class="partner"><img
						src="<?php echo SITE_URL;?>/lib/skins/nortesul/images/parceiros/simbrief.png"
						data-toggle="tooltip" title="Simbrief" class="img-fluid"></a>
			</div>
			<div class="col-sm ftco-animate">
				<a href="https://www.youtube.com/channel/UCQxVH1hysBzmLQlqAMoJdzg" class="partner"><img
						src="<?php echo SITE_URL;?>/lib/skins/nortesul/images/parceiros/fshost.png"
						data-toggle="tooltip" title="Flight Sim Host" class="img-fluid"></a>
			</div>
			<div class="col-sm ftco-animate">
				<a href="https://tfdidesign.com" class="partner"><img
						src="<?php echo SITE_URL;?>/lib/skins/nortesul/images/parceiros/tfdi.png" data-toggle="tooltip"
						title="TFDi Design" class="img-fluid"></a>
			</div>
		</div>
	</div>
</section>