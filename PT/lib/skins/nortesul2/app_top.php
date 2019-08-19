<div class="site-navbar-wrap">
      <div class="site-navbar-top">
        <div class="container py-3">
          <div class="row align-items-center">
            <div class="col-6">
              <a href="https://twitter.com/nortesulvirtual" class="p-2 pl-0"><span class="icon-twitter"></span></a>
              <a href="https://www.facebook.com/nortesulvirtual/" class="p-2 pl-0"><span class="icon-facebook"></span></a>
              <a href="https://www.youtube.com/channel/UCxeniklwjQp2FbNFwB5jlpw" class="p-2 pl-0"><span class="icon-youtube"></span></a>
              <a href="https://www.instagram.com/nsv_virtual/" class="p-2 pl-0"><span class="icon-instagram"></span></a>
            </div>
            <div class="col-6">
            </div>
          </div>
        </div>
      </div>
      <div class="site-navbar">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-2">
              <h1 class="mb-0 site-logo"><a href="<?php echo SITE_URL;?>"><img src="<?php echo SITE_URL;?>/lib/skins/nortesul/images/logo.png"/></a></h1>
            </div>
            <div class="col-10">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container">
                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                  <ul class="site-menu js-clone-nav d-none d-lg-block">
                    <li>
                      <a href="index.html">Home</a>
                    </li>
                    <li class="has-children"><a href="about.html">Organização</a>
						<ul class="dropdown arrow-top">
                        <li><a href="<?php echo SITE_URL; ?>/index.php/staff">Staffs</a></li>
						<li><a href="<?php echo SITE_URL; ?>/index.php/rules">Inscreva-se</a></li>
						<li><a href="<?php echo SITE_URL; ?>/index.php/contact">Fale Conosco</a></li>
                      </ul>
					</li>
                    <li class="has-children">
                      <a href="projects.html">Operacional</a>
                      <ul class="dropdown arrow-top">
                        <li><a href="<?php echo SITE_URL; ?>/index.php/frota">Nossa Frota</a></li>
						<li><a href="<?php echo SITE_URL; ?>/index.php/last">Últimos Voos</a></li>
                      </ul>
                    </li>
					<li class="has-children">
                      <a href="projects.html">Membros</a>
                      <ul class="dropdown arrow-top">
                        <li><a href="<?php echo SITE_URL; ?>/index.php/pilots">Nosso Time</a></li>
						<li><a href="<?php echo SITE_URL; ?>/index.php/rank">Plano de Carreira</a></li>
						<li><a href="<?php echo SITE_URL; ?>/index.php/awards">Nossas Awards</a></li>
                      </ul>
                    </li>
					<li class="has-children">
                      <a href="projects.html">Estátisticas</a>
                      <ul class="dropdown arrow-top">
                        <li><a href="#">Menu One</a></li>
                        <li><a href="#">Menu Two</a></li>
                        <li><a href="#">Menu Three</a></li>
                      </ul>
                    </li>
                    <li><a href="<?php echo SITE_URL; ?>/index.php/ACARS">Tracking</a></li>
					<?php if(!Auth::LoggedIn())
					{
					?>
                    <li><a href="services.html">Login</a></li>
					<?php }elseif(Auth::LoggedIn())
					{
					?>
                    <li><a href="contact.html">CrewCenter</a></li>
					<?php }?>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>