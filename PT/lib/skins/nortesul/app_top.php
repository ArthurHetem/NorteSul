<?php if(!defined('IN_PHPVMS') && IN_PHPVMS !== true) { die(); } ?>
	
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="<?php echo SITE_URL; ?>/index.php/"><img src="<?php echo SITE_URL; ?>/lib/skins/nortesul/images/logo.png" height="70px" width="350px"></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
					    <li><a href="<?php echo SITE_URL; ?>/index.php/">Home</a></li>
						<li class="has-dropdown">
							<a href="#">Organização</a>
							<ul class="dropdown">
								<li><a href="<?php echo SITE_URL; ?>/index.php/staff">Staffs</a></li>
								<li><a href="<?php echo SITE_URL; ?>/index.php/rules">Inscreva-se</a></li>
								<li><a href="<?php echo SITE_URL; ?>/index.php/contact">Fale Conosco</a></li>
							</ul>
						</li>
						<li class="has-dropdown">
							<a href="#">Operacional</a>
							<ul class="dropdown">
								<li><a href="<?php echo SITE_URL; ?>/index.php/frota">Nossa Frota</a></li>
								<li><a href="<?php echo SITE_URL; ?>/index.php/last">Últimos Voos</a></li>

							</ul>
						</li>
						<li class="has-dropdown">
							<a href="#">Membros</a>
							<ul class="dropdown">
								<li><a href="<?php echo SITE_URL; ?>/index.php/pilots">Nosso Time</a></li>
								<li><a href="<?php echo SITE_URL; ?>/index.php/rank">Plano de Carreira</a></li>
								<li><a href="<?php echo SITE_URL; ?>/index.php/awards">Nossas Awards</a></li>
							</ul>
						</li>
						<li><a href="<?php echo SITE_URL; ?>/index.php/ACARS">Tracking</a></li>
						<?php if(!Auth::LoggedIn())
                          {
							  ?>  
                          <li><a href="<?php echo SITE_URL?>/../crewcenter2pt/index.php/login">Login</a></li>
                          <?php
						  }
                          ?>
						<?php if(Auth::LoggedIn())
                          {
							  ?>
                          <li><a href="<?php echo SITE_URL?>/../crewcenter2pt/index.php/profile">CrewCenter</a></li>
                          <?php
						  }
                          ?>
						<li><a href="http://nortesulvirtual.com/en/index.php"><span class="flag-icon flag-icon-us"></span></a></li>  
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>