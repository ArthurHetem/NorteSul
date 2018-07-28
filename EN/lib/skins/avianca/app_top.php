<?php if(!defined('IN_PHPVMS') && IN_PHPVMS !== true) { die(); } ?>
	
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="<?php echo SITE_URL; ?>/index.php/"><img src="<?php echo SITE_URL; ?>/lib/skins/avianca/images/logo.png" height="35px" width="175px"></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
					    <li><a href="<?php echo SITE_URL; ?>/index.php/">Home</a></li>
						<li class="has-dropdown">
							<a href="#">Corporation</a>
							<ul class="dropdown">
								<li><a href="<?php echo SITE_URL; ?>/index.php/staff">Executive</a></li>
								<li><a href="<?php echo SITE_URL; ?>/index.php/rules">Enroll</a></li>
								<li><a href="<?php echo SITE_URL; ?>/index.php/contact">Contact Us</a></li>
							</ul>
						</li>
						<li class="has-dropdown">
							<a href="#">Operations</a>
							<ul class="dropdown">
								<li><a href="<?php echo SITE_URL; ?>/index.php/frota">Fleet</a></li>
								<li><a href="<?php echo SITE_URL; ?>/index.php/last">Latest Flights</a></li>

							</ul>
						</li>
						<li class="has-dropdown">
							<a href="#">Members</a>
							<ul class="dropdown">
								<li><a href="<?php echo SITE_URL; ?>/index.php/pilots">Pilot Roster</a></li>
								<li><a href="<?php echo SITE_URL; ?>/index.php/rank">Careers</a></li>
								<li><a href="<?php echo SITE_URL; ?>/index.php/awards">Awards</a></li>
							</ul>
						</li>
						<li><a href="<?php echo SITE_URL; ?>/index.php/ACARS">Tracking</a></li>
						<?php if(!Auth::LoggedIn())
                          {
							  ?>  
                          <li><a href="<?php echo SITE_URL?>/../crewcenter2/index.php/login">Login</a></li>
                          <?php
						  }
                          ?>
						<?php if(Auth::LoggedIn())
                          {
							  ?>
                          <li><a href="<?php echo SITE_URL?>/../crewcenter2/index.php/profile">CrewCenter</a></li>
                          <?php
						  }
                          ?>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
