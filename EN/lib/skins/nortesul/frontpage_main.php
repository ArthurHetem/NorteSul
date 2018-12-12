   <!-- Sequence Modern Slider -->
    <header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(<?php echo SITE_URL; ?>/lib/skins/nortesul/images/img_bg_3.jpg)">
				<div class="overlay"></div>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
	<li data-target="#myCarousel" data-slide-to="3"></li>
	<li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?php echo SITE_URL; ?>/lib/skins/nortesul/images/front/01.jpg">
    </div>

    <div class="item">
      <img src="<?php echo SITE_URL; ?>/lib/skins/nortesul/images/front/02.jpg">
    </div>

    <div class="item">
      <img src="<?php echo SITE_URL; ?>/lib/skins/nortesul/images/front/03.jpg">
    </div>
	
	<div class="item">
      <img src="<?php echo SITE_URL; ?>/lib/skins/nortesul/images/front/04.jpg">
    </div>
	
	<div class="item">
      <img src="<?php echo SITE_URL; ?>/lib/skins/nortesul/images/front/05.jpg">
    </div>
  </div>
  
	</header>
	
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>The best <b> and unique Virtual</b> Airline out there</h2>
					<p>Simulating its own flight operations and also real life flights from major carriers</p>
				</div>
			</div>
			
            <div class="row">
			    <div class="col-md-6">
				    <h2> <?php
$hr = date(" H ");
if($hr >= 12 && $hr<18) {
$resp = "Good Afternoon";}
else if ($hr >= 0 && $hr <12 ){
$resp = "Good Day";}
else {
$resp = "Good Evening";}
echo "$resp";
?>, welcome to NorteSul Virtual Airlines</h2>
					<h4><b>NorteSul Virtual</b> is a non-profit Virtual Airline Company and its vision is to be as close as possible to real-life flight operations <b>providing the best flying experience to our pilots in a friendly environment</b>. <p>As right now, we are <b><?php echo StatsData::PilotCount(); ?></b> members flying online on major virtual networks, using Microsoft Flight Simulator X, X-Plane, Prepar3D and other softwares that provide the best flight simulation experience that is out there.</p></h4>
				</div>
				<div class="col-md-6">
				     <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Latest Flights</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">New Pilots</a></li>
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
					<h2>Enrollment Process</h2>
					<p>We have an easy and fast enrollment process for new members.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>1</i>
						</span>
						<h3>Application</h3>
						<p>New members are asked to fill in an application with basic personal info</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>2</i>
						</span>
						<h3>Application Review</h3>
						<p>Our HR Department review all applications</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>3</i>
						</span>
						<h3>Access to CrewCenter</h3>
						<p>After application approval, access to CrewCenter will be granted to new Members</p>
					</div>
				</div>
				

			</div>
		</div>
	</div>


	<div class="gtco-cover gtco-cover-sm amarelo" style="background-image: url(<?php echo SITE_URL; ?>/lib/skins/nortesul/images/img_bg_10.jpg)"  data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container text-center">
			<div class="display-t">
				<div class="display-tc">
					<h1 style="color:#C72430;">We are sure that you will simply love our systems and apps!</h1>
				</div>	
			</div>
		</div>
	</div>

	<div id="gtco-counter" class="gtco-section">
		<div class="gtco-container">

			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2>Official <b>NSV</b> callsign holder on flight simulation networks</h2>
					<p>We fly on the major networks available for virtual flight simulation</p>
				</div>
			</div>
 
			<div class="row">
				
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="<?php echo StatsData::TotalSchedules(); ?>" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Routes</span>

					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="<?php echo StatsData::PilotCount(); ?>" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Pilots</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="<?php echo StatsData::TotalAircraftInFleet(); ?>" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Aircrafts</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="<?php echo StatsData::TotalFlights(); ?>" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Flights</span>

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
                  SITA Navigation
                </h3>
                <p>
                  SITA navigation helps pilots on their own navigation, fuel Control and ZFW TOW TFW TPW MTOW, etc.
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
                  Detailed preparation sheet for each flight, including weight, load and much more.
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
                  Briefing has all necessary flight info for pilots, like NOTAMS and up to date charts and much more...
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
                  Tool designed to help pilots to know the risks related to weather on each airport flown by our pilots.
                  <br>
                </p>
            </div>
				<div class="col-md-4">
              <div class="icon-wrap ico-bg round-fifty animate-box">
                <i class="fa fa-plane">
                </i>
              </div>
                <h3>
                  IVAO/VATSIM Flight Plan
                </h3>
                <p>
                  the goal of this Flight Plan (FPL) is to bring confort to the pilots when flying on IVAO and VATSIM networks
                  <br>
                </p>
            </div>


				<div class="col-md-4">
              <div class="icon-wrap ico-bg round-fifty animate-box">
                <i class="fas fa-graduation-cap">
                </i>
              </div>
                <h3>
                 Flight Academy 
                </h3>
                <p>
                  Flight academy is a place where all pilots can receive proper training, specially new ones, instructions for inactive pilots, and much more.
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
                  SOP NorteSul Virtual
                </h3>
                <p>
                  STANDARD OPERATING PROCEDURES The Employee's Handbook is a document with rules, regulations and guidance to abide by all our pilots, involving daily bases operations here at NorteSul Virtual, to provide a friendly environment to all members and also to help our pilots to achieve the next level experience in flight simulation.
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
                  Manages all Air Traffic related situations, with RPL (Repetitive Flight Plan) to keep our route system up to date.
                  <br>
                </p>
            </div>
            </div>
			
	
	<div id="gtco-subscribe">
		<div class="gtco-container">
			<div class="row animate-box azul">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Our <b>Partners</b></h2>
					<div class="owl-carousel owl-theme">
    <div class="item"><h4>Enter in contact with us to be an Partner in our contact page!</h4></a></div>
</div>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					
				</div>
			</div>
		</div>
	</div>